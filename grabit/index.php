<?php
header(“Location:danherepe.github.io”);
$file=“iplog.txt”; 
$f=fopen($file,‘a’); 
fwrite($f,“————————-“.”n”); 
fwrite($f,“ipadr:”.$_SERVER[‘REMOTE_ADDR’].”n”);
fclose($f); 
?>
