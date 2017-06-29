<?php
	include 'header.php';
?>

<?php

	$url = "http://".$_SERVER['HTTP_HOST'].$_SERVER['REQUEST_URI'];
	if (strpos($url, 'error=empty') !== false) {
		echo "Vul alle velden in!";
	}
	elseif (strpos($url, 'error=username') !== false) {
		echo "Gebruikersnaam bestaat al";
	}

	if (isset($_SESSION['id'])) {
		//echo
	} else {
		echo "Je bent niet ingelogt!";
	}
?>

<br><br><br>

<?php
	if (isset($_SESSION['id'])) {
		echo "Je bent al ingelogd!";
	} else {
		echo 	"<form action='includes/signup.inc.php' method='POST'>
					<input type='text' name='first' placeholder='Voornaam'><br>
					<input type='text' name='last' placeholder='Achternaam'><br>
					<input type='text' name='email' placeholder='Email Address'><br>
					<input type='text' name='uid' placeholder='Gebruikersnaam'><br>
					<input type='password' name='pwd' placeholder='Wachtwoord'><br>
					<button type='submit'>Account aanmaken</button>
				</form>";
	}
?>




</body>
</html>
