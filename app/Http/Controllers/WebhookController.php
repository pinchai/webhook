<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class WebhookController extends Controller
{
    // lists
    public function getUpdate($chanel_username, $text)
    {
        $text = trim($text);
        $chanel_username = trim($chanel_username);
        $bot_token = '5442577783:AAHqbqmchMEPsNkyllL6zYG73sBdC_1cyHQ';
        $url = "https://api.telegram.org/bot$bot_token/sendMessage?chat_id=@$chanel_username&text=$text";

        // Initialize a CURL session.
        $newCurl = curl_init();

        //grab URL and pass it to the variable.
        curl_setopt($newCurl, CURLOPT_URL, $url);

        // Return Page contents.
        curl_setopt($newCurl, CURLOPT_RETURNTRANSFER, true);

        return response()->json($newCurl);
    }


}
