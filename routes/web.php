<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DonationController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\PhotoController;

use App\Models\Photo;





Route::get('/', function () {
    return view('homepage');
});
Route::get('/mission', function () {
    return view('mission');
});
Route::get('/whyngiti', function () {
    return view('whyngiti');
});
Route::get('/how-it-started', function () {
    return view('how-it-started');
});
Route::get('/who-we-are', function () {
    return view('who-we-are');
});
Route::get('/ngiti-by-noemie-schiever', function () {
    return view('ngiti-by-noemie-schiever');
});
Route::get('/project2024', function () {
    return view('project2024');
});
Route::get('/previous', function () {
    return view('previous');
});
Route::get('/gallery', function () {
    $photos = Photo::get();
 
    return view('gallery',compact('photos'));
});
Route::get('/homepage', function () {
    return view('homepage');
});
Route::get('/accomplishment', function () {
    return view('accomplishment');
});
Route::get('/stayconnected', function () {
    return view('stayconnected');
});
Route::get('/uploadgallery', function () {
    return view('upload-photo');
});
Route::post('/donate', [DonationController::class, 'processDonation'])->name('donate.store');
Route::get('/thank_you', [DonationController::class, 'thankYou'])->name('thank_you');

Route::post('submit-contact',[ContactController::class,'submitContact'])->name('submit-contact');

Route::post('upload',[PhotoController::class,'upload'])->name('upload');






