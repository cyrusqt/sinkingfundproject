<?php
use App\Http\Controllers\SinkingController;

Route::get('/',              [SinkingController::class, 'index'])->name('index');
Route::get('/home',          [SinkingController::class, 'index'])->name('home');
Route::get('/dashboard',     [SinkingController::class, 'dashboard'])->name('dashboard');
Route::get('/myfunds',       [SinkingController::class, 'funds'])->name('myfunds');
Route::get('/contributions', [SinkingController::class, 'contributions'])->name('contributions');
Route::get('/reports',       [SinkingController::class, 'reports'])->name('reports');
?>