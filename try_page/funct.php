<?php

$dishs = filter_var (trim($_POST['dishs']),
FILTER_SANITIZE_STRING);

$addresss = filter_var (trim($_POST['addresss']),
FILTER_SANITIZE_STRING);

$nombers = filter_var (trim($_POST['nombers']),
FILTER_SANITIZE_STRING);

$names = filter_var (trim($_POST['names']),
FILTER_SANITIZE_STRING);


if (mb_strlen($dishs)<5|| mb_strlen($dishs)>60) {
    echo "Невідома страва";
    exit ();

} else if (mb_strlen($addresss)<5 ||mb_strlen($addresss)>40) {
    echo "Неповна назва вулиці";
    exit ();

} else if (mb_strlen($nombers)<10 || mb_strlen($nombers)>12) {
    echo "Неможливий номер";
    exit ();

} else if (mb_strlen($names)<3 || mb_strlen($names)>90){
    echo "Неповне ім`я";
    exit();
}


$mysql = new mysqli ('localhost','root','','rest');
$mysql ->query("INSERT INTO `nyt` (`dishs`, `addresss`,`nombers`, `names`)
VALUES('$dishs', '$addresss', '$nombers', '$names')");
GRANT [INSERT] ON [rest].[nyt] TO ‘non-root’@'localhost’;

$mysql->close();

header ('Location:/');



?>