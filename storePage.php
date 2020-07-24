<?php
	require 'header.php';
?>
	<main>
		<center><h1 id="storeName"><?php echo $_SESSION['businessName'];?></h1></center>
		<div id="storePage">
			<button class="storePageButs" onclick="ftstorePage()">First Time At This Store</button>
			<button class="storePageButs" onclick="hustorePage()">Have Used At This Store</button>
			<button class="storePageButs" onclick="redeemPage()">Redeem Reward</button>
		</div>
	</main>
	<script>
		function ftstorePage() {
			window.location.href = "ftstorePage.php";
		}
		function hustorePage() {
			window.location.href = "hustorePage.php";
		}
		function redeemPage() {
			window.location.href = "redeemReward.php";
		}
	</script>
	<style>
		#storeName {
			margin-top: 2vw;
		}
		.storePageButs {
			background-color: #4CAF50;
			color: #FFFFFF;
			display: block;
			width: 16vw;
			height: 4vw;
			margin-bottom: 1vw;
		}
		#storePage {
			text-align: center;
			padding-top: 2vw;
			padding-left: 42vw;
			width: 100vw;
			vertical-align: middle;
		}
	</style>
<?php
	require 'footer.php';
?>