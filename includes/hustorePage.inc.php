<?php
if (isset($_POST['hustore-submit'])) {
	require 'dbh.inc.php';
	require '../header.php';

	$username = $_POST['username'];
	$password = $_POST['password'];

	if (empty($username) || empty($password)) {
		header("Location: ../hustorePage.php?error=emptyfields");
		exit();
	}
	else {
		$sql = "SELECT * FROM users WHERE username=?;";
		$stmt = mysqli_stmt_init($conn);
		if (!mysqli_stmt_prepare($stmt, $sql)) {
			header("Location: ../hustorePage.php?error=sqlerror");
			exit();
		}
		else {

			mysqli_stmt_bind_param($stmt, "s", $username);
			mysqli_stmt_execute($stmt);
			$result = mysqli_stmt_get_result($stmt);
			if ($row = mysqli_fetch_assoc($result)) {
				$pwdCheck = password_verify($password, $row['password']);
				if ($pwdCheck == false) {
					header("Location: ../hustorePage.php?error=wrongpwd");
					exit();
				}
				else if ($pwdCheck == true) {
					//works
					$_SESSION['username'] = $username;
					header("Location: ../purchase.php");
					exit();
				}
				else {
					header("Location: ../hustorePage.php?error=wrongpwd");
					exit();
				}
			}
			else {
				header("Location: ../hustorePage.php?error=nouser");
				exit();
			}

		}
	}
}
else {
	header("Location: ../index.php");
	exit();
}