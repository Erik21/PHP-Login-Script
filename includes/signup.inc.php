<?php
// Empty check for sign up
session_start();
include '../dbh.php';

$first = $_POST['first'];
$last = $_POST['last'];
$uid = $_POST['uid'];
$pwd = $_POST['pwd'];
$email = $_POST['email'];

if (empty($first))
{
	header("Location: ../signup.php?error=empty");
	exit();
}

if (empty($last))
{
	header("Location: ../signup.php?error=empty");
	exit();
}
//

if (empty($uid)) {
	header("Location: ../signup.php?error=empty");
	exit();
}


if (empty($pwd)) {
	header("Location: ../signup.php?error=empty");
	exit();
}


else {
	$sql = "SELECT uid FROM user WHERE uid='$uid'";
	$result = mysqli_query($conn, $sql);
	$uidcheck = mysqli_num_rows($result);
	if ($uidcheck > 0) {
		header("Location: ../signup.php?error=username");
		exit();
	} else {
		$hashed_password = password_hash($pwd, PASSWORD_DEFAULT);
		$sql = "INSERT INTO user (first, last, uid, pwd, email) VALUES ('$first', '$last', '$uid', '$hashed_password', '$email')";
		$result = mysqli_query($conn, $sql);

		header("Location: ../index.php");
	}


}
