<?php

use Illuminate\Support\Facades\Route;

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
