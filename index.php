<?php
	include 'header.php';
?>



<?php
	if (isset($_SESSION['u_uid'])) {
		echo "<br> Gebruikersnaam = ";
		echo $_SESSION ['u_uid'];
	}

	if (isset($_SESSION['u_email'])) {
		echo "<br> Email = ";
		echo $_SESSION ['u_email'];
	}

	if (isset($_SESSION['id'])) {
		echo "<br> ID = ";
		echo $_SESSION ['id'];
	}

	 else {
		echo "Je bent niet ingelogd!";
	}
?>



</body>
</html>
