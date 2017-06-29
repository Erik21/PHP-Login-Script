<?php

session_start();

include '../dbh.php';

$uid = $_POST['uid'];
$pwd = $_POST['pwd'];

$sql = "SELECT * FROM user WHERE uid='$uid'";
$result = mysqli_query($conn, $sql);
$row = mysqli_fetch_assoc($result);
$hash_pwd = $row['pwd'];
$hash = password_verify($pwd, $hash_pwd);


if ($hash == 0) {
 header("Location: ../index.php?error=empty");
 exit();
}
else {

 $sql = "SELECT * FROM user WHERE uid='$uid' AND pwd='$hash_pwd' ";
 $result = mysqli_query($conn, $sql);


 if (!$row = mysqli_fetch_assoc($result)) {
  echo "Gebruikersnaam en/of wachtwoord is onjuist";
 }
 else {
  //echo "You are logged in!";
  $_SESSION['u_uid'] = $row['uid'];
    $_SESSION['u_email'] = $row['email'];
  $_SESSION['id'] = $row['id'];
 }


 header("Location: ../index.php");

}
