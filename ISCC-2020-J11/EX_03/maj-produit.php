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

function updateProduitShortbleu()
{
    return "UPDATE produit WHERE Short bleu SET id_4 = '1' ";
}

     ?>

</body>

</html>
