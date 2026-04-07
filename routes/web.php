<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PagesController;

// Home & blog
Route::get('/', function () {
    return view('welcome');
});

Route::get('/contact-admin', [PagesController::class, 'contactPage']);


// Show blog page and create post form
Route::get('/blog-post', [PagesController::class, 'blog']);

// Store post submitted from the form
Route::post('/blog-post', [PagesController::class, 'storePost']);

// VIEW THE PAGE 
Route::get('/view/{post}', [PagesController::class, 'viewPost']);
// Edit 
Route::get('/edit/{post}', [PagesController::class, 'editPost']);
Route::put('/update/{post}', [PagesController::class, 'updatePost']);
// Delete post or comment
Route::delete('/posts/{post}', [PagesController::class, 'deletePost']);      
Route::delete('/comments/{comment}', [PagesController::class, 'deleteComment']); 

// Store comments
Route::post('/comments', [PagesController::class, 'storeComments']); 