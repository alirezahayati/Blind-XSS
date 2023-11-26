<?php
session_start();
if($_SESSION['permission'] == true)
{
    $myfile = fopen("username.txt", "r") or die("Unable to open file!");
    $text = fread($myfile,filesize("username.txt"));
    echo "<html><head></head><body><img src='" . $text . "'></body></html>";
    fclose($myfile);
}
?>