<?php
if (isset($_POST['redeem-submit'])) {
	require 'dbh.inc.php';
	require '../header.php';

	$rewardFor = $_POST['rewardFor'];
	$busRedeem = $_POST['busRedeem'];
	$amtPoints = $_POST['amtPoints'];
	$totalPtsInBus;
	$outsidePtsReward;
	$outsidePtsNeeded;
	$ptsToReward;
	$reward;

	if(empty($rewardFor) || empty($busRedeem)) {
		header("Location: ../redeem.php?error=missingfields");
		exit();
	}
	else if ($rewardFor == $busRedeem) {		
		$query = "SELECT * FROM busUsers WHERE busName = '$rewardFor';";
		$result = mysqli_query($conn,$query);
		if ($row = mysqli_fetch_assoc($result)) {
			$ptsToReward = $row['ptVal'];
		}
		$query2 = "SELECT * FROM userPts WHERE username = '{$_SESSION['userUid']}';";
		$result2 = mysqli_query($conn,$query2);
		while ($row2 = mysqli_fetch_assoc($result2)) {
			if ($busRedeem == $row2['bus1Name']) {
				$totalPtsInBus = $row2['bus1Pts'];
			}
			else if ($busRedeem == $row2['bus2Name']) {
				$totalPtsInBus = $row2['bus2Pts'];
			}
			else if ($busRedeem == $row2['bus3Name']) {
				$totalPtsInBus = $row2['bus3Pts'];
			}
			else if ($busRedeem == $row2['bus4Name']) {
				$totalPtsInBus = $row2['bus4Pts'];
			}
			else if ($busRedeem == $row2['bus5Name']) {
				$totalPtsInBus = $row2['bus5Pts'];
			}
			else if ($busRedeem == $row2['bus6Name']) {
				$totalPtsInBus = $row2['bus6Pts'];
			}
			else if ($busRedeem == $row2['bus7Name']) {
				$totalPtsInBus = $row2['bus7Pts'];
			}
			else if ($busRedeem == $row2['bus8Name']) {
				$totalPtsInBus = $row2['bus8Pts'];
			}
			else if ($busRedeem == $row2['bus9Name']) {
				$totalPtsInBus = $row2['bus9Pts'];
			}
			else if ($busRedeem == $row2['bus10Name']) {
				$totalPtsInBus = $row2['bus10Pts'];
			}
			if ($amtPoints > $totalPtsInBus) {
			header("Location: ../redeem.php?error=exceededPoints");
			exit();
			}
			else {
				$reward = $ptsToReward * $amtPoints;
				$sql = "INSERT INTO redeems (username, business, reward) VALUES (?, ?, ?);";
				$stmt = mysqli_stmt_init($conn);
				if(!mysqli_stmt_prepare($stmt, $sql)) {
					header("Location: ../redeem.php?error=sqlerror");
					exit();
				}
				else {
					mysqli_stmt_bind_param($stmt, "sss", $_SESSION['userUid'], $rewardFor, $reward);
					mysqli_stmt_execute($stmt);
					if ($busRedeem == $row2['bus1Name']) {
						$sql2 = "UPDATE userPts SET bus1Pts = bus1Pts - '$amtPoints' WHERE username = '{$_SESSION['userUid']}'";
						if (mysqli_query($conn, $sql2)) {
							$sql3 = "UPDATE userPts SET totalPts = totalPts - '$amtPoints' WHERE username = '{$_SESSION['userUid']}'";
							if (mysqli_query($conn, $sql3)) {
								$_SESSION['reward'] = $reward;
								header("Location: ../redeemShow.php?redeem=success");
								exit();
							}
							
						}
					}
					else if ($busRedeem == $row2['bus2Name']) {
						$sql2 = "UPDATE userPts SET bus2Pts = bus2Pts - '$amtPoints' WHERE username = '{$_SESSION['userUid']}'";
						if (mysqli_query($conn, $sql2)) {
							$sql3 = "UPDATE userPts SET totalPts = totalPts - '$amtPoints' WHERE username = '{$_SESSION['userUid']}'";
							if (mysqli_query($conn, $sql3)) {
								$_SESSION['reward'] = $reward;
								header("Location: ../redeemShow.php?redeem=success");
								exit();
							}
						}
					}
					else if ($busRedeem == $row2['bus3Name']) {
						$sql2 = "UPDATE userPts SET bus3Pts = bus3Pts - '$amtPoints' WHERE username = '{$_SESSION['userUid']}'";
						if (mysqli_query($conn, $sql2)) {
							$sql3 = "UPDATE userPts SET totalPts = totalPts - '$amtPoints' WHERE username = '{$_SESSION['userUid']}'";
							if (mysqli_query($conn, $sql3)) {
								$_SESSION['reward'] = $reward;
								header("Location: ../redeemShow.php?redeem=success");
								exit();
							}
						}
					}
					else if ($busRedeem == $row2['bus4Name']) {
						$sql2 = "UPDATE userPts SET bus4Pts = bus4Pts - '$amtPoints' WHERE username = '{$_SESSION['userUid']}'";
						if (mysqli_query($conn, $sql2)) {
							$sql3 = "UPDATE userPts SET totalPts = totalPts - '$amtPoints' WHERE username = '{$_SESSION['userUid']}'";
							if (mysqli_query($conn, $sql3)) {
								$_SESSION['reward'] = $reward;
								header("Location: ../redeemShow.php?redeem=success");
								exit();
							}
						}
					}
					else if ($busRedeem == $row2['bus5Name']) {
						$sql2 = "UPDATE userPts SET bus5Pts = bus5Pts - '$amtPoints' WHERE username = '{$_SESSION['userUid']}'";
						if (mysqli_query($conn, $sql2)) {
							$sql3 = "UPDATE userPts SET totalPts = totalPts - '$amtPoints' WHERE username = '{$_SESSION['userUid']}'";
							if (mysqli_query($conn, $sql3)) {
								$_SESSION['reward'] = $reward;
								header("Location: ../redeemShow.php?redeem=success");
								exit();
							}
						}
					}
					else if ($busRedeem == $row2['bus6Name']) {
						$sql2 = "UPDATE userPts SET bus6Pts = bus6Pts - '$amtPoints' WHERE username = '{$_SESSION['userUid']}'";
						if (mysqli_query($conn, $sql2)) {
							$sql3 = "UPDATE userPts SET totalPts = totalPts - '$amtPoints' WHERE username = '{$_SESSION['userUid']}'";
							if (mysqli_query($conn, $sql3)) {
								$_SESSION['reward'] = $reward;
								header("Location: ../redeemShow.php?redeem=success");
								exit();
							}
						}
					}
					else if ($busRedeem == $row2['bus7Name']) {
						$sql2 = "UPDATE userPts SET bus7Pts = bus7Pts - '$amtPoints' WHERE username = '{$_SESSION['userUid']}'";
						if (mysqli_query($conn, $sql2)) {
							$sql3 = "UPDATE userPts SET totalPts = totalPts - '$amtPoints' WHERE username = '{$_SESSION['userUid']}'";
							if (mysqli_query($conn, $sql3)) {
								$_SESSION['reward'] = $reward;
								header("Location: ../redeemShow.php?redeem=success");
								exit();
							}
						}
					}
					else if ($busRedeem == $row2['bus8Name']) {
						$sql2 = "UPDATE userPts SET bus8Pts = bus8Pts - '$amtPoints' WHERE username = '{$_SESSION['userUid']}'";
						if (mysqli_query($conn, $sql2)) {
							$sql3 = "UPDATE userPts SET totalPts = totalPts - '$amtPoints' WHERE username = '{$_SESSION['userUid']}'";
							if (mysqli_query($conn, $sql3)) {
								$_SESSION['reward'] = $reward;
								header("Location: ../redeemShow.php?redeem=success");
								exit();
							}
						}
					}
					else if ($busRedeem == $row2['bus9Name']) {
						$sql2 = "UPDATE userPts SET bus9Pts = bus9Pts - '$amtPoints' WHERE username = '{$_SESSION['userUid']}'";
						if (mysqli_query($conn, $sql2)) {
							$sql3 = "UPDATE userPts SET totalPts = totalPts - '$amtPoints' WHERE username = '{$_SESSION['userUid']}'";
							if (mysqli_query($conn, $sql3)) {
								$_SESSION['reward'] = $reward;
								header("Location: ../redeemShow.php?redeem=success");
								exit();
							}
						}
					}
					else if ($busRedeem == $row2['bus10Name']) {
						$sql2 = "UPDATE userPts SET bus10Pts = bus10Pts - '$amtPoints' WHERE username = '{$_SESSION['userUid']}'";
						if (mysqli_query($conn, $sql2)) {
							$sql3 = "UPDATE userPts SET totalPts = totalPts - '$amtPoints' WHERE username = '{$_SESSION['userUid']}'";
							if (mysqli_query($conn, $sql3)) {
								$_SESSION['reward'] = $reward;
								header("Location: ../redeemShow.php?redeem=success");
								exit();
							}
						}
					}
					
				}
			}
		}
		
	}
	else if ($busRedeem != "totalPts" && $rewardFor != $busRedeem) {
		//outside points
		$query = "SELECT * FROM busUsers WHERE busName = '$rewardFor';";
		$result = mysqli_query($conn,$query);
		if ($row = mysqli_fetch_assoc($result)) {
			$outsidePtsReward = $row['outsidePtsVal'];
			$outsidePtsNeeded = $row['outsidePts'];
			if ($amtPoints < $outsidePtsNeeded) {
				header("Location: ../redeem.php?error=notenoughpoints");
				exit();	
			}
			$query2 = "SELECT * FROM userPts WHERE username = '{$_SESSION['userUid']}';";
			$result2 = mysqli_query($conn,$query2);
			while ($row2 = mysqli_fetch_assoc($result2)) {
				if ($busRedeem == $row2['bus1Name']) {
					$totalPtsInBus = $row2['bus1Pts'];
				}
				else if ($busRedeem == $row2['bus2Name']) {
					$totalPtsInBus = $row2['bus2Pts'];
				}
				else if ($busRedeem == $row2['bus3Name']) {
					$totalPtsInBus = $row2['bus3Pts'];
				}
				else if ($busRedeem == $row2['bus4Name']) {
					$totalPtsInBus = $row2['bus4Pts'];
				}
				else if ($busRedeem == $row2['bus5Name']) {
					$totalPtsInBus = $row2['bus5Pts'];
				}
				else if ($busRedeem == $row2['bus6Name']) {
					$totalPtsInBus = $row2['bus6Pts'];
				}
				else if ($busRedeem == $row2['bus7Name']) {
					$totalPtsInBus = $row2['bus7Pts'];
				}
				else if ($busRedeem == $row2['bus8Name']) {
					$totalPtsInBus = $row2['bus8Pts'];
				}
				else if ($busRedeem == $row2['bus9Name']) {
					$totalPtsInBus = $row2['bus9Pts'];
				}
				else if ($busRedeem == $row2['bus10Name']) {
					$totalPtsInBus = $row2['bus10Pts'];
				}
				if ($amtPoints > $totalPtsInBus) {
					header("Location: ../redeem.php?error=pointsexceeded");
					exit();
				}
				else {
					$sql = "INSERT INTO redeems (username, business, reward) VALUES (?, ?, ?);";
					$stmt = mysqli_stmt_init($conn);
					if(!mysqli_stmt_prepare($stmt, $sql)) {
						header("Location: ../redeem.php?error=sqlerror");
						exit();
					}
					else {
						mysqli_stmt_bind_param($stmt, "sss", $_SESSION['userUid'], $rewardFor, $outsidePtsReward);
						mysqli_stmt_execute($stmt);
						
						if ($busRedeem == $row2['bus1Name']) {
							$sql2 = "UPDATE userPts SET bus1Pts = bus1Pts - '$amtPoints' WHERE username = '{$_SESSION['userUid']}'";
							if (mysqli_query($conn, $sql2)) {
								$sql3 = "UPDATE userPts SET totalPts = totalPts - '$amtPoints' WHERE username = '{$_SESSION['userUid']}'";
								if (mysqli_query($conn, $sql3)) {
									$_SESSION['reward'] = $outsidePtsReward;
									header("Location: ../redeemShow.php?redeem=success");
									exit();
								}
								
							}
						}
						else if ($busRedeem == $row2['bus2Name']) {
							$sql2 = "UPDATE userPts SET bus2Pts = bus2Pts - '$amtPoints' WHERE username = '{$_SESSION['userUid']}'";
							if (mysqli_query($conn, $sql2)) {
								$sql3 = "UPDATE userPts SET totalPts = totalPts - '$amtPoints' WHERE username = '{$_SESSION['userUid']}'";
								if (mysqli_query($conn, $sql3)) {
									$_SESSION['reward'] = $outsidePtsReward;
									header("Location: ../redeemShow.php?redeem=success");
									exit();
								}
							}
						}
						else if ($busRedeem == $row2['bus3Name']) {
							$sql2 = "UPDATE userPts SET bus3Pts = bus3Pts - '$amtPoints' WHERE username = '{$_SESSION['userUid']}'";
							if (mysqli_query($conn, $sql2)) {
								$sql3 = "UPDATE userPts SET totalPts = totalPts - '$amtPoints' WHERE username = '{$_SESSION['userUid']}'";
								if (mysqli_query($conn, $sql3)) {
									$_SESSION['reward'] = $outsidePtsReward;
									header("Location: ../redeemShow.php?redeem=success");
									exit();
								}
							}
						}
						else if ($busRedeem == $row2['bus4Name']) {
							$sql2 = "UPDATE userPts SET bus4Pts = bus4Pts - '$amtPoints' WHERE username = '{$_SESSION['userUid']}'";
							if (mysqli_query($conn, $sql2)) {
								$sql3 = "UPDATE userPts SET totalPts = totalPts - '$amtPoints' WHERE username = '{$_SESSION['userUid']}'";
								if (mysqli_query($conn, $sql3)) {
									$_SESSION['reward'] = $outsidePtsReward;
									header("Location: ../redeemShow.php?redeem=success");
									exit();
								}
							}
						}
						else if ($busRedeem == $row2['bus5Name']) {
							$sql2 = "UPDATE userPts SET bus5Pts = bus5Pts - '$amtPoints' WHERE username = '{$_SESSION['userUid']}'";
							if (mysqli_query($conn, $sql2)) {
								$sql3 = "UPDATE userPts SET totalPts = totalPts - '$amtPoints' WHERE username = '{$_SESSION['userUid']}'";
								if (mysqli_query($conn, $sql3)) {
									$_SESSION['reward'] = $outsidePtsReward;
									header("Location: ../redeemShow.php?redeem=success");
									exit();
								}
							}
						}
						else if ($busRedeem == $row2['bus6Name']) {
							$sql2 = "UPDATE userPts SET bus6Pts = bus6Pts - '$amtPoints' WHERE username = '{$_SESSION['userUid']}'";
							if (mysqli_query($conn, $sql2)) {
								$sql3 = "UPDATE userPts SET totalPts = totalPts - '$amtPoints' WHERE username = '{$_SESSION['userUid']}'";
								if (mysqli_query($conn, $sql3)) {
									$_SESSION['reward'] = $outsidePtsReward;
									header("Location: ../redeemShow.php?redeem=success");
									exit();
								}
							}
						}
						else if ($busRedeem == $row2['bus7Name']) {
							$sql2 = "UPDATE userPts SET bus7Pts = bus7Pts - '$amtPoints' WHERE username = '{$_SESSION['userUid']}'";
							if (mysqli_query($conn, $sql2)) {
								$sql3 = "UPDATE userPts SET totalPts = totalPts - '$amtPoints' WHERE username = '{$_SESSION['userUid']}'";
								if (mysqli_query($conn, $sql3)) {
									$_SESSION['reward'] = $outsidePtsReward;
									header("Location: ../redeemShow.php?redeem=success");
									exit();
								}
							}
						}
						else if ($busRedeem == $row2['bus8Name']) {
							$sql2 = "UPDATE userPts SET bus8Pts = bus8Pts - '$amtPoints' WHERE username = '{$_SESSION['userUid']}'";
							if (mysqli_query($conn, $sql2)) {
								$sql3 = "UPDATE userPts SET totalPts = totalPts - '$amtPoints' WHERE username = '{$_SESSION['userUid']}'";
								if (mysqli_query($conn, $sql3)) {
									$_SESSION['reward'] = $outsidePtsReward;
									header("Location: ../redeemShow.php?redeem=success");
									exit();
								}
							}
						}
						else if ($busRedeem == $row2['bus9Name']) {
							$sql2 = "UPDATE userPts SET bus9Pts = bus9Pts - '$amtPoints' WHERE username = '{$_SESSION['userUid']}'";
							if (mysqli_query($conn, $sql2)) {
								$sql3 = "UPDATE userPts SET totalPts = totalPts - '$amtPoints' WHERE username = '{$_SESSION['userUid']}'";
								if (mysqli_query($conn, $sql3)) {
									$_SESSION['reward'] = $outsidePtsReward;
									header("Location: ../redeemShow.php?redeem=success");
									exit();
								}
							}
						}
						else if ($busRedeem == $row2['bus10Name']) {
							$sql2 = "UPDATE userPts SET bus10Pts = bus10Pts - '$amtPoints' WHERE username = '{$_SESSION['userUid']}'";
							if (mysqli_query($conn, $sql2)) {
								$sql3 = "UPDATE userPts SET totalPts = totalPts - '$amtPoints' WHERE username = '{$_SESSION['userUid']}'";
								if (mysqli_query($conn, $sql3)) {
									$_SESSION['reward'] = $outsidePtsReward;
									header("Location: ../redeemShow.php?redeem=success");
									exit();
								}
							}
						}
					}
				}
			}
		}
	}
	else if ($busRedeem == "totalPts") {
		$_SESSION['rewardFor'] = $rewardFor;
		header("Location: ../redeemTP.php");
		exit();
	}
	else if ($rewardFor == "EMPTY" || $busRedeem == "EMPTY") {
		header("Location: ../redeem.php?error=emptybusiness");
		exit();
	}
}
else {
	header("Location: ../index.php");
	exit();
}
