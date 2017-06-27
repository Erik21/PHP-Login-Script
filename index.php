<?php 
	session_start();
?>

<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
<title>VR Platform - Letink Design</title>
<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>

<form action="login.php" method="POST">
	<input type="text" name="uid" placeholder="Gebruikersnaam"><br>
	<input type="password" name="pwd" placeholder="Wachtwoord"><br>
	<button type="submit">Inloggen</button>
</form>

<?php
	if (isset($_SESSION['id'])) {
		echo $_SESSION['id'];
	} else {
		echo "Je bent niet ingelogt!";
	}
?>

<br><br><br>

<form action="signup.php" method="POST">
	<input type="text" name="first" placeholder="Voornaam"><br>
	<input type="text" name="last" placeholder="Achternaam"><br>
	<input type="text" name="uid" placeholder="Gebruikersnaam"><br>
	<input type="password" name="pwd" placeholder="Wachtwoord"><br>
	<button type="submit">Account aanmaken</button>
</form>

<br><br><br>

<form action="logout.php">
	<button>Log uit</button>
</form>

</body>
</html>