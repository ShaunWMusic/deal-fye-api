<?php
require_once('vendor/autoload.php');

$stripe = array(
  "secret_key"      => "sk_test_qV4BZrQ0JKp2Q82WbeCWAlAu",
  "publishable_key" => "pk_test_3zAGGhP3UhZGzA79hUtHN4ao"
);

\Stripe\Stripe::setApiKey($stripe['secret_key']);
?>
