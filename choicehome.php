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
			<h1><font color="white">How Would You Like the Cluster to be Formed?</font></h1>
			</br></br></br>
			<button class="butt" type="button" onclick="window.location.href='auto.php'"><h3>CUSTOM</h3></button>
			<button class="butto" type="button" onclick="window.location.href='cluster2.php'"><h3>TYPICAL</h3></button><br>
			</br><br></br></br>
			
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
			.butto
			{
				background-image: url(backbox.jpg);
				color: green;
				border-radius: 19px;
				font-weight: bold;
				background-size : cover;
				background-repeat: no-repeat;
				background-position: center center;
			}
			.butto1
			{
				background-image: url(backbox.jpg);
				color: green;
				border-radius: 19px;
				font-weight: bold;
				background-size : cover;
				background-repeat: no-repeat;
				background-position: center center;
			}
			.scri
			{
				color=white;
			}
		</style>
		<div class="scri">
		<?php
			shell_exec('sudo /root/Desktop/my/coip.sh');
			shell_exec('sudo /root/Desktop/my/automemory.sh');
			shell_exec('sudo /root/Desktop/my/tellnamenodeip.sh');
			shell_exec('sudo /root/Desktop/my/systemip.sh');
		?>
		</div>
	</body>
</html>
