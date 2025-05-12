<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
})->name('home');

// Route::get('/high-school', function () {
//     return view('high-school');
// })->name('high-school');

// Route::get('/college', function () {
//     return view('college');
// })->name('college');

// Route::get('/contact', function () {
//     return view('contact');
// })->name('contact');

// Route::get('/team', function () {
//     return view('team');
// })->name('team');

// Route::get('/team-single', function () {
//     return view('team-single');
// })->name('team-single');

// Route::get('/about', function () {
//     return view('about');
// })->name('about');

// Route::get('/admission', function () {
//     return view('admission');
// })->name('admission');

// Route::get('/courses', function () {
//     return view('courses');
// })->name('courses');

$staticPages = [
    'high-school',
    'college',
    'contact',
    'team',
    'team-single',
    'about',
    'admission',
    'courses',
];

foreach ($staticPages as $page) {
    Route::view("/$page", $page)->name($page);
}

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth:web', 'verified'])->name('dashboard');

Route::middleware('auth:web')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
require __DIR__ . '/super-admin.php';
require __DIR__ . '/admin.php';
