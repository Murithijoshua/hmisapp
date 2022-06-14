<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;
use GuzzleHttp\Client;

class ApiConsummer extends Controller
{
    //
    public function apiWithKey()

    {
        // $client = new Client();
        // $api_response = $client->post('https://api.uptimerobot.com/v2/getMonitors?api_key=u849425-2203682ac5858f86cb086d9f');
        // $json = $api_response->getBody()->getContents();
       
        // return $json->monitors;
        // // return view("index",compact('response'));
        
        $client = new Client();
        $url = "https://api.uptimerobot.com/v2/getMonitors?api_key=u849425-2203682ac5858f86cb086d9f";

        $params = [
            //If you have any Params Pass here
        ];

        $response = $client->request('POST', $url);

        $responseBody = json_decode($response->getBody());
        $data=$responseBody->monitors;
        return view('index', compact('data'));

    }

}
