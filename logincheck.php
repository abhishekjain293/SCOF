<?php
	if(($_POST["username"]=="scofterminal") && ($_POST["password"]=="canyouhackit#"))
		header('Location: choicehome.php');
	else
		header('Location: loginfail.php');
?>
