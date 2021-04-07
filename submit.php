<?php
require('config.php');

if(isset($_POST['stripeToken'])){
\Stripe\Stripe::setVerifySslCerts(false);
$token=$_POST['stripeToken'];

 $data=\Stripe\Charge::create(array(
   "amount"=>1000,
   "currency"=>"USD",
   "description"=>"Checkout the price",
   "source"=>$token,
 ));

// echo "<pre>";
// print_r($data);
// echo '</pre>';
}
//for successful message show otherwise upper portion use
header("Location:http://localhost/stripe/success.php")


?>