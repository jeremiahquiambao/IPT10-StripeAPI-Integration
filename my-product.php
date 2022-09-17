<?php

require "vendor/autoload.php";

$stripe = new \Stripe\StripeClient(
  'sk_test_51LgIVaF9om30Hr7OjJ0XCsL3hFHqRVtGjx5Syge6R3CvfUfjHO6OHz2XFsdC44Oe3iaPqW2NE8bW8OHJAQuCXQSo00xXqppSwe'
);
$product = $stripe->products->retrieve(
	'prod_MP8lQLl1L0WGM1',
	[]
);
$price = $stripe->prices->retrieve('price_1LgKToF9om30Hr7OI9mIvEcj',[]);


?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Buy Product</title>
</head>

  <body>
    <section>
      <div class="product">
        <img src="<?php echo array_pop($product->images); ?>" alt="TUF GAMING LAPTOP" width="500" height="400 <?php echo $product->name; ?>" />
        <div class="description">
          <h3><?php echo $product->name; ?></h3>
          <p><?php echo $product->description; ?></p>
          <h5><?php echo strtoupper($price->currency); ?> <?php echo $price->unit_amount_decimal; ?></h5>
        </div>
      </div>
      <form action="/create-checkout-session.php" method="POST">
        <button type="submit" id="checkout-button">Checkout</button>
      </form>
    </section>
  </body>
</html>