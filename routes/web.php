<?php

use App\Http\Controllers\HomeController;
use App\Livewire\Contacts\ContactForm;
use App\Livewire\Contacts\ContactIndex;
use App\Livewire\RolesPermissions\PermissionView;
use App\Livewire\RolesPermissions\RoleView;
use App\Livewire\Users\UserView;
use App\Livewire\Users\UserForm;
use Illuminate\Support\Facades\Route;
use App\Livewire\Auth\Login;
use App\Livewire\Dashboard;

Route::get('/', [HomeController::class, 'home'])->name('home'); 
Route::get('/en', [HomeController::class, 'homeEn'])->name('home-en'); 

Route::get('/contact', [HomeController::class, 'contact'])->name('contact'); 
Route::get('/en/contact', [HomeController::class, 'contactEn'])->name('contact-en');
 
Route::post('/submit-form', [HomeController::class, 'submitForm'])->name('submitForm');



Route::get('/login', Login::class)->name('login');
Route::middleware(['auth'])->group(function () { 
    
    Route::get('/dashboard', Dashboard::class)->name('dashboard');
    
    // Route::get('/permissions', PermissionView::class)->name('permissions');
    // Route::get('/roles', RoleView::class)->name('roles');

    // |--------------------------------------------------------------------------
    // |Users
    // |--------------------------------------------------------------------------
    
    // Route::group(['prefix' => 'users'], function () {
    //     Route::get('/', UserView::class)->name('users');
    //     Route::get('/create', UserForm::class)->name('users.create');
    //     Route::get('/edit/{id}', UserForm::class)->name('users.edit');
    //     Route::get('/view/{id}/{status}', UserForm::class)->name('users.view');
    // });


    // |--------------------------------------------------------------------------
    // |Contact 
    // |--------------------------------------------------------------------------
    Route::group(['prefix' => 'contacts'], function () {
        Route::get('/', ContactIndex::class)->name('contacts');
        Route::get('/view/{id}/{status}', ContactForm::class)->name('contacts.view');
    });


});
