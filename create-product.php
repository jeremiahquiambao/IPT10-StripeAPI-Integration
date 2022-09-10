<?php
require "vendor/autoload.php";

$stripe = new \Stripe\StripeClient(
  'sk_test_51LgIVaF9om30Hr7OjJ0XCsL3hFHqRVtGjx5Syge6R3CvfUfjHO6OHz2XFsdC44Oe3iaPqW2NE8bW8OHJAQuCXQSo00xXqppSwe'
);
$result = $stripe->products->create([
  'name' => 'Helios 300 PH315-53-53KP | Gaming Laptop (Best for Gaming and AutoCAD)',
]);
var_dump($result);
