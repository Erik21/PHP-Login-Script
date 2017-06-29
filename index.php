<?php
	include 'header.php';
?>

<?php
	if (isset($_SESSION['id'])) {
		echo "Ingelogd";

	} else {
	 echo "Je bent niet ingelogd!";
 }

?>



</body>
</html>
