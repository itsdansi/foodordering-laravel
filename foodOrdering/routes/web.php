<?php

use Illuminate\Support\Facades\Route;
use App\Models\Product;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    $products = Product::latest()->get();
    return view('home', ['products' => $products]);
});

Route::redirect('/home', '/');

Route::get('/menu', function () {
    return view('menu');
});

Route::get('/reservation', function () {
    return view('reservation');
});

Route::view('/events', 'events');

Route::get('/about', function () {
    return view('about');
});

Route::get('/gallary', function () {
    return view('gallary');
});

Route::get('/contact', function () {
    return view('contact');
});

Route::get('/test', function () {
    return view('test');
});

Route::get('/login', function () {
    return view('login');
});

Route::get('/register', function () {
    return view('register');
});

Route::get('/product', function () {
    $products = Product::latest()->all();
    return view('product')->with('products', $products);
});

Route::get('/welcome', function () {
    return view('welcome');
});

// Route::get('/dashboard', function () {
//     return view('dashboard');
// })->middleware(['auth'])->name('dashboard');

require __DIR__.'/auth.php';
    
    

// Routes for order processing
Route::resource('/order', App\Http\Controllers\OrderController::class);
Route::post('/cart', [App\Http\Controllers\OrderItemController::class, 'store']) -> name('add_to_cart')->middleware(['auth']);

// Admin Routes
Route::middleware(['auth'])->group( function(){ 

Route::get('/admin/dashboard', [App\Http\Controllers\Admin\DashboardController::class, 'index'])->name('dashboard');

Route::get('/admin/products', [App\Http\Controllers\Admin\ProductController::class, 'index'])->name('product_list');
Route::get('/admin/products/create', [App\Http\Controllers\Admin\ProductController::class, 'create']);
Route::post('/admin/products/store', [App\Http\Controllers\Admin\ProductController::class, 'store']);
Route::get('/admin/products/edit/{product}', [App\Http\Controllers\Admin\ProductController::class, 'edit']);
Route::post('/admin/products/update/{product}', [App\Http\Controllers\Admin\ProductController::class, 'update'])->name('product_update');
Route::get('/admin/products/destroy/{product}', [App\Http\Controllers\Admin\ProductController::class, 'destroy']);

Route::get('/admin/categories', [App\Http\Controllers\Admin\CategoryController::class, 'index'])->name('category_list');
Route::get('/admin/categories/create', [App\Http\Controllers\Admin\CategoryController::class, 'create']);
Route::post('/admin/categories/store', [App\Http\Controllers\Admin\CategoryController::class, 'store']);
Route::get('/admin/categories/edit/{category}', [App\Http\Controllers\Admin\CategoryController::class, 'edit']);
Route::post('/admin/categories/update/{category}', [App\Http\Controllers\Admin\CategoryController::class, 'update'])->name('category_update');
Route::get('/admin/categories/destroy/{category}', [App\Http\Controllers\Admin\CategoryController::class, 'destroy']);

Route::get('/admin/events', [App\Http\Controllers\Admin\EventController::class, 'index'])->name('event_list');
Route::get('/admin/events/create', [App\Http\Controllers\Admin\EventController::class, 'create']);
Route::post('/admin/events/store', [App\Http\Controllers\Admin\EventController::class, 'store']);
Route::get('/admin/events/edit/{event}', [App\Http\Controllers\Admin\EventController::class, 'edit']);
Route::post('/admin/events/update/{event}', [App\Http\Controllers\Admin\EventController::class, 'update'])->name('event_update');
Route::get('/admin/events/destroy/{event}', [App\Http\Controllers\Admin\EventController::class, 'destroy']);

Route::get('/admin/galleries', [App\Http\Controllers\Admin\GalleryController::class, 'index'])->name('gallery_list');
Route::get('/admin/galleries/create', [App\Http\Controllers\Admin\GalleryController::class, 'create']);
Route::post('/admin/galleries/store', [App\Http\Controllers\Admin\GalleryController::class, 'store']);
Route::get('/admin/galleries/edit/{gallery}', [App\Http\Controllers\Admin\GalleryController::class, 'edit']);
Route::post('/admin/galleries/update/{gallery}', [App\Http\Controllers\Admin\GalleryController::class, 'update'])->name('gallery_update');
Route::get('/admin/galleries/destroy/{gallery}', [App\Http\Controllers\Admin\GalleryController::class, 'destroy']);


Route::get('/admin/users', [App\Http\Controllers\Admin\UserController::class, 'index']);

});

        