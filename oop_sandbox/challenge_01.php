<?php

class Bicycle {
  var $brand;
  var $model;
  var $year;
  var $description;
  var $weight_kg;

  function name() {
    return $this->year. " " .$this->brand. " " .$this->model. "<br";
  }

  function weight_lbs() {
    return floatval($this->weight_kg) * 2.2046226218;
  }

  function set_weight_lbs($value) {
    $this->weight_kg = floatval($value) / 2.2046226218;
  }
}

$bike1 = new Bicycle;
$bike1->brand = 'Yamaha';
$bike1->model = 'Cool Bike';
$bike1->year = 1988;
$bike1->description = 'Cool looking';
$bike1->weight_kg = 25;

$bike2 = new Bicycle;
$bike2->brand = 'Cessna';
$bike2->model = '182';
$bike2->year = 1965;
$bike2->description = 'Is actually an airplane';
$bike2->weight_kg = 3600;

echo $bike1->name() . " <br>";
echo $bike1->description . " <br>";

echo $bike2->name() . " <br>";
echo $bike2->description . " <br>";

$bike1->set_weight_lbs(200);
echo $bike1->weight_kg. " <br>";
echo $bike1->weight_lbs(). " <br>";
