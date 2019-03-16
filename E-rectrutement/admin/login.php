<?php
session_start();






  include('../conbdd.php');





if (isset($_POST['mdp'])) {

        $mdp = $_POST['mdp'];
        $pseudo = $_POST['pseudo'];
        $nb = @mysql_fetch_array(mysql_query("select * from admin where pseudo='$pseudo' and mdp='$mdp'"));





	 if($pseudo == $nb['pseudo'] && $mdp == $nb['mdp'] )

              {
			    $_SESSION['id'] = $nb['id'];
			   if ($nb['type'] == "admin"){
                $_SESSION['admin'] = $nb['type'];
				$_SESSION['id'] = $nb['id'];
			    header("location:profil_admin.php");}

				  else{
					  if ($nb['type'] == "sous_admin"){
                      $_SESSION['admin'] = $nb['type'];
					  header("location:contact.php");}
		     }}







          else {







            ?>
            <SCRIPT LANGUAGE="Javascript">alert("Login ou mot de passe incorrect"); window.location.replace("admin.php");
            </SCRIPT>    <?php




        }



}

	if (isset($_GET['sortir'])) {
    unset($_SESSION);
    session_destroy();
    header("location:admin.php");
}



            ?>
