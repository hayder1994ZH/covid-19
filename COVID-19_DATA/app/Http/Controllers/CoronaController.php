<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CoronaController extends Controller
{
    public function corona(){
        
        $curl = curl_init();

        curl_setopt_array($curl, array(
            CURLOPT_URL => "https://covid-19-data.p.rapidapi.com/country/all?format=undefined",
            CURLOPT_RETURNTRANSFER => true,
            CURLOPT_FOLLOWLOCATION => true,
            CURLOPT_ENCODING => "",
            CURLOPT_MAXREDIRS => 10,
            CURLOPT_TIMEOUT => 30,
            CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
            CURLOPT_CUSTOMREQUEST => "GET",
            CURLOPT_HTTPHEADER => array(
                "x-rapidapi-host: covid-19-data.p.rapidapi.com",
                "x-rapidapi-key: e098f81387msh547f643f08d0197p1ee6a4jsnb6d8787154a2",
            ),
        ));

        $response = curl_exec($curl);
        $err = curl_error($curl);

        curl_close($curl);

        if ($err) {
            echo "cURL Error #:" . $err;
        } else {
            $responses =  json_decode($response) ;
         return view('welcome',compact('responses'));
        }

    }
}
