<?php

use App\Http\Controllers\Frontend\ContactController;
use App\Http\Controllers\Frontend\EventController;
use App\Http\Controllers\Frontend\GalleryController;
use App\Http\Controllers\Frontend\HomeController;
use App\Http\Controllers\Frontend\MenuController;
use App\Http\Controllers\Frontend\ReservationController;
use App\Http\Controllers\RouteController;
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
