<?php

var_dump($_GET);
$name = "$_GET[name]";
$mail = "$_GET[mail]";
$age = "$_GET[age]";

if (strlen($name) > 3) {
    if (str_contains($mail, '@')) {
        if (is_numeric($age)) {
            echo "Good job!";
        } else {
            echo "C'è qualcosa di sbagliato";
        }
        ;
    } else {
        echo "C'è qualcosa di sbagliato";
    }
    ;

} else {
    echo "C'è qualcosa di sbagliato";
}


?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>

    <form action="" method="get">
        Nome: <input type="text" name="name">
        Mail: <input type="text" name="mail">
        Età: <input type="number" name="age">
        <button type="sumbit">SEND</button>
    </form>

</body>

</html>