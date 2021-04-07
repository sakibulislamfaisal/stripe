<?php

require('config.php')

?>

<form action="submit.php" method="post">
 <script
  src="https://checkout.stripe.com/checkout.js" class="stripe-button"
  data-key = "<?php echo $publishableKey?>"
  data-amount = "1000"
  data-name = "Programming with faisal"
  data-description = "Checkout the price"
  data-image = "https://i.postimg.cc/tgf9gwMD/download-1.png"
  data-currency = "USD"
  data-email = "foyshalrahman27@gmail.com"
 
 ></script>
</form>