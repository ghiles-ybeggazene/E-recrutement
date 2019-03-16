<?php 
include('../conbdd.php'); 
$id=$_GET['id_org'];
    mysql_query("delete from organisme where id_org='$id'")or die (mysql_error());

?> <SCRIPT LANGUAGE="Javascript">    alert("Le recruteur a \351t\351 Supprim\351 avec succ\351s!");window.location.replace("recruteur_admin.php"); </SCRIPT> <?php


?>
