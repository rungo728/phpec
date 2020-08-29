<?php
  // クラスの作成
  class Product{
    // privateにすることによってインスタンスから取得も書き込みもすることができなくなる
    // ただこのclass内ではプロパティを取得することができる
    private $id;
    private $name;
    private $price;
    private $image;
    
    public function __construct($id,$name,$price,$image){
      // ここでの$thisはProductのnameの値を取得するという意味
      // ->nameでプロパティのnameを指定する
      $this->id = $id;
      $this->name = $name;
      $this->price = $price;
      $this->image = $image;
    } 
    public function getId(){
      return $this->id;
    }
    public function getName(){
      return $this->name;
    }
    public function getPrice(){
      return $this->price;
    }
    public function getImage(){
      return $this->image;
    }
    // privateにするのは以下のfunctionがfunctiondisplayPriceの中でのみ実行されるので
    // インスタンスから直接呼ばれることもないので
    private function calPriceIncludedTax(){
      $taxRate = 0.1;
      return $this->price + $this->price * $taxRate;
    }
    public function displayPrice(){
      $price = $this->calPriceIncludedTax();
      return $price."円";
    }
  }

?>