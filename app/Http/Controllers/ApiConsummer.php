<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;
use GuzzleHttp\Client;
use App\totTechnical;
use App\endUser;
use App\DwhResources;

class ApiConsummer extends Controller
{
    //
    public function apiWithKey()

    {
        $client = new Client();
        $url = "https://api.uptimerobot.com/v2/getMonitors?api_key=u849425-2203682ac5858f86cb086d9f";

        $params = [
            //If you have any Params Pass here
        ];

        $response = $client->request('POST', $url);

        $responseBody = json_decode($response->getBody());
        $data=$responseBody->monitors;
        $totData = totTechnical::all();
        $dwhData = DwhResources::all();
        $endUserData = endUser::all();
        // dd($totData,$dwhData,$endUserData);
        


        return view('index', compact('data','totData','dwhData','endUserData'));

    }

}
