<?php
	require "header.php";
?>

	<main>
		<div id="suform">
			<section class="section-default">
				<h1>Signup</h1>
				<?php
					if (isset($_GET["error"])) {
						if ($_GET["error"] == "emptyfields") {
							echo '<p class="signuperror">Fill in all fields!</p>';
						}
						else if ($_GET["error"] == "invaliduidmail") {
							echo '<p>Invalid username and e-mail!</p>';
						}
						else if ($_GET["error"] == "invaliduid") {
							echo '<p>Invalid username!</p>';
						}
						else if ($_GET["error"] == "invalidmail") {
							echo '<p>Invalid e-mail!</p>';
						}
						else if ($_GET["error"] == "passwordCheck") {
							echo '<p>Your passwords do not match!</p>';
						}
						else if ($_GET["error"] == "usertaken") {
							echo '<p>Username is already taken!</p>';
						}
					}
				?>
				<form class="form-signup" action="includes/signup.inc.php" method="post">
					<input type="text" name="uid" placeholder="Username"><br><br>
					<input type="text" name="mail" placeholder="E-mail"><br><br>
					<input type="password" name="pwd" placeholder="Password"><br><br>
					<input type="password" name="pwd-repeat" placeholder="Repeat Password"><br><br>
					<button type="submit" name="signup-submit" id="button">Signup</button>
			</section>
		</div>
	</main>
	<style>
		#suform {
			margin-top: 2vw; 
			margin-left: 37.5vw;
			border-radius: 3vw;
			background-color: #4CAF50;
			color: #FFFFFF;	
			padding-top: 3vw;
			padding-bottom: 3vw;
			padding-left: 3vw;
			padding-right: 1vw;
			height: 20vw;
			width: 15vw;
		}
		#button {
			background-color: #FFFFFF;
			color: black;
			height: 2vw;
			width: 6vw;
		}
	</style>
<?php
	require "footer.php";
?>