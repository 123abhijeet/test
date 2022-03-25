<?php

use App\Http\Controllers\Admin\BloodBankController;
use App\Http\Controllers\Admin\BloodRequestController;
use App\Http\Controllers\Admin\DonorController;
use App\Http\Controllers\Admin\EventController;
use App\Http\Controllers\Admin\HomeController;
use App\Http\Controllers\Admin\HospitalController;
use App\Http\Controllers\Admin\ReceiverController;
use App\Http\Controllers\Admin\UserController;
use App\Http\Controllers\FrontendController;
use Illuminate\Support\Facades\Route;
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

Route::get('/', [FrontendController::class, 'home'])->name('HOME');
Route::get('/profile', [FrontendController::class, 'profile'])->name('Profile');
Route::post('/update-profile',[FrontendController::class,'updateprofile'])->name('Update-Profile');
Route::get('/about', [FrontendController::class, 'about'])->name('About');
Route::get('/contact', [FrontendController::class, 'contact'])->name('Contact');
Route::get('/blog', [FrontendController::class, 'blog'])->name('Blog');
Route::get('/history', [FrontendController::class, 'history'])->name('History');
Route::get('/blood-bank', [FrontendController::class, 'bloodbank'])->name('Blood-Bank');
Route::get('/hospital', [FrontendController::class, 'hospital'])->name('Hospital');
Route::prefix('admin')->middleware(['auth', 'checkadmin'])->group(function () {

    Route::get('dashboard', [HomeController::class, 'home'])->name('Dashboard');
    // User
    Route::get('list-user', [UserController::class, 'index'])->name('List-User');
    Route::get('add-user', [UserController::class, 'create'])->name('Add-User');
    Route::post('store-user', [UserController::class, 'store'])->name('Store-User');
    Route::get('view-user/{id}', [UserController::class, 'view'])->name('View-User');
    Route::get('delete-user/{id}', [UserController::class, 'destroy'])->name('Delete-User');
    //Donor
    Route::get('list-donor', [DonorController::class, 'index'])->name('List-Donor');
    Route::get('donor-profile/{userid}', [DonorController::class, 'profile'])->name('Donor-Profile');
    //Receiver
    Route::get('list-receiver', [ReceiverController::class, 'index'])->name('List-Receiver');
    Route::get('receiver-profile', [ReceiverController::class, 'profile'])->name('Receiver-Profile');
    //Blood Request
    Route::get('list-request', [BloodRequestController::class, 'index'])->name('List-Request');
    Route::get('add-request', [BloodRequestController::class, 'create'])->name('Add-Request');
    Route::post('store-request', [BloodRequestController::class, 'store'])->name('Store-Request');
    Route::get('view-request', [BloodRequestController::class, 'view'])->name('View-Request');
    // Hospital
    Route::get('list-hospital', [HospitalController::class, 'index'])->name('List-Hospital');
    Route::get('add-hospital', [HospitalController::class, 'create'])->name('Add-Hospital');
    Route::post('store-hospital', [HospitalController::class, 'store'])->name('Store-Hospital');
    Route::post('update-hospital/{id}', [HospitalController::class, 'update'])->name('Update-Hospital');
    Route::get('delete-hospital/{id}', [HospitalController::class, 'destroy'])->name('Delete-Hospital');

    // Blood Bank
    Route::get('list-blood-bank', [BloodBankController::class, 'index'])->name('List-Blood-Bank');
    Route::get('add-blood-bank', [BloodBankController::class, 'create'])->name('Add-Blood-Bank');
    Route::post('store-blood-bank', [BloodBankController::class, 'store'])->name('Store-Blood-Bank');
    Route::post('update-blood-bank/{id}', [BloodBankController::class, 'update'])->name('Update-Blood-Bank');
    Route::get('delete-blood-bank/{id}', [BloodBankController::class, 'destroy'])->name('Delete-Blood-Bank');

    // Event 
    Route::get('list-event', [EventController::class, 'index'])->name('List-Event');
    Route::get('add-event', [EventController::class, 'create'])->name('Add-Event');
    Route::post('store-event', [EventController::class, 'store'])->name('Store-Event');
    Route::post('update-event/{id}', [EventController::class, 'update'])->name('Update-Event');
    Route::get('delete-event/{id}', [EventController::class, 'destroy'])->name('Delete-Event');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
