<?php

use Illuminate\Http\Request;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:web')->get('/user', function (Request $request) {
    return $request->user();
});

Route::post('upload', 'Admin\UploadController@upload')->name('image_upload');
Route::post('delete_img', 'Admin\UploadController@delete_img')->name('image_upload');
Route::post('upload_profile', 'Admin\UploadController@upload_profile')->name('profile_upload');
