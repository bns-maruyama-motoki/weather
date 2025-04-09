const url = 'https://api.open-meteo.com/v1/forecast?latitude=52.52&longitude=13.41&hourly=temperature_2m,relative_humidity_2m,precipitation_probability,precipitation&timezone=Asia%2FTokyo';


fetch(url)
    .then(data => data.json())
    .then(json => console.log(json))