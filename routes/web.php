<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Mycontroller;
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

Route::get('/',[Mycontroller::class ,'index']);

Route::get('/login',[Mycontroller::class ,'login']);
Route::get('/cart',[Mycontroller::class ,'cart']);
Route::get('/signup',[Mycontroller::class ,'signup']);
Route::get('/checkout',[Mycontroller::class ,'checkout']);
Route::get('/product',[Mycontroller::class ,'product_type']);
Route::get('/profile',[Mycontroller::class ,'product']);
Route::get('/err',[Mycontroller::class ,'err']);
Route::get('/about',[Mycontroller::class ,'about']);
Route::get('/pricing',[Mycontroller::class ,'pricing']);
Route::get('/contacts',[Mycontroller::class ,'contacts']);

