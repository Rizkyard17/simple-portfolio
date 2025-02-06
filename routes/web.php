<?php

use App\Http\Controllers\EducationController;
use App\Http\Controllers\PostController;
use App\Http\Controllers\ProjectController;
use App\Models\Category;
use App\Models\Post;
use Illuminate\Support\Facades\Route;


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
    return view('index', [
        "title" => "Home | Rizkyard",
    ]);
});

Route::get('/project', [ProjectController::class, 'index']);

Route::get('/contact', function () {
    return view('contact', [
        "title" => "Contact | Rizkyard",
    ]);
});

Route::get('/resume', [PostController::class, 'index']);

// Route::get('/about', function () {
//     return view('about',[
//         "title" => "About",
//         "name" => "M. Rizky Ardiansyah Putra",
//         "email" => "rizkyjambi859@gmail.com"
//     ]);
// });

Route::get('/login', function() {
    return view('loginUser');
});

// Route::get('/blog', [PostController::class, 'index']);

Route::get('posts/{tampil:slug}', [PostController::class, 'show']);

Route::get('/categories/{category:slug}', function(Category $category) {
    return view ('category', [
        'title' => $category->name,
        'posts' => $category->post,
    ]);
});
