<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;

// Web Routes for Front Office
include 'web\FrontOffice\index.php';

// Web Routes for others 
include 'web\others.php';

require __DIR__.'/auth.php';
