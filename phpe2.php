<!DOCTYPE html>
<html lang="en">
  <head>
      <meta charset="UTF-8">
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <title>PHP Exercise 2</title>
      <link rel="stylesheet" href="phpe2.css">
      <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
  </head>
  <body>
    <section class="slider-section">
      <div class="slider-title-box">  
      <h2>Top 10 Largest Cities in the World</h2> <br>
      <div class="slider-container">
        <div class="slider">
          <div class="slide">
            <img src="pic/tokyo.jpg" alt="Festival 1">
            <h1><strong>TOKYO, JAPAN <br> Tokyo Skytree</strong></h1>
          </div>
          <div class="slide">
            <img src="pic/delhi.png" alt="Festival 2">
            <h1><strong>DELHI, INDIA <br> Red Fort</strong></h1>
          </div>
          <div class="slide">
            <img src="pic/shanghai.png" alt="Festival 3">
            <h1><strong>SHANGHAI, CHINA <br> Shanghai World Financial Center </strong></h1>
          </div><div class="slide">
            <img src="pic/sao_paulo.png" alt="Festival 3">
            <h1><strong>SAO PAULO, BRAZIL <br> Ibirapuera Park </strong></h1>
          </div>
          <div class="slide">
            <img src="pic/dhaka.png" alt="Festival 3">
            <h1><strong>DHAKA, BANGLADESH <br> Lalbagh Fort </strong></h1>
          </div>
          <div class="slide">
            <img src="pic/cairo.jpg" alt="Festival 3">
            <h1><strong>CAIRO, EGYPT <br> The Egyptian Museum in Cairo </strong></h1>
          </div>
          <div class="slide">
            <img src="pic/mexico.jpg" alt="Festival 3">
            <h1><strong>MEXICO CITY, MEXICO <br> Metropolitan Area </strong></h1>
          </div>
          <div class="slide">
            <img src="pic/beijing.png" alt="Festival 3">
            <h1><strong>BEIJING, CHINA <br> Forbidden City </strong></h1>
          </div>
          <div class="slide">
            <img src="pic/mumbai.png" alt="Festival 3">
            <h1><strong>MUMBAI, INDIA <br> Taj, Mahal and Port</strong></h1>
          </div>
          <div class="slide">
            <img src="pic/osaka.jpg" alt="Festival 3">
            <h1><strong>OSAKA, JAPAN <br> Osaka Streets </strong></h1>
          </div>
        </div>
        <button class="arrow left-arrow"><i class="fas fa-chevron-left"></i></button>
        <button class="arrow right-arrow"><i class="fas fa-chevron-right"></i></button>
      </div>
      <div class="indicators">
        <div class="dot active"></div>
        <div class="dot"></div>
        <div class="dot"></div>
        <div class="dot"></div>
        <div class="dot"></div>
        <div class="dot"></div>
        <div class="dot"></div>
        <div class="dot"></div>
        <div class="dot"></div>
        <div class="dot"></div>
      </div>
    </section>
    
    <script src="phpe2.js"></script>

    <div class="container0">
      <?php
          $cities = ["Tokyo", "Delhi", "Shanghai", "São Paulo", "Dhaka", "Cairo", "Mexico City", "Beijing", "Mumbai", "Osaka"];
          
          foreach ($cities as $city) {
            echo "$city, ";
          }

          function printUnorderedList($cities) {
            echo "<ul>";
            foreach ($cities as $city) {
                echo "<li>$city</li>";
            }
            echo "</ul>";
          }
          
          sort($cities);
          printUnorderedList($cities);
          echo "<br>";

          $addCities = ["Los Angeles", "Calcutta"];
          $cities = array_merge($cities, $addCities);

          sort($cities);
          printUnorderedList($cities);
      ?>
    </div>
  </body>
</html>
