<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Authentication;
use App\Http\Controllers\StudentController;
use App\Http\Controllers\Prac;
use App\Http\Controllers\FacultyController;
use App\Http\Controllers\ProjectController;
use App\Http\Controllers\ConferenceController;
use App\Http\Controllers\ReviewController;

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
/*
Route::get('/', function () {
    return view('welcome');
});
*/

Route::get('/',[Authentication::class,'index']);
Route::post('/sign',[Authentication::class,'signIn'])->name('signin');
Route::get('/signIn',[Authentication::class,'index'])->name('signInform');
Route::get('/logout',[Authentication::class,'signOut'])->name('logOut');

Route::group(['middleware' => 'isUser'],function(){

Route::get('/pat',[Prac::class,'index'])->name('index');
Route::get('/pat/list',[Prac::class,'pat_list'])->name('list');
Route::get('/not_pat',[Prac::class,'not_pat_list'])->name('not_list');
Route::post('/prac',[Prac::class,'multi'])->name('multi');



Route::resource('/conference',ConferenceController::class);

Route::resource('/review',ReviewController::class);
Route::get('/show/{id}',[ReviewController::class,'show_review'])->name('review');


});