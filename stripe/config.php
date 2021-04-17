<?php
    require_once "stripe-php-master/init.php";

    $stripeDetails = array(
        "secretKey" => "sk_test_51Icn3FFeiQWdrGinYc61wG0uGxEI8jrq8tzDh3j7zso154x7WkeM8mYjEVCk6gyauunpPkcaPFUYwpMQSuqVyREj00obgfed6V",
        "publishableKey" => "pk_test_51Icn3FFeiQWdrGinoYWF5Y7MNBn3y84d8wq19YmzinrXRMMWCfs4Ew13WhwWh7i73VeB7zMIcvh2wxRfMHxBWXRB006cpMIVdH"
    );

    \Stripe\Stripe::setApiKey($stripeDetails["secretKey"]);
?>