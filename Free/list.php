<?php
$dir="/public_html/free";
$files=scandir($dir);
foreach(scandir($dir) as $files)
echo $files. "</br>";
 ?>
