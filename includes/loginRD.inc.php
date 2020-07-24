<?php

if(isset($_POST['login-submit2'])) {

	require 'dbh.inc.php';

	$mailuid = $_POST['mailuid'];
	$password = $_POST['pwd'];

	if (empty($mailuid) || empty($password)) {
		header("Location: ../loginRD.php?error=emptyfields");
		exit();
	}
	else {
		$sql = "SELECT * FROM users WHERE username=? OR email=?;";
		$stmt = mysqli_stmt_init($conn);
		if (!mysqli_stmt_prepare($stmt, $sql)) {
			header("Location: ../loginRD.php?error=sqlerror");
			exit();
		}
		else {

			mysqli_stmt_bind_param($stmt, "ss", $mailuid, $mailuid);
			mysqli_stmt_execute($stmt);
			$result = mysqli_stmt_get_result($stmt);
			if ($row = mysqli_fetch_assoc($result)) {
				$pwdCheck = password_verify($password, $row['password']);
				if ($pwdCheck == false) {
					header("Location: ../loginRD.php?error=wrongpwd");
					exit();
				}
				else if ($pwdCheck == true) {
					session_start();
					$_SESSION['userId'] = $row['id'];
					$_SESSION['userUid'] = $row['username'];

					header("Location: ../index.php?login=success");
					exit();
				}
				else {
					header("Location: ../loginRD.php?error=wrongpwd");
					exit();
				}
			}
			else {
				header("Location: ../loginRD.php?error=nouser");
				exit();
			}

		}
	}

}
else if (isset($_POST['signup-submit'])) {
	header("Location: ../signupOp.php");
	exit();
}
else {
	header("Location: ../index.php");
	exit();
}