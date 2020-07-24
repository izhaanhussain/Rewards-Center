<?php

if (isset($_POST['totalPts-submit'])) {
	require 'dbh.inc.php';
	require '../header.php';

	$bus1Pts = $_POST['bus1'];
	$bus2Pts = $_POST['bus2'];
	$bus3Pts = $_POST['bus3'];
	$bus4Pts = $_POST['bus4'];
	$bus5Pts = $_POST['bus5'];
	$bus6Pts = $_POST['bus6'];
	$bus7Pts = $_POST['bus7'];
	$bus8Pts = $_POST['bus8'];
	$bus9Pts = $_POST['bus9'];
	$bus10Pts = $_POST['bus10'];
	$totalPts = $_POST['bus1'] + $_POST['bus2'] + $_POST['bus3'] + $_POST['bus4'] + $_POST['bus5'] + $_POST['bus6'] + $_POST['bus7'] + $_POST['bus8'] + $_POST['bus9'] + $_POST['bus10'];
	$rewardFor = $_SESSION['rewardFor'];
	$outsidePtsReward;
	$outsidePtsNeeded;

	$query = "SELECT * FROM userPts WHERE username = '{$_SESSION['userUid']}';";
	$result = mysqli_query($conn,$query);
	if ($row = mysqli_fetch_assoc($result)) {
		if ($bus1Pts > $row['bus1Pts']) {
			header("Location: ../redeemTP.php?error=exceededpts");
			exit();
		}
		else if ($bus2Pts > $row['bus2Pts']) {
			header("Location: ../redeemTP.php?error=exceededpts");
			exit();
		}
		else if ($bus3Pts > $row['bus3Pts']) {
			header("Location: ../redeemTP.php?error=exceededpts");
			exit();
		}
		else if ($bus4Pts > $row['bus4Pts']) {
			header("Location: ../redeemTP.php?error=exceededpts");
			exit();
		}
		else if ($bus5Pts > $row['bus5Pts']) {
			header("Location: ../redeemTP.php?error=exceededpts");
			exit();
		}
		else if ($bus6Pts > $row['bus6Pts']) {
			header("Location: ../redeemTP.php?error=exceededpts");
			exit();
		}
		else if ($bus7Pts > $row['bus7Pts']) {
			header("Location: ../redeemTP.php?error=exceededpts");
			exit();
		}
		else if ($bus8Pts > $row['bus8Pts']) {
			header("Location: ../redeemTP.php?error=exceededpts");
			exit();
		}
		else if ($bus9Pts > $row['bus9Pts']) {
			header("Location: ../redeemTP.php?error=exceededpts");
			exit();
		}
		else if ($bus10Pts > $row['bus10Pts']) {
			header("Location: ../redeemTP.php?error=exceededpts");
			exit();
		}
		else {
			$query3 = "SELECT * FROM busUsers WHERE busName = '$rewardFor';";
			$result3 = mysqli_query($conn,$query3);
			if ($row3 = mysqli_fetch_assoc($result3)) {
				$outsidePtsReward = $row3['outsidePtsVal'];
				$outsidePtsNeeded = $row3['outsidePts'];
				if ($outsidePtsNeeded > $totalPts) {
					header("Location: ../redeemTP.php?error=exceededpts");
					exit();
				}
				else {
						if ($bus1Pts > $row['bus1Pts']) {
							header("Location: ../redeemTP.php?error=exceededpts");
							exit();
						}
						if ($bus2Pts > $row['bus2Pts']) {
							header("Location: ../redeemTP.php?error=exceededpts");
							exit();
						}
						if ($bus3Pts > $row['bus3Pts']) {
							header("Location: ../redeemTP.php?error=exceededpts");
							exit();
						}
						if ($bus4Pts > $row['bus4Pts']) {
							header("Location: ../redeemTP.php?error=exceededpts");
							exit();
						}
						if ($bus5Pts > $row['bus5Pts']) {
							header("Location: ../redeemTP.php?error=exceededpts");
							exit();
						}
						if ($bus6Pts > $row['bus6Pts']) {
							header("Location: ../redeemTP.php?error=exceededpts");
							exit();
						}
						if ($bus7Pts > $row['bus7Pts']) {
							header("Location: ../redeemTP.php?error=exceededpts");
							exit();
						}
						if ($bus8Pts > $row['bus8Pts']) {
							header("Location: ../redeemTP.php?error=exceededpts");
							exit();
						}
						if ($bus9Pts > $row['bus9Pts']) {
							header("Location: ../redeemTP.php?error=exceededpts");
							exit();
						}
						if ($bus10Pts > $row['bus10Pts']) {
							header("Location: ../redeemTP.php?error=exceededpts");
							exit();
						}
						$sql = "INSERT INTO redeems (username, business, reward) VALUES (?, ?, ?);";
						$stmt = mysqli_stmt_init($conn);
						if(!mysqli_stmt_prepare($stmt, $sql)) {
							header("Location: ../redeem.php?error=sqlerror");
							exit();
						}
						else {
							mysqli_stmt_bind_param($stmt, "sss", $_SESSION['userUid'], $rewardFor, $outsidePtsReward);
							mysqli_stmt_execute($stmt);
							$sql2 = "UPDATE userPts SET bus1Pts = bus1Pts - '$bus1Pts', bus2Pts = bus2Pts - '$bus2Pts', bus3Pts = bus3Pts - '$bus3Pts', bus4Pts = bus4Pts - '$bus4Pts', bus5Pts = bus5Pts - '$bus5Pts', bus6Pts = bus6Pts - '$bus6Pts', bus7Pts = bus7Pts - '$bus7Pts', bus8Pts = bus8Pts - '$bus8Pts', bus9Pts = bus9Pts - '$bus9Pts', bus10Pts = bus10Pts - '$bus10Pts' WHERE username = '{$_SESSION['userUid']}'";
							if (mysqli_query($conn, $sql2)) {
								unset($rewardFor);
								$_SESSION['reward'] = $outsidePtsReward;
						   		header("Location: ../redeemShow.php?redeem=successful");
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