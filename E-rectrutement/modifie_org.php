<?php session_start();
if (!isset($_SESSION['username'])) { header ('Location: accueil.php'); exit(); }




  include 'conbdd.php';



               $id  = $_SESSION['user'];


               $pseudo_org  = $_POST['pseudo_org'];
			   $adresse_org  = $_POST['adresse_org'];
		       $tel_org  = $_POST['tel_org'];
		       $mdp_org  = $_POST['mdp_org'];




    $result= mysql_query("select * from organisme ") or die ("failed to query database".mysql_error());
	$base = mysql_fetch_array($result);


 $sql = "UPDATE organisme SET  pseudo_org= '$pseudo_org' , adresse_org= '$adresse_org', tel_org= '$tel_org' , mdp_org= '$mdp_org'  WHERE  id_org = '$id' " ;




if($_SESSION['username'] == $pseudo_org ) {



 ?> <SCRIPT LANGUAGE="Javascript">alert(" La modification \340 \351t\351 correctement effectu\351e avec succ\350s !");
	 window.location.replace("accueil.php");  </SCRIPT> <?php






  $requete = mysql_query($sql) or die( mysql_error() ) ;

    }
    else
    {


  if($base['pseudo_org'] == $pseudo_org )
	{


?>
 <SCRIPT LANGUAGE="Javascript">alert(" Votre Nom d Utilisateur existe D\351j\340");window.location.replace("par_recruteur.php");
            </SCRIPT> <?php

            }



	else{




  $requete = mysql_query($sql) or die( mysql_error() ) ;


	?>
 <SCRIPT LANGUAGE="Javascript">alert(" La modification \340 \351t\351 correctement effectu\351e avec succ\350s !");
	 window.location.replace("accueil.php");
            </SCRIPT> <?php




	}

	}


?>
