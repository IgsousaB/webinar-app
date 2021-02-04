<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});

Route::get('/burgers', function() { //get all burgers
    return [
        'big',
        'small',
        'gigantic',
    ];
});

Route::get('/tutorials/{slug}', function($slug) {
    return($slug);
    //go grab the post from the database


    // return the post to the user as a view
});

Route::post('/burgers', function(){

});

Route::put('/burgers/{id}', function(){
    
});

Route::delete('/burgers/{id}', function(){
    
});