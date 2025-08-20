<?php
use App\Http\Controllers\PortfolioController;
use Illuminate\Support\Facades\Route;

// route to show home.blade.php blade template
Route::get('/', [PortfolioController::class, 'home'])->name('home');

// route to show about.blade.php blade template
Route::get('/about', [PortfolioController::class, 'about'])->name('about');

// route to show projects.blade.php blade template
Route::get('/projects', [PortfolioController::class, 'projects'])->name('projects');

// route to show contact.blade.php blade template
Route::get('/contact', [PortfolioController::class, 'contact'])->name('contact');

// route to show blog.blade.php blade template
Route::get('/blog', [PortfolioController::class, 'blog'])->name('blog');
