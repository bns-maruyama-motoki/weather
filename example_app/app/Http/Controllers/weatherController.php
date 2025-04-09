<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class WeatherController extends Controller
{
    public function getWeather(Request $request)
    {
        echo 'Hello PHP!';
        // $latitude = $request->input('latitude', '52.52'); // デフォルト値を設定
        $latitude = $_GET['latitude'] ?? '';
        // $longitude = $request->input('longitude', '13.41'); // デフォルト値を設定
        $longitude = $_GET['longitude'] ?? '';
        echo 'Hello PHP!';
        $baseUrl = env('OPEN_METEO_BASE_URL');
        $timezone = env('OPEN_METEO_TIMEZONE');

        $url = "{$baseUrl}?latitude={$latitude}&longitude={$longitude}&daily=weather_code,temperature_2m_max,temperature_2m_min&hourly=temperature_2m,weather_code,relative_humidity_2m,precipitation_probability,precipitation&current=temperature_2m,relative_humidity_2m,precipitation,rain,weather_code&timezone={$timezone}";

        $response = Http::get($url);

        // return response()->json($response->json());
        return view('weather', ['weather_info' => $response->json()]);
    }
}
