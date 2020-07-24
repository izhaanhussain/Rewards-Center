<?php
	require 'header.php';
?>
	<main>
		<?php
			$reward = $_SESSION['reward'];
			if($reward == "5%" || $reward == "10%" || $reward == "15%") {
				echo '
					<center><h1 id="storeName">'.$_SESSION['businessName'].'</h1></center>
					<center><h2 id="reward">Reward: '.$_SESSION['reward'].' off</h2></center>
					<div id="storePage">
						<form action="includes/showRB.inc.php" method="post">
							<button name="srb-submit" id="button" type="submit">Apply Reward</button>
						</form>
					</div>
				';
			}
			else {
				echo'
					<center><h1 id="storeName">'.$_SESSION['businessName'].'</h1></center>
					<center><h2 id="reward">Reward: $'.$_SESSION['reward'].' off</h2></center>
					<div id="storePage">
						<form action="includes/showRB.inc.php" method="post">
							<button name="srb-submit" id="button" type="submit">Apply Reward</button>
						</form>
					</div>
				';
			}
		?>
		
	</main>
	<style>
		#storeName {
			margin-top: 2vw;
		}
		#reward {
			background-color: #4CAF50;
			color: white;
			width: 14vw;
			height: 3vw;
			padding-top: 0.5vw;
			border-radius: 1vw;
		}
		#button {
			height: 2vw;
			width: 10vw;
		}
		#storePage {
			text-align: center;
			padding-top: 2vw;
			width: 100vw;
			vertical-align: middle;
		}
	</style>
<?php
	require 'footer.php';
?>