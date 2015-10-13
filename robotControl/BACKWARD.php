<?php
$myfile = fopen("newfile.txt", "w+") or die("Unable to open file!");
$txt = "BACKWARD";
fwrite($myfile, $txt);
fclose($myfile);
?>
