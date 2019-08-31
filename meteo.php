<?php
    include 'functions.php'; // include file that will make the API call

if (!empty($_GET)) { // check if we have parameters in url
    $weatherForecast = getWeather($_GET); // call function to retrieve data from api and store response in variable

    // create template for displaying data
    $output = " 
        <div class='card'>
            <h2>Weather for {$weatherForecast['name']}&nbsp;({$weatherForecast['sys']['country']})</h2>
            <p><i class='wi wi-owm-{$weatherForecast['weather'][0]['id']} condition'></i></p>
            <p><i class='wi wi-thermometer'></i></p>
            <p>{$weatherForecast['main']['temp']} <i class='wi wi-celsius'></i></p>
            <p><i class='wi wi-small-craft-advisory'></i></p>
            <p>{$weatherForecast['wind']['speed']} Km/h</p>
            <p><i class='wi wi-wind towards-{$weatherForecast['wind']['deg']}-deg'></i></p>
            <p>{$weatherForecast['wind']['deg']} degrees</p>
            <p><i class='wi wi-barometer'></i></p>
            <p>{$weatherForecast['main']['pressure']} hPa</p>
            <p><i class='wi wi-humidity'></i></p>
            <p>{$weatherForecast['main']['humidity']} %</p>
        </div>
    ";
} else {
    $output = "<div>Waiting for your input...</div>";
}
echo $output; // display data
