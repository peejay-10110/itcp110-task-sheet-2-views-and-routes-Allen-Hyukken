<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\AboutController;
use App\Http\Controllers\SkillsController;
use App\Http\Controllers\ProjectController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\BlogController;
use App\Http\Controllers\ResumeController;

/*
|--------------------------------------------------------------------------
| Web Routes — Allen Carl Odang (Hyukken) Portfolio
|--------------------------------------------------------------------------
*/

// Route 1: Home
Route::get('/', [HomeController::class, 'index'])->name('home');

// Route 2: About
Route::get('/about', [AboutController::class, 'index'])->name('about');

// Route 3: Skills
Route::get('/skills', [SkillsController::class, 'index'])->name('skills');

// Route 4: Projects Index
Route::get('/projects', [ProjectController::class, 'index'])->name('projects.index');

// Route 5: Project Detail
Route::get('/projects/{id}', [ProjectController::class, 'show'])->name('projects.show');

// Route 6: Blog Index
Route::get('/blog', [BlogController::class, 'index'])->name('blog.index');

// Route 7: Blog Post
Route::get('/blog/{slug}', [BlogController::class, 'show'])->name('blog.show');

// Route 8: Contact Form (GET)
Route::get('/contact', [ContactController::class, 'index'])->name('contact');

// Route 9: Contact Form Submit (POST)
Route::post('/contact', [ContactController::class, 'store'])->name('contact.store');

// Route 10: Resume / CV
Route::get('/resume', [ResumeController::class, 'index'])->name('resume');

// Route 11: Certifications
Route::get('/certifications', [ResumeController::class, 'certifications'])->name('certifications');

// Route 12: Redirect /portfolio to /projects
Route::redirect('/portfolio', '/projects')->name('portfolio');
