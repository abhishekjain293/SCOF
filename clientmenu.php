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
			<button class="butt" type="button" onclick="window.location.href='custom.php'"><h3>CUSTOM</h3></button>
			<button class="butto" type="button" onclick="window.location.href='cluster2.php'"><h3>TYPICAL</h3></button><br>
			<button class="butto1" type="button" onclick="window.location.href='jps.php'"><h3>jps</h3></button>
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
		</style>
		<div class="cmenu">
		<?php
			$txt = "data.txt"; 
			$fh = fopen($txt, 'w+'); 
			if (isset($_POST['name'])) 
			{
			   // check if both fields are set
			   $txt=$_POST['name'] ; 
			   file_put_contents('data.txt',$txt."\n",FILE_APPEND); // log to data.txt 
			   exit();
			}
			   fwrite($fh,$txt); // Write information to the file
			   fclose($fh); // Close the file
			   shell_exec('sudo /root/Desktop/my/replace_php_data.sh');
		?>
		</div>
	</body>
</html>
