<?php
$myfile = fopen("newfile.txt", "w+") or die("Unable to open file!");
$txt = "TEST TEST TEST";
fwrite($myfile, $txt);
fclose($myfile);
?>
