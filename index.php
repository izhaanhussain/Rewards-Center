<?php
	require "header.php";
?>

	<main>
		<div class="wrapper-main">
			<section class="section-default">
				<?php
					if (isset($_SESSION['userUid'])) {
						require 'includes/dbh.inc.php';
						$query = "SELECT * FROM userPts WHERE username = '{$_SESSION['userUid']}';";
						$result = mysqli_query($conn,$query);
						if ($row = mysqli_fetch_assoc($result)) {
							$bus1Name = $row['bus1Name'];
							$bus2Name = $row['bus2Name'];
							$bus3Name = $row['bus3Name'];
							$bus4Name = $row['bus4Name'];
							$bus5Name = $row['bus5Name'];
							$bus6Name = $row['bus6Name'];
							$bus7Name = $row['bus7Name'];
							$bus8Name = $row['bus8Name'];
							$bus9Name = $row['bus9Name'];
							$bus10Name = $row['bus10Name'];
							if ($bus1Name == "NULL") {
								$bus1Name = "EMPTY";
							}
							if ($bus2Name == "NULL") {
								$bus2Name = "EMPTY";
							}
							if ($bus3Name == "NULL") {
								$bus3Name = "EMPTY";
							}
							if ($bus4Name == "NULL") {
								$bus4Name = "EMPTY";
							}
							if ($bus5Name == "NULL") {
								$bus5Name = "EMPTY";
							}
							if ($bus6Name == "NULL") {
								$bus6Name = "EMPTY";
							}
							if ($bus7Name == "NULL") {
								$bus7Name = "EMPTY";
							}
							if ($bus8Name == "NULL") {
								$bus8Name = "EMPTY";
							}
							if ($bus9Name == "NULL") {
								$bus9Name = "EMPTY";
							}
							if ($bus10Name == "NULL") {
								$bus10Name = "EMPTY";
							}
							echo '
							<div id="indexPts">
								<h1>Your Points</h1>
								<p>'.$bus1Name.': '.$row['bus1Pts'].'</p>
								<p>'.$bus2Name.': '.$row['bus2Pts'].'</p>
								<p>'.$bus3Name.': '.$row['bus3Pts'].'</p>
								<p>'.$bus4Name.': '.$row['bus4Pts'].'</p>
								<p>'.$bus5Name.': '.$row['bus5Pts'].'</p>
								<p>'.$bus6Name.': '.$row['bus6Pts'].'</p>
								<p>'.$bus7Name.': '.$row['bus7Pts'].'</p>
								<p>'.$bus8Name.': '.$row['bus8Pts'].'</p>
								<p>'.$bus9Name.': '.$row['bus9Pts'].'</p>
								<p>'.$bus10Name.': '.$row['bus10Pts'].'</p>
								<p>Total Points: '.$row['totalPts'].'</p>
							</div>
							';

						}
					}
					else if(isset($_SESSION['businessName'])) {
						echo '<a class="indexHeader" href="storepage.php">Click here to go to store page!</a>';
					}
					else {
						echo '
						<p class="indexHeader">A Rewards System for Small Businesses</p>						
						<div id="indexPageLO">
							<button class="indexButs" onclick="customerJoin()">Join as Customer</button>
							<button class="indexButs" onclick="businessJoin()">Join as Business</button>
						</div>
						';
					}
				?>
			</section>
		</div>
	</main>
	<style>
		#indexPts {
			margin-left: 38vw;
			margin-right: 38vw;
			height: 30vw;
			width: 24vw;
			text-align: center;
			background-color: #4CAF50;
			color: #FFFFFF;
			border-radius: 3vw;
		}
		.indexHeader {
			margin-top: 6vw;
			margin-left: 40vw;
		}
		.indexButs {
			background-color: #4CAF50;
			color: #FFFFFF;
			display: block;
			width: 12vw;
			height: 3vw;
			margin-bottom: 1vw;
		}
		#indexPageLO {
			margin-left: 44vw;
			padding-top: 2vw;
		}
	</style>
	<script>
		function customerJoin() {
			window.location.href = "signup.php";
		}
		function businessJoin() {
			window.location.href = "busSignup.php"
		}
	</script>

<?php
	require "footer.php";
?>