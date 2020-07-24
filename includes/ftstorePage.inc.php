<?php

if (isset($_POST['ft-submit'])) {
	require 'dbh.inc.php';
	require '../header.php';
	$username = $_POST['username'];
	$password = $_POST['password'];
	if (empty($username) || empty($password)) {
		header("Location: ../ftstorepage?error=emptyfields");
		exit();
	}
	else {
		$sql = "SELECT * FROM users WHERE username=?;";
		$stmt = mysqli_stmt_init($conn);
		if (!mysqli_stmt_prepare($stmt, $sql)) {
			header("Location: ../ftstorePage.php?error=sqlerror");
			exit();
		}
		else {

			mysqli_stmt_bind_param($stmt, "s", $username);
			mysqli_stmt_execute($stmt);
			$result = mysqli_stmt_get_result($stmt);
			if ($row = mysqli_fetch_assoc($result)) {
				$pwdCheck = password_verify($password, $row['password']);
				if ($pwdCheck == false) {
					header("Location: ../ftstorePage.php?error=wrongpwd");
					exit();
				}
				else if ($pwdCheck == true) {
					//works
					$query = "SELECT * FROM userPts WHERE username = '$username';";
					$result = mysqli_query($conn,$query);
					while ($row = mysqli_fetch_assoc($result)) {
						$bus1 = $row['bus1Name'];
						$bus2 = $row['bus2Name'];
						$bus3 = $row['bus3Name'];
						$bus4 = $row['bus4Name'];
						$bus5 = $row['bus5Name'];
						$bus6 = $row['bus6Name'];
						$bus7 = $row['bus7Name'];
						$bus8 = $row['bus8Name'];
						$bus9 = $row['bus9Name'];
						$bus10 = $row['bus10Name'];						
						if ($bus1 == "NULL") {
							$sql2 = "UPDATE userPts SET bus1Name = '{$_SESSION['businessName']}' WHERE username = '$username'";
							if (mysqli_query($conn, $sql2)) {
								$_SESSION['username'] = $username;
								header("Location: ../purchase.php");
								exit();
							}
						}
						else if ($bus2 == "NULL") {
							$sql2 = "UPDATE userPts SET bus2Name = '{$_SESSION['businessName']}' WHERE username = '$username'";
							if (mysqli_query($conn, $sql2)) {
								$_SESSION['username'] = $username;
								header("Location: ../purchase.php");
								exit();
							}
						}
						else if ($bus3 == "NULL") {
							$sql2 = "UPDATE userPts SET bus3Name = '{$_SESSION['businessName']}' WHERE username = '$username'";
							if (mysqli_query($conn, $sql2)) {
								$_SESSION['username'] = $username;
								header("Location: ../purchase.php");
								exit();
							}
						}
						else if ($bus4 == "NULL") {
							$sql2 = "UPDATE userPts SET bus4Name = '{$_SESSION['businessName']}' WHERE username = '$username'";
							if (mysqli_query($conn, $sql2)) {
								$_SESSION['username'] = $username;
								header("Location: ../purchase.php");
								exit();
							}
						}
						else if ($bus5 == "NULL") {
							$sql2 = "UPDATE userPts SET bus5Name = '{$_SESSION['businessName']}' WHERE username = '$username'";
							if (mysqli_query($conn, $sql2)) {
								$_SESSION['username'] = $username;
								header("Location: ../purchase.php");
								exit();
							}
						}
						else if ($bus6 == "NULL") {
							$sql2 = "UPDATE userPts SET bus6Name = '{$_SESSION['businessName']}' WHERE username = '$username'";
							if (mysqli_query($conn, $sql2)) {
								$_SESSION['username'] = $username;
								header("Location: ../purchase.php");
								exit();
							}
						}
						else if ($bus7 == "NULL") {
							$sql2 = "UPDATE userPts SET bus7Name = '{$_SESSION['businessName']}' WHERE username = '$username'";
							if (mysqli_query($conn, $sql2)) {
								$_SESSION['username'] = $username;
								header("Location: ../purchase.php");
								exit();
							}
						}
						else if ($bus8 == "NULL") {
							$sql2 = "UPDATE userPts SET bus8Name = '{$_SESSION['businessName']}' WHERE username = '$username'";
							if (mysqli_query($conn, $sql2)) {
								$_SESSION['username'] = $username;
								header("Location: ../purchase.php");
								exit();
							}
						}
						else if ($bus9 == "NULL") {
							$sql2 = "UPDATE userPts SET bus9Name = '{$_SESSION['businessName']}' WHERE username = '$username'";
							if (mysqli_query($conn, $sql2)) {
								$_SESSION['username'] = $username;
								header("Location: ../purchase.php");
								exit();
							}
						}
						else if ($bus10 == "NULL") {
							$sql2 = "UPDATE userPts SET bus10Name = '{$_SESSION['businessName']}' WHERE username = '$username'";
							if (mysqli_query($conn, $sql2)) {
								$_SESSION['username'] = $username;
								header("Location: ../purchase.php");
								exit();
							}
						}
						else {
							header("Location: ../ftstorePage.php?error=exceedmaxbusiness");
							exit();
						}
					}

					
				}
				else {
					header("Location: ../ftstorePage.php?error=wrongpwd");
					exit();
				}
			}
			else {
				header("Location: ../ftstorePage.php?error=nouser");
				exit();
			}

		}
	}

}

else {
	header("Location: ../index.php");
	exit();
}