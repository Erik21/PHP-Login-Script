<?php
	session_start();
?>

<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
<title></title>
<!-- <title>VR Platform - Letink Design</title> -->
<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>

<header>
	<nav>
		<ul>
			<li><a href="index.php">Home</a></li>
			<?php

				if(isset($_SESSION['u_uid'])){
					echo $_SESSION['u_uid'];
					echo	"<form action='includes/logout.inc.php'>
									<button>Log uit</button>
								</form>";
				}

				else {
					echo 	"<form action='includes/login.inc.php' method='POST'>
									<input type='text' name='uid' placeholder='Gebruikersnaam'>
									<input type='password' name='pwd' placeholder='Wachtwoord'>
									<button type='submit'>Inloggen</button>
				  			</form>";
				}

			 ?>
			<li><a href="signup.php">Aanmelden</a></li>
		</ul>
	</nav>
</header>
