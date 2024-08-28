<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\User\UserController;
use App\Http\Controllers\Company\CompanyController;
use App\Http\Middleware\UserMiddleware;
use Illuminate\Foundation\Application;
use Illuminate\Support\Facades\Route;
use Inertia\Inertia;

Route::get('/welcome', function () {
    return Inertia::render('Welcome', [
        'canLogin' => Route::has('login'),
        'canRegister' => Route::has('register'),
        'laravelVersion' => Application::VERSION,
        'phpVersion' => PHP_VERSION,
    ]);
});

Route::get('/', function () {
    return Inertia::render('homepage');
})->name('homepage');

Route::get('findjobs', function () {
    return Inertia::render('FindJobs/findjobs');
})->name('findjobs');

Route::prefix('perusahaan')->group(function () {
    Route::get('/', function () {
        return Inertia::render('FindJobs/company');
    });
    Route::get('/jobdesc', function () {
        return Inertia::render('FindJobs/jobdescription');
    });
});

// Route::get('/dashboard', function () {
//     return Inertia::render('Dashboard');
// })->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__ . '/auth.php';

Route::middleware(['auth', 'userMiddleware'])->group(function () {
    Route::get('/dashboard', [UserController::class, 'index'])->name('dashboard');
});
// Route::middleware(['auth', 'companyMiddleware'])->group(function () {
//     Route::get('/company', [CompanyController::class, 'index'])->name('company.dashboard');
// });
Route::middleware(['auth', 'companyMiddleware'])->group(function () {
    Route::prefix('company')->group(function () {
        Route::get('/', [CompanyController::class, 'index'])->name('company.dashboard');
        Route::prefix('job')->group(function () {
            Route::get('/', [CompanyController::class, 'JobDashboard'])->name('company.jobdashboard');
            Route::get('/create', [CompanyController::class, 'CreateJob'])->name('company.createjob');
            Route::post('/store', [CompanyController::class, 'StoreJob'])->name('company.storejob');
        });
    });
});
