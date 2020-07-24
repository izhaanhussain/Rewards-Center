<?php
	require 'header.php';
?>
	<main>
		<div id="showReward">
			<p>Apply your reward at your next checkout</p>
			<?php
				$reward = $_SESSION['reward'];
				if ($reward == "5%" || $reward == "10%" || $reward == "15%"){
					echo '
					<p>'.$reward.' off</p>
					';
				}
				else {
					echo '
					<p>$'.$reward.' off</p>
					';
				}
				
			?>
			<button id="button" onclick="homepage()">Go to Homepage</button>
		</div>
	</main>
	<script>
		function homepage() {
			window.location.href = "index.php";
			<?php
				unset($_SESSION['reward']);
			?>
		}
	</script>
	<style>
		#button {
			background-color: #4CAF50;
			color: white;
			height: 3vw;
			width: 8vw;
		}
		#showReward {
			text-align: center;
			padding-top: 2vw;
			width: 100vw;
			vertical-align: middle;
		}
	</style>
<?php
	require 'footer.php';
?>	