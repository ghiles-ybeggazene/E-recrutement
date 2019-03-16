<?php  session_start();
include 'conbdd.php';
if (!isset($_SESSION['user'])) { header ('Location: accueil.php'); exit();  }?>








     <style>
       body{background-color:#eceff1 ;}  .g{padding: 10px}
	   div.hoverable{margin: 6vw 50vh;border-radius: 5px;padding: 4vh 10vw;background-color:#ffffff;margin-bottom: 7vh;}
	   div.d2{margin: 3vh 5vw;border-radius: 5px;padding: 6vh 5vw;background-color:#ffffff;}
	 </style>











         <?php include('include/mec.php');?>







           <!--   lire les messages d un recruteur   -->


              <br> <div class="hoverable z-depth-5 ">


      <a href="messagerie_recruteur.php">Boite de reception:<i class="material-icons left">reply</i></a><br>
      <br><?php
       // on teste si notre paramètre existe bien et qu'il n'est pas vide
     if (!isset($_GET['id_message']) || empty($_GET['id_message'])) {
	 echo 'Aucun message reconnu.';
     }
     else {
	 include('conbdd.php');



	$sql = 'SELECT titre, date, message, candidat.pseudo_cand as expediteur FROM messages, candidat WHERE id_destinataire="'.$_SESSION['user'].'" AND id_expediteur=candidat.id_cand AND messages.id="'.$_GET['id_message'].'"';
	// on lance cette requete SQL à MySQL
	$req = mysql_query($sql) or die('Erreur SQL !<br />'.$sql.'<br />'.mysql_error());
	$nb = mysql_num_rows($req);

	if ($nb == 0) {
	echo 'Aucun message reconnu.';
	}
	else {

		?> <div class=" center g  " >






        <?php $data=mysql_fetch_array($req)?>
        <b>Envoyer par:</b>
                       <?php echo $data['expediteur'] ?> <br>
            <b>    Titre:</b>
            <?php echo  $data['titre'] ?>


<br> <br>


	  <?php

		?> <b>Contenu du Message:</b> <br> <?php
	echo nl2br(stripslashes(htmlentities(trim($data['message']))));    } ?>

<br><br>
	  <?php


	mysql_free_result($req);mysql_close();}?>





</div>
     <!--  pour repondre au message    -->

    <?php
    // on teste si le formulaire a bien été soumis
    if (isset($_POST['go']) ) {
	if ( empty($_POST['message'])) {


 ?> <SCRIPT LANGUAGE="Javascript">alert(" Votre Message n a pas ete envoyer");</SCRIPT> <?php

	}
	else {

		     include('conbdd.php');


		 $ba = mysql_fetch_array(mysql_query(' SELECT * FROM messages, candidat WHERE id_destinataire="'.$_SESSION['user'].'" AND id_expediteur=candidat.id_cand AND messages.id="'.$_GET['id_message'].'"  '));




		$ab=$ba['titre'];
		$idD=$ba['id_expediteur'];
		$message=mysql_escape_string($_POST['message']);
		$d=date("Y-m-d H:i:s");
		$id=$_SESSION['user'];


	// si tout a été bien rempli, on insère le message dans notre table SQL
	$sql = @mysql_query("INSERT INTO messages (id_expediteur,id_destinataire,date,titre,message)VALUES('$id', '$idD', '$d', '$ab','$message')") or die(mysql_error());




    ?><SCRIPT LANGUAGE="Javascript">alert(" Votre Message a ete bien envoyer");
      window.location.href = "messagerie_recruteur.php";</SCRIPT> <?php mysql_close();
	 }}





include('conbdd.php');




$req = mysql_query($sql) or die('Erreur SQL !<br />'.$sql.'<br />'.mysql_error());
$nb = mysql_num_rows ($req);mysql_free_result($req);mysql_close();?>




	<form action="lire_msg_rec.php?id_message=<?php echo $_GET['id_message']?>" method="post">

	   <div class=" center"> <h6><b>Répondre :</b>  </h6></div>
	   <textarea class="rep" name="message" >  <?php if (isset($_POST['message'])) echo stripslashes(htmlentities(trim($_POST['message']))); ?></textarea>

	   <div class="input-field center">
       <button class="btn waves-effect  waves-light blue darken-4" type="submit"  name="go">Envoyer
       <i class="material-icons right">send</i>
       </button>
       </div>

	   </form>

<style media="screen">
.rep{

  padding: 0vw 3vh;
}

</style>

</div>
</body>
</html>
