<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\FrontController;
use App\Http\Controllers\CompanyController;
use App\Http\Controllers\FeatureController;
use App\Http\Controllers\MemberController;
use App\Http\Controllers\MessageController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\ServiceController;
use App\Http\Controllers\SettingController;
use App\Http\Controllers\SubscriberController;
use App\Http\Controllers\TestmonialController;
use Mcamara\LaravelLocalization\Facades\LaravelLocalization;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/


Route::name('front.')->controller(FrontController::class)->group(function () {
    // ==========================Home Page 
    Route::post('/subscriber/store','subscriberStore')->name('store.subsciber');
    Route::get('/', 'index')->name('index');

    // ==========================about Page 

    Route::get('/about', 'about')->name('about');

    // ==========================service Page 

    Route::get('/service', 'service')->name('service');

    // ==========================contact Page 
    Route::post('/contact/store','contactStore')->name('store.contact');
    Route::get('/contact', 'contact')->name('contact');
});

Route::name('admin.')->prefix(LaravelLocalization::setLocale() . '/admin')->middleware([
    'localeSessionRedirect',
    'localizationRedirect',
    'localeViewPath'
])->group(function () {
    Route::middleware('auth')->group(function () {
        // ============================== HOME PAGE
        Route::view('/', 'admin.index')->name('index');


        // ============================== SERVICES
        Route::controller(ServiceController::class)->group(function () {
            Route::resource('services', ServiceController::class);
        });
        // ============================== features
        Route::controller(FeatureController::class)->group(function () {
            Route::resource('features', FeatureController::class);
        });
        // ============================== messages
        Route::controller(MessageController::class)->group(function () {
            Route::resource('messages', MessageController::class)->only(['index', 'show', 'destroy']);
        });
        // ============================== subscribers
        Route::controller(SubscriberController::class)->group(function () {
            Route::resource('subscribers', SubscriberController::class)->only(['index', 'destroy']);
        });
        // ============================== testimonials
        Route::controller(TestmonialController::class)->group(function () {
            Route::resource('testmonials', TestmonialController::class);
        });
        //============================== companies
        Route::controller(CompanyController::class)->group(function () {
            Route::resource('companies', CompanyController::class);
        });
        //============================== members
        Route::controller(MemberController::class)->group(function () {
            Route::resource('members', MemberController::class);
        });
        //============================== settings
        Route::controller(SettingController::class)->group(function () {
            Route::resource('settings', SettingController::class)->only(['index', 'update']);
        });
    });
    require __DIR__ . '/auth.php';
});
