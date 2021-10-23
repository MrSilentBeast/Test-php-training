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
<header class="title">
    <div class="header-title">
        <h1 class="title-h">Поздравляем! Вам лучше пойти в ...</h1>
    </div>
</header>
<section class="image-board">
    <div class="main-image">
        <?php
        if(isset($_POST["questions-four"]) && $_POST["questions-four"] == "student") {

        ?>
        <img class="image-section-who" src=<?php echo "../images/gamedev.jpg"; ?> alt="IT-image">
        <?php  };  ?>
    </div>
</section>
</body>
</html>
