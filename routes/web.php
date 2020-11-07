<?php

use App\Http\Controllers\StaticViewsController;
use Illuminate\Support\Facades\Route;

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

Route::middleware('set.locale')->group(static function () {
    Route::get('/', [StaticViewsController::class, 'index'])->name('home');
    Route::get('about-us', [StaticViewsController::class, 'about'])->name('about');
    Route::get('classes', [StaticViewsController::class, 'classes'])->name('classes');
    Route::get('events-and-news', [StaticViewsController::class, 'eventNews'])->name('eventNews');
    Route::get('be-a-member', [StaticViewsController::class, 'beMember'])->name('beMember');
    Route::get('contact-us', [StaticViewsController::class, 'contact'])->name('contact');
});
