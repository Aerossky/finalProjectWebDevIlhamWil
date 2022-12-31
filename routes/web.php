<?php

use App\Http\Controllers\BookingsController;
use App\Http\Controllers\CategoryGalleriesController;
use App\Http\Controllers\CategoryGalleryController;
use App\Http\Controllers\DomisilisController;
use App\Http\Controllers\GalleriesController;
use App\Http\Controllers\PagesController;
use App\Http\Controllers\photoController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\ReviewsController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PricelistsController;
use App\Http\Controllers\DomisiliController;

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




Route::get('/dashboard', [ReviewsController::class, 'create'])
    ->middleware(['auth', 'verified'])->name('dashboard');


Route::get('/dashboard/product', [GalleriesController::class, 'index'])
    ->middleware(['auth', 'verified'])->name('product');

//dashboard
Route::get('/dashboard/tampilan_pricelist',[PricelistsController::class, 'show'])
    ->middleware(['auth', 'verified'])->name('tampilan_pricelist');

Route::get('/dashboard/tampilan_category', [CategoryGalleriesController::class, 'show'])
   ->middleware(['auth', 'verified'])->name('tampilan_category');

Route::get('/dashboard/tampilan_domisili', [DomisilisController::class, 'show'])
 ->middleware(['auth', 'verified'])->name('tampilan_domisili');


Route::get('/dashboard/tampilan_booking', [BookingsController::class, 'show'])
    ->middleware(['auth', 'verified'])->name('tampilan_booking');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});
Route::get('/', [PagesController::class, 'index'])
    ->name('index');

Route::get('/contact_us', [PagesController::class, 'contact_us'])
    ->name('contact_us');

Route::get('/about_us', [PagesController::class, 'about_us'])
    ->name('about_us');

Route::get('/portfolio', [GalleriesController::class, 'postfoto'])
    ->name('portfolio');

Route::get('/admin', [PagesController::class, 'admin'])
    ->name('admin');

Route::get('/harga', [PagesController::class, 'harga'])
    ->name('harga');



Route::get('/detail', [PagesController::class, 'detail'])
    ->name('detail');

Route::get('contact_us', [BookingsController::class, 'contactbooking'])
    ->name('contact_us');

Route::resource('contact', BookingsController::class);




//post review




//create

Route::resource('galleries', GalleriesController::class)-> middleware('admin');
Route::resource('pricelists', PricelistsController::class)-> middleware('admin');
Route::resource('categorys', CategoryGalleriesController::class)-> middleware('admin');
Route::resource('domisilis', DomisilisController::class)-> middleware('admin');
Route::resource('bookings', BookingsController::class);
Route::resource('reviews', ReviewsController::class);





//new produk


require __DIR__.'/auth.php';
