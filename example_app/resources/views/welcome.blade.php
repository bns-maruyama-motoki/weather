<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>天気予報</title>
</head>

<body>
    <h1>天気予報</h1>
    <script src="sample.js"></script>
</body>
{{-- <form name="myForm" action="WeatherController.php" method="post"> --}}
<form name="myForm" action="/weather" method="post">
    <p>緯度</p>
    <input type="number" id = "latitude" name = "latitude">
    <p>経度</p>
    <input type="number" id = "longitude" name = "longitude">
    </dvi>
    <div>
        {{-- <form action="//www-creators.com/rsc/receiver.php" method="post"> --}}
        <p>どれか1つを選択してください</p>
        <input id="hourly" type="radio" name="weather_type" value="hourly" checked><label
            for="hourly">1時間ごとの週間予報を表示する</label><br>
        <input id="week" type="radio" name="weather_type" value="week"><label
            for="week">週間予報を表示する</label><br>
        <input id="noNeed" type="radio" name="weather_type" value="noNeed"><label for="noNeed">必要ない</label><br>
        {{-- </form> --}}

    </div>
    <p><input type="submit" value="送信"></p>
</form>
<script>
    document.forms["myForm"].addEventListener("submit",
        function(evt) {
            var frm = evt.currentTarget;
            if (frm.elements["latitude"].value == "") {
                alert("緯度を入力してください");
                evt.preventDefault();
            } else if (frm.elements["longitude"].value == "") {
                alert("経度を入力してください");
                evt.preventDefault();
            }
        });
</script>

</html>
