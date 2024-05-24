<?php

// use App\Models\Post;
use App\Models\User;
use App\Models\Category;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostController;

use App\Http\Controllers\LoginController;
use App\Http\Controllers\RegisterController;
use SebastianBergmann\CodeCoverage\Report\Html\Dashboard;
use App\Http\Controllers\DashboardPostController;

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

Route::get('/login',[LoginController::class,'index'])->name('login')->middleware('guest');
Route::post('/login',[LoginController::class,'authenticate']);
Route::post('/logout',[LoginController::class,'logout']);

Route::get('/register',[RegisterController::class,'index'])->middleware('guest');
Route::post('/register',[RegisterController::class,'store']);




Route::get('/dashboard',function(){
    return view('dashboard.index');
})->middleware('auth');

Route::resource('/dashboard/posts',DashboardPostController::class)->middleware('auth');