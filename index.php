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
    <title>Stripe Product</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">
</head>
<body>
   
    <div class="container text-center">
        <div class="row">
          <div class="col-sm-7">
            <img src="/images/asus tuf.jpg" alt="ASUS TUF" width="500" height="400">
          </div>
          <div class="col-sm-5">
            <h1 class="row align-items-start">ASUS TUF Dash F15(FX517Z-EHNO91W)</h1>
            <h2 class="row align-items-start">Product Summary</h2>
            <p class="row align-items-start">2022 TUF Dash F15 puts Windows 11 gaming in a slim chassis. The latest 12th Gen Intel&#174; Core&#8482; i7-12650H and GeForce RTX&#8482 3070 make gaming smooth on up to a blazing fast QHD 165Hz display. Even at 19.95mm thin. </p>
            <h5><?php echo strtoupper($price->currency); ?> <?php echo $price->unit_amount_decimal; ?></h5>
            <div class="row align-items-start">
            <button type="button" class="btn btn-warning">Add to Cart</button>
            </div>
          </div>
        </div>
    </div>

    

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-u1OknCvxWvY5kfmNBILK2hRnQC3Pr17a+RTT6rIHI7NnikvbZlHgTPOOmMi466C8" crossorigin="anonymous"></script>
</body>
</html>