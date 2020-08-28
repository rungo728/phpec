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
      <h1 class="title">DailyTrial Shopping</h1>
      <div class="cards-container">
        <?php foreach($products as $product): ?>
          <div class="card">
            <img class="card-image" src="<?php echo $product["image"]; ?>" alt="">
            <p class="card-title"><?php echo $product["name"]; ?></p>
            <div class="flex justify-between">
              <p class="card-price"><?php echo $product["price"]."円";?></p>
              <input min="0" class="item-number" type="number" value="0">
            </div>
          </div>
        <?php endforeach; ?>
      </div>
      <div class="btn-footer bg-white">
        <input class="cart-btn" type="submit" name="submit" value="カートに追加" />
      </div>
    </div>
  </div>
</body>
</html>