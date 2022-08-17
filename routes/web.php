<?php

use Illuminate\Support\Facades\Route;

// Added
use App\Http\Livewire\Categories\Categories;
use App\Http\Livewire\Categories\Categoryposts;
use App\Http\Livewire\Posts\Posts;
use App\Http\Livewire\Posts\Post as p;
use App\Http\Livewire\Tags\Tagposts;
//use App\Http\Livewire\Tags\Tags;

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
    // return view('dashboard');
    return view('homepage');
});

Route::get('/users', function () {
    return view('users');
});

Route::get('/posts', function () {
    return view('posts');
});

Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard');


// Cats and posts

Route::get('/dashboard/categories', Categories::class)->name('categories');
Route::get('/dashboard/categories/{id}/posts', Categoryposts::class);

Route::get('/dashboard/posts', Posts::class)->name('posts');
Route::get('/dashboard/posts/{id}', p::class);

//Route::get('/dashboard/tags', Tags::class)->name('tags');
//Route::get('/dashboard/tags/{id}/posts', Tagposts::class);


// Get User profile images
Route::get('storage/users-avatar/{name}', function ($name) {

    $path = storage_path("app/public/users-avatar/".$name);

    $mime = \File::mimeType($path);

    header('Content-type: ' . $mime);

    return readfile($path);

})->where('name', '(.*)');


// Get attachement preview
Route::get('storage/attachments/{name}', function ($name) {

    $path = storage_path("app/public/attachments/".$name);

    $mime = \File::mimeType($path);

    header('Content-type: ' . $mime);

    return readfile($path);

})->where('name', '(.*)');
