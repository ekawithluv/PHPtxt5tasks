<?php
if(!empty($_POST['bday'])) {
  $bday=$_POST['bday'];
  require_once 'data.php';
//Aries
  if (in_array($bday,$Aries1)){
    $res = 'Овен';
  }
  else if (in_array($bday,$Aries2)){
    $res = 'Овен';
  }
//Taurus
  else if (in_array($bday,$Taurus1)){
    $res = 'Телец';
  }
  else if (in_array($bday,$Taurus2)){
    $res = 'Телец';
  }
//Gemini
  else if (in_array($bday,$Gemini1)){
    $res = 'Близнецы';
  }
  else if (in_array($bday,$Gemini2)){
    $res = 'Близнецы';
  }
//Cancer
  else if (in_array($bday,$Cancer1)){
    $res = 'Рак';
  }
  else if (in_array($bday,$Cancer2)){
    $res = 'Рак';
  }
//Leo
  else if (in_array($bday,$Leo1)){
    $res = 'Лев';
  }
  else if (in_array($bday,$Leo2)){
    $res = 'Лев';
  }
//Virgo
  else if (in_array($bday,$Virgo1)){
    $res = 'Дева';
  }
  else if (in_array($bday,$Virgo2)){
    $res = 'Дева';
  }
//Libra
  else if (in_array($bday,$Libra1)){
    $res = 'Весы';
  }
  else if (in_array($bday,$Libra2)){
    $res = 'Весы';
  }
//Scorpio
  else if (in_array($bday,$Scorpio1)){
    $res = 'Скорпион';
  }
  else if (in_array($bday,$Scorpio2)){
    $res = 'Скорпион';
  }
//Sagittarius
  else if (in_array($bday,$Sagittarius1)){
    $res = 'Стрелец';
  }
  else if (in_array($bday,$Sagittarius2)){
    $res = 'Стрелец';
  }
//Capricorn
  else if (in_array($bday,$Capricorn1)){
    $res = 'Козерог';
  }
  else if (in_array($bday,$Capricorn2)){
    $res = 'Козерог';
  }
//Aquarius
  else if (in_array($bday,$Aquarius1)){
    $res = 'Водолей';
  }
  else if (in_array($bday,$Aquarius2)){
    $res = 'Водолей';
  }
//Pisces
  else if (in_array($bday,$Pisces1)){
    $res = 'Рыбы';
  }
  else if (in_array($bday,$Pisces2)){
    $res = 'Рыбы';
  }

  else $res = 'Введите корректные данные.';
  file_put_contents('index.txt', $res);
  echo file_get_contents('index.txt');
}
else echo 'Введите корректные данные.'
?>