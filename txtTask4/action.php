<?php
if(!empty($_POST['year'])) {
    $year=$_POST['year'];
    if ($year % 4 == 0)
    {
        $res = 'Високосный год';
    }
    else
    {
	    $res = 'Невисокосный год';
    }
    file_put_contents('index.txt', $res);
    echo file_get_contents('index.txt');
}
else echo 'Введите год.'
?>