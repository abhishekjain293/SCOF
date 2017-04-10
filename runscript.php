<!DOCTYPE html>
<html>
	<head>
		<title>
			SCOF Terminal
		</title>
	</head>
	<body>
		<style type="text/css">
			body
			{
				background-image: url(background.jpg);
				-webkit-background-size: cover;
				-moz-background-size: cover;
				-o-background-size: cover;
				background-size: cover;
			}
		</style>
		<h1><center><font color="blue">SCOF - The SUPER MACHINE</font></center></h1>
		<?php
			if (isset($_POST['script']))
			{
				$var1 = shell_exec('sudo /home/mastermind/website/shell.sh');
				echo "</br></br><center><h4><pre><font color='white'>$var1</font></pre></h4></center>";
			}
		?>
		<form method="post"></br></br></br>
			<center>
				<button name="script"><font color="maroon">Run Script</font></button>
			<center>
		</form>
	</body>
</html>
