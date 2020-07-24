<?php
	require 'header.php';
?>
	<main>
		<div id="suform">
			<form action="includes/busSignup.inc.php" method="post">
				<label for="busName" class="busSuLabels">Business Name: </label><br>
				<input type="text" class="busSuInputs" name="busName"><br><br>
				<label for="busUName" class="busSuLabels">Business Username: </label><br>
				<input type="text" name="busUName" class="buSuInputs"><br><br>
				<label for="busPword" class="busSuLabels">Business Password: </label><br>
				<input type="password" name="busPword" class="buSuInputs"><br><br>
				<label for="ptEarn" class="busSuLabels">How much will the user have to spend to earn a point?</label><br>
				<input type="number" name="ptEarn" class="busSuInputs" step="0.01"><br><br>
				<label for="minPts" class="busSuLabels">How many points will the user need to redeem?</label><br>
				<input type="number" name="minPts" class="busSuInputs"><br><br>
				<label for="ptVal" class="busSuLabels">How much will each point be worth in your business?</label><br>
				<input type="number" name="ptVal" class="busSuInputs" step="0.01"><br><br>
				<label for="outsidePtsVal" class="busSuLabels">How much will outside points be worth at your business?</label><br>
				<select name="outsidePtsVal" class="busSuInputs">
				  <option value="5%">5% Off</option>
				  <option value="10%">10% Off</option>
				  <option value="15%">15% Off</option>
				  <option value="none">Nothing</option>
				</select><br><br>
				<label for="outsidePts" class="busSuLabels">How many outside points will be needed for this value?</label><br>
				<input type="number" name="outsidePts" class="busSuInputs"><br><br>
				<button type="submit" class="subButsSu" name="busSu-submit">Submit Request</button>
			</form>
		</div>
	</main>
	<style>
		#suform {
			margin-top: 2vw; 
			margin-left: 30vw;
			border-radius: 3vw;
			background-color: #4CAF50;
			color: #FFFFFF;	
			padding-top: 3vw;
			padding-bottom: 3vw;
			padding-left: 6vw;
			height: 40vw;
			width: 35vw;
		}
	</style>
<?php
	require 'footer.php';
?>