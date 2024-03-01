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

Route::get('/projects', function () {
    $projects = \App\Models\Project::all();

    $p = [];

    $projects->map(function ($v) use (&$p) {
        $c = $v->category;
        if (!array_key_exists($c, $p)) {
            $p[$c] = [];
        }

        $p[$c][] = $v;
    });

    return Inertia::render('ADC/Projects', [
        'projects' => $p
    ]);
});

Route::get('/project/{project:slug}', function (\App\Models\Project $project) {
    return Inertia::render('ADC/Project', [
        'project' => $project
    ]);
});

Route::get('/projects/new', function () {
    return Inertia::render('ADC/Projects/Create');
});

Route::post('/projects/new', function (\Illuminate\Http\Request $request) {
    $request->validate([
        'name' => ['required'],
        'slug' => ['required'],
    ]);

    $project = new \App\Models\Project();
    $project->name = $request->string('name');
    $project->slug = $request->string('slug');
    $project->location = $request->string('location');
    $project->category = $request->string('category');
    $project->content = $request->string('content');
    $project->save();

    return redirect('/project/' . $project->slug);
});

Route::get('/blog/{post:slug}', function (\App\Models\Post $post) {
    return Inertia::render('ADC/Post', [
        'post' => $post
    ]);
});

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
