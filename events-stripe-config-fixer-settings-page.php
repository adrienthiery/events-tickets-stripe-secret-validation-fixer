<script src="https://cdn.tailwindcss.com"></script>
<?php 
$secret = get_option('TEC_TC_STRIPE_SIGNING_SECRET');
if ( isset($_POST) && count($_POST) > 0 && isset($_POST['stripe_secret']) ) {
	update_option('TEC_TC_STRIPE_SIGNING_SECRET', $_POST['stripe_secret']);
	$secret = get_option('TEC_TC_STRIPE_SIGNING_SECRET');
}

?>
<div class="wrap p-4">
	<h1><?php echo __( 'Paramètre Stripe event', 'bois-de-laines' ); ?></h1>
	<h2><?php echo __( 'Clé secrète de stripe', 'bois-de-laine' ); ?></h2>
	<form action="" method="post">
		<div class="flex">
			<div class="pr-2 py-2">
				<div>
					<input type="text" name="stripe_secret" id="minimum_order_amount" value="" /> 
				</div>   
			</div>
		</div>   
		<?php submit_button(); ?>   
	</form>
</div>

<?php
if (isset($secret) && $secret != "") {
	echo "Saved value: " . $secret;
}
?>