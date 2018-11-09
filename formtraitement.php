<?php
/**
 * Created by PhpStorm.
 * User: MIRA
 * Date: 08/11/2018
 * Time: 17:47
 */


$sandwich=$_POST["sandwich"];
$CIN=$_POST["CIN"];

$file = uniqid('-');
$myfile = fopen("upload_files/file'.$file.'.txt", "w") or die("Unable to open file!");
fwrite($myfile, $sandwich);
fwrite($myfile, $CIN);
fclose($myfile);




