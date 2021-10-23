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
    <h2 class="title-question">Вы хорошо знаете точные науки?</h2>
    <form action="three-questions.php">
        <p><input class="radio-button" type="radio" name="questions-two" value="i-snap-like-nuts"> Щелкаю как орешки) </p>
        <p><input class="radio-button" type="radio" name="questions-two" value="not-really"> Не очень </p>
        <p><input class="radio-button" type="radio" name="questions-two" value="humanities"> С гордостью заявляю, я гуманитарий </p>
        <input class="go-button" type="submit" value="Дальше">
    </form>
</main>
</body>
</html>

