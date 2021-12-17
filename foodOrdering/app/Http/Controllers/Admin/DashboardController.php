<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
// App\Http\Controllers\Admin\Product;
use Illuminate\Http\Request;
use App\Models\Product;
use App\Models\Category;
use App\Models\Event;
use App\Models\Gallery;
// use App\Models\Order;
// use App\Models\OrderItem;
// use App\Models\User;


class DashboardController extends Controller
{
    public function index()
    {
        $products = Product::latest()->get();
        $categories = Category::latest()->get();
        $events = Event::latest()->get();
        $galleries = Gallery::latest()->get();
        return view('components.admin.dashlayout',['products'=> $products, 'categories'=> $categories, 'events'=> $events, 'galleries'=> $galleries]);
    }
}
    