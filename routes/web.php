<?php

use App\Http\Controllers\AccessConteoller;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

// Login view
Route::get('sf74w4dsf7hfh45rfhsd', [AccessConteoller::class, "loginPage"])->name('loginPage');

// Login action
Route::post('sf74w4dsf7hfh45rfhsd', [AccessConteoller::class, "loginAction"])->name('loginAction');

// Base layout view
Route::get('dhszfwu477teu3er9wf9vv', [AccessConteoller::class, "basePage"])->name('basePage');

// Dashboard view
Route::get('dsjfsgfu3ew8csjfbae7ds', [AccessConteoller::class, "dashboardPage"])->name('dashboardPage');
