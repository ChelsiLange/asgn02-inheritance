<?php 

class Bird {

  var $commonName;
  var $food;
  var $nestPlacement;
  var $clutchSize;
  var $conservationLevel;

  function birdSong($value) {
    return $this->commonName. " says ". $value. " <br>";
  }
}

$bird1 = new Bird;
$bird1->commonName = 'Eastern Towee';
$bird1->food = 'seeds, fruits, insects, spiders';
$bird1->nestPlacement = 'Ground';
$bird1->clutchSize = '2 - 6 eggs';
$bird1->conservationLevel = 'Low';

echo $bird1->commonName. "<br>";
echo $bird1->food. "<br>";
echo $bird1->nestPlacement. "<br>";
echo $bird1->clutchSize. "<br>";
echo $bird1->conservationLevel. "<br>";
echo $bird1->birdSong('drink-your-tea!');

$bird2 = new Bird;
$bird2->commonName = 'Indigo Bunting';
$bird2->food = 'small seeds, berries, buds, and insects';
$bird2->nestPlacement = 'fields and on the edges of woods, roadsides, and railroad rights-of-way';
$bird2->clutchSize = '3 - 4 eggs';
$bird2->conservationLevel = 'Low';

echo $bird2->commonName. "<br>";
echo $bird2->food. "<br>";
echo $bird2->nestPlacement. "<br>";
echo $bird2->clutchSize. "<br>";
echo $bird2->conservationLevel. "<br>";
echo $bird2->birdSong('what! what!');
