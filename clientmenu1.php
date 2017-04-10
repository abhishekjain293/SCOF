<?php
$txt = "data.txt"; 
$fh = fopen($txt, 'w+'); 
if (isset($_POST['name'])) 
{ // check if both fields are set
   $txt=$_POST['name'] ; 
   file_put_contents('data.txt',$txt."\n",FILE_APPEND); // log to data.txt 
   exit();
}
    fwrite($fh,$txt); // Write information to the file
    fclose($fh); // Close the file
    $var2 = shell_exec('sudo /root/Desktop/my/replace_php_data.sh');
    echo "</br></br><center><h3><pre>$var2</pre></h3></center>";
    $var3 = shell_exec('sudo /var/www/html/custom.sh');
    echo "</br></br><center><h3><pre>$var3</pre></h3></center>";
?>
