<?php



$car = new Car();
$car->start();
$car->setSpeed(80);
$car->run();
$car->showSpeed();


// 車のクラス
class Car{
  public $speed;

    // 時速を設定する
  function setSpeed($jisoku){
    $this->speed = $jisoku;
  }

  // エンジンをかける
  function start(){
    echo 'エンジンをかけました<br>';
  }

  // 走る
  function run(){
    echo '走り出しました<br>';
    // 時速を表示させる処理を呼び出します
    $this->showSpeed();
  }

  // 時速を表示する
  function showSpeed(){
    echo '時速' . $this->speed . 'km/hで走っています<br>';
  }

  // 止まる
  function stop(){
    echo '止まりました<br>';
  }
}


?>