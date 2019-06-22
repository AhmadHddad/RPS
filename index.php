<?php
session_start();
if (!isset($_SESSION['win'])) {
    $_SESSION['win'] = 0;
}
if (!isset($_SESSION['lose'])) {
    $_SESSION['lose'] = 0;
}
include('app.php');
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="style.css">
    <title>Document</title>
</head>


<body>
    <div class="App">
        <h1 class="hi"> Hello, Welcome to Rock Paper Scissors </h1>

        <form class="form" name="form" action="" method="get">
            Your Name :<input type="text" name="subject" id="subject" placeholder=<?php echo $_SESSION['username'] ?>>
        </form>

        <a class="hrefs" href="index.php?id=r">
            <img class="p" border="0" alt="Rock" src=<?php echo ROCK ?>>
        </a>

        <a class="hrefs"  href="index.php?id=p">
            <img class="p" border="0" alt="Paper" src='resources\style_2\paper.png'>
        </a>
        <a class="hrefs" href="index.php?id=s">
            <img class="p"  border="0" alt="Scissors" src=<?php echo SCISSORS ?>>
        </a>

        <p id=<?php echo $result ?>><?php echo $result ?></p>
     
        <img class="cP" alt="" src=<?php echo $computer; ?>>
        <br>
        <br>
        <a href="index.php?reset">
            <img id="resetbtn" border="0" alt="reset" src="resources\reset.png" width="100px" height="100px">
        </a>

        <p id='Win'><?php echo $_SESSION['username'] . " Win Score: " .  $_SESSION['win']; ?></p>
        <p id='Lose'> <?php echo $_SESSION['username'] . " lose Score: " . $_SESSION['lose'] ?></p>

    </div>
</body>

</html>