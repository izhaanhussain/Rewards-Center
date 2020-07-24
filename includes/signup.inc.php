<?php
if (isset($_POST['signup-submit'])) {

	require 'dbh.inc.php';

	$username = $_POST['uid'];
	$email = $_POST['mail'];
	$password = $_POST['pwd'];
	$passwordRepeat = $_POST['pwd-repeat'];

	if (empty($username) || empty($email) || empty($password) || empty($passwordRepeat)) {
		header("Location: ../signup.php?error=emptyfields&uid=".$username."&mail=".$email);
		exit();
	}
	else if (!filter_var($email, FILTER_VALIDATE_EMAIL) && !preg_match("/^[a-zA-Z0-9]*$/", $username)) {
		header("Location: ../signup.php?error=invalidmailuid");
		exit();
	}
	else if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
		header("Location: ../signup.php?error=invalidmail&uid=".$username);
		exit();
	}
	else if (!preg_match("/^[a-zA-Z0-9]*$/", $username)) {
		header("Location: ../signup.php?error=invaliduid&mail=".$email);
		exit();
	}
	else if ($password !== $passwordRepeat) {
		header("Location: ../signup.php?error=passwordcheck&uid=".$username."&mail=".$email);
		exit();
	}
	else {

		$sql = "SELECT username FROM users WHERE username=?";
		$stmt = mysqli_stmt_init($conn);
		if(!mysqli_stmt_prepare($stmt, $sql)) {
			header("Location: ../signup.php?error=sqlerror");
			exit();
		}
		else {
			mysqli_stmt_bind_param($stmt, "s", $username);
			mysqli_stmt_execute($stmt);
			mysqli_stmt_store_result($stmt);
			$resultCheck = mysqli_stmt_num_rows($stmt);
			if($resultCheck > 0) {
				header("Location: ../signup.php?error=usertaken&mail=".$email);
				exit();
			}
			else {

				$sql = "INSERT INTO users (username, email, password) VALUES (?, ?, ?)";
				$stmt = mysqli_stmt_init($conn);
				if(!mysqli_stmt_prepare($stmt, $sql)) {
					header("Location: ../signup.php?error=sqlerror");
					exit();
				}
				else {
					$hashedPwd = password_hash($password, PASSWORD_DEFAULT);
					mysqli_stmt_bind_param($stmt, "sss", $username, $email, $hashedPwd);
					mysqli_stmt_execute($stmt);
						$bus1Name = "NULL";
						$bus1Pts = 0;
						$bus2Name = "NULL";
						$bus2Pts = 0;
						$bus3Name = "NULL";
						$bus3Pts = 0;
						$bus4Name = "NULL";
						$bus4Pts = 0;
						$bus5Name = "NULL";
						$bus5Pts = 0;
						$bus6Name = "NULL";
						$bus6Pts = 0;
						$bus7Name = "NULL";
						$bus7Pts = 0;
						$bus8Name = "NULL";
						$bus8Pts = 0;
						$bus9Name = "NULL";
						$bus9Pts = 0;
						$bus10Name = "NULL";
						$bus10Pts = 0;
						$totalPts = 0;
						$sql2 = "INSERT INTO userpts (username, bus1Name, bus1Pts, bus2Name, bus2Pts, bus3Name, bus3Pts, bus4Name, bus4Pts, bus5Name, bus5Pts, bus6Name, bus6Pts, bus7Name, bus7Pts, bus8Name, bus8Pts, bus9Name, bus9Pts, bus10Name, bus10Pts, totalPts) VALUES ('$username', '$bus1Name', '$bus1Pts', '$bus2Name', '$bus2Pts', '$bus3Name', '$bus3Pts', '$bus4Name', '$bus4Pts', '$bus5Name', '$bus5Pts', '$bus6Name', '$bus6Pts', '$bus7Name', '$bus7Pts', '$bus8Name', '$bus8Pts', '$bus9Name', '$bus9Pts', '$bus10Name', '$bus10Pts', '$totalPts');";
						mysqli_query($conn, $sql2);
						session_start();
						$_SESSION['userUid'] = $username;
						header("Location: ../index.php?signup=success");
						exit();
					
				}

			}
		}

	}
	mysqli_stmt_close($stmt);
	mysqli_close($conn);

}
else {
	header("Location: ../index.php");
	exit();
}