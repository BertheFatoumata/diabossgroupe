<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MailController;

Route::post('/envoyer-email', [MailController::class, 'envoyerEmail'])
    ->name('envoyer.email');




Route::get('/', function () {
    return view('home.index');
});

Route::get('/construction', function () {
    return view('construction.index');
});

Route::get('/bamdepot', function () {
    return view('bamdepot.index');
});

Route::get('/djawo', function () {
    return view('djawo.index');
});

Route::get('/mddesign', function () {
    return view('mddesign.index');
});

Route::get('/mhmmateriaux', function () {
    return view('mhmmateriaux.index');
});

Route::get('/byimmo', function () {
    return view('byimmo.index');
});

Route::get('/batijob', function () {
    return view('batijob.index');
});

Route::get('/projet', function () {
    return view('projet.index');
});



