<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Foundation\Application;
use Illuminate\Support\Facades\Route;
use Inertia\Inertia;

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

Route::inertia('/', 'ADC/Home');
Route::inertia('/about', 'ADC/About');
Route::inertia('/contact', 'ADC/Contact');
Route::inertia('/projects', 'ADC/Projects');

Route::prefix('capabilities')->group(function () {
    Route::inertia('/', '');
    Route::inertia('/asset-recovery', 'ADC/Capabilities/AssetRecovery');
    Route::inertia('/safety-quality-programs', 'ADC/Capabilities/SafetyQualityPrograms');
    Route::inertia('/industrial-environmental-services', 'ADC/Capabilities/IndustrialEnvironmentalServices');
    Route::inertia('/demolition-decommissioning', 'ADC/Capabilities/Decommissioning');
});

Route::inertia('/advantages', 'ADC/KeyAdvantages');

Route::prefix('projects')->group(function () {
    Route::inertia('/naval-station-great-lakes-il', 'ADC/Projects/NavalStationGreatLakesIL');
    Route::inertia('/va-lakeside', 'ADC/Projects/VALakeside');
    Route::inertia('/radisson-blu-aqua-hotel', 'ADC/Projects/RadissonBlueAquaHotel');
    Route::inertia('/bedford-industrial-center', 'ADC/Projects/BedformIndustrialCenter');
    Route::inertia('/archer-daniels-midland', 'ADC/Projects/ArcherDanielsMidland');
    Route::inertia('/collins-generating-station', 'ADC/Projects/CollinsGeneratingStation');
});

Route::get('/dashboard', function () {
    return Inertia::render('Dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
