<?php
	require 'header.php';
?>
	<main>
		<form action="includes/busSignupReq.inc.php" method="post">
			<label for="contactEM" class="busSuLabels">Contact Email</label><br>
			<input type="text" name="contactEM" class="buSuInputs"><br><br>
			<label for="busName" class="busSuLabels">Business Name: </label><br>
			<input type="text" name="busName" class="buSuInputs"><br><br>
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
			<button type="submit" class="subButsSu" name="busSuReq-submit">Submit Request</button>
		</form>
	</main>
<?php
	require 'footer.php';
?>