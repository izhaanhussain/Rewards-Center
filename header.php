<?php
	session_start();
?>
<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<meta name="description" content="Rewards System for Small Businesses">
		<meta name=viewport content="width=device-width, initial-scale=1">
		<title></title>
	</head>
	<body>

		<header>
			<nav class="nav-header-main">
				<div class="header-login">
					<?php
						if (isset($_SESSION['userUid'])) {
						echo '
							<div class="topnav">
							  <a href="index.php"><img id="logo" src="logoRC.png"></a>
							  <a class="navLinks" href="index.php">Home</a>
							  <a class="navLinks" href="business.php">Businesses</a>
							  <a class="navLinks" href="redeem.php">Redeem</a>
							  <a class="navLinks" href="#about">About</a>
							  <form class="logoutBut" action="includes/logout.inc.php" method="post">
								<button type="submit" name="logout-submit">Logout</button>
							  </form>
							</div>
							';
						}
						else if (isset($_SESSION['businessName'])) {
							echo '
							<div class="topnav">
							  <a href="index.php"><img id="logo" src="logoRC.png"></a>
							  <a class="navLinks" href="index.php">Home</a>
							  <a class="navLinks" href="storePage.php">Store Page</a>
							  <a class="navLinks" href="#contact">Contact</a>
							  <a class="navLinks" href="#about">About</a>
							  <form class="logoutBut" action="includes/busLogout.inc.php" method="post">
								<button type="submit" name="logout-submit">Logout</button>
							  </form>
							</div>
							';
						}
						else {
						echo '
							<div class="topnav">
							  <a href="index.php"><img id="logo" src="logoRC.png"></a>
							  <a class="navLinks" href="index.php">Home</a>
							  <a class="navLinks" href="loginRD.php">News</a>
							  <a class="navLinks" href="loginRD.php">Contact</a>
							  <a class="navLinks" href="loginRD.php">About</a>
							  <a class="navLinks" href="signupOp.php">Sign Up</a>
							  <a class="navLinks" href="busLogin.php">Business Login</a>
							  <p id="userLogin">User Login: </p>
							  <div id="logHeader">
							  <form action="includes/login.inc.php" method="post">
								<input type="text" name="mailuid" placeholder="Username/E-mail...">
								<input type="password" name="pwd" placeholder="Password...">
								<button type="submit" name="login-submit">Login</button>
							  </form>
							  </div>
							</div>
							';
						}
					?>
					
					
				</div>
			</nav>
		</header>
		<style>
			#logo {
				height: 7vw;
				width: 7vw;
				vertical-align: middle;
			}
			/* Add a black background color to the top navigation */
			.topnav {
			  background-color: #333;
			  overflow: hidden;
			  height: 10vw;
			}
			.navLinks{
				margin-top: 3vw;
				margin-bottom: 3vw;
			}
			/* Style the links inside the navigation bar */
			.topnav a {
			  float: left;
			  color: #f2f2f2;
			  text-align: center;
			  padding: 1vw 1.25vw;
			  text-decoration: none;
			  font-size: 1.25vw;
			}

			/* Change the color of links on hover */
			.topnav a:hover {
			  background-color: #ddd;
			  color: black;
			}

			/* Add a color to the active/current link */
			.topnav a.active {
			  background-color: #4CAF50;
			  color: white;
			}
			.logoutBut {
				margin-top: 1vw;
				margin-left: 90vw;
				padding-top: 3.5vw;
			}
			#logHeader {
				margin-left: 5vw;
				padding-top: 3.85vw;
				height: 10vw;
			}
			#userLogin {
				float: left;
				color: #f2f2f2;
				text-align: center;
				padding: 1vw 1vw;
				text-decoration: none;
				font-size: 17px;
				margin-top: 3vw;
				margin-left: 10vw;
			}
		</style>
