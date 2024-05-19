<?php

use App\Http\Controllers\PostController;
use App\Models\Post;
use Illuminate\Support\Facades\Route;

use App\Models\Category;
use App\Models\User;
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
    return view('home',[
        "title" =>"home",
        "name" => "sandika",
        "email" => "sandika@gmail.com",
        "image" => "sandika.jpg"
    ]);
});


Route::get('/about', function () {
    return view('about',[
        "title" =>"about",
        "name" => "sandika",
        "email" => "sandika@gmail.com",
        "image" => "sandika.jpg"
    ]);
});


// halaman post
Route::get('/posts', [PostController::class, 'index'] );

// halaman singgel post
Route::get('posts/{post:slug}' ,[Postcontroller::class, 'show']);


Route::get('/categories',function(){
    return view('categories',[
        'title' => 'Post Categories',
        'categories' => Category::all()
    ]);
});



Route::get('/categories/{category:slug}', function(Category $category){
    return view('posts',[
        'title' => "Post By category : $category->name",
        'posts' => $category->posts,
        'category' => $category->name
    ]);
});

Route::get('/authors/{authors:username}', function(User $authors) {
    return view('posts',[
        'title' =>"Post By author : $authors->name",
        'posts' => $authors->post->load('category','author')
        
    ]);
});

