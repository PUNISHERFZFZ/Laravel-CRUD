<?php



use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ClienteController;

// returns the home page with all posts
Route::get('/', ClienteController::class .'@index')->name('posts.index');
// returns the form for adding a post
Route::get('/posts/create', ClienteController::class . '@create')->name('posts.create');
// adds a post to the database
Route::post('/posts', ClienteController::class .'@store')->name('posts.store');
// returns a page that shows a full post
Route::get('/posts/{post}', ClienteController::class .'@show')->name('posts.show');
// returns the form for editing a post
Route::get('/posts/{post}/edit', ClienteController::class .'@edit')->name('posts.edit');
// updates a post
Route::put('/posts/{post}', ClienteController::class .'@update')->name('posts.update');
// deletes a post
Route::delete('/posts/{post}', ClienteController::class .'@destroy')->name('posts.destroy');





