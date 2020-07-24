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
				<div id="redeemPage">				
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
					<form action="includes/redeem.inc.php" method="post">
						<label for="rewardFor">Which business do you want to redeem your points to?</label>
						<select name="rewardFor" class="busSuInputs">
						  <option value="'.$bus1Name.'">'.$bus1Name.'</option>
						  <option value="'.$bus2Name.'">'.$bus2Name.'</option>
						  <option value="'.$bus3Name.'">'.$bus3Name.'</option>
						  <option value="'.$bus4Name.'">'.$bus4Name.'</option>
						  <option value="'.$bus5Name.'">'.$bus5Name.'</option>
						  <option value="'.$bus6Name.'">'.$bus6Name.'</option>
						  <option value="'.$bus7Name.'">'.$bus7Name.'</option>
						  <option value="'.$bus8Name.'">'.$bus8Name.'</option>
						  <option value="'.$bus8Name.'">'.$bus9Name.'</option>
						  <option value="'.$bus10Name.'">'.$bus10Name.'</option>
						</select><br><br>
						<label for="busRedeem">Which business do you want to redeem your points from?</label>
						<select name="busRedeem" class="busSuInputs">
						  <option value="'.$bus1Name.'">'.$bus1Name.'</option>
						  <option value="'.$bus2Name.'">'.$bus2Name.'</option>
						  <option value="'.$bus3Name.'">'.$bus3Name.'</option>
						  <option value="'.$bus4Name.'">'.$bus4Name.'</option>
						  <option value="'.$bus5Name.'">'.$bus5Name.'</option>
						  <option value="'.$bus6Name.'">'.$bus6Name.'</option>
						  <option value="'.$bus7Name.'">'.$bus7Name.'</option>
						  <option value="'.$bus8Name.'">'.$bus8Name.'</option>
						  <option value="'.$bus9Name.'">'.$bus9Name.'</option>
						  <option value="'.$bus10Name.'">'.$bus10Name.'</option>
						  <option value="totalPts">Total Points</option>
						</select><br><br>
						<label for="amtPoints">How many points do you want to redeem?</label>
						<input type="number" name="amtPoints" id="redeemBut"><br><br>
						<button type="submit" name="redeem-submit">Redeem</button>
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
		#redeemPage {
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
			height: 30vw;
		}
		#redeem {
			display: inline-block;
			margin-left: 20vw;
			height: 30vw;
			vertical-align: middle;
		}
	</style>
<?
	require 'footer.php';
?>