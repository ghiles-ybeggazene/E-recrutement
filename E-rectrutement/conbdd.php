<?php

 $con = mysql_connect('localhost','root','');
 $conn = mysql_select_db('recrutement');

if(!$con or !$conn) {
die ("connexion failed: ". mysql_error());
}

 ?>
