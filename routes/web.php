<?php

use App\Http\Controllers\ContactController;
use Illuminate\Support\Facades\Route;

Route::view(uri: '/', view: 'index')->name(name: 'home');

Route::view(uri: 'A-propos', view: 'Pages.apropos')->name(name: 'apropos');

Route::view(uri: 'soins', view: 'Pages.soins')->name(name: 'soins');

Route::view(uri: 'rendez-vous', view: 'Pages.rendezVous')->name(name: 'rendezVous');

Route::post(uri:'contact/store', action:[ContactController::class ,'store'])->name(name:'contact.store');
