<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\User;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\AboutController;
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

Route::get('/login', [User::class, 'create'])
    ->middleware('guest')
    ->name('login');

Route::post('/login', [User::class, 'store'])
    ->middleware('guest');

Route::get('/logout', [User::class, 'destroy'])
    ->middleware('auth')
    ->name('logout');


Route::group(['middleware' => ['localizationRedirect'], 'prefix' => LaravelLocalization::setLocale()], function(){
	Route::get('/', [HomeController::class, 'index'])->name('home');
    Route::get('/about', [HomeController::class, 'about'])->name('about');
    Route::get('/moment', [HomeController::class, 'moment'])->name('moment');
    Route::get('/product', [HomeController::class, 'product'])->name('product');
    Route::get('/suggest', [HomeController::class, 'suggest'])->name('suggest');
    Route::get('/suggest/{id}', [HomeController::class, 'suggestshow'])->name('suggestshow');
});

Route::post('send-mail', [HomeController::class, 'sendMail'])->name('mail');


Route::group(['middleware' => 'auth','prefix' => 'admin', 'as' => 'admin.'], function() {

    Route::get('/',function (){
        return redirect()->route('admin.settings.index');
    });

    Route::get('/aboutus', [AboutController::class, 'aboutus'])->name('aboutus');
    Route::get('/address', [AboutController::class, 'address'])->name('address');
    Route::get('/email', [AboutController::class, 'email'])->name('email');
    Route::get('/tell', [AboutController::class, 'tell'])->name('tell');
    Route::get('/settedit/{about}/edit', [AboutController::class, 'setting_edit'])->name('settedit');

    Route::resource('/about', AboutController::class);
    Route::resource('/settings', App\Http\Controllers\SettingsController::class);
    Route::resource('/category', App\Http\Controllers\CategoryController::class);
    Route::resource('/product', App\Http\Controllers\ProductController::class);
    Route::resource('/moment', App\Http\Controllers\MomentController::class);
    Route::resource('/partner', App\Http\Controllers\PartnerController::class);
    Route::resource('/suggest', App\Http\Controllers\SuggestController::class);
});
