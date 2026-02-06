<?php

use App\Livewire\Pages\HomePage;
use App\Livewire\Pages\TaskListPage;
use Illuminate\Support\Facades\Route;
use App\Livewire\Pages\TaskManagerPage;

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/', HomePage::class)->name('home-page');
Route::get('/task-manager', TaskManagerPage::class)->name('tm-page');
Route::get('/task-list', TaskListPage::class)->name('tl-page');