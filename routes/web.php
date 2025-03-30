<?php

use App\Http\Controllers\HomeController;
use App\Livewire\Settings\Appearance;
use App\Livewire\Settings\Password;
use App\Livewire\Settings\Profile;
use App\Livewire\System\CreateDenomination;
use App\Livewire\System\CreateUser;
use App\Livewire\System\ListDenomination;
use App\Livewire\System\ListUser;
use App\Livewire\System\SystemDashboard;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
})->name('home');

Route::view('dashboard', 'dashboard')
    ->middleware(['auth', 'verified'])
    ->name('dashboard');

Route::middleware(['auth'])->group(function () { 
    Route::get('home', [HomeController::class, 'home'])->name('home');
});

Route::middleware(['auth', 'role:system'])->group(function () {
    Route::get('system/home', SystemDashboard::class)->name('system');
    Route::get('denomination/create', CreateDenomination::class)->name('denomination.create');
    Route::get('denomination/list', ListDenomination::class)->name('denomination.list');
    Route::get('create/user', CreateUser::class)->name('create.user');
    Route::get('list/user', ListUser::class)->name('list.user');
});

// Route::middleware(['auth'])->group(function () {
//     Route::redirect('settings', 'settings/profile');

//     Route::get('settings/profile', Profile::class)->name('settings.profile');
//     Route::get('settings/password', Password::class)->name('settings.password');
//     Route::get('settings/appearance', Appearance::class)->name('settings.appearance');
// });

require __DIR__.'/auth.php';
