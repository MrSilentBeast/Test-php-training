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
    <h2 class="title-question">Что вам ближе: сидеть за компьютером 8 часов или компаться в компьютерном железе?</h2>
    <form action="four-questions.php">
        <p><input class="radio-button" type="radio" name="questions-three" value="computer"> Компьютер) </p>
        <p><input class="radio-button" type="radio" name="questions-three" value="iron"> Только железо, только хардкор :D </p>
        <p><input class="radio-button" type="radio" name="questions-three" value="not-boring"> Люблю сидеть за компом, но не так много... </p>
        <input class="go-button" type="submit" value="Дальше">
    </form>
</main>
</body>
</html>