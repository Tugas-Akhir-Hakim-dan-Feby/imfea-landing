<?php

use App\Http\Controllers\FrontEnd\AboutController;
use App\Http\Controllers\FrontEnd\BlogController;
use App\Http\Controllers\FrontEnd\ContactController;
use App\Http\Controllers\FrontEnd\HomeController;
use App\Http\Controllers\FrontEnd\PagesController;
use App\Http\Controllers\FrontEnd\ProjectController;
use App\Http\Controllers\FrontEnd\ServiceController;
use App\Http\Controllers\FrontEnd\TeamController;
use App\Http\Controllers\FrontEnd\TestimonialController;
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

/* Tampilan Depan Front End */
Route::get('/', [HomeController::class, 'index'])->name('home');
Route::get('/project', [ProjectController::class, 'index'])->name('project');
Route::get('/service', [ServiceController::class, 'index'])->name('service');
Route::get('/team', [TeamController::class, 'index'])->name('team');
Route::get('/testimonial', [TestimonialController::class, 'index'])->name('testimonial');
Route::get('/contact', [ContactController::class, 'index'])->name('contact');
Route::get('/blog', [BlogController::class, 'index'])->name('blog');
Route::get('/about', [AboutController::class, 'index'])->name('about');
Route::get('/pages', [PagesController::class, 'index'])->name('pages');