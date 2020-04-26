<?php
define('PONEDILOK', 1);
define('VIVTOROK', 2);
define('SEREDA', 3);
define('CHETVER', 4);
define('PYTNICA', 5);
define('SUBOTA', 6);
define('NEDILY', 7);
$day = 9;

switch ($day){
    case  PONEDILOK:
        echo 'Понеділок';
        break;
    case  VIVTOROK:
        echo 'Вівторок';
        break;
    case  SEREDA:
        echo 'Середа';
        break;
    case  CHETVER:
        echo 'Четвер';
        break;
    case  PYTNICA:
        echo 'Пятниця';
        break;
    case  SUBOTA:
        echo 'Субота';
        break;
    case  NEDILY:
        echo 'Неділя';
        break;
    default:
        echo 'такого дня тижня нема';
}
switch ($day){
    case  PONEDILOK:
    case  VIVTOROK:
    case  SEREDA:
    case  CHETVER:
    case  PYTNICA:
        echo ' Это выходные';
        break;
    case  SUBOTA:
    case  NEDILY:
        echo ' ето робочи дни';
        break;
    default:
    echo 'ytbpdtcybq ltym';
}

?>

