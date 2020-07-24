<?php

if (isset($_POST['busLogin-submit'])) {
	require 'dbh.inc.php';

	$username = $_POST['username'];
	$password = $_POST['password'];

	if (empty($username) || empty($password)) {
		header("Location: ../busLogin.php?error=emptyfields");
		exit();
	}
	else {
		$sql = "SELECT * FROM busUsers WHERE busUsername=?;";
		$stmt = mysqli_stmt_init($conn);
		if (!mysqli_stmt_prepare($stmt, $sql)) {
			header("Location: ../busLogin.php?error=sqlerror");
			exit();
		}
		else {

			mysqli_stmt_bind_param($stmt, "s", $username);
			mysqli_stmt_execute($stmt);
			$result = mysqli_stmt_get_result($stmt);
			if ($row = mysqli_fetch_assoc($result)) {
				$pwdCheck = password_verify($password, $row['password']);
				if ($pwdCheck == false) {
					header("Location: ../index.php?error=wrongpwd");
					exit();
				}
				else if ($pwdCheck == true) {
					session_start();
					$_SESSION['businessName'] = $row['busName'];

					header("Location: ../index.php?login=success");
					exit();
				}
				else {
					header("Location: ../index.php?error=wrongpwd");
					exit();
				}
			}
			else {
				header("Location: ../index.php?error=nouser");
				exit();
			}

		}
	}
}
else {
	header("Location: ../index.php");
	exit();
}