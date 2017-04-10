<!DOCTYPE html>
<html>
	<head>
		<title>
			SCOF Terminal
		</title>
	</head>
	<body>
		<h1><center><font color="blue">SCOF - The SUPER MACHINE</font></center></h1>
		<?php
			$out1 = exec('date');
			echo "<h3><center><font color='orange'>Current Date and Time are $out1</font></center></h3>";
			$out2 = exec('curl ident.me');
			echo "<h3><center><font color='orange'>Your IP Address is $out2</font></center></h3></br>";
		?>
		<div class="boxed">
  			<center></br>
				PLEASE ENTER USERNAME AND PASSWORD!
				</br></br></br>
				<form action="logincheck1.php" method="POST">
					USERNAME</br>
					<input type="text" name="username">
					</br></br>
					PASSWORD</br>
					<input type="password" name="password">
					</br></br>
					<input type="submit" value="LOGIN">
				</form></br>
<!--				<button type="button" onclick="window.location.href='registerform.php'">REGISTER</button>	-->
			</center>
		</div>
		<style type="text/css">
			body
			{
				background-image: url(background.jpg);
				-webkit-background-size: cover;
				-moz-background-size: cover;
				-o-background-size: cover;
				background-size: cover;
			}
			.boxed 
			{
				color: green;
				font-weight: bold;
				width: 500px;
				background-color: yellow;
				padding: 15px;
				border: 5px solid yellow;
				margin: auto;
				border-radius: 65px;
				background-image: url(backbox.jpg);
				background-size : cover;
				background-repeat: no-repeat;
				background-position: center;
			}
		</style>
	</body>
</html>
