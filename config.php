<?php 

require('stripe-php-master/init.php');

$publishableKey =
"pk_test_5u4MdV0k3HrcnkqeNfD3MCIF007tWoO0eL";

$secretKey =
"sk_test_S3JpGBAnR1F5Ue9GedDNbMlt00HN3SmcTz";

\Stripe\Stripe::setApiKey($secretKey);

?>