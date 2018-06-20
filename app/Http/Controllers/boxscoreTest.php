<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

use GuzzleHttp\Exception\GuzzleException;
use GuzzleHttp\Client;
//use App\Http\Requests\NBAStatsRequest;

class boxscoreTest extends Controller
{
    //


    public function boxScorePost(Request $request)

    {
       $gameString = $request->get('gameString');

      //  $gameString = $request->input('gameString');

       // $gameString = $request->message;

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
        $data = json_decode($data);
        //$data = $data->home_team;

//        $this->validate($request, [
//            'gameString' => 'required'
//
//        ]);

      // $input = request()->all();
       // $gameString = $request->input('gameString');



        //return ([' success'=> $data]);// or method that you prefere to return data + RENDER is the key here
        //return response()->json( array('html'=>$returnHTML) );
        return view('nba-stats.test-view', compact('data'));

        //return ['stats' => $data ];

    }


    public function boxscoreViewer() {


        return view('nba-stats.nba');
    }



   public function boxScoreGetter()
    {

       // $gameString = $request->input('gameString');

        $ACCESS_TOKEN = '0ef7bc26-d2c2-4821-8d26-2804598c50c9';
        // $USER_AGENT = 'trailblazersfans/0.1 (trailblazersfans.com)';

        // return 'something';

        $client = new Client([


        ]);



        $url = 'https://erikberg.com/nba/boxscore/20151028-new-orleans-pelicans-at-portland-trail-blazers.json';

       // $url = 'https://erikberg.com/nba/boxscore/'.$gameString.'.json';

        $response = $client->request('GET', $url,[

            'headers' => [
                'Authorization' => 'Bearer ' . $ACCESS_TOKEN
            ]
//        'json' => [
//            'code' => $ACCESS_TOKEN
//                  ],

        ]);
        $data = $response->getBody();
        $data = json_decode($data);

       // $data = $data->home_team;
       // dd($data);

        // return view('nba-stats.nba', ['stats' => $data ]);
         return view('nba-stats.nba');


    }


    public function boxScoreAjax(Request $request) {
       // $data = $request->all(); // This will get all the request data.

        $response = array(
            'status' => 'success',
            'msg' => $request->message,
        );
        return response()->json($response);

    }


    public function boxScoreAjax2(Request $request) {
        // $data = $request->all(); // This will get all the request data.

        $gameString = $request->message;

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
        $data = json_decode($data);












//        $response = array(
//            'msg' => $data
//        );

       // $response = $data;

        return response()->json(['boxscore' => $data], 200);

       // return array( 'stats' => $data );
      //  return $response->getBody();

    }


}
