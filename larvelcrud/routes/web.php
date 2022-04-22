<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\userController;


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
    return view('welcome');
})->name('/');



Route::get('about',function () {
    return view('about');
})->name('about');


Route::get('contact',function () {
    return view('contact');
})->name('contact');
Route::post('/savecontact', [UserController::class, 'addcontact'])->name('savecontact');
Route::get('contact',[UserController::class, 'allrecords'])->name('contact');

Route::get('deleterecords/{id}',[UserController::class, 'deleterecords'])->name('deleterecords');

Route::get('edit/{id}',[UserController::class, 'edit'])->name('edit');

Route::post('updaterecord/{id}',[UserController::class, 'updaterecord'])->name('updaterecord');

