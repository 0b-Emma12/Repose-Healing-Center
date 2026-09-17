<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\PageController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\AdmissionsController;
use App\Http\Controllers\PolicyController;
use App\Http\Controllers\AdminController;

/* ---- Public pages ---- */
Route::get('/', [HomeController::class, 'index'])->name('home');
Route::get('/about', [PageController::class, 'about'])->name('about');
Route::get('/team', [PageController::class, 'team'])->name('team');
Route::get('/services', [PageController::class, 'services'])->name('services');
Route::get('/resources', [PageController::class, 'resources'])->name('resources');
Route::get('/faq', [PageController::class, 'faq'])->name('faq');
Route::get('/careers', [PageController::class, 'careers'])->name('careers');

/* ---- Dynamic Content Pages ---- */
Route::get('/conditions/{slug}', [PageController::class, 'showCondition'])->name('conditions.show');
Route::get('/programmes/{slug}', [PageController::class, 'showProgramme'])->name('programmes.show');
Route::get('/audiences/{slug}', [PageController::class, 'showAudience'])->name('audiences.show');

/* ---- Contact ---- */
Route::get('/contact', [ContactController::class, 'index'])->name('contact');
Route::post('/contact', [ContactController::class, 'store'])->name('contact.store');

/* ---- Admissions ---- */
Route::get('/admissions', [AdmissionsController::class, 'index'])->name('admissions');
Route::post('/admissions', [AdmissionsController::class, 'store'])->name('admissions.store');

/* ---- Policies ---- */
Route::get('/policies/{slug}', [PolicyController::class, 'show'])->name('policies.show');

/* ---- Admin (simple, no auth for local dev) ---- */
Route::get('/admin/submissions', [AdminController::class, 'index'])->name('admin.submissions');
