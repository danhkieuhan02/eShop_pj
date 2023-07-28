<?php

use App\Http\Controllers\AccountController;
use App\Http\Controllers\Admin\CategoriesController;
use App\Http\Controllers\Admin\ProductsController;
use App\Http\Controllers\Client\ContactController;
use App\Http\Controllers\Client\OrderController;
use App\Http\Controllers\ForgetPasswordController;
use App\Http\Controllers\HomeController;
use Illuminate\Support\Facades\Route;

Route::get('/', [HomeController::class, "index"])->name("home");


Route::prefix("/admin")->name("admin.")->middleware('auth')->group(function () {
    Route::prefix("/category")->name("category.")->group(function () {
        Route::get('/', [CategoriesController::class, "index"])->name('index');
        Route::get('/tao-danh-muc', [CategoriesController::class, "create"])->name('create');
        Route::post('/store', [CategoriesController::class, "store"])->name('store');
        Route::get('/{id}/sua-danh-muc', [CategoriesController::class, "edit"])->name('edit');
        Route::post('/luu/{id?}', [CategoriesController::class, "upsert"])->name('upsert');
        Route::post('/xoa/{id}', [CategoriesController::class, "destroy"])->name('destroy');
    });

    Route::prefix("/product")->name("product.")->group(function () {
        Route::get('/', [ProductsController::class, "index"])->name('index');
        Route::get('/tao-san-pham', [ProductsController::class, "create"])->name('create');
        Route::post('/store', [ProductsController::class, "store"])->name('store');
        Route::get('/{id}/sua-san-pham', [ProductsController::class, "edit"])->name('edit');
        Route::post('/luu/{id?}', [ProductsController::class, "upsert"])->name('upsert');
        Route::post('/xoa/{id}', [ProductsController::class, "destroy"])->name('destroy');
    });
});

Route::prefix("/account")->name('account.')->group(function () {
    Route::get('/dang-ky', [AccountController::class, "register"])->name('register');
    Route::post('/dang-ky', [AccountController::class, "save"])->name('save');
    Route::get('/dang-nhap', [AccountController::class, "login"])->name('login');
    Route::post('/dang-nhap', [AccountController::class, "auth"])->name('auth');
    Route::get('/dang-xuat', [AccountController::class, "logout"])->name('logout');
    Route::get('/doi-mat-khau', [AccountController::class, "updatePassword"])->name('updatePassword');
    Route::post('/doi-mat-khau', [AccountController::class, "changePassword"])->name('changePassword');
});




Route::prefix("/client")->name("client.")->group(function () {
    Route::get('/lien-he', [ContactController::class, "contact"])->name('contact');
    Route::get('/dat-hang', [OrderController::class, "orders"])->name('order');
});
