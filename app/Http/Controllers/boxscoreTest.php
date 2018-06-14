<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

use GuzzleHttp\Exception\GuzzleException;
use GuzzleHttp\Client;
use App\Http\Requests\NBAStatsRequest;

class boxscoreTest extends Controller
{
    //


    public function boxScorePost(Request $request)

    {

        $gameString = $request->input('gameString');

        $ACCESS_TOKEN = '0ef7bc26-d2c2-4821-8d26-2804598c50c9';
        // $USER_AGENT = 'trailblazersfans/0.1 (trailblazersfans.com)';

        // return 'something';

        $client = new Client([


        ]);



            $url = 'https://erikberg.com/nba/boxscore/'.$gameString.'.json';


        $response = $client->request('GET', $url,[

            'headers' => [
                'Authorization' => 'Bearer ' . $ACCESS_TOKEN
            ]
//        'json' => [
//            'code' => $ACCESS_TOKEN
//                  ],

        ]);
        $data = $response->getBody();

//        $this->validate($request, [
//            'gameString' => 'required'
//
//        ]);

      // $input = request()->all();
        $gameString = $request->input('gameString');

        return ['stats' => $data ];

    }


    public function boxScoreGetter(Request $request)
    {

        $gameString = $request->input('gameString');

        $ACCESS_TOKEN = '0ef7bc26-d2c2-4821-8d26-2804598c50c9';
       // $USER_AGENT = 'trailblazersfans/0.1 (trailblazersfans.com)';

       // return 'something';

        $client = new Client([


        ]);


        if($gameString != null) {

            $url = 'https://erikberg.com/nba/boxscore/'.$gameString.'.json';
        }

        else {
            $url = 'https://erikberg.com/nba/boxscore/20151028-new-orleans-pelicans-at-portland-trail-blazers.json';
        }

    $response = $client->request('GET', $url,[

        'headers' => [
            'Authorization' => 'Bearer ' . $ACCESS_TOKEN
        ]
//        'json' => [
//            'code' => $ACCESS_TOKEN
//                  ],

        ]);
    $data = $response->getBody();
  // $data = json_decode($data);
  //  dd($data);

        return view('nba-stats.nba', ['stats' => $data ]);


    }

}
