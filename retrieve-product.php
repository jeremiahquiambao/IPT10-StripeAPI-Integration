<?php
require "vendor/autoload.php";

$stripe = new \Stripe\StripeClient(
  'sk_test_51LgIVaF9om30Hr7OjJ0XCsL3hFHqRVtGjx5Syge6R3CvfUfjHO6OHz2XFsdC44Oe3iaPqW2NE8bW8OHJAQuCXQSo00xXqppSwe'
);
$result=$stripe->products->retrieve(
  'prod_MP75Uexhu2j3My',
  []
);

var_dump($result);