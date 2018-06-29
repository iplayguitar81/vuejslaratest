<?php

use Illuminate\Database\Seeder;
use GuzzleHttp\Client;
use App\Team;

class SchedulesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {


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

           // $url = 'https://erikberg.com/nba/roster/'.$teamVar.'.json';
            $url = 'https://erikberg.com/nba/results/'.$teamVar.'.json?season=2018&since=20171001&until=20180630&event_status=completed';



            $response = $client->request('GET', $url,[

                'headers' => [
                    'Authorization' => 'Bearer ' . $ACCESS_TOKEN
                ]

            ]);
            $data = json_decode($response->getBody(), true);



            foreach ($data as $event) {


                //$date->getTimestamp();

                DB::table('schedule')->insert([
                    'event_id' => $event['event_id'],
                    'schedule_json' => json_encode($event),
                    'event_date' => $event['event_start_date_time'],
                    'team_id' => $teamVar,


                ]);


            }




            sleep(10);

        }


    }
}
