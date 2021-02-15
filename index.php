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
  public $bodyStyle;
  public $alimentation;
  public $euro;
  public $price;
  public $productionCountry;

// Uso il constructor per creare le proprietà con cui popolare la classe di istanze

  function __constructor(string $brand, string $model, string $class, int $modelYear, int $year, string $color, string $bodyStyle, string $alimentation, int $euro, int $price, string $productionCountry){

  $this->brand = $brand;
  $this->model = $model;
  $this->class = $class;
  $this->modelYear = $modelYear;
  $this->year = $year;
  $this->color = $color;
  $this->bodyStyle = $bodyStyle;
  $this->alimentation = $alimentation;
  $this->euro = $euro;
  $this->price = $price;
  $this->produc = $productionCountry;

  }
}

 ?>
