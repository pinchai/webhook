<?php

use Illuminate\Support\Facades\Route;
use WeStacks\TeleBot\Objects\InputFile;
use WeStacks\TeleBot\TeleBot;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\Artisan;
use Illuminate\Support\Facades\File;


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

Route::get(
    'webhook/{chanel_username}/{text}',
    'App\Http\Controllers\WebhookController@getUpdate'
);

Route::post('webhook', 'App\Http\Controllers\WebhookController@getUpdate');
