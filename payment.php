<?php
$chargeAmount = 50;
if($_SERVER['REQUEST_METHOD'] === 'POST') {
	$accountId = 'acct_1CZAlSKLMpzcI30n';
	$splitPercentage = '10';
	require_once('./stripe-php/init.php');
	\Stripe\Stripe::setApiKey("sk_test_ER6nk4L64PtK3YbPpVeMt7ZF");
	$freelancerCharge = intval((100-$splitPercentage) * $chargeAmount);
	$charge = \Stripe\Charge::create(array(
		"amount" => $freelancerCharge,
		"currency" => "usd",
		"source" => "tok_visa",
		"application_fee" => (($chargeAmount * 100) - $freelancerCharge),
	), array("stripe_account" => $accountId));
	echo "payment succssful";
} else {
?>

<html>
<head>

</head>
<body>
<form action="" method="POST">
  <script
    src="https://checkout.stripe.com/checkout.js" class="stripe-button"
    data-key="pk_test_bubJelRsDKnjvNovh9HaDkwe"
    data-amount=<?= $chargeAmount * 100 ?>
    data-name="Website Owner"
    data-description="Widget"
    data-image="https://stripe.com/img/documentation/checkout/marketplace.png"
    data-locale="auto">
  </script>
</form>
</body>
</html>

<?php } ?>