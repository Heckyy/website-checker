<?php

namespace App\Services;
use Illuminate\Support\Facades\DB;
use Telegram\Bot\Api;
class checkWeb
{
    public function checking(){
        $telegramToken = "6510104433:AAEEv1QNjXCW1cvQ5D3wy7cp4KDRDH3nkyU";
        $chatId = "1124334662";
        $apiUrl = "https://api.telegram.org/bot{$telegramToken}/sendMessage";
        $dataWeb = DB::table("web")->get()->toArray();
        $dataArray =[];
        foreach ($dataWeb as $data){
            $idWeb = $data->id;
            $websiteUrl = $data->url;
            $response = @file_get_contents($websiteUrl);
            if ($response === false) {
                $result = DB::table("web")->where("id","=",$idWeb)->update(['status'=>"offline"]);
                $telegramMessage = $data->name .  " : ".$data->url." is offline!";
                $data = [
                    'chat_id' => $chatId,
                    'text' => $telegramMessage,
                ];
                $options = [
                    'http' => [
                        'method' => 'POST',
                        'header' => 'Content-Type: application/x-www-form-urlencoded',
                        'content' => http_build_query($data),
                    ],
                ];
                $context = stream_context_create($options);
                $result = file_get_contents($apiUrl, false, $context);
            } else {
                $result = DB::table("web")->where("id","=",$idWeb)->update(['status'=>"online"]);
            }
        }
    }
}
