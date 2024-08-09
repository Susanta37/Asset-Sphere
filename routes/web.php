<?php

use App\Http\Controllers\AdminDashboardController;
use App\Http\Controllers\AssetController;
use App\Http\Controllers\Auth\AuthenticatedSessionController;
use App\Http\Controllers\ComponentController;
use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DepreciationController;
use App\Http\Controllers\MaintenanceController;
use App\Http\Controllers\TicketController;
use App\Http\Controllers\TodolistController;
use Illuminate\Http\Request;

require __DIR__.'/auth.php';

Route::get('/', function () {
    return view('welcome');
});
//normal user
Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified','lc'])->name('dashboard');

// OKCL(SUper Admin)
Route::get('/okcl/dashboard', [AdminDashboardController::class, 'index'])
    ->middleware(['auth', 'verified', 'okcl'])
    ->name('okcl.dashboard');

// dlc(Admin)
Route::get('/dlc/dashboard', function () {
    return view('dlc.dashboard');
})->middleware(['auth', 'verified','dlc'])->name('dlc.dashboard');

Route::get('/settings', function () {
    return view('profile-setting');
})->middleware(['auth', 'verified'])->name('settings');


#Route::get('/admin/dashboard',[HomeController::class,'index'])->middleware(['auth','okcl']);
#Route::get('/dlc/dashboard',[DistrictLc::class,'index'])->middleware(['auth','dlc']);

Route::middleware('auth')->group(function () {
    Route::get('/okcl/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');


    // Route::get('/admin/register', [AdminController::class, 'showRegister'])->name('admin.register');
    // Route::post('/admin/register', [AdminController::class, 'register'])->name('admin.register.submit');
    
    
    // Route::get('/admin/login', [AdminController::class, 'showLogin'])->name('admin.login');
    // Route::post('/admin/login', [AdminController::class, 'login'])->name('admin.login.submit');
    
    // Route::get('/admin/dashboard', [AdminController::class, 'showDashboard'])->name('admin.dashboard');
    
    // // Route::get('/admin/profile', [AdminController::class, 'showProfile'])->name('admin.profile');
    // // Route::post('/admin/profile', [AdminController::class, 'updateProfile'])->name('admin.profile.update');
    
    
    // Route::get('/admin/user', [AdminController::class, 'showUserList'])->name('admin.user');
    // Route::post('/users', [AdminController::class, 'store'])->name('users.store');
    
    // Route::put('/users/{id}', [AdminController::class, 'update'])->name('users.update');
    // Route::delete('/users/{id}', [AdminController::class, 'destroy'])->name('users.destroy'); 
    // Route::post('/admin/logout', [AdminController::class, 'logout'])->name('admin.logout');
    



});




Route::post('/toggle-dark-mode', function (Request $request) {
    $currentMode = session('dark_mode', 'light');
    $newMode = $currentMode === 'dark' ? 'light' : 'dark';
    session(['dark_mode' => $newMode]);
    return response()->noContent();
});

Route::get('/okcl/asset', [AssetController::class, 'index'])
    ->middleware(['auth', 'verified', 'okcl'])
    ->name('okcl.asset');

 Route::post('/assets/store', [AssetController::class, 'store'])->name('assets.store');
 Route::resource('admin/asset', AssetController::class);



 Route::get('/okcl/component', [ComponentController ::class, 'index'])
    ->middleware(['auth', 'verified', 'okcl'])
    ->name('okcl.component');

 Route::post('okcl/components', [ComponentController::class, 'store'])->name('components.store');

// Depreciation routes
Route::get('/okcl/depreciation', [DepreciationController::class, 'index'])
    ->middleware(['auth', 'verified', 'okcl'])
    ->name('admin.depreciation.index');

Route::post('/depreciation/store', [DepreciationController::class, 'store'])
    ->name('admin.depreciation.store');

// Maintenance routes
Route::get('/okcl/maintenance', [MaintenanceController::class, 'index'])
    ->middleware(['auth', 'verified', 'okcl'])
    ->name('admin.maintenance.index');

Route::post('/maintenance/store', [MaintenanceController::class, 'store'])
    ->name('admin.maintenance.store');

// Ticket routes
Route::get('/okcl/ticket', [TicketController::class, 'index'])
    ->middleware(['auth', 'verified', 'okcl'])
    ->name('admin.ticket.index');

Route::post('/ticket/store', [TicketController::class, 'store'])
    ->name('admin.ticket.store');

 Route::resource('todolist', TodolistController::class);