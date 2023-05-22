<?php

use App\Http\Controllers\About;
use App\Http\Controllers\Skill;
use App\Http\Controllers\Service;
use App\Http\Controllers\Category;
use App\Http\Controllers\Education;
use App\Http\Controllers\Portfolio;
use App\Http\Controllers\Testimonial;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CropController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\FrontEndController;
use App\Http\Controllers\SocialController;
use App\Http\Controllers\ProfessionalExperience;

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

Route::get('/', [FrontEndController::class, 'index']);
Route::get('/portfolioItem/{id}', [FrontEndController::class, 'portfolioItem'])->name('portfolioItem');

// Admin Routes
Route::prefix('/admin')->group(function(){
    Route::resource('/about', About::class);
    Route::resource('/skill', Skill::class);
    Route::resource('/service', Service::class);
    Route::resource('/category', Category::class);
    Route::resource('/portfolio', Portfolio::class);
    Route::resource('/education', Education::class);
    Route::resource('/social', SocialController::class);
    Route::resource('/testimonial', Testimonial::class);
    Route::resource('/professional', ProfessionalExperience::class);
    Route::get('/', [AdminController::class, 'index'])->name('Home');
    Route::post('/ProjectCropImage', [CropController::class, 'TestimonialCropImage'])->name('TestimonialCropImage');
    Route::post('/ServiceCropImage', [CropController::class, 'ServiceCropImage'])->name('ServiceCropImage');
    Route::post('/PortfolioCropImage', [CropController::class, 'PortfolioCropImage'])->name('PortfolioCropImage');
    Route::post('/aboutCropImage', [CropController::class, 'aboutCropImage'])->name('aboutCropImage');
});