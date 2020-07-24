<?php
	require 'header.php';
?>
	<main>
		<?php
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
				<div id="redeemTP">
				<div id="points">
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
				<div id="redeem">
					<p>How many points do you want to use from each business?</p>
					<form action="includes/redeemTotalPts.inc.php" method="post">
						<label for="bus1">'.$bus1Name.': </label>
						<input type="number" name="bus1"><br><br>
						<label for="bus2">'.$bus2Name.': </label>
						<input type="number" name="bus2"><br><br>
						<label for="bus3">'.$bus3Name.': </label>
						<input type="number" name="bus3"><br><br>
						<label for="bus4">'.$bus4Name.': </label>
						<input type="number" name="bus4"><br><br>
						<label for="bus5">'.$bus5Name.': </label>
						<input type="number" name="bus5"><br><br>
						<label for="bus6">'.$bus6Name.': </label>
						<input type="number" name="bus6"><br><br>
						<label for="bus7">'.$bus7Name.': </label>
						<input type="number" name="bus7"><br><br>
						<label for="bus8">'.$bus8Name.': </label>
						<input type="number" name="bus8"><br><br>
						<label for="bus9">'.$bus9Name.': </label>
						<input type="number" name="bus9"><br><br>
						<label for="bus10">'.$bus10Name.': </label>
						<input type="number" name="bus10"><br><br>
						<button type="submit" name="totalPts-submit" id="redeemBut">Redeem</button>
					</form>
				</div>
				</div>
				';
			}
		?>
	</main>
	<style>
		#redeemBut {
			background-color: #FFFFFF;
			color: black;
			height: 2vw;
			width: 6vw;
		}
		#redeemTP {
			background-color: #4CAF50;
			color: #FFFFFF;
			margin-left: 5vw;
			margin-right: 5vw;
			margin-top: 3vw;
			margin-bottom: 5vw;
			padding-top: 2vw;
			border-radius: 3vw;
		}
		#points {
			display: inline-block;
			margin-left: 5vw;
			height: 40vw;
			
		}
		#redeem {
			display: inline-block;
			margin-left: 20vw;
			height: 40vw;
		}
	</style>
<?php
	require 'footer.php';
?>
					