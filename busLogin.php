<?php
	require 'header.php';
?>
	<main>
		<div id="busLogin">
			<form action="includes/busLogin.inc.php" method="post">
				<label for="username">Username: </label>
				<input type="text" name="username"><br><br>
				<label for="password">Password: </label>
				<input type="password" name="password"><br><br>
				<button type="submit" name="busLogin-submit" id="button">Log In</button>
			</form>
		</div>
	</main>
	<style>
		#busLogin {
			margin-left: 38vw;
			margin-top: 3vw;
			border-radius: 2vw;
			background-color: #4CAF50;
			color: #FFFFFF;			
			width: 20vw;
			text-align: center;
			padding-top: 2vw;
			padding-bottom: 2vw;
			padding-left: 1vw;
			padding-right: 1vw;
		}
		#button {
			background-color: #FFFFFF;
			color: black;
			height: 2vw;
			width: 6vw;
		}
	</style>
<?php
	require 'footer.php';
?>