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
			<h1><font color="white">Result</font></h1>
			</br></br></br>
			<button class="butt" type="button" onclick="window.location.href='auto.php'"><h3>Next </h3></button>
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
			.scrii
			{
				color=white;
			}
		</style>
		<div class="scrii">
		<?php
			{
				$txt = "/root/Desktop/my/namenodeip.txt"; 
				$fh = fopen($txt, 'w+'); 
				if (isset($_POST['name'])) 
				{
					// check if both fields are set
					$txt=$_POST['name'] ; 
					file_put_contents("/root/Desktop/my/namenodeip.txt",$txt."\n",FILE_APPEND); // log to data.txt 
					exit();
				}
				fwrite($fh,$txt); // Write information to the file
				fclose($fh); // Close the file;
			}
			
		?>
		</div>
	</body>
</html>
