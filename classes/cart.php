<?php
  // このクラスではインスタンスは作成しない
  // cartは１つで十分、productは複数あるため
  class Cart{
    // itemsは直接呼び出す対象
    // 初期値は配列とする→[]
    private static $items = [];
    // 商品と個数の情報を引数とする
    public static function add($product,$count){
      self::$items[] = ["product" => $product, "count" => $count];

    }
    public static function calTotalPrice(){
      $sum = 0;
      // 合計値を求めるため、foreachを使う
      foreach(self::$items as $item){
        $price = $item["product"]->getPrice() * $item["count"];
        $sum = $sum + $price;
      }
      return $sum;
    }
    // cartにproductを追加するfunction

    // 追加されたメソッドで合計金額を出すというfunction

  }
?>
