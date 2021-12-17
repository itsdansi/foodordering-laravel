<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Product;
use App\Models\Category;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $products = Product::latest()->get();
        return view('components.admin.product.index',['products'=> $products, 'categories'=> Category::all()]);
        // return $products;
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $products = Product::latest()->get();
        $category = Category::all();
        return view('components.admin.product.create',['products'=> $products,'category'=> $category]);
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
            'product_name' => 'required|unique:products|max:255',
            'product_desc' => 'required',
            'price' => 'required | numeric',
            'category_id' => 'required',
            'product_image' => 'required|unique:products|image|mimes:jpeg,png,jpg,gif,svg|max:2048'
         
        ]);
        if($request->hasFile('product_image') )
        {
            // $name=time().'.'.$request->product_image->getClientOriginalName();
            $path = $request->file('product_image')->store('public/product_images');
            // $product->product_image = $name;
        }
     

        $product = new Product;
        $product->product_name = $request->product_name;
        $product->price = $request->price;
        $product->product_desc = $request->product_desc;
        $product->category_id = $request->category_id;
        $product->product_image = $path;
        // return $product;
        if($product->save())
        {
            return redirect()->route('product_list')->with('success','Product Added Successfully');
        }
        else
        {
            return redirect()->route('/admin.products.index')->with('error','Something went wrong');
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
      $product = Product::find($id);
        $category = Category::all();
        return view('components.admin.product.edit',['product'=> $product,'category'=> $category]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Product $product)
    {
        $request->validate([
            'product_name' => 'required',
            'price' => 'required | integer',
            'product_desc' => 'required',
            'category_id' => 'required | integer',
        ]);
        $product->product_name = $request->product_name;
        $product->price = $request->price;
        $product->product_desc = $request->product_desc;
        $product->category_id = $request->category_id;
        if($product->save())
        {
            return redirect()->route('product_list')->with('success','Product Updated Successfully');
        }
        else
        {
            return redirect()->route('/admin.products.index')->with('error','Something went wrong');
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Product $product)
    {
        if($product->delete())
        {
            return redirect()->route('product_list')->with('success','Product Deleted Successfully');
        }
        else
        {
            return redirect()->route('/admin.products.index')->with('error','Something went wrong');
        }
    }
}

