<?php

/** Car class
* @author Tommaso Figlia tommasofiglia@gmail.com
* @copyright 2021 Tommaso Figlia
*
*/

class Car {
  public $brand;
  public $model;
  public $typology;
  public $modelYear;
  public $year;
  public $color;
  public $engine;
  public $alimentation;
  public $euro;
  public $price;
  public $kilometers;
  public $productionCountry;

// Uso il constructor per creare le proprietà con cui popolare la classe di istanze

  public function __construct(string $brand, string $model, string $typology, int $modelYear, int $year, string $color, float $engine, string $alimentation, int $euro, int $price, int $kilometers, string $productionCountry){

  $this -> brand = $brand;
  $this -> model = $model;
  $this -> typology = $typology;
  $this -> modelYear = $modelYear;
  $this -> year = $year;
  $this -> color = $color;
  $this -> engine = $engine;
  $this -> alimentation = $alimentation;
  $this -> euro = $euro;
  $this -> price = $price;
  $this -> kilometers = $kilometers;
  $this -> productionCountry = $productionCountry;

  }
}

// Creo delle istanze e le popolo
$cars = [
  'mx5' => new Car('mazda', 'mx5', 'S (roadster)', 2015, 2018, 'red', 1.5, 'petrol', 6, 18000, 0, 'japan'),
  'fiesta' => new Car('ford', 'fiesta', 'B (supermini)', 2008, 2013, 'blue', 1.0, 'petrol', 5, 11000, 26000, 'usa'),
  'giulia' => new Car('alfa romeo', 'giulia', 'D (compact executive)', 2015, 2019, 'black', 2.2, 'diesel', 6, 26000, 4000, 'italy'),
  'levante' => new Car('maserati', 'levante', 'Mid-size SUV', 2016, 2020, 'white', 3.8, 'petrol', 6, 45000, 52000, 'usa')
];


?>

<!DOCTYPE html>
<html lang="it" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Primo esercizio sulla programmazione ad oggetti</title>
    <style media="screen">
      *{
        margin: 0;
        padding: 0;
        box-sizing: border-box;
      }
      .container{
        width: 300px;
      }
      .d-flex{
        display: flex;
        justify-content: center;
        flex-wrap: wrap;
      }
      h1 , p{
        text-transform: uppercase;
      }
      h1{
        margin: 20px 0;
      }
    </style>
  </head>
  <body>
      <div class="d-flex">

        <?php foreach ($cars as $car): ?>
        <div class="container">
          <h1><?php echo $car -> brand . " " . $car-> model; ?></h1>
          <p><?php
          echo
          "class: " . $car -> typology . "<br>" .
          "model year: " . $car -> modelYear . "<br>" .
          "year: " . $car -> year . "<br>" .
          "color: " . $car -> color . "<br>" .
          "engine: " . $car -> engine . " " . $car -> alimentation . "<br>" .
          "pollution normative: " . "euro " . $car -> euro . "<br>" .
          "price: " . $car -> price . " &euro; <br>"  .
          "kilometers: " . $car -> kilometers . "km <br>" .
          "production country: " . $car -> productionCountry
          ;
          ?></p>

        </div>
      <?php endforeach; ?>
      </div>
  </body>
</html>
