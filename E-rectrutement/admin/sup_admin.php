<?php 
	
include('../conbdd.php'); 



$id=$_GET['id_admin'];








    mysql_query("delete from admin where id_admin='$id'")or die (mysql_error());


?> <SCRIPT LANGUAGE="Javascript">    alert("Supprim\351 avec succ\351s!");window.location.replace("profil_admin.php"); 

</SCRIPT> <?php
					
					
			

					
					
					
					
					
					
					
					
					
					
					
					
					
					
					

?>