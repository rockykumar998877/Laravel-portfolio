<?php


use App\Http\Controllers\PageController;
use Illuminate\Support\Facades\Route;

Route::get('/',[PageController::class,'index'])->name('index');
Route::get('/about',[PageController::class,'about'])->name('about');
Route::get('/contact',[PageController::class,'contact'])->name('contact');
Route::get('/education',[PageController::class,'education'])->name('education');
Route::get('/experience',[PageController::class,'experience'])->name('experience');
Route::get('/skill',[PageController::class,'skill'])->name('skill');
