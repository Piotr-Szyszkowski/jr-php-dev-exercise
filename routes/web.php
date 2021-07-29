<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\PictureController;


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

Route::get('/', [PictureController::class, 'index']); 
// @Piotr - when the server receives GET request to "/" address...then  [PictureController::class, 'index'] is fired, -- my guess is: PictureController gets to work, and when finished -> renders view 'index.blade.php' - hard to tell as not a straightforward function.

Route::resources([
    'pictures' => PictureController::class,
]);

Route::post('/pictures/{picture}/upvote', [PictureController::class, 'upvote'])->name('pictures.upvote');