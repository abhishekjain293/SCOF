<?php
	if(($_POST["username"]=="scofterminal") && ($_POST["password"]=="canyouhackit#"))
		header('Location: auto1.php');
	else
		header('Location: loginfail.php');
?>
