<?php
function gcd($a,$b) {
    return ($a % $b) ? gcd($b,$a % $b) : $b;
}
if (isset ($_POST['num1']) && $_POST['num2'] !='') {
    $num1 = $_POST['num1'];
    $num2 = $_POST['num2'];
    $gcd = gcd($num1, $num2);
    file_put_contents('index.txt', $gcd);
    echo 'НОД = '.file_get_contents('index.txt');}
else echo 'Введите данные!';
?>