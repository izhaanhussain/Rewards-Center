<?php

if (isset($_POST['rr-submit'])) {
	require 'dbh.inc.php';
	require '../header.php';
	$username = $_POST['username'];
	$password = $_POST['password'];
	if (empty($username) || empty($password)) {
		header("Location: ../storepage?error=emptyfields");
		exit();
	}
	else {
		$sql = "SELECT * FROM users WHERE username=?;";
		$stmt = mysqli_stmt_init($conn);
		if (!mysqli_stmt_prepare($stmt, $sql)) {
			header("Location: ../storePage.php?error=sqlerror");
			exit();
		}
		else {

			mysqli_stmt_bind_param($stmt, "s", $username);
			mysqli_stmt_execute($stmt);
			$result = mysqli_stmt_get_result($stmt);
			if ($row = mysqli_fetch_assoc($result)) {
				$pwdCheck = password_verify($password, $row['password']);
				if ($pwdCheck == false) {
					header("Location: ../storePage.php?error=wrongpwd");
					exit();
				}
				else if ($pwdCheck == true) {
					$sql2 = "SELECT * FROM redeems WHERE username=?;";
					$stmt2 = mysqli_stmt_init($conn);
					if (!mysqli_stmt_prepare($stmt2, $sql2)) {
						header("Location: ../storePage.php?error=sqlerror");
						exit();
					}
					else {

						mysqli_stmt_bind_param($stmt2, "s", $username);
						mysqli_stmt_execute($stmt2);
						$result2 = mysqli_stmt_get_result($stmt2);
						if ($row2 = mysqli_fetch_assoc($result2)) {
							if($row2['business'] == $_SESSION['businessName']) {
								$_SESSION['reward'] = $row2['reward'];
								$_SESSION['username'] = $username;
								header("Location: ../showRewardBus.php");
								exit();
							}
							else {
								header("Location: ../redeemReward.php?error=notcorrectbusiness");
								exit();
							}
							
						}
						else {
							header("Location: ../storePage.php?error=rewardnotfound");
							exit();
						}
					}
				}
			}
		}
	}
}
else {
	header("Location: ../index.php");
	exit();
}