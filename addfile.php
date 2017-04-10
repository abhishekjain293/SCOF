<!DOCTYPE html>
<html>
	<head>
		<title>
			SCOF Terminal
		</title>
		

	</head>
	<body>
		<h1><center><font color="blue">SCOF - The SUPER MACHINE</font></center></h1>
		<center>
			</br></br>
			<h1><font color="white">SUCCESSFULLY ADDED</font></h1>
			
		</center>
		<style type="text/css">
			body
			{
				background-image: url(background.jpg);
				-webkit-background-size: cover;
				-moz-background-size: cover;
				-o-background-size: cover;
				background-size: cover;
			}
			.butt
			{
				margin-right:100px;
				background-image: url(backbox.jpg);
				color: green;
				border-radius: 19px;
				font-weight: bold;
				background-size : cover;
				background-repeat: no-repeat;
				background-position: center ;
			}
			.scrii
			{
				color=white;
			}
		</style>
		<div class="scrii">
		<?php
			shell_exec('sudo /root/Desktop/my/fileadded.sh');
			
		?>
		</div>
	</body>
</html>
