<!-- 
The icon designs are originally by [Lukas Bischoff](http://www.twitter.com/artill). Icon art for v1.1 forward, HTML, Less, and CSS are by [(Erik)](http://www.helloerik.com).
Link : https://erikflowers.github.io/weather-icons/
 -->

<!DOCTYPE html>
<html lang="en">
  <head>
  <meta charset="UTF-8" />
    <meta
      name="viewport"
      content="width=device-width, initial-scale=1.0 user-scalable=yes"
    />
    <meta http-equiv="X-UA-Compatible" content="ie=edge" />
    <link rel="stylesheet" href="lib/weather-icons-master/css/weather-icons-wind.min.css">
    <link rel="stylesheet" href="lib/weather-icons-master/css/weather-icons.min.css">
    <link rel="stylesheet" href="css/style.css">
  <title>Weather App</title>
  </head>
  <body>
    <h1>Weather App Built With &#x3C;3 and PHP</h1>
    <form action="">
      <label>Choose a city</label>
      <input type="text" placeholder="Paris, London, etc..." id="city-input" name="city"/>
      <button type="submit" id="city-btn">Get city weather</button>
    </form>
    <p>Or get local weather</p>
    <button id="local-btn">Get local weather</button>

    <div class="card-container">
      <?php         
          include 'meteo.php'; // include file that will display meteo data
      ?>
    </div>

    <script src="js/main.js"></script>
  </body>
</html>
