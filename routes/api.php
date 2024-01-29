<?php

use App\Http\Controllers\Api\GitHubController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::post('/salvar-local', [GitHubController::class, 'store'])->name('user.store');
