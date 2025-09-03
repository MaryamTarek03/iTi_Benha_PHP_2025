<?php

use App\Http\Controllers\BookController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PatientController;

Route::get('/', function () {
    return view('home');
});

Route::get('/profile', function () {
    return view('profile');
});


Route::get('/about', function () {
    return view('about', ['Name' => 'Maryam Tarek']);
});

Route::get('/contact', function () {
    return view('contact',
    ['Name' => 'Maryam Tarek',
    'Email' => 'maryamtarek.dev@gmail.com',
    'Phone' => '0 123 456 7890', 'City' => 'Cairo']);
});

Route::get('/lab_02', function () {
    return view('lab_02', [
        'products' => [
            ['name' => 'Special Product 1', 'price' => 100],
            ['name' => 'Product 2', 'price' => 200],
            ['name' => 'Product 3', 'price' => 300],
        ]
    ]);
})->name('products');


Route::get('/patients', [PatientController::class, 'index'])->name('patients.index');
Route::get('/patients/create', [PatientController::class, 'create'])->name('patients.create');
Route::post('/patients', [PatientController::class, 'store'])->name('patients.store');
Route::get('/patients/{id}', [PatientController::class, 'show'])->name('patients.show');

Route::get('/books', [BookController::class, 'index'])->name('books.index');
Route::get('/books/create', [BookController::class, 'create'])->name('books.create');
Route::post('/books', [BookController::class, 'store'])->name('books.store');
Route::get('/books/search', [BookController::class, 'search'])->name('books.search');
Route::post('/books/search', [BookController::class, 'find'])->name('books.find');
Route::get('/books/{id}', [BookController::class, 'show'])->name('books.show');