<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="shortcut icon" href="../images/ico.png" type="image/png">
    <link rel="stylesheet" href="../reset.css">
    <link rel="stylesheet" href="../style.css">
    <title>Test IT</title>
</head>
<body>

<?php
include_once "start-shablon.php";
?>

<section class="image-board">
    <div class="main-image">
        <img class="image-section-who" src="../images/main-image.png" alt="IT-image">
    </div>
</section>

<main class="test-questions">
    <h3 class="title-question">Последний вопрос... \( :D )/</h3>
    <h2 class="title-question">Вы любите учиться? (Да, вот так банально :) )</h2>
    <form action="result.php">
        <p><input class="radio-button" type="radio" name="questions-four" value="student"> Готов посвящать этому все свое время) </p>
        <p><input class="radio-button" type="radio" name="questions-four" value="in-moderation"> Все в меру... </p>
        <p><input class="radio-button" type="radio" name="questions-four" value="to-battle"> Не очень, живу по принципу "сразу в бой!" </p>
        <input class="go-button" type="submit" value="Узнать результаты :)">
    </form>
</main>
</body>
</html>
