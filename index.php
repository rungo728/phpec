<?php require_once 'products.php'; ?>
<?php require_once 'function.php'; ?>


 <!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" type="text/css" href="./style.css" >
  <title>デイトラ PHP</title>
</head>
<body>
  <div class="container">
    <div class="app-container">
      <h1 class="title">DailyTrial Shopping </h1>
      <!-- 購入商品のデータをcart.phpへ保存する -->
      <form id="cart" method="post" action="cart.php" class="">
        <div class="cards-container">
          <?php foreach($products as $product): ?>
            <div class="card">
              <img class="card-image" src="<?php echo $product->getImage(); ?>" alt="">
              <p class="card-title"><?php echo $product->getName(); ?></p>
              <div class="flex justify-between">
                <p class="card-price"><?php echo $product->displayPrice();?></p>
                <!-- idを固有の値にするため、nameに記述 -->
                <input name="<?php echo $product->getId(); ?>" min="0" class="item-number" type="number" value="0">
              </div>
            </div>
          <?php endforeach; ?>
        </div>
      </form>
      <!-- カートに追加ボタンを押した時に上記Formタグで囲った部分の情報の受け渡しに対応する -->
      <div class="btn-footer bg-white">
        <!-- formのidとinputのformが対応している -->
        <input form="cart" class="cart-btn" type="submit" name="submit" value="カートに追加" />
      </div>
    </div>
  </div>
</body>
</html>