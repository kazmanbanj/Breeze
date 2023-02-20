<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Student\TimetableController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::middleware(['auth', 'verified'])->prefix('teacher')->name('teacher.')->group(function () {
    Route::get('timetable', [TimetableController::class, 'index'])->name('timetable');
});


require __DIR__.'/auth.php';
