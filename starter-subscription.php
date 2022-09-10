<?php
require "vendor/autoload.php";

$stripe = new \Stripe\StripeClient("sk_test_51LgIVaF9om30Hr7OjJ0XCsL3hFHqRVtGjx5Syge6R3CvfUfjHO6OHz2XFsdC44Oe3iaPqW2NE8bW8OHJAQuCXQSo00xXqppSwe");

$product = $stripe->products->create([
  'name' => 'Starter Subscription',
  'description' => '$12/Month subscription',
]);
echo "Success! Here is your starter subscription product id: " . $product->id . "\n";

$price = $stripe->prices->create([
  'unit_amount' => 1200,
  'currency' => 'usd',
  'recurring' => ['interval' => 'month'],
  'product' => $product['id'],
]);
echo "Success! Here is your premium subscription price id: " . $price->id . "\n";

?>