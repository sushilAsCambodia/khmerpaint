<?php

use App\Http\Controllers\ProductController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/


// -------------------------- Website Routes ----------------------//
Route::get('/', function () {
    return view('website.index');
});
Route::get('/about', function () {
    $brede = ['title' => 'About Us', 'link' => 'about'];
    return view('website.about', compact('brede'));
});
Route::get('/service', function () {
    $brede = ['title' => 'Services', 'link' => 'service'];
    return view('website.service', compact('brede'));
});
Route::get('/team', function () {
    $brede = ['title' => 'Team', 'link' => 'team'];
    return view('website.team', compact('brede'));
});
Route::get('/products', function () {
    $brede = ['title' => 'Products', 'link' => 'products'];
    return view('website.products', compact('brede'));
});
Route::get('/blogs', function () {
    $brede = ['title' => 'Blogs', 'link' => 'blog'];
    return view('website.blog', compact('brede'));
});

Route::get('/single', [ProductController::class, 'index']);

// Route::get('/single', function () {
//     $brede = ['title' => 'Single', 'link' => 'single'];
//     return view('website.single', compact('brede'));
// });
Route::get('/contact', function () {
    $brede = ['title' => 'Contact Us', 'link' => 'contact'];
    return view('website.contact', compact('brede'));
});

