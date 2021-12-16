<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Product;
use App\Models\Category;

class CategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $categories = Category::latest()->get();
        return view('components.admin.category.index',['categories'=> $categories]);
        // return $categories;
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        // $products = Product::latest()->get();
        $category = Category::all();
        return view('components.admin.category.create',['category'=> $category]);
    }


    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'category_name' => 'required|unique:categories|max:255',
            'category_image' => 'required',
            'category_desc' => 'required',
         
        ]);
        $category = new Category;
        $category->category_name = $request->category_name;
        $category->category_desc = $request->category_desc;
        if($category->save())
        {
            return redirect()->route('category_list')->with('success','category Added Successfully');
        }
        else
        {
            return redirect()->route('/admin.category.index')->with('error','Something went wrong');
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        // $product = Product::find($id);
        $category = Category::find($id);
        return view('components.admin.category.edit',['category'=> $category]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Category $category)
    {

     $request->validate([
            'category_name' => 'required',
            'category_desc' => 'required',
        ]);
        $category->category_name = $request->category_name;
        $category->category_desc = $request->category_desc;
        if($category->save())
        {
            return redirect()->route('category_list')->with('success','category Updated Successfully');
        }
        else
        {
            return redirect()->route('/admin.category.index')->with('error','Something went wrong');
        }
    }


    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Category $category)
    {
        if($category->delete())
        {
            return redirect()->route('category_list')->with('success','category Deleted Successfully');
        }
        else
        {
            return redirect()->route('/admin.category.index')->with('error','Something went wrong');
        }
    }
}