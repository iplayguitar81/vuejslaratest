<?php

use Illuminate\Database\Seeder;
use GuzzleHttp\Client;

use App\Team;

class RostersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //

        $ACCESS_TOKEN = env('STATS_API_KEY');

        $teams = Team::all();


        foreach ($teams as $team) {

            $teamVar = ($team->team_id);
            //$teamsReqStr = $teamVar.'.json';

            //wait ten seconds between teams


            $client = new Client([


            ]);


            //$url = "https://erikberg.com/nba/roster/".$teamVar.".json";

            //$url = "https://erikberg.com/nba/roster/".$teamsReqStr;

            $url = 'https://erikberg.com/nba/roster/'.$teamVar.'.json';


            $response = $client->request('GET', $url,[

                'headers' => [
                    'User-Agent' => 'trailblazersfans/0.1 (trailblazersfans.com)',
                    'Authorization' => 'Bearer ' . $ACCESS_TOKEN
                ]

            ]);
            $data = json_decode($response->getBody(), true);
            //$data = json_decode($data, true);
           // $team_id = ();

        //figure out how to access the team_id from beginning of object the correct way!!!
            DB::table('rosters')->insert([
                'team_id' => $data['team']['team_id'],
                'roster_json' => json_encode($data),
            ]);

            sleep(10);

        }


    }
}
