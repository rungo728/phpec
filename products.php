<?php
  require_once 'classes/product.php';

  $products = [
    // インスタンスの追加はnewで(id,name,値段、画像の順で)取得
    new Product("avocado","アボガド",230,"./images/image_1.jpg"),
    new Product("orange","オレンジ",300,"./images/image_2.jpg"),
    new Product("lemon","レモン",400,"./images/image_3.jpg"),
    new Product("pineapple","パイナップル",500,"./images/image_4.jpg")

  ];

?>