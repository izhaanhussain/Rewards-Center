<?php
if (isset($_POST['srb-submit'])) {
	require 'dbh.inc.php';
	require '../header.php';
	$sql = "DELETE FROM redeems WHERE username=?;";
	$stmt = mysqli_stmt_init($conn);
	if (!mysqli_stmt_prepare($stmt, $sql)) {
		echo "There was an error!";
		exit();
	}
	else {
		mysqli_stmt_bind_param($stmt, "s", $_SESSION['username']);
		mysqli_stmt_execute($stmt);
		unset($_SESSION['reward']);
		unset($_SESSION['username']);
		header("Location: ../storePage.php?reward=applied");
	}
	
}
else {
	header("Location: ../index.php");
	exit();
}