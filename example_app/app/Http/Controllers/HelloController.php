<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HelloController extends Controller
{
    //
    public function index()
    {
        $hello = 'Hello,World!';
        $hello_array = ['Hello', 'こんにちは', 'ニーハオ'];

        return view('index', compact('hello', 'hello_array'));
    }

    public function getWeather()
    {

        // // $latitude = $request->input('latitude', '52.52'); // デフォルト値を設定
        // $latitude = $_GET['latitude'] ?? '';
        // // $longitude = $request->input('longitude', '13.41'); // デフォルト値を設定
        // $longitude = $_GET['longitude'] ?? '';
        // echo 'Hello PHP!';
        // $baseUrl = env('OPEN_METEO_BASE_URL');
        // $timezone = env('OPEN_METEO_TIMEZONE');

        // $url = "{$baseUrl}?latitude={$latitude}&longitude={$longitude}&daily=weather_code,temperature_2m_max,temperature_2m_min&hourly=temperature_2m,weather_code,relative_humidity_2m,precipitation_probability,precipitation&current=temperature_2m,relative_humidity_2m,precipitation,rain,weather_code&timezone={$timezone}";

        // // $response = Http::get($url);
        // // return response()->json($response->json());
        // $weather_json = file_get_contents($url);
        // $weather_array = json_decode($weather_json, true);


        // // return view('weather', 'weather_array');
        $hello = 'Hello,World!!!';
        $hello_array = ['Hello', 'こんにちは', 'ニーハオ'];

        return view('index', compact('hello', 'hello_array'));
    }
}
