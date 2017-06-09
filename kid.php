<?php

//演習問題１
$kid = new Kid();

// プロパティ：名前($name)、性別($sex)
// メソッド：showName()
// 男なら「○○くん」、女なら「○○ちゃん」を返す処理を行う
// 名前プロパティの初期値は「Seed」、性別プロパティの初期値は「boy」にすること
// プロパティのゲッター・セッターメソッドを用意し、メソッド経由でプロパティにアクセスできるようにすること
// オブジェクトからプロパティ値を設定し、showNameメソッドを呼び出して出力すること

$kid ->setName('りみこ');
$kid ->setSex('boy');
$kid ->setAge('15');
$kid ->showName();

class Kid{
    public $name;
    public $sex;
    public $age;

function __construct(){
    $this->name ='Seed';
    $this->sex ='boy';
    $this->age=10;
  }

function setName($namae){
     $this->name = $namae;
 }

function setSex($seibetu){
     $this->sex = $seibetu;
 }

function setAge($nenrei){
     $this->age = $nenrei;
 }

function getName(){
    return $this->name;
 }

function getSex(){
    if($this->age>12){
    if($this->sex=='boy'){
        $boys =$this->name.'くん';
        return $boys;
    }elseif($this->sex=='girl'){
        $girls=$this->name.'さん'      ;
      return $girls;
    }
 }else{
    if($this->sex=='boy'){
        $boys =$this->name;
        return $boys;
    }elseif($this->sex=='girl'){
        $girls=$this->name;
      return $girls;
 }
}
}

function showName(){
  echo $this->getSex();
}
}

?>