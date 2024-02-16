<?php
?>
<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN">
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
	<link rel="stylesheet" type="text/css" href="plan/css/reset.css" />
	<link rel="stylesheet" type="text/css" href="plan/css/table_style.css" />
        <title>Plans</title>
    </head>
    <body>

<div id="wrapper">

		<div class="content" style="width: 600px; float:left;">
		<div id="price_table">
				<div id="border">
				<!-- Secondary Column -->
					<div class="column secondary">
						<div class="header">
							2x a Week
							<span>Php1,000</span>
						</div>
						<div class="included">
							<ul class="checkmarks">
								<li>Includes Annual Membership</li>
								<li><b>Twice a Week session</li>
								<li><b>Cool Great</b> Things</li>
								<li>Has everything</li>
							</ul>
						</div>
						<div class="footer">

                <form action='<?php echo $paypal_url; ?>' method='post' name='frmPayPal1'><!-- found on top -->

                    <input type='hidden' name='business' value='<?php echo $paypal_id; ?>'> <!-- found on top -->
                    <input type='hidden' name='cmd' value="_xclick">
					<input type='hidden' name='image_url' value='http://websyntax.blogspot.com/skin/../images/logo.png'> <!-- logo of your website -->
					<input type="hidden" name="rm" value="2" /> <!--1-get 0-get 2-POST -->
                    <input type='hidden' class="name" name='item_name' value='twice a week'>
                    <input type='hidden' name='item_number' value='1'>
                    <input type='hidden' class="price" name='amount' value='1000'>
					<input type='hidden' name='no_shipping' value='1'>
					<input type='hidden' name='no_note' value='1'>
					<input type='hidden' name='handling' value='0'>
                    <input type="hidden" name="currency_code" value="PHP">
					<input type="hidden" name="lc" value="US">
					<input type="hidden" name="cbt" value="Return to the hub">
					<input type="hidden" name="bn" value="PP-BuyNowBF">
                    <input type='hidden' name='cancel_return' value='http://websyntax.blogspot.com/paypal/cancel.php'>
                    <input type='hidden' name='return' value='http://websyntax.blogspot.com/paypal/success.php'>
					<input type="hidden" name="notify_url" value="http://websyntax.blogspot.com/paypal/ipn.php" />
                    <input type="submit" border="0" name="submit" value="Sign Up">
                    <img alt="" border="0" src="https://www.sandbox.paypal.com/en_US/i/scr/pixel.gif" width="1" height="1">
					<input type="hidden" name="custom" value='<?php echo $email; ?>'><!-- custom field -->
                </form>
						</div>
					</div>
				<!-- End Secondary Column -->
				<!-- Primary Column -->
					<div class="column primary">
						<div class="header">
							3x a Week
							<span>Php1,100</span>
						</div>
						<div class="included">
							<ul class="checkmarks">
								<li><b></li>
								<li>Includes Annual Membership</li>
								<li><b>Thrice a Week session</li>
								<li><b>Cool Great</b> Things</li>
								<li><b>Has</b> Everything</li>
							</ul>
						</div>
						<div class="footer">
					<form action='<?php echo $paypal_url; ?>' method='post' name='frmPayPal1'>

                    <input type='hidden' name='business' value='<?php echo $paypal_id; ?>'>
                    <input type='hidden' name='cmd' value="_xclick">
					<input type='hidden' name='image_url' value='http://websyntax.blogspot.com/skin/../images/logo.png'>
					<input type="hidden" name="rm" value="2" /> <!--1-get 0-get 2-POST -->
                    <input type='hidden' class="name" name='item_name' value='thrice a week'>
                    <input type='hidden' name='item_number' value='2'>
                    <input type='hidden' class="price" name='amount' value='1100'>
					<input type='hidden' name='no_shipping' value='1'>
					<input type='hidden' name='no_note' value='1'>
					<input type='hidden' name='handling' value='0'>
                    <input type="hidden" name="currency_code" value="PHP">
					<input type="hidden" name="lc" value="US">
					<input type="hidden" name="cbt" value="Return to the hub">
					<input type="hidden" name="bn" value="PP-BuyNowBF">
                    <input type='hidden' name='cancel_return' value='http://websyntax.blogspot.com/paypal/cancel.php'>
                    <input type='hidden' name='return' value='http://websyntax.blogspot.com/paypal/success.php'>
					<input type="hidden" name="notify_url" value="http://websyntax.blogspot.com/paypal/ipn.php" />
                    <input type="submit" border="0" name="submit" value="Sign Up">
                    <img alt="" border="0" src="https://www.sandbox.paypal.com/en_US/i/scr/pixel.gif" width="1" height="1">
					<input type="hidden" name="custom" value='<?php echo $email; ?>'>
                </form>
						</div>
					</div>
					<!-- End Primary Column -->
					<!-- Featured Column -->

					<div class="column featured">
						<div id="best_deal"></div>

						<div class="header">
							Unlimited
							<span>Php1,200</span>
						</div>

						<div class="included">
							<ul class="checkmarks">
								<li>Includes Annual Membership</li>
								<li>Unlimited sessions</li>
								<li><b>Unlimited use of machines</li>
								<li><b>Unlimited</b> Stuff</li>
								<li><b>Has</b> Everything</li>
								<li><b>24/7</b> Online Support</li>
							</ul>
						</div>
						<div class="footer">
					<form action='<?php echo $paypal_url; ?>' method='post' name='frmPayPal1'>

                    <input type='hidden' name='business' value='<?php echo $paypal_id; ?>'>
                    <input type='hidden' name='cmd' value="_xclick">
					<input type='hidden' name='image_url' value='http://websyntax.blogspot.com/skin/../images/logo.png'>
					<input type="hidden" name="rm" value="2" /> <!--1-get 0-get 2-POST -->
                    <input type='hidden' class="name" name='item_name' value='unlimited'>
                    <input type='hidden' name='item_number' value='3'>
                    <input type='hidden' class="price" name='amount' value='1200'>
					<input type='hidden' name='no_shipping' value='1'>
					<input type='hidden' name='no_note' value='1'>
					<input type='hidden' name='handling' value='0'>
                    <input type="hidden" name="currency_code" value="PHP">
					<input type="hidden" name="lc" value="US">
					<input type="hidden" name="cbt" value="Return to the hub">
					<input type="hidden" name="bn" value="PP-BuyNowBF">
                    <input type='hidden' name='cancel_return' value='http://websyntax.blogspot.com/paypal/cancel.php'>
                    <input type='hidden' name='return' value='http://websyntax.blogspot.com/paypal/success.php'>
					<input type="hidden" name="notify_url" value="http://websyntax.blogspot.com/paypal/ipn.php" />
                    <input type="submit" border="0" name="submit" value="Sign Up">
                    <img alt="" border="0" src="https://www.sandbox.paypal.com/en_US/i/scr/pixel.gif" width="1" height="1">
					<input class="signup_button" type="hidden" name="custom" value='<?php echo $email; ?>'>
                </form>
						</div>
					</div>
					<!-- End Featured Column -->
				</div>
			</div>

</div>


        </div>
				<div class="sidebar">
			</div>
</div>

		</div>
    </body>
</html>

