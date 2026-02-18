<?php

use Illuminate\Support\Facades\Route;
use Inertia\Inertia;

// Route::get('/platform', function () {
//     return Inertia::render('layout-pages/Platform', [
//         'canRegister' => Features::enabled(Features::registration()),
//     ]);
// })->name('platform');

Route::get('/', function () {
    return Inertia::render('layout-pages/Home');
})->name('home');

Route::get('/about', function () {
    return Inertia::render('layout-pages/About');
})->name('about');

Route::get('/platform', function () {
    return Inertia::render('layout-pages/Platform');
})->name('platform');

Route::get('/security', function () {
    return Inertia::render('layout-pages/Security');
})->name('security');

Route::get('/sectors', function () {
    return Inertia::render('layout-pages/Sectors');
})->name('sectors');

Route::get('/labs', function () {
    return Inertia::render('layout-pages/Labs');
})->name('labs');

Route::get('/capital', function () {
    return Inertia::render('layout-pages/Capital');
})->name('capital');

Route::get('/investors', function () {
    return Inertia::render('layout-pages/Investors');
})->name('investors');

Route::get('/team', function () {
    return Inertia::render('layout-pages/Team');
})->name('team');

Route::get('/contact', function () {
    return Inertia::render('layout-pages/Contact');
})->name('contact');


// Route::get('dashboard', function () {
//     return Inertia::render('Dashboard');
// })->middleware(['auth', 'verified'])->name('dashboard');

// require __DIR__.'/settings.php';
