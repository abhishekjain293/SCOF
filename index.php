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
			$out2 = exec('ifconfig');
			echo "<h3><center><font color='orange'>Your IP Address is $out2</font></center></h3>";
		?>
		<h3 align="right"><font color="white">Welcome Guest!</font></h3>
		<button type="button" style="float: right;" onclick="window.location.href='role.php'">Continue..</button>
		</br></br>
		<p class="para">
			A computer cluster consists of a set of loosely or tightly connected computers</br>
			that work together so that, in many respects, they can be viewed as a single system.</br>
			Clusters have each node set to perform the same task, controlled and scheduled by software.
		</p>
		<p class="para">
			They are usually deployed to improve performance and availability over that of</br>
			a single computer, while typically being much more cost-effective than single</br>
			computers of comparable speed or availability.
		</p>
		<p class="para">
			We will here, showcase some of the ways to form a Cluster, and then would perform</br>
			various operations on them, everything completely automatic, just a click away!
		</p>
		</br>
		<p class="para">
			To proceed, Click on the Continue button Above!
		</p>

		<style type="text/css">
			body
			{
				background-image: url(background.jpg);
				-webkit-background-size: cover;
				-moz-background-size: cover;
				-o-background-size: cover;
				background-size: cover;
			}
			.para
			{
				color: white;
				text-align: center;
			}
		</style>
	</body>
</html>
