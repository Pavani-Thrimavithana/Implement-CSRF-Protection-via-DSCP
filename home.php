<!DOCTYPE html>
<html>
	<head>
		<title>Cross-Site Request Forgery Protection</title>
		<link rel="stylesheet" href="styles.css">
	</head>
<body>
<h2>Cross-Site Request Forgery Protection using Double Submit Cookie Pattern</h2>
<div class="login-page" action="home.php" method="post">
        <div class="form">
            <h3>
				<?php
					require_once 'token.php';
					$val = $_POST["token"];
					if(isset($_POST['update'])){
						if(token::checkToken($val,$_COOKIE['csrfCookie'])){
							echo "Order Quantity: ".$_POST['update'];		
						}
						else{
						echo "wrong".$_COOKIE['csrfCookie'];
						}
					}
					?>
			</h3>
        </div>
    </div>
</body>