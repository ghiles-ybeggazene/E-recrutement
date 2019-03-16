<?php 
include('../conbdd.php'); 
$id=$_GET['id_cand'];
    mysql_query("delete from candidat where id_cand='$id'")or die (mysql_error());

?> <SCRIPT LANGUAGE="Javascript">    alert("Le candidat a \351t\351 Supprim\351 avec succ\351s!");window.location.replace("candidat_admin.php"); </SCRIPT> <?php


?>
