<?php

    // function to retrieve data from API
    function getWeather(array $args): array {

    $conn = curl_init(); // init connection

    // check for parameters passed in url and create corresponding query
    if (!empty($args['city'])) {
        $query = "q={$args['city']}";
    }

    if (!empty($args['lat']) && !empty($args['lon'])) {
        $query = "lat={$args['lat']}&lon={$args['lon']}";
    }

    // build the url that will be used for the API call according to the query and pass it to curl
    curl_setopt($conn, CURLOPT_URL, "http://api.openweathermap.org/data/2.5/weather?{$query}&APPID=818df0bdedf7b64d7643fb881d0e5458&units=metric");

    curl_setopt($conn, CURLOPT_RETURNTRANSFER, true); // specify we want the reponse to be a string
    $output = json_decode(curl_exec($conn), true); // execute call to API and turn json response into array and store it in variable
   
    curl_close($conn); // close connection
    return $output; // return response
}