<!DOCTYPE html>

<html>

    <head>
        <meta charset="utf-8">
        <title>SQL</title>
        <link type="text/css" rel="stylesheet" href="vitrine.css"/>
    </head>

<body>
 
     <?php

$link = new PDO('mysql:host=localhost;linkname=BaseTest01;charset=utf8');

$sql = "DELATE FROM Users WHERE nom='T-Shirt noir'";
$sth = $link->prepare($sql);
$sth->execute();

     ?>

</body>

</html>