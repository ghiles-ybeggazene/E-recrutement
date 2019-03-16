<?php session_start();
include 'conbdd.php';
if (!isset($_SESSION['candidat'])) { header ('Location: accueil.php'); exit(); }









                $id  = $_SESSION['candidat'];

                $pseudo_cand  = $_POST['pseudo_cand'];
			    $domicile_cand  = $_POST['domicile_cand'];
		        $tel_cand = $_POST['tel_cand'];
		        $ci_cand  = $_POST['ci_cand'];
		        $mdp_cand  = $_POST['mdp_cand'];




$result= mysql_query("select * from candidat where pseudo_cand='$pseudo_cand' ")  or die ("failed to query database".mysql_error());
$base = mysql_fetch_array($result);


 $sql = "UPDATE candidat SET pseudo_cand= '$pseudo_cand',  domicile_cand= '$domicile_cand', tel_cand= '$tel_cand' ,  ci_cand= '$ci_cand' ,  mdp_cand= '$mdp_cand' WHERE  id_cand= '$id' " ;


if($_SESSION['username'] == $pseudo_cand ) {






   ?> <SCRIPT LANGUAGE="Javascript">alert(" La modification \340 \351t\351 correctement effectu\351e avec succ\350s !");
	 window.location.replace("accueil.php"); </SCRIPT> <?php






  $requete = mysql_query($sql) or die( mysql_error() ) ;

    }
    else
    {


  if($base['pseudo_cand'] == $pseudo_cand)
	{


?>
 <SCRIPT LANGUAGE="Javascript">alert(" Votre Nom d Utilisateur existe D\351j\340");window.location.replace("par_candidat.php");
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
