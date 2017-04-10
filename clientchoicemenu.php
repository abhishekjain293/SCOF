<?php
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
?>
