<?php
$val=$_GET['val'];
$files=$val.".pdf";
header('Content-Disposition: attachment; filename="' .urldecode($files).'"');
$fl=fopen($files, r);
while(!feof($fl)){
    echo fread($fl,8192);
    flush();
}
fclose($fl);
?>