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
//    $text = 'send_from_localhost';
//    $chanel_username = 'mit_webhook';
//    $url = "https://api.telegram.org/bot5442577783:AAHqbqmchMEPsNkyllL6zYG73sBdC_1cyHQ/sendMessage?chat_id=@$chanel_username&text=$text";
//
//    // Initialize a CURL session.
//    $newCurl = curl_init();
//
//    //grab URL and pass it to the variable.
//    curl_setopt($newCurl, CURLOPT_URL, $url);
//
//    // Return Page contents.
//    curl_setopt($newCurl, CURLOPT_RETURNTRANSFER, true);
//
//    $output = curl_exec($newCurl);
    return view('welcome');
});

Route::get('webhook/{chanel_username}/{text}', 'App\Http\Controllers\WebhookController@getUpdate');
