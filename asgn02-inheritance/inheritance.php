<?php

class Ships {
  var $name;
  var $length;
  var $beam;
  var $draft;
  //all measurements will use meters

  function area() {
    return $this->length * $this->beam;
  }
}

class ContainerShips extends Ships {
  var $containerCapacity;
  //using number of conex containers

  function fitsBeneathBridge() {
    $height = $this->area() * $this->containerCapacity - $this->draft * 5000;
    if ($height < 500) {
      return $this->name ." can fit beneath the bridge";
    } else {
      return $this->name ." can not fit beneath the bridge";
    }
  }
}

class BulkCarriers extends Ships {
  var $bulkType = "wet";
  //"wet" or "dry"

  function unloadByPump() {
    if ($this->bulkType = "wet") {
      return $this->name ." can be unloaded with a pump";
    } else {
      return $this->name ." can not be unloaded with a pump";
    }
  }
}

$ship1 = new Ships;
$ship1->name = "The Kenny Loggins";
$ship1->length = 100;
$ship1->beam = 20;
$ship1->draft = 10;

$ship2 = new ContainerShips;
$ship2->name = "Revenger";
$ship2->length = 100;
$ship2->beam = 10;
$ship2->draft = 8;
$ship2->containerCapacity = 20;

$ship3 = new BulkCarriers;
$ship3->name = "Big Oily";
$ship3->length = 150;
$ship3->beam = 30;
$ship3->draft = 15;
$ship3->bulkType = "wet";


echo $ship1->name ."<br>";
echo $ship1->area() ."<br>";

echo $ship2->name ."<br>";
echo $ship2->fitsBeneathBridge() ."<br>";

echo $ship3->name ."<br>";
echo $ship3->unloadByPump() ."<br>";