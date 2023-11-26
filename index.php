<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="" method="get">
        <input type="text" name="text"><br><br>
        <input type="submit">
    </form>
</body>
</html>


<?php
$_SESSION['permission'] = false;
if(isset($_GET['text']) && !empty($_GET['text']))
{
    $myfile = fopen("username.txt", "w") or die("Unable to open file!");
    $text = $_GET['text'] . "\n";
    fwrite($myfile,$text);
    fclose($myfile);
    $_SESSION['permission'] = true;
    $myfile = fopen("username.txt", "r") or die("Unable to open file!");
    echo htmlentities(fread($myfile,filesize("username.txt")));
    fclose($myfile);
}
?>