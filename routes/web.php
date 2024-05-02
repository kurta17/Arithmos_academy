<?php

use App\Http\Controllers\ContactController;
use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\GradeController;
use App\Http\Controllers\TestController;
use App\Http\Controllers\QuestionController;
use App\Http\Controllers\WelcomeController;
use App\Http\Controllers\QuestionTriedController;

Route::get('/',[WelcomeController::class, 'show'])->name('welcome');    

Route::get('/test', [TestController::class, 'index'])->name('test');
Route::post('/submit', [TestController::class, 'store'])->name('submit');

Route::post('/questionstrieds', [QuestionTriedController::class, 'store'])->name('questionstrieds.store');
Route::put('/questionstrieds/update/{id}', [QuestionsTriedController::class, 'update'])->name('questionstrieds.update');

Route::get('/questionstrieds/{id}', [QuestionTriedController::class, 'show'])->name('questionstrieds.show');

Route::middleware(['auth', 'verified'])->group(function () {
    Route::get('/dashboard',[WelcomeController::class, 'dashboard'])->name('dashboard');

    Route::post('/questions/store', [QuestionController::class, 'store'])->name('question.store');
    Route::get('/question/create', [QuestionController::class, 'create'])->name('question.create');
});


Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');

});



Route::get('/contact', [ContactController::class, 'show'])->name('contact.show');

Route::post('/contact', [ContactController::class, 'submit'])->name('contact.submit');

require __DIR__.'/auth.php';
