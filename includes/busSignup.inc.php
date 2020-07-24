<?php

if(isset($_POST['busSu-submit'])) {

	require 'dbh.inc.php';

	$busName = $_POST['busName'];
	$busUName = $_POST['busUName'];
	$busPword = $_POST['busPword'];
	$ptEarn = $_POST['ptEarn'];
	$minPts = $_POST['minPts'];
	$ptVal = $_POST['ptVal'];
	$outsidePtsVal = $_POST['outsidePtsVal'];
	$outsidePts = $_POST['outsidePts'];

	if (empty($busName) || empty($busUName) || empty($busPword) || empty($ptEarn) || empty($minPts) || empty($ptVal) || empty($outsidePts) || empty($outsidePts)) {
		header("Location: ../busSignup.php?error=emptyfields");
		exit();
	}
	else if (!preg_match("/^[a-zA-Z0-9]*$/", $busUName)) {
		header("Location: ../signup.php?error=invaliduid");
		exit();
	}
	else {

		$sql = "SELECT busName FROM busUsers WHERE busName=?";
		$stmt = mysqli_stmt_init($conn);
		if(!mysqli_stmt_prepare($stmt, $sql)) {
			header("Location: ../busSignup.php?error=sqlerror");
			exit();
		}
		else {
			mysqli_stmt_bind_param($stmt, "s", $busName);
			mysqli_stmt_execute($stmt);
			mysqli_stmt_store_result($stmt);
			$resultCheck = mysqli_stmt_num_rows($stmt);
			if($resultCheck > 0) {
				header("Location: ../signup.php?error=usertaken");
				exit();
			}
			else {

				$sql = "INSERT INTO busUsers (busName, busUsername, password, ptEarn, minPts, ptVal, outsidePtsVal, outsidePts) VALUES (?, ?, ?, ?, ?, ?, ?, ?);";
				$stmt = mysqli_stmt_init($conn);
				if(!mysqli_stmt_prepare($stmt, $sql)) {
					header("Location: ../busSignup.php?error=sqlerror");
					exit();
				}
				else {
					$hashedPwd = password_hash($busPword, PASSWORD_DEFAULT);

					mysqli_stmt_bind_param($stmt, "ssssssss", $busName, $busUName, $hashedPwd, $ptEarn, $minPts, $ptVal, $outsidePtsVal, $outsidePts);
					mysqli_stmt_execute($stmt);
					session_start();
					$_SESSION['businessName'] = $busName;
					header("Location: ../index.php?busSignup=success");
					exit();
				}

			}
		}
	}
}
else {
	header("Location: ../index.php");
	exit();
}