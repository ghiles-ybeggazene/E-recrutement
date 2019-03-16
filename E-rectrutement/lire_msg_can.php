<?php    session_start();
include('conbdd.php');
if (!isset($_SESSION['candidat'])) {header ('Location: accueil.php');exit();} ?>








     <style>
	    .g{padding: 10px}body{background-color:#eceff1 ;}
		div.hoverable{margin: 4vw 50vh;border-radius: 5px;padding: 4vw 10vh;background-color:#ffffff;margin-bottom: 7vh;}
	    div.d2{margin: 3vh 5vw;border-radius: 5px;padding: 6vh 5vw;background-color:#ffffff;}
      .rep{

        padding: 0vw 3vh;
      }
	 </style>







<?php include('include/mecn.php'); ?>






         <br><div class="hoverable z-depth-5 ">


<a href="messagerie_candidat.php">Boite de reception:<i class="material-icons left">reply</i></a><br> <?php

// on teste si notre paramètre existe bien et qu'il n'est pas vide

	   if (!isset($_GET['id_message']) || empty($_GET['id_message'])) {   echo 'Aucun message reconnu.'; }


else {

	include('conbdd.php');



	$sql = 'SELECT titre, date, message, organisme.pseudo_org as expediteur FROM messages, organisme WHERE id_destinataire="'.$_SESSION['candidat'].'" AND id_expediteur=organisme.id_org AND messages.id="'.$_GET['id_message'].'"';
	// on lance cette requete SQL à MySQL
	$req = mysql_query($sql) or die('Erreur SQL !<br />'.$sql.'<br />'.mysql_error());
	$nb = mysql_num_rows($req);

	if ($nb == 0) {
	echo 'Aucun message reconnu.';
	}
	else {

		?>  <div class=" center g  " >






        <?php $data=mysql_fetch_array($req)?>
        <b>Envoyer par:</b>
                       <?php echo $data['expediteur'] ?> <br>
            <b>    Titre:</b>
            <?php echo  $data['titre'] ?>


<br> <br>

 <b>Contenu du Message:</b><br>  <?php
	echo nl2br(stripslashes(htmlentities(trim($data['message']))));    } ?>
	</div>  <?php }



	   ?>






                               <!--  pour repondre au message    -->



 <div class=""><h5><b>Répondre</b> </h5>  </div>




<?php
// on teste si le formulaire a bien été soumis
if (isset($_POST['go']) ) {
	if ( empty($_POST['message'])) {


 ?><SCRIPT LANGUAGE="Javascript">alert(" Votre Message n a pas ete bien envoyer"); </SCRIPT> <?php

	}else {




	include('conbdd.php');



		 $ba = mysql_fetch_array(mysql_query(' SELECT * FROM messages, organisme WHERE id_destinataire="'.$_SESSION['candidat'].'" AND id_expediteur=organisme.id_org AND messages.id="'.$_GET['id_message'].'"  '));





		$ab=$ba['titre'];
		$idD=$ba['id_expediteur'];
		$message=mysql_escape_string($_POST['message']);
		$d=date("Y-m-d H:i:s");
		$id=$_SESSION['candidat'];

	// si tout a été bien rempli, on insère le message dans notre table SQL

	$sql = @mysql_query("INSERT INTO messages (id_expediteur,id_destinataire,date,titre,message)VALUES('$id', '$idD', '$d', '$ab','$message')") or die(mysql_error());




 ?><SCRIPT LANGUAGE="Javascript">alert("Votre Message a ete bien envoyer");
 window.location.href = "messagerie_candidat.php"; </SCRIPT> <?php


	mysql_close(); ;exit();}}





     include('conbdd.php');




$sql = 'SELECT organisme.pseudo_org as nom_destinataire, organisme.id_org as id_destinataire FROM organisme WHERE id_org <> "'.$_SESSION['candidat'].'" ORDER BY pseudo_org ASC';
// on lance notre requete SQL
$req = mysql_query($sql) or die('Erreur SQL !<br />'.$sql.'<br />'.mysql_error());
$nb = mysql_num_rows ($req);?>





	<form action="lire_msg_can.php?id_message=<?php echo $_GET['id_message']?>" method="post">
	    <div class=" center">
	    <h6><b>Votre Message :</b>  </h6></div>
	    <textarea  class="rep" name="message" >  <?php if (isset($_POST['message'])) echo stripslashes(htmlentities(trim($_POST['message']))); ?></textarea>


	    <div class="input-field center">
        <button class="btn waves-effect  waves-light blue darken-4" type="submit"  name="go">Envoyer
        <i class="material-icons right">send</i>
        </button>
        </div>

	</form>





<?php  mysql_free_result($req); mysql_close();
?></div>
<?php include'include/footer.php'; ?>




</body>
</html>
