<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Back\DashboardController;
use App\Http\Controllers\Back\ProductCategoryController;
use App\Http\Controllers\Back\ProductController;
use App\Http\Controllers\Back\CorparatePagesController;
use App\Http\Controllers\Back\ServicePageController;
use App\Http\Controllers\Back\PostController;
use App\Http\Controllers\Back\AlbumCategoryController;
use App\Http\Controllers\Back\PhotoController;
use App\Http\Controllers\Back\SliderController;
use App\Http\Controllers\Back\AdminAuthController;
use App\Http\Controllers\Back\ConfigController;
use App\Http\Controllers\Front\HomePageController;


//Admın Route

Route::prefix('admin')->name('admin.')->middleware('İsadminlogout')->group(function (){
    Route::get('giris', [AdminAuthController::class , 'index'])->name('index');
    Route::post('giris' , [AdminAuthController::class , 'adminAuth'])->name('login');
});

Route::prefix('admin')->name('admin.')->middleware('İsadmin')->group(function () {
    Route::get('panel', [DashboardController::class ,'dashboard'])->name('dashboard');
    Route::resource('kategori' , ProductCategoryController::class);
    Route::resource('urunler' , ProductController::class);
    Route::resource('pages' , CorparatePagesController::class);
    Route::resource('services-pages' , ServicePageController::class);
    Route::resource('posts' , PostController::class);
    Route::resource('album-category' , AlbumCategoryController::class);
    Route::resource('photos' , PhotoController::class);
    Route::resource('slider' , SliderController::class);
    Route::get('cikis' , [AdminAuthController::class , 'logout'])->name('logout');
    Route::get('ayarlar' , [ConfigController::class , 'index'])->name('config');
    Route::post('ayarlar/iletisim' , [ConfigController::class , 'informationPost'])->name('information.post');
    Route::post('ayarlar' , [ConfigController::class , 'configPost'])->name('config.post');
});


// Front Route

Route::get('/' , [HomePageController::class , 'homepage'])->name('homepage');
Route::get('/kategori/{slug}' , [HomePageController::class , 'category'])->name('category');
Route::get('kurumsal/{slug}' , [HomePageController::class ,'corparate'])->name('corparate');
Route::get('servisler/{slug}' , [HomePageController::class ,'service'])->name('service');
Route::get('/haberler' , [HomePageController::class , 'posts'])->name('posts');
Route::get('kategori/{slug}/{name}' , [HomePageController::class ,'product'])->name('product');
Route::get('albumler' , [HomePageController::class, 'albums'])->name('albums');
Route::get('/album/{slug}' , [HomePageController::class , 'albumcategory'])->name('album.category');
Route::get('/haber/{slug}' , [HomePageController::class , 'post'])->name('post');
Route::get('iletisim' , [HomePageController::class , 'contact'])->name('contact');

