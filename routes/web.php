<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LssController;
use App\Http\Controllers\BlogController;
use App\Http\Controllers\ClubsController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\UserController;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', [LssController::class, 'index'])->name('index');
Route::get('/about', [LssController::class, 'about'])->name('about');
Route::get('/create-post', [BlogController::class, 'create'])->name('create-post');
Route::post('/store-post', [BlogController::class, 'store'])->name('store-post');
Route::get('Contributors-&-Sponsors', [LssController::class, 'contributors'])->name('Contributors-&-Sponsors');
Route::get('Olakunle-Orojo-Chamber', [ClubsController::class, 'orojo'])->name('Olakunle-Orojo-Chamber');
Route::get('Akioola-Aguda-Chamber', [ClubsController::class, 'akinola'])->name('Akioola-Aguda-Chamber');
Route::get('Kayode-Eso-Chamber', [ClubsController::class, 'kayode'])->name('Kayode-Eso-Chamber');
Route::get('Gani-Fawehimi-Chamber', [ClubsController::class, 'gani'])->name('Gani-Fawehimi-Chamber');
Route::get('Equity', [ClubsController::class, 'equity'])->name('Equity');
Route::get('Justice-Cloak', [ClubsController::class, 'justice'])->name('Justice-Cloak');
Route::get('Law-Clinic,AAUA', [ClubsController::class, 'clinic'])->name('Law Clinic,AAUA');
Route::get('Legal-Temple', [ClubsController::class, 'legal'])->name('Legal-Temple');
Route::get('Legal-kekenke', [ClubsController::class, 'kekenke'])->name('kekenke');
Route::get('clasfon,AAUA', [ClubsController::class, 'clasfon'])->name('clasfon');
Route::get('oracles', [ClubsController::class, 'oracles'])->name('oracles');
Route::get('Female-Law-Students-Forum', [ClubsController::class, 'flf'])->name('flf');
Route::get('Green-Law-Society', [ClubsController::class, 'gls'])->name('gls');
Route::get('clubs', [ClubsController::class, 'clubs'])->name('clubs');
Route::get('The-Intellectual-Property-Law-Club', [ClubsController::class, 'ip'])->name('ip');
Route::get('Tech-Law-Club', [ClubsController::class, 'techlaw'])->name('techlaw');
Route::get('Sport-Law-Club', [ClubsController::class, 'sport'])->name('sport');
Route::get('Mooting-Club', [ClubsController::class, 'mooting'])->name('mooting');
Route::get('Inter-tainment-Law-Club', [ClubsController::class, 'enter'])->name('enter');
Route::get('Energy-Law-Club', [ClubsController::class, 'energy'])->name('energy');
Route::get('/contact', [ContactController::class, 'contact'])->name('contact-us');
Route::post('/contact-us', [ContactController::class, 'contactus'])->name('contact');
Route::get('/blog',[BlogController::class, 'blog'])->name('blog');
Route::get('/blog/{id}', [BlogController::class, 'show'])->name('show-blog');
Route::get('/blog/{id}/edit', [BlogController::class, 'edit'])->name('edit-blog');
Route::put('/blog/{id}', [BlogController::class, 'update'])->name('update-blog');
Route::get('/blog/{id}/delete', [BlogController::class, 'delete']);
Route::delete('/blog/{id}', [BlogController::class, 'destroy']);
Route::get('/login', [UserController::class, 'login'])->name('login');

// Route::post('/store', [UserController::class, 'store'])->name('store');
Route::get('/login', [UserController::class, 'login'])->name('login');
Route::post('/auth', [UserController::class, 'auth'] )->name('auth');