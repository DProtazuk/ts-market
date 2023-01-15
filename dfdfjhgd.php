<?php


$coint = ["dssdgsd","test",3,"gdfgdfg","stroka",6];

$sth = $dbh->prepare('INSERT INTO `question` (`name_question`, `type_question`, `id_test`) VALUES (?,?,?),  (?,?,?)');
$sth->execute($coint);

