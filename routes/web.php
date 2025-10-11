<?php
use App\Http\Controllers\UserdataController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
})->name('home1');

Route::get('/home2', function () {
    return view('welcome2');
})->name('home2');

Route::get('/contact', function () {
    return view('contact');
})->name('contact');

Route::get('/author', function () {
    return view('author');
})->name('author');

Route::get('/about', function () {
    return view('about');
})->name('about');

Route::get('/login', function () {
    return view('auth.login');
})->name('login');

Route::get('/register', function () {
    return view('auth.register');
})->name('register');

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified',
])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');

    Route::get('/userdata', 
    [UserdataController::class, 'index'
    ])->name('userdata');
});
