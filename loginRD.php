<?php
	require 'header.php';
?>
<body>
		<?php
			echo '
					<p align="center">You must login to access this page!</p>
					<center><form class="center-form" action="includes/loginRD.inc.php" method="post">
						<input type="text" name="mailuid" placeholder="Username/E-mail..."><br><br>
						<input type="password" name="pwd" placeholder="Password..."><br><br>
						<button class="subButs" type="submit" name="signup-submit">Sign Up</button>
						<button class="subButs" type="submit" name="login-submit2">Login</button>
					</form></center>';
		?>
	</body>
	<style>
		body{
		margin-bottom: 30%;
	}
		
	.subButs{
		background-color: #4CAF50;
  		border: none;
  		color: white;
  		padding: 0.75vw 1.25vw;
		text-align: center;
		text-decoration: none;
		display: inline-block;
		font-size: 0.75vw;
	}
	</style>
<?php
	require 'footer.php';
?>