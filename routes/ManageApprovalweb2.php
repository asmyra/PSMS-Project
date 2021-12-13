<?php
/* |--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/
Route::get('/uploadfile','ManageApprovalController2@index');
Route::post('/uploadfile','ManageApprovalController2@showUploadFile');