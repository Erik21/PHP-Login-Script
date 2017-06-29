<?php
	include 'header.php';
?>

<?php
	if (isset($_SESSION['id'])) {
		echo "<br> ID = ";
		echo $_SESSION ['id'];
		echo "<br>";
		//
		echo "<br> Gebruikersnaam = ";
		echo $_SESSION ['u_uid'];
		//
		echo "<br> Email = ";
		echo $_SESSION ['u_email'];
		echo "<br>";
	} else {
	 echo "Je bent niet ingelogd!";
 }

	if(!empty($_SESSION['u_pcode'])){
		echo "<br> Postocde = ";
		echo $_SESSION ['u_pcode'];
	}

	if(!empty($_SESSION['u_cname'])){
		echo "<br> Bedrijf = ";
		echo $_SESSION ['u_cname'];
	}

	if(!empty($_SESSION['u_website'])){
		echo "<br> Website = ";
		echo $_SESSION ['u_website'];
	}

?>



</body>
</html>
