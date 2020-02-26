<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <title>Bit Academy</title>
</head>

<body>
    <h1>Skateboard <small>(#1)</small></h1>
    <h1>Basketbal <small>(#2)</small></h1>
    <h1>Skeelers <small>(#3)</small></h1>

    <!-- maak hier de opdracht -->
    <form method="POST">
        Keuze:<input type="number" name="num">
        <input type="submit" value="Submit" onclick="">
    </form>



</body>

</html>

<?php

$val = $_POST['num'];
setcookie('num', $_POST['num'], time() + 2);
echo $_COOKIE['num'];


if (isset($_POST['num']) && !empty(($_POST['num']))) {

    if ($_POST['num'] <= 3 && $_POST['num'] >= 1) {

        echo "Gekozen item is: #" . $_POST['num'] . PHP_EOL;
    } else {
        echo "Only Numbers between 1 & 3";
    }
}
