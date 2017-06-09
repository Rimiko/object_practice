<?php
// //Robotクラスをインスタンス化してみましょう
$robot1 = new Robot();

// $robot1->talk('rimiko');
// $robot1->eat('かかか');


// $robot1->setNme('りみこ');
// $robot1->setFood('🍊');
// echo $robot1->getName();
// echo $robot1->getFood();
$robot1->greeting();
//Robotという名前のクラスを作る

class Robot{
    private $name;
    private $food;

  function __construct(){
    $this->name = 'どらえもん';
    $this->food ='どらやき';
  }




// function setName($namae){
//  $this->name = $namae;
//     }

// function setFood($tabemono){
//  $this->food = $tabemono;
//     }

function getName(){
    $namae='私の名前は'.$this->name.'です <br>';
 return $namae;
    }

function getFood(){
    $tabemono='好きな食べ物は'.$this->food.'です';
 return $tabemono;
    }

 private function talk(){
    echo 'こんにちは、僕の名前は'.$this->name.'です <br>';
}

 private function eat(){
    echo '好きな食べ物は'.$this->food.'です <br>';
}
 function greeting(){
    $this->talk();
    $this->eat();
 }

}

?>