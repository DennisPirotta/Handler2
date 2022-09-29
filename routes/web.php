<?php

use App\Http\Controllers\ChatController;
use App\Http\Controllers\CustomerController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\TransactionController;
use App\Http\Controllers\UserController;
use App\Mail\TestMail;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Mail;
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
Auth::routes();
Route::middleware('auth')->group(callback: static function (){

    Route::get('/', [HomeController::class, 'index'])->name('home');

    Route::get('/transactions', [TransactionController::class, 'index'])->name('transactions.index');

    Route::post('/transactions', [TransactionController::class, 'store'])->name('transactions.store');

    Route::put('/transactions/{transaction}', [TransactionController::class, 'payed'])->name('transactions.payed');

    Route::put('/transactions/update/{transaction}', [TransactionController::class, 'update'])->name('transactions.update');

    Route::get('/transactions/{transaction}', [TransactionController::class, 'show'])->name('transactions.show');

    Route::delete('/transactions/{transaction}', [TransactionController::class, 'destroy'])->name('transactions.destroy');

    Route::get('/customers', [CustomerController::class,'index'])->name('customers.index');

    Route::post('/customers', [CustomerController::class,'store'])->name('customers.store');

    Route::get('/customers/{customer}', [CustomerController::class,'show'])->name('customers.show');

    Route::get('/chat',[ChatController::class,'index'])->name('chat.index');

    Route::get('/profile',[UserController::class,'index'])->name('users.index');

});


