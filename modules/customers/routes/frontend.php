<?php

use Illuminate\Support\Facades\Route;

Route::view('customers', loadResourceFrom('customers', 'backend.index'));