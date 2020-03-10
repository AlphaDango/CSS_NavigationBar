<?php
	$name = $_POST["name"];
	$adresse = $_POST["adresse"];
	$alter = $_POST["alter"];
	$fachbereich = $_POST["fachbereich"];
	$uni =$_POST["uni"];

?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN"
"DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
	<head>
	<meta charset="UTF-8">
		<title>Registrierung</title>
	</head>
	<body>
	<?php
		if (empty($name)) {
			echo "Bitte den Namen angeben!";
		} elseif (empty($adresse)) {
			echo "Bitte die Adresse angeben!";
		} elseif (empty($alter)) {
			echo "Bitte ein Alter angeben!";
		} elseif (empty($fachbereich)) {
			echo "Bitte den Fachbereich angeben!";
		} elseif ($alter < 18 || $alter > 60) {
			echo "Die Mitgliedschaft ist nur für Studenten zwischen 18 und 60 Jahren";
		} elseif ($uni == "no") {
			echo "Die Mitgliedschaft ist nur für Studenten der Technischen Universit&auml;t Clausthal";
		}
		else
			echo "<h1>Mitgliedsaufnahme</h1><br>Vielen Dank für Ihren Antrag. Ihre Mitgliedsbest&auml;tigung wird Ihnen per Post zugesendet!";
	?>
</body>
</html>