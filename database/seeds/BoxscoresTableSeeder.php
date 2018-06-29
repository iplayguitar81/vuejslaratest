<?php

use Illuminate\Database\Seeder;
use GuzzleHttp\Client;

use App\Schedule;

class BoxscoresTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

//        $table->string('event_id');
//        $table->string('boxscore_date');
//        $table->string('season_type');
//        $table->json('boxscore_json');



        $ACCESS_TOKEN = env('STATS_API_KEY');

        $schedules = Schedule::all();

       // $email = DB::table('schedule.blade.php')->where('name', 'John')->value('email');
      //  $schedule = Schedule::where('schedule_json->event_status', 'completed')
         //   ->get();

//20180207-indiana-pacers-at-new-orleans-pelicans.json
        foreach ($schedules as $result) {

            $eventID = ($result->event_id);
            //$teamsReqStr = $teamVar.'.json';

            //wait ten seconds between teams


            $client = new Client([


            ]);


           $url = 'https://erikberg.com/nba/boxscore/'.$eventID.'.json';



            $response = $client->request('GET', $url,[

                'headers' => [
                    'Authorization' => 'Bearer ' . $ACCESS_TOKEN
                ]

            ]);
            $data = json_decode($response->getBody(), true);



          //  foreach ($data as $boxScore) {


                //$date->getTimestamp();
                //$boxSore

                DB::table('boxscores')->insert([
                    'event_id' => $eventID,
                    'boxscore_date' => $data['event_information']['start_date_time'],
                    'season_type' => $data['event_information']['season_type'],
                    'boxscore_json' => json_encode($data),


                ]);


           // }


            sleep(10);

        }




    }
}
