<?php
 session_start();



  include 'conbdd.php';

 // if( isset($_SESSION['user'])!="" ){
  // header("Location: recruteur.php");



 if (isset ($_POST['sub']) ){




 $nom = $_POST['nom'];
 $desc = $_POST['description'];
 $domaine = $_POST['domaine'];
 $tel = $_POST['tél'];
 $adresse = $_POST['adresse'];
 $email = $_POST['email'];
 $pseudo = $_POST['pseudo'];

 $pass = $_POST['pass'];
 $pass = trim($pass);
 $pass = strip_tags($pass);
 $pass = htmlspecialchars($pass);
 // var_dump($pass,$pseudo,$email,$adresse,$tél,$nom,$prenom,$daten);
 // exit;

 $resultt = mysql_query("SELECT pseudo_org FROM organisme WHERE pseudo_org = '$pseudo'") or die (mysql_error());
 $countt = mysql_num_rows($resultt);
 $result = mysql_query( "SELECT email_org FROM organisme WHERE email_org ='$email'") or die (mysql_error());
 $count = mysql_num_rows($result);


 if ($count!==0) {
   ?>
 <script type="text/javascript">
   alert("mail adress is already used");
     window.location.href = "inscription.php";
 </script>

   <?php

 }
 if ($countt!==0) {

   ?>
 <script type="text/javascript">
   alert("user name is already used");
    window.location.href = "inscription.php";
 </script>

   <?php

 }


  if (strlen($pass<6))
 {
   ?>
 <script>
   alert("Le mot de passe doit contenir au moins 6 caracteres");
    window.location.href = "inscription.php";

 </script>

   <?php
 }


else{

 $pass = hash('sha256', $pass);

 $query="INSERT INTO organisme (nom_org,desc_org,domaine_org,tel_org,adresse_org,email_org,pseudo_org,mdp_org)
  VALUES ('$nom','$desc','$domaine','$tel','$adresse','$email','$pseudo','$pass')";
 mysql_query($query)or die(mysql_error());
 $_SESSION ['user'] = $pseudo;
 header("Location: recruteur.php");
}



 }

 ?>
