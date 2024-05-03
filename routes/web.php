<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\SludinajumsController;
use App\Http\Controllers\Auth\AuthenticatedSessionController;


/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('../auth/login');
});

Route::get('/sludinajumi', [SludinajumsController::class, 'index'])->name('sludinajums.index');
Route::get('/sludinajumi/{sludinajums}/view', [SludinajumsController::class, 'view'])->name('sludinajums.view');

Route::get('/mani-sludinajumi', function() {
    $sludinajumi = auth()->user()->maniSludinajumi()->latest()->get();
    return view('sludinajums.mani-sludinajumi', ['sludinajumi' => $sludinajumi]);
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update'); 
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
    // Route::post('/logout', [AuthenticatedSessionController::class, 'destroy'])->name('logout');
    Route::get('/sludinajumi/izveidot', [SludinajumsController::class, 'create'])->name('sludinajums.create');
    Route::post('/sludinajumi', [SludinajumsController::class, 'store'])->name('sludinajums.store');
    Route::get('/sludinajumi/{sludinajums}/edit', [SludinajumsController::class, 'edit'])->name('sludinajums.edit');
    Route::put('/sludinajumi/{sludinajums}/update', [SludinajumsController::class, 'update'])->name('sludinajums.update');
    Route::delete('/sludinajumi/{sludinajums}/destroy', [SludinajumsController::class, 'destroy'])->name('sludinajums.destroy');
});

require __DIR__.'/auth.php';
