<?php

use Illuminate\Support\Facades\Route;
// use App\Models\User;
Use App/Post;

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

Route::get('/', function () { //CREATE Post
    $post = Post::create([
        'title' => 'my first post',
        'slug' => 'my-first-post',
        'content' => 'lots of cool content'
    ]);
    // User::find(1);
    // User::update();
    // User::destroy();

    return view('welcome', ['post' => $post]);
});

Route::get('/find/{id}', function($id) {
    $post = Post::find($id);
    return $post;

});



Route::get('/destroy', function ($id) { // DELETE Post
    Post::destroy($id);
    return 'post has been deleted!';
});


Route::redirect('/welcome', function() { // WELCOME
    return 'welcome to our new app!';
});



Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
