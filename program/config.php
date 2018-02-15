<?php 
    require_once('./../vendor/autoload.php');
    
    $stripe = array(
      "secret_key"      => "sk_test_uY47z1Eu88WlpmOI0t8iT8VW",
      "publishable_key" => "pk_test_QrzIxpJoAvhrqX7hk5ZEg4kE"
    );
    
    \Stripe\Stripe::setApiKey($stripe['secret_key']);
?>