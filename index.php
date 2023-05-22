<?php
session_start();

include __DIR__ . '/function.php'
?>


<!DOCTYPE html>
<html>
<head>
    <title>Generatore di Password</title>
</head>
<body>
    <h1>Generatore di Password</h1>

    <form method="GET" action="session.php">
        <label for="length">Lunghezza password:</label>
        <input type="number" id="length" name="lunghezzaPassword" min="" max="20">
        <input type="submit" value="Genera">
    </form>

    