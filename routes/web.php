<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\JobsController;
use App\Http\Controllers\User\UserController;
use App\Http\Controllers\User\FindJobsController;
use App\Http\Controllers\Company\CompanyController;
use App\Http\Controllers\Company\JobController;
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

Route::get('/', [HomeController::class, 'index'])->name('homepage');

Route::get('findjobs', [JobsController::class, 'index'])->name('findjobs');
Route::get('jobdesc/{id}', [JobsController::class, 'detail'])->name('jobdescription');

Route::prefix('perusahaan')->group(function () {
    Route::get('/', function () {
        return Inertia::render('FindJobs/company');
    });
    // Route::get('/jobdesc/{id}', function () {
    //     return Inertia::render('FindJobs/jobdescription');
    // });
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
            Route::get('/', [JobController::class, 'index'])->name('company.jobdashboard');
            Route::get('/create', [JobController::class, 'create'])->name('company.createjob');
            Route::post('/store', [JobController::class, 'store'])->name('company.storejob');
            Route::get('/edit/{id}', [JobController::class, 'edit'])->name('company.editjob');
            Route::put('/update/{id}', [JobController::class, 'update'])->name('company.updatejob');
            Route::delete('/{id}', [JobController::class, 'delete'])->name('company.deletejob');
        });
    });
});
