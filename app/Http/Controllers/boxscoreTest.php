<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use GuzzleHttp\Exception\GuzzleException;
use GuzzleHttp\Client;

class boxscoreTest extends Controller
{
    //


    public function boxScoreGetter()
    {

        $ACCESS_TOKEN = '0ef7bc26-d2c2-4821-8d26-2804598c50c9';
       // $USER_AGENT = 'trailblazersfans/0.1 (trailblazersfans.com)';

       // return 'something';

        $client = new Client([


        ]);

    $response = $client->request('GET', 'https://erikberg.com/nba/results/golden-state-warriors.json',[

        'headers' => [
            'Authorization' => 'Bearer ' . $ACCESS_TOKEN
        ]
//        'json' => [
//            'code' => $ACCESS_TOKEN
//                  ],

        ]);
    $data = $response->getBody();
   $data = json_decode($data);
    dd($data);


    }

}
