<?php
$myfile = fopen("newfile.txt", "w+") or die("Unable to open file!");
$txt = "LEFT";
fwrite($myfile, $txt);
fclose($myfile);
?>
