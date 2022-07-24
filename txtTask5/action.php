<?php
if (isset ($_POST['d']) && $_POST['m'] && $_POST['y'] !='') {
 $week = ['Воскресенье', 'Понедельник', 'Вторник', 'Среда', 'Четверг', 'Пятница', 'Суббота'];
 $date = $week[date('w', mktime(0,0,0, date($_POST['m']), date($_POST['d']), date($_POST['y'])))];
 file_put_contents('index.txt',$date);
 echo file_get_contents('index.txt');}
?>