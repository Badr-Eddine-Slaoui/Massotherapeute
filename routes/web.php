<?php

use Illuminate\Support\Facades\Route;

Route::view(uri: '/', view: 'index')->name(name: 'home');

Route::view(uri: 'A-propos', view: 'Pages.apropos')->name(name: 'apropos');

Route::view(uri: 'soins', view: 'Pages.soins')->name(name: 'soins');
