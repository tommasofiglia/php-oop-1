<?php

/** Car class
* @author Tommaso Figlia tommasofiglia@gmail.com
* @copyright 2021 Tommaso Figlia
*
*/

class Car {
  public $brand;
  public $model;
  public $class;
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

  function __constructor(string $brand, string $model, string $class, int $modelYear, int $year, string $color, float $engine, string $alimentation, int $euro, int $price, int $kilometers, string $productionCountry){

  $this->brand = $brand;
  $this->model = $model;
  $this->class = $class;
  $this->modelYear = $modelYear;
  $this->year = $year;
  $this->color = $color;
  $this->engine = $engine;
  $this->alimentation = $alimentation;
  $this->euro = $euro;
  $this->price = $price;
  $this->kilometers = $kilometers;
  $this->productionCountry = $productionCountry;

  }
}

// Creo delle istanze e le popolo
$cars = [
  'mx5' => new Fruit('mazda', 'mx5', 'S(roadster)', 2015, 2018, 'red', 1.5, 'petrol', 6, 18000, 0, 'japan'),
  'fiesta' => new Fruit('ford', 'fiesta', 'B(supermini)', 2008, 2013, 'blue', 1.0, 'petrol', 5, 11000, 26000, 'usa' )
];

var_dump($cars);

?>
