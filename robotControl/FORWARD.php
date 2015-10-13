<?php
$myfile = fopen("newfile.txt", "w+") or die("Unable to open file!");
$txt = "FORWARD";
fwrite($myfile, $txt);
fclose($myfile);
?>
