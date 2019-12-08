<?php
$openfile=$_POST["fop"];
if(file_exists(data.free)){
$file=fopen("data.free","r") or die("Error!") ;
echo fread($file,filesize("data.free"));}
else echo "File isn't exists!";
 ?>
