<?php
$code = $_GET['code'];
if($code) {
	// require_once('./stripe-php/init.php');
	// \Stripe\Stripe::setApiKey('sk_test_ER6nk4L64PtK3YbPpVeMt7ZF');
	// try{
	// 	$token = \Stripe\OAuth::token([
	// 		'code' => $code, 
	// 		'grant_type' => 'authorization_code'
	// 	]);
	// } catch (Exception $e) {

	// }
	
	echo 'Conected';
} else {


?>

<html>
<head></head>
<body>
<a href='https://connect.stripe.com/oauth/authorize?response_type=code&client_id=ca_Cz9Kl60YqspCbjfC251eBrBaE58AbiRW&state=state&stripe_landing=register&scope=read_write'>Connect to stripe</a>
</body>
</html>

<?php } ?>