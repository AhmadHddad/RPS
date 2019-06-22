<?php
// globals
define('ROCK', 'resources\style_2\rock.png');
define('PAPER', 'resources\style_2\paper.png');
define('SCISSORS', 'resources\style_2\scissors.png');

$result =  '';
$computer = '';
// i made the arr like this so computer has "more" options to choose from rather than only 3 options
$arr = [ROCK, PAPER, SCISSORS, ROCK, PAPER, SCISSORS, ROCK, SCISSORS, PAPER];
$computer =  $arr[rand(0, 8)];



if (isset($_GET['id'])) {
    $user = $_GET['id'];

    switch ($user . $computer) {
        case 'r'.SCISSORS:
            $result = 'Win';
            $_SESSION['win'] += 1;
            break;
        case 's'.PAPER:
            $result = 'Win';
            $_SESSION['win'] += 1;
            break;
        case 'p'.ROCK:
            $result = 'Win';
            $_SESSION['win'] += 1;
            break;
        case 's'.ROCK:
            $result = 'Lose';
            $_SESSION['lose'] += 1;
            break;
        case 'r'.PAPER:
            $result = 'Lose';
            $_SESSION['lose'] += 1;
            break;
        case 'p'.SCISSORS:
            $result = 'Lose';
            $_SESSION['lose'] += 1;
            break;
        default:
            $result =  'Tie';
    }
}


if (isset($_GET['reset'])) {
    session_unset();
    session_destroy();
    $_SESSION['win'] = 0;
    $_SESSION['lose'] = 0;
    $computer = '';

}

if (isset($_GET['subject'])) {
    $_SESSION['username'] =  $_GET['subject'];
}
elseif (!isset($_SESSION['username'])) {
    $_SESSION['username'] = 'Human';
}
