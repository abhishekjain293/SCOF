<!DOCTYPE html>
<html>
	<head>
		<title>
			SCOF Terminal
		</title>
	</head>
	<body>
		<h1><center><font color="blue">SCOF - The SUPER MACHINE</font></center></h1>
		<style type="text/css">
			body
			{
				background-image: url(background.jpg);
				-webkit-background-size: cover;
				-moz-background-size: cover;
				-o-background-size: cover;
				background-size: cover;
			}
			.scri
			{
				color=white;
			}
		</style>
		</br></br></br>
		<div class="scri">
		<?php
			shell_exec('sudo /root/Desktop/my/tellnamenodeip.sh');
			$var1 = shell_exec('sudo /var/www/html/custom.sh');
			echo "</br></br><center><h3><pre>$var1</pre></h3></center>";
		?>
		</div>
	</body>
</html>
