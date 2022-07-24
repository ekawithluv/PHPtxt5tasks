<?php
if (isset ($_POST['num1']) && $_POST['num2'] && $_POST['num3'] !='') {
    $num1 = $_POST['num1'];
    $num2 = $_POST['num2'];
    $num3 = $_POST['num3'];
    $max = max($num1,$num2,$num3);
    if ($max == $num1) {
        if (pow($num1,2) == pow($num2,2)+pow($num3,2)){
        $res = 'Эти числа являются тройкой Пифагора.';}
        else {$res = 'Эти числа не являются тройкой Пифагора.';}
    }
    else if ($max == $num2) {
        if (pow($num2,2) == pow($num1,2)+pow($num3,2)){
        $res = 'Эти числа являются тройкой Пифагора.';}
        else {$res = 'Эти числа не являются тройкой Пифагора.';}
    }
    else if($max == $num3) {
        if (pow($num3,2) == pow($num2,2)+pow($num1,2)){
        $res = 'Эти числа являются тройкой Пифагора.';}
        else {$res = 'Эти числа не являются тройкой Пифагора.';}
    }
    file_put_contents('index.txt', $res);
    echo file_get_contents('index.txt');}
else echo 'Введите данные!';
?>