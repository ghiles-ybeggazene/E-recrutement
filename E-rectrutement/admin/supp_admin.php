<?php 
	
include('../conbdd.php'); 




$id=$_GET['id_cnt'];
    mysql_query("delete from contact where id_cnt='$id'")or die (mysql_error());


?> <SCRIPT LANGUAGE="Javascript">    alert("Supprim\351 avec succ\351s!");window.location.replace("contact_admin.php"); 

</SCRIPT> <?php

?>