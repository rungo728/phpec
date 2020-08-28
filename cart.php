<?php require_once 'products.php' ?>

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
      <h1 class="title">Shopping Cart</h1>
      <div class="carts-container">
        <?php foreach($products as $product): ?>
          <div class="cart-item">
              <div class="flex">
                <img class="cart-item-img" src="<?php echo $product["image"];?>">
                <div class="cart-item-detail">
                  <p class="cart-item-title"><?php echo $product["name"];?></p>
                  <!-- 連想配列としてPOSTにデータが入ってくる -->
                  <p><?php echo $_POST[$product["id"]]; ?> × <?php echo $product["price"];?></p>
                </div>
              </div>
          </div>
        <?php endforeach; ?>
      </div>
      <div class="btn-footer bg-gray">
        <input class="checkout-btn" type="submit" value="決済する">
      </div>
    </div>
  </div>
</body>
</html>