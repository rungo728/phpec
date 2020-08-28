<!-- 消費税10%の計算をここでする -->
<?php
  function calPriceIncludedTax($price){
    $taxRate = 0.1;
    return $price + $price * $taxRate;
  }
  // 価格と円単位を同時に表示させる
  function displayPrice($price){
    $priceIncludedTax = calPriceIncludedTax($price);
    return $priceIncludedTax."円";
  }
?>