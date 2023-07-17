<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HospitalController;
use App\Http\Controllers\ServicesController;
use App\Http\Controllers\Appointmentcontroller;
use App\Http\Controllers\UpdatesController;
use App\Http\Controllers\EmergencyController;
use App\Http\Controllers\PendingController;
use App\Http\Controllers\AddserviceController;
use App\Http\Controllers\HospitalservicesController;
use App\Http\Controllers\Admin\DashboardController;
use App\Http\Controllers\Author\DashboardController as AuthorDashboard;

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

Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');

require __DIR__.'/auth.php';

Route::group(['as'=>'admin.', 'prefix'=>'admin', 'middleware'=>['auth', 'admin']], function() {
    Route::get('dashboard', [DashboardController::class, 'index'])->name('dashboard');
});

Route::group(['as'=>'author.', 'prefix'=>'author', 'middleware'=>['auth', 'author']], function() {
    Route::get('dashboard', [AuthorDashboard::class, 'index'])->name('dashboard');
});

Route::get('/index', [HospitalController::class,'index'])->name('indexroute');
Route::get('/update', [UpdatesController::class,'updates'])->name('updateroute');
Route::get('/emergency', [EmergencyController::class,'emergency'])->name('emergencyroute');
Route::get('/pending', [PendingController::class,'pending'])->name('pendingroute');


Route::get('/addservice', [AddserviceController::class,'addservice'])->name('addserviceroute');
Route::post('/addservices', [AddserviceController::class,'addservices'])->name('addservicesroute');
Route::get('/services', [HospitalservicesController::class,'services'])->name('sercicesroute');
Route::get('/manageappointment', [AppointmentController::class,'manage'])->name('manageappointmentsroute');




