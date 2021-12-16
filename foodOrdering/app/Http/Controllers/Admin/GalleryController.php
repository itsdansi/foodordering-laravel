<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
// use App\Http\Requests\UpdateGalleryRequest;
use App\Models\Gallery;

class GalleryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $galleries = Gallery::latest()->get();
                return view('components.admin.gallery.index',['galleries'=> $galleries]);

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $galleries = Gallery::all();
        return view('components.admin.gallery.create',['galleries'=> $galleries]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreGalleryRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'gallery_name' => 'required|unique:galleries|max:255',
            'gallery_desc' => 'required | max:1000',
            'gallery_image' => 'required|unique:galleries|image|mimes:jpeg,png,jpg,gif,svg|max:2048'
         
        ]);
        if($request->hasFile('gallery_image') )
        {
            // $name=time().'.'.$request->gallery_image->getClientOriginalName();
            $path = $request->file('gallery_image')->store('public/gallery_images');
            // $gallery->gallery_image = $name;
        }
     

        $gallery = new Gallery;
        $gallery->gallery_name = $request->gallery_name;
   
        $gallery->gallery_desc = $request->gallery_desc;

        $gallery->gallery_image = $path;
        // return $gallery;
        if($gallery->save())
        {
            return redirect()->route('gallery_list')->with('success','gallery Added Successfully');
        }
        else
        {
            return redirect()->route('/admin.galleries.index')->with('error','Something went wrong');
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Gallery  $gallery
     * @return \Illuminate\Http\Response
     */
    public function show(Gallery $gallery)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Gallery  $gallery
     * @return \Illuminate\Http\Response
     */
    public function edit(Gallery $gallery)
    {
        return view('components.admin.gallery.edit',['gallery'=> $gallery]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateGalleryRequest  $request
     * @param  \App\Models\Gallery  $gallery
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Gallery $gallery)
    {
        $request->validate([
            'gallery_name' => 'required',
            'gallery_desc' => 'required',
        ]);
        $gallery->gallery_name = $request->gallery_name;
        $gallery->gallery_desc = $request->gallery_desc;
        if($gallery->save())
        {
            return redirect()->route('gallery_list')->with('success','gallery Updated Successfully');
        }
        else
        {
            return redirect()->route('/admin.galleries.index')->with('error','Something went wrong');
        }
    }
    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Gallery  $gallery
     * @return \Illuminate\Http\Response
     */
    public function destroy(Gallery $gallery)
    {
        if($gallery ->delete())
        {
            return redirect()->route('gallery_list')->with('success','gallery Deleted Successfully');
        }
        else
        {
            return redirect()->route('/admin.galleries.index')->with('error','Something went wrong');
        }
    }
}