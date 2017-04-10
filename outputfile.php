<?php

echo '<table style="width:100% ; border-collapse: collapse ; color: yellow" border="1">';
echo '<tr><th>Connected IPs</th> <th>Free Ram</th>';
$file = fopen("/root/Desktop/my/connected_ip.txt", "r") or die("Unable to open file!");
$file1 = fopen("/root/Desktop/my/m1.txt", "r") or die("Unable to open file!");
while (!feof($file))
{   
    $data = fgets($file);
    echo "<tr><td>" . str_replace('|','</td><td>',$data) .'</td>'; 
    $data1= fgets($file1);
    echo "<td>" . str_replace('|','</td><td>',$data1) .'</td></tr>';
   
}
echo '</table>';
fclose($file);
?>


