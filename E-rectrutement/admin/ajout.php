<?php  session_start();
if (!isset($_SESSION['admin'])) { header ('Location: admin.php');exit();}


   include('../conbdd.php');


$pseudo=$_POST['pseudo'];
$mdp=$_POST['mdp'];
$type="sous_admin";



$sql=' SELECT* FROM admin where pseudo= "' . $_POST['pseudo'] . '"  and mdp= "' . $_POST['mdp'] . '"';
	        $req = mysql_query($sql) ;
            $base = mysql_fetch_array($req);






     if($_POST['pseudo'] == $base['pseudo']  )

	  {


       ?><SCRIPT LANGUAGE="Javascript">alert(" Pseudo admin  existe D\351j\340");
	     window.location.replace("profil_admin.php");</SCRIPT> <?php


      }
      else if (strlen($mdp)<6)
       {
         ?>
       <script>
         alert("Le mot de passe doit contenir au moins 6 caracteres");
 window.location.replace("profil_admin.php");

       </script>

         <?php
       }


    else
     {

       $requete="insert into admin values('','$pseudo','$mdp','$type')";
       mysql_query($requete);





		?>
 <SCRIPT LANGUAGE="Javascript">alert(" Merci votre ajout \340 \351t\351 effectu\351e avec succ\350s !")                  window.location.replace("profil_admin.php"); </SCRIPT> <?php

 }



?>
