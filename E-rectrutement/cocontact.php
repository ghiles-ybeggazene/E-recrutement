<?php
include 'conbdd.php';


$nom = $_POST['nom'];
$prenom = $_POST['prenom'];
$email = $_POST['email'];
$message = $_POST['message'];

$date= date("Y-m-d H:i");
if(($nom=='') or ($prenom=='') or ($email=='') or ($message=='')){
  ?>
  <script type="text/javascript">
    alert('Veuillez renseigner tout les champs');
  </script> <?php
}


//mysql_query("INSERT INTO contact(nom_cnt,prenom_cnt,email_cnt,msg_cnt) VALUES('$nom','$prenom','$email','$message')") or die mysql_error();
mysql_query("INSERT INTO contact (nom_cnt,prenom_cnt,email_cnt,msg_cnt,date) VALUES ('$nom','$prenom','$email','$message','$date')");

header ("location: msgrecu.php");

 ?>
