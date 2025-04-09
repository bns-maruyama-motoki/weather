{{-- @extends('common.layout')

@section('weather')
    @if (isset($weather_array))
        <p>日時: {{ $weather_array['current']['time'] }}</p>
        <p>今日の天気: {{ $weather_array['current']['weather_code'] }}</p>
        <p>温度: {{ $weather_arra['current']['temperature_2m'] }}°C</p>
        <p>湿度: {{ $weather_array['current']['relative_humidity_2m'] }}％</p>
        <p>雨量: {{ $weather_array['current']['rain'] }}㎜</p>
    @endif
@endsection --}}

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>チュートリアル</title>
</head>

<body>
    {{ $weather_array['current']['time'] }}
</body>

</html>
