<?php

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

Route::get('/', function () {
    return view('/pages/home');
});

Route::get('/about', function () {
    return view('/pages/about');
});

Route::get('/resume', function () {
    return view('/pages/resume');
});

Route::get('/projects', function () {
    return view('/pages/projects');
});

Route::get('/contact', function () {
    return view('/pages/contact');
});

// Submit Form
Route::post("/contact/submit", 'ContactController@submit');

// CV
Route::get('/cv', function () {
    return view('cv');
});

// PDF
Route::get('/pdf', 'PDFController@generatePDF');
