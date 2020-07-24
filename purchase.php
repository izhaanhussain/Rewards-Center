<?php
	require 'header.php';
?>
	<main>
		<center><h1 id="storeName"><?php echo $_SESSION['businessName'];?></h1></center>
		<div id="storePage">
			<form action="includes/purchase.inc.php" method="post">
				<label for="amt">Purchase Amount: </label>
				<input type="number" name="amt" step="0.01"><br><br>
				<button type="submit" id="button" name="purchase-submit">Add Points</button>
			</form>
		</div>
	</main>
	<style>
		#storeName {
			margin-top: 2vw;
		}
		#button {
			background-color: #4CAF50;
			color: white;
			height: 2vw;
			width: 6vw;
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