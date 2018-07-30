<?php

use Illuminate\Database\Seeder;
use GuzzleHttp\Client;

class TeamsTableSeeder extends Seeder
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

        $client = new Client([


        ]);


        $url = 'https://erikberg.com/nba/teams.json';


        $response = $client->request('GET', $url,  [
            'headers' => [
                'User-Agent' => 'trailblazersfans/0.1 (trailblazersfans.com)',
                'Authorization' => 'Bearer ' . $ACCESS_TOKEN


            ]

        ]);
        $data = $response->getBody();
        $data = json_decode($data, true);


        foreach ($data as $team) {

            DB::table('teams')->insert([
                'team_id' => $team['team_id'],
                'team_json' => json_encode($team),
            ]);



        }






    }
}
