<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
// App\Http\Controllers\Admin\Product;
use Illuminate\Http\Request;
use App\Models\Product;


class DashboardController extends Controller
{
    public function index()
    {
        $products = Product::latest()->get();
        return view('components.admin.product.index',['products'=> $products]);
    }
}
    