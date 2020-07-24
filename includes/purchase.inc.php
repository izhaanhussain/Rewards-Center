<?php

if (isset($_POST['purchase-submit'])) {
	require 'dbh.inc.php';
	require '../header.php';

	$amt = $_POST['amt'];
	$ptEarn;
	$ptsAdded;

	$query = "SELECT * FROM busUsers WHERE busName = '{$_SESSION['businessName']}';";
	$result = mysqli_query($conn,$query);
	if ($row = mysqli_fetch_assoc($result)) {
		$ptEarn = $row['ptEarn'];
		$ptsAdded = $amt/$ptEarn;
		$query2 = "SELECT * FROM userPts WHERE username = '{$_SESSION['username']}';";
		$result2 = mysqli_query($conn,$query2);
		if ($row2 = mysqli_fetch_assoc($result2)) {
			if ($row2['bus1Name'] == $_SESSION['businessName']) {
				$sql = "UPDATE userPts SET bus1Pts = bus1Pts + '$ptsAdded' WHERE username = '{$_SESSION['username']}'";
				$sql2 = "UPDATE userPts SET totalPts = totalPts + '$ptsAdded' WHERE username = '{$_SESSION['username']}'";
				if (mysqli_query($conn, $sql)) {
					if (mysqli_query($conn, $sql2)) {
						unset($_SESSION['username']);
						header("Location: ../storePage.php?success=ptsAdded");
						exit();
					}
				}
			}
			else if ($row2['bus2Name'] == $_SESSION['businessName']) {
				$sql = "UPDATE userPts SET bus2Pts = bus2Pts + '$ptsAdded' WHERE username = '{$_SESSION['username']}'";
				$sql2 = "UPDATE userPts SET totalPts = totalPts + '$ptsAdded' WHERE username = '{$_SESSION['username']}'";
				if (mysqli_query($conn, $sql)) {
					if (mysqli_query($conn, $sql2)) {
						unset($_SESSION['username']);
						header("Location: ../storePage.php?success=ptsAdded");
						exit();
					}
				}
			}
			else if ($row2['bus3Name'] == $_SESSION['businessName']) {
				$sql = "UPDATE userPts SET bus3Pts = bus3Pts + '$ptsAdded' WHERE username = '{$_SESSION['username']}'";
				$sql2 = "UPDATE userPts SET totalPts = totalPts + '$ptsAdded' WHERE username = '{$_SESSION['username']}'";
				if (mysqli_query($conn, $sql)) {
					if (mysqli_query($conn, $sql2)) {
						unset($_SESSION['username']);
						header("Location: ../storePage.php?success=ptsAdded");
						exit();
					}
				}
			}
			else if ($row2['bus4Name'] == $_SESSION['businessName']) {
				$sql = "UPDATE userPts SET bus4Pts = bus4Pts + '$ptsAdded' WHERE username = '{$_SESSION['username']}'";
				$sql2 = "UPDATE userPts SET totalPts = totalPts + '$ptsAdded' WHERE username = '{$_SESSION['username']}'";
				if (mysqli_query($conn, $sql)) {
					if (mysqli_query($conn, $sql2)) {
						unset($_SESSION['username']);
						header("Location: ../storePage.php?success=ptsAdded");
						exit();
					}
				}
			}
			else if ($row2['bus5Name'] == $_SESSION['businessName']) {
				$sql = "UPDATE userPts SET bus5Pts = bus5Pts + '$ptsAdded' WHERE username = '{$_SESSION['username']}'";
				$sql2 = "UPDATE userPts SET totalPts = totalPts + '$ptsAdded' WHERE username = '{$_SESSION['username']}'";
				if (mysqli_query($conn, $sql)) {
					if (mysqli_query($conn, $sql2)) {
						unset($_SESSION['username']);
						header("Location: ../storePage.php?success=ptsAdded");
						exit();
					}
				}
			}
			else if ($row2['bus6Name'] == $_SESSION['businessName']) {
				$sql = "UPDATE userPts SET bus6Pts = bus6Pts + '$ptsAdded' WHERE username = '{$_SESSION['username']}'";
				$sql2 = "UPDATE userPts SET totalPts = totalPts + '$ptsAdded' WHERE username = '{$_SESSION['username']}'";
				if (mysqli_query($conn, $sql)) {
					if (mysqli_query($conn, $sql2)) {
						unset($_SESSION['username']);
						header("Location: ../storePage.php?success=ptsAdded");
						exit();
					}
				}
			}
			else if ($row2['bus7Name'] == $_SESSION['businessName']) {
				$sql = "UPDATE userPts SET bus7Pts = bus7Pts + '$ptsAdded' WHERE username = '{$_SESSION['username']}'";
				$sql2 = "UPDATE userPts SET totalPts = totalPts + '$ptsAdded' WHERE username = '{$_SESSION['username']}'";
				if (mysqli_query($conn, $sql)) {
					if (mysqli_query($conn, $sql2)) {
						unset($_SESSION['username']);
						header("Location: ../storePage.php?success=ptsAdded");
						exit();
					}
				}
			}
			else if ($row2['bus8Name'] == $_SESSION['businessName']) {
				$sql = "UPDATE userPts SET bus8Pts = bus8Pts + '$ptsAdded' WHERE username = '{$_SESSION['username']}'";
				$sql2 = "UPDATE userPts SET totalPts = totalPts + '$ptsAdded' WHERE username = '{$_SESSION['username']}'";
				if (mysqli_query($conn, $sql)) {
					if (mysqli_query($conn, $sql2)) {
						unset($_SESSION['username']);
						header("Location: ../storePage.php?success=ptsAdded");
						exit();
					}
				}
			}
			else if ($row2['bus9Name'] == $_SESSION['businessName']) {
				$sql = "UPDATE userPts SET bus9Pts = bus9Pts + '$ptsAdded' WHERE username = '{$_SESSION['username']}'";
				$sql2 = "UPDATE userPts SET totalPts = totalPts + '$ptsAdded' WHERE username = '{$_SESSION['username']}'";
				if (mysqli_query($conn, $sql)) {
					if (mysqli_query($conn, $sql2)) {
						unset($_SESSION['username']);
						header("Location: ../storePage.php?success=ptsAdded");
						exit();
					}
				}
			}
			else if ($row2['bus10Name'] == $_SESSION['businessName']) {
				$sql = "UPDATE userPts SET bus10Pts = bus10Pts + '$ptsAdded' WHERE username = '{$_SESSION['username']}'";
				$sql2 = "UPDATE userPts SET totalPts = totalPts + '$ptsAdded' WHERE username = '{$_SESSION['username']}'";
				if (mysqli_query($conn, $sql)) {
					if (mysqli_query($conn, $sql2)) {
						unset($_SESSION['username']);
						header("Location: ../storePage.php?success=ptsAdded");
						exit();
					}
				}
			}
			else {
				unset($_SESSION['username']);
				header("Location: ../storePage.php?error=notRegistered");
				exit();
			}
		}
	}
}
else {
	header("Location: ../index.php");
	exit();
}