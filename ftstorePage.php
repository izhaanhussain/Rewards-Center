<?php
	require 'header.php';
?>
	<main>
		<center><h1 id='storeName'><?php echo $_SESSION['businessName'];?></h1></center>
		<div id="storePage">
			<form action="includes/ftstorePage.inc.php" method="post">
				<label for="username" class="labelsSP">Rewards Center Username: </label>
				<input name="username" class="inputsSP" type="text"><br><br>
				<label for="password" class="labelsSP">Rewards Center Password: </label>
				<input name="password" class="inputsSP" type="password"><br><br>
				<center><button type="submit" id="button" name="ft-submit">Submit</button></center>
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