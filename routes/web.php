<?php

use App\Http\Controllers\Frontend\ContactController;
use App\Http\Controllers\Frontend\EventController;
use App\Http\Controllers\Frontend\GalleryController;
use App\Http\Controllers\Frontend\HomeController;
use App\Http\Controllers\Frontend\MenuController;
use App\Http\Controllers\Frontend\ReservationController;
use App\Models\reservation;
use Illuminate\Support\Facades\Route;
use PhpParser\Node\Expr\AssignOp\Concat;
use PhpParser\Node\Expr\PostDec;


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


Route::get('/', [HomeController::class, 'index']);
Route::get('/Menu', [MenuController::class, "index"]);
Route::get('/Gallery', [GalleryController::class, "index"]);
Route::get('/Event', [EventController::class, "index"]);
Route::get('/Contact', [ContactController::class, "index"]);
Route::POST('/Contact', [ContactController::class, "send"]);
Route::get('/Reservation', [ReservationController::class, "index"]);
Route::POST('/Reservation', [ReservationController::class, "store"]);

//  Gallery sub pages routes
Route::get('/A', [GalleryController::class, "one"]);
Route::get('/B', [GalleryController::class, 'two']);
Route::get('/G', [GalleryController::class, 'three']);
Route::get('/I', [GalleryController::class, 'four']);
Route::get('/M', [GalleryController::class, 'five']);
Route::get('/K', [GalleryController::class, 'six']);
Route::get('/C', [GalleryController::class, 'seven']);
Route::get('/R', [GalleryController::class, 'eight']);
