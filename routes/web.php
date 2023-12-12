<?php

use App\Http\Controllers\FrontEnd\AboutController;
use App\Http\Controllers\FrontEnd\ArtikelController;
use App\Http\Controllers\FrontEnd\Auth\LoginController;
use App\Http\Controllers\FrontEnd\Auth\RegisterController;
use App\Http\Controllers\FrontEnd\ContactController;
use App\Http\Controllers\FrontEnd\DetailPengajarController;
use App\Http\Controllers\FrontEnd\HomeController;
use App\Http\Controllers\FrontEnd\KordinatorController;
use App\Http\Controllers\FrontEnd\LayananController;
use App\Http\Controllers\FrontEnd\PagesController;
use App\Http\Controllers\FrontEnd\ProjectController;
use App\Http\Controllers\FrontEnd\TeamController;
use App\Http\Controllers\FrontEnd\TestimonialController;
use App\Http\Controllers\FrontEnd\WebinarController;
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

// Login Dan Register
Route::get('/login', [LoginController::class, 'login'])->name('login');
Route::get('/register', [RegisterController::class, 'register'])->name('register');

// Tampilan Utama
Route::get('/kordinator', [KordinatorController::class, 'index'])->name('kordinator');
Route::get('/webinar', [WebinarController::class, 'index'])->name('webinar');
Route::get('/team', [TeamController::class, 'index'])->name('team');
Route::get('/detail-pengejar', [DetailPengajarController::class, 'index'])->name('detail_pengejar');
Route::get('/contact', [ContactController::class, 'index'])->name('contact');
Route::get('/detail-artikel', [ArtikelController::class, 'index'])->name('detail_artikel');
Route::get('/about', [AboutController::class, 'index'])->name('about');
Route::get('/layanan', [LayananController::class, 'index'])->name('layanan');