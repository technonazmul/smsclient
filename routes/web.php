<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\MessageController;

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
Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard');

Route::middleware(['auth:sanctum', 'verified'])->get('/message', function () {
    return view('message');
})->name('message');

Route::middleware(['auth:sanctum', 'verified'])->get('/phonebook', function () {
    return view('phonebook');
})->name('phonebook');

Route::middleware(['auth:sanctum', 'verified'])->get('/reports', function () {
    return view('reports');
})->name('reports');

Route::middleware(['auth:sanctum', 'verified'])->get('/apisetting', function () {
    return view('apisetting');
})->name('apisetting');

Route::middleware(['auth:sanctum', 'verified'])->get('/appgenerate', [UserController::class, 'generateApi'])->name('appgenerate');

Route::get('/smsapi/non-masking/api_key={api_key}&smsType={smsType}&mobileNo={mobile_no}&smsContent={message_content}', [MessageController::class, 'sendmessage'])->name('sendmessage');
