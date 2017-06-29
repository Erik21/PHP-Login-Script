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
					*<input type='text' name='first' placeholder='Voornaam'>
					*<input type='text' name='last' placeholder='Achternaam'><br><br>
					*<input type='text' name='email' placeholder='Email Address'><br><br>
					<input type='text' name='pcode' placeholder='Postcode'><br>
					<input type='text' name='cname' placeholder='Bedrijf'><br>
					<input type='text' name='website' placeholder='Website'><br><br>
					*<input type='text' name='uid' placeholder='Gebruikersnaam'><br>
					*<input type='password' name='pwd' placeholder='Wachtwoord'><br><br>
					<button type='submit'>Account aanmaken</button>
				</form>";
	}
?>

</body>
</html>
