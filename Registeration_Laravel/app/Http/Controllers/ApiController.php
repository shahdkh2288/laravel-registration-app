<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ApiController extends Controller
{
    private $API_KEY = "906f85c445msh8de16a4b7cb624dp1e8200jsna6657474b57f";

    public function getBirthdays(Request $request)
    {
        $API_KEY = $this->API_KEY;
        $month = $request->input("month");
        $day = $request->input("day");

        $curl = curl_init();

        curl_setopt_array($curl, [
            CURLOPT_URL => "https://online-movie-database.p.rapidapi.com/actors/list-born-today?month=$month&day=$day",
            CURLOPT_RETURNTRANSFER => true,
            CURLOPT_ENCODING => "",
            CURLOPT_MAXREDIRS => 10,
            CURLOPT_TIMEOUT => 30,
            CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
            CURLOPT_CUSTOMREQUEST => "GET",
            CURLOPT_HTTPHEADER => [
                "X-RapidAPI-Host: online-movie-database.p.rapidapi.com",
                "X-RapidAPI-Key: $API_KEY"
            ],
        ]);

        $response = curl_exec($curl);
        $err = curl_error($curl);

        curl_close($curl);

        if ($err) {
            return response()->json(["error" => "cURL Error: $err"], 500);
        } else {
            $actors1 = $response;
            preg_match_all('/\/name\/([a-z0-9]+)/i', $actors1, $matches);
            $response = $matches[1];

            $res = ["actors" => []];
            $counter = 0;

            foreach ($response as $id) {
                if ($counter == 5) break;

                $actorData = $this->getBio($id);
                if ($actorData && isset($actorData['name'])) {
                    $res['actors'][] = ['name' => $actorData['name']];
                    $counter++;
                }
            }

            return response()->json($res);
        }
    }

    private function getBio($nconst)
    {
        $API_KEY = $this->API_KEY;

        $curl = curl_init();

        curl_setopt_array($curl, [
            CURLOPT_URL => "https://online-movie-database.p.rapidapi.com/actors/get-bio?nconst=$nconst",
            CURLOPT_RETURNTRANSFER => true,
            CURLOPT_ENCODING => "",
            CURLOPT_MAXREDIRS => 10,
            CURLOPT_TIMEOUT => 30,
            CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
            CURLOPT_CUSTOMREQUEST => "GET",
            CURLOPT_HTTPHEADER => [
                "X-RapidAPI-Host: online-movie-database.p.rapidapi.com",
                "X-RapidAPI-Key: $API_KEY"
            ],
        ]);

        $response = curl_exec($curl);
        $err = curl_error($curl);

        curl_close($curl);

        if ($err) {
            return null;
        } else {
            return json_decode($response, true);
        }
    }
}
