<?php
$fname=$_POST["fn"];
$file=$_POST["txt"];
$filesave=file_put_contents("$fname.free",$file);
if ($filesave) {
  echo "File saved!";
}
else {
  echo "File is not saved";
}
?>
