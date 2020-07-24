<?php
	require 'header.php';
?>
	<main>
		<div id="opPage">
			<div id="userSignup">
				<a href="signup.php" class="links">Click Here to Sign Up as a User</a>
			</div>
			<div id="busSignup">
				<a href="busSignup.php" class="links">Click Here to Sign Up as a Business</a>
			</div>
		</div>
	</main>
	<style>
		.links {
			text-decoration: none;
			color: #FFFFFF;
		}
		#opPage {
			display: flex;
		}
		#userSignup {
			display: inline-block;
			margin-left: 20vw;
			margin-right: 10vw;
			margin-top: 10vw;
			border-width: 0.15vw;
			border-style: solid;
			height: 11vw;
			padding-top: 9vw;
			width: 40vw;
			background-color: #4CAF50;
			color: #FFFFFF;
			text-align: center;
		}
		#busSignup {
			border-width: 0.15vw;
			border-style: solid;
			margin-left: 10vw;
			margin-right: 20vw;
			margin-top: 10vw;
			height: 11vw;
			padding-top: 9vw;
			width: 40vw;
			display: inline-block;
			background-color: #4CAF50;
			color: #FFFFFF;
			text-align: center;
		}
	</style>
<?php
	require 'footer.php';
?>