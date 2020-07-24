<?php

if(isset($_POST['busSuReq-submit'])) {

	require 'dbh.inc.php';

	$email = $_POST['contactEM'];
	$busName = $_POST['busName'];
	$ptEarn = $_POST['ptEarn'];
	$minPts = $_POST['minPts'];
	$ptVal = $_POST['ptVal'];
	$outsidePtsVal = $_POST['outsidePtsVal'];
	$outsidePts = $_POST['outsidePts'];

	if (empty($email) || empty($busName) || empty($ptEarn) || empty($minPts) || empty($ptVal) || empty($outsidePts) || empty($outsidePts)) {
		header("Location: ../busSignup.php?error=emptyfields");
		exit();
	}
	else if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
		header("Location: ../busSignup.php?error=invalidmail&name=".$busName);
		exit();
	}
	else {

		$sql = "SELECT busName FROM busSuRequests WHERE busName=?";
		$stmt = mysqli_stmt_init($conn);
		if(!mysqli_stmt_prepare($stmt, $sql)) {
			header("Location: ../busSignup.php?error=sqlerror");
			exit();
		}
		else {
			$sql2 = "INSERT INTO busSuRequests (email, busName, ptEarn, minPts, ptVal, outsidePtsVal, outsidePts) VALUES ('$email', '$busName', '$ptEarn', '$minPts', '$ptVal', '$outsidePtsVal', '$outsidePts');";
				mysqli_query($conn, $sql2);
				header("Location: ../index.php?acct=success");
				exit();
			}	
		}

}
else {
	header("Location: ../index.php");
	exit();
}