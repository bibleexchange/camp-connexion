<!html>
<html>
	<head>
		<title>Application | Camp Connexion</title>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/css/bootstrap.min.css" rel="stylesheet">
		<link href="connexion.css" rel="stylesheet">
		<link href='http://fonts.googleapis.com/css?family=Josefin+Sans|Josefin+Slab:300,700' rel='stylesheet' type='text/css'>
	</head>
	<body>
		<div class="parallax">
			<div class="parallax-group">
				<div class="parallax-layer parallax-layer-deep">
					<?php echo file_get_contents("svg/new-england.svg"); ?>
				</div>
				<div class="parallax-layer parallax-layer-back">
					<div class="map">
					</div>
				</div>
				<div class="parallax-layer parallax-layer-base">
					<div class="container-fluid">
						<div class="row">
							<div class="col-md-8 col-md-offset-2">
								<div class="content-box">
									<a href="/index.php"><img src="svg/connexion-logo.svg" class="logo center-block"></a>
								</div>
							</div>
						</div>
						<div class="row">
							<div class="col-md-8 col-md-offset-2">
								<div class="content-box">
									<div class="row">
										<h2>Fees</h2>
										<div class="col-md-6">
											<h3>Camper fee</h3>
											<p>The fee for each camper to attend is $55.00. If you want to pay for more than one camper, you will be able to adjust the "quantity" during the payment process.</p>
											<p>For each camper that wants to attend, please fill out the application form below.</p>
											<form target="paypal" action="https://www.paypal.com/cgi-bin/webscr" method="post">
												<input type="hidden" name="cmd" value="_s-xclick">
												<input type="hidden" name="hosted_button_id" value="3PST9HSWH58ZC">
												<input type="image" src="https://www.paypalobjects.com/en_US/i/btn/btn_cart_LG.gif" border="0" name="submit" alt="PayPal - The safer, easier way to pay online!">
												<img alt="" border="0" src="https://www.paypalobjects.com/en_US/i/scr/pixel.gif" width="1" height="1">
											</form>
										</div>
										<div class="col-md-6">
											<h3>Worker's child fee</h3>
											<p>For workers who are going to bring their children with them to camp.</p>
											<form target="paypal" action="https://www.paypal.com/cgi-bin/webscr" method="post">
												<input type="hidden" name="cmd" value="_s-xclick">
												<input type="hidden" name="hosted_button_id" value="FFJFU4XGKSW5N">
												<table>
												<tr><td><input type="hidden" name="on0" value="Workers' children">Select age</td></tr><tr><td><select name="os0">
													<option value="Age 2 - 4">Age 2 - 4 $10.00 USD</option>
													<option value="Age 5 - 7">Age 5 - 7 $15.00 USD</option>
													<option value="Age 8 - 10">Age 8 - 10 $20.00 USD</option>
												</select> </td></tr>
												</table>
												<input type="hidden" name="currency_code" value="USD">
												<input type="image" src="https://www.paypalobjects.com/en_US/i/btn/btn_cart_LG.gif" border="0" name="submit" alt="PayPal - The safer, easier way to pay online!">
												<img alt="" border="0" src="https://www.paypalobjects.com/en_US/i/scr/pixel.gif" width="1" height="1">
											</form>
										</div>
										<div class="col-md-12">
											<form target="paypal" action="https://www.paypal.com/cgi-bin/webscr" method="post">
												<input type="hidden" name="cmd" value="_s-xclick">
												<input type="hidden" name="encrypted" value="-----BEGIN PKCS7-----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-----END PKCS7-----
												">
												<input type="image" src="https://www.paypalobjects.com/en_US/i/btn/btn_viewcart_LG.gif" border="0" name="submit" alt="PayPal - The safer, easier way to pay online!">
												<img alt="" border="0" src="https://www.paypalobjects.com/en_US/i/scr/pixel.gif" width="1" height="1">
											</form>
										</div>
									</div>
								</div>
							</div>
						</div>
						<div class="row">
							<div class="col-md-8 col-md-offset-2">
								<div class="content-box">
									<h2>Camp T-Shirts</h2>
									<p>All sizes of Men's camp T-shirts cost $10.00 each. All sizes of Women's camp T-shirts cost $15.00 each.</p>
									<div class="row center">
										<div class="col-md-4">
											<h3>Men's</h3>
											<form target="paypal" action="https://www.paypal.com/cgi-bin/webscr" method="post">
												<input type="hidden" name="cmd" value="_s-xclick">
												<input type="hidden" name="hosted_button_id" value="63C39LG5SLWKG">
												<table>
												<tr><td><input type="hidden" name="on0" value="Men's Camp T-Shirt">Select size</td></tr><tr><td><select name="os0">
													<option value="Men's S">Men's S</option>
													<option value="Men's M">Men's M</option>
													<option value="Men's L">Men's L</option>
													<option value="Men's XL">Men's XL</option>
													<option value="Men's XXL">Men's XXL</option>
												</select> </td></tr>
												</table>
												<input type="hidden" name="currency_code" value="USD">
												<input type="image" src="https://www.paypalobjects.com/en_US/i/btn/btn_cart_LG.gif" border="0" name="submit" alt="PayPal - The safer, easier way to pay online!">
												<img alt="" border="0" src="https://www.paypalobjects.com/en_US/i/scr/pixel.gif" width="1" height="1">
											</form>
										</div>
										<div class="col-md-4">
											<h3>Women's</h3>
											<form target="paypal" action="https://www.paypal.com/cgi-bin/webscr" method="post">
												<input type="hidden" name="cmd" value="_s-xclick">
												<input type="hidden" name="hosted_button_id" value="8FYMZ2ECVJQL2">
												<table>
												<tr><td><input type="hidden" name="on0" value="Women's Camp T Shirt">Women's Camp T Shirt</td></tr><tr><td><select name="os0">
													<option value="Women's S (4-6)">Women's S (4-6) $15.00 USD</option>
													<option value="Women's M (8-10)">Women's M (8-10) $15.00 USD</option>
													<option value="Women's L (12-14)">Women's L (12-14) $15.00 USD</option>
													<option value="Women's XL (16-18)">Women's XL (16-18) $15.00 USD</option>
													<option value="Women's XXL (20-22)">Women's XXL (20-22) $15.00 USD</option>
												</select> </td></tr>
												</table>
												<input type="hidden" name="currency_code" value="USD">
												<input type="image" src="https://www.paypalobjects.com/en_US/i/btn/btn_cart_LG.gif" border="0" name="submit" alt="PayPal - The safer, easier way to pay online!">
												<img alt="" border="0" src="https://www.paypalobjects.com/en_US/i/scr/pixel.gif" width="1" height="1">
											</form>
										</div>
										<!--<div class="col-md-4">
											<h3>Kid's</h3>
											<form target="paypal" action="https://www.paypal.com/cgi-bin/webscr" method="post">
												<input type="hidden" name="cmd" value="_s-xclick">
												<input type="hidden" name="hosted_button_id" value="G8JHGYVHBGMKG">
												<table>
												<tr><td><input type="hidden" name="on0" value="Kid's Camp T-Shirt">Select size</td></tr><tr><td><select name="os0">
													<option value="Kid's XS (2-4)">Kid's XS (2-4)</option>
													<option value="Kid's S (6-8)">Kid's S (6-8)</option>
													<option value="Kid's M (10-12)">Kid's M (10-12)</option>
													<option value="Kid's L (14-16)">Kid's L (14-16)</option>
													<option value="Kid's XL (18-20)">Kid's XL (18-20)</option>
												</select> </td></tr>
												</table>
												<input type="hidden" name="currency_code" value="USD">
												<input type="image" src="https://www.paypalobjects.com/en_US/i/btn/btn_cart_LG.gif" border="0" name="submit" alt="PayPal - The safer, easier way to pay online!">
												<img alt="" border="0" src="https://www.paypalobjects.com/en_US/i/scr/pixel.gif" width="1" height="1">
											</form>
										</div>-->
										<div class="col-md-12">
											<form target="paypal" action="https://www.paypal.com/cgi-bin/webscr" method="post">
												<input type="hidden" name="cmd" value="_s-xclick">
												<input type="hidden" name="encrypted" value="-----BEGIN PKCS7-----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-----END PKCS7-----
												">
												<input type="image" src="https://www.paypalobjects.com/en_US/i/btn/btn_viewcart_LG.gif" border="0" name="submit" alt="PayPal - The safer, easier way to pay online!">
												<img alt="" border="0" src="https://www.paypalobjects.com/en_US/i/scr/pixel.gif" width="1" height="1">
											</form>
										</div>
									</div><!--row-->
								</div>
							</div>
						</div><!--row-->
						<div class="row">
								<div class="col-md-8 col-md-offset-2">
									<div class="content-box">
										<h2>Camper and Worker Application</h2>
										<p>Everyone who wants to come to Camp Connexion must fill out this application. The application will ask you different questions whether you are a camper or a worker.</p>
										<p>Make sure you read all applicable documents on the <a href="/index.php">home page</a> before starting the application process.</p>
										<iframe src="https://docs.google.com/forms/d/1yguh-se3Z6sFZ2CqDWEhjHMlboZQHgmxXkUC8uGo-DA/viewform?embedded=true" width="100%" height="1000" frameborder="0" marginheight="0" marginwidth="0">Loading...</iframe>
									</div>
								</div>
						</div><!--row-->
						<footer>
							<a href="http://bible.exchange"><img src="svg/be-logo.svg" class="center-block" id="be-logo"></a>
							<p>Website provided by <a href="http://bible.exchange">Bible exchange</a>. &copy 2015</p>
						</footer>
					</div>
				</div>
			</div>
		</div>
	</body>
</html>