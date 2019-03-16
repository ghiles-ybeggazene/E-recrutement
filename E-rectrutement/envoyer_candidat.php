<?php
 session_start();
 include 'conbdd.php';

 if (!isset($_SESSION['candidat'])) { header ('Location: accueil.php'); exit();  }


if(isset($_GET['org']) && isset($_GET['pseudorg'])){
$idorg= ($_GET['org']);

$ps= ($_GET['pseudorg']);

}



?>







     <style>
	  body{background-color: #eceff1}
	  div.hoverable{margin:  0vh 20vw;margin-bottom: 5vh;border-radius: 5px;padding: 4vh 9vw;background-color:#ffffff;}
    </style>





<?php   include'include/mecn.php';  ?>







            <br>
           <div class="hoverable z-depth-5 ">
           <div class="center-align"><h5><b>Envoyer un nouveau Message</b> </h5></div> <br>




   <?php
// on teste si le formulaire a bien été soumis
  if (isset($_POST['action']) ) {




    // si tout a été bien rempli, on insère le message dans notre table SQL
    $sql = 'INSERT INTO messages VALUES("", "'.$_SESSION['candidat'].'", "'.$_POST['a'].'", "'.date("Y-m-d H:i:s").'", "'.mysql_escape_string($_POST['titre']).'", "'.mysql_escape_string($_POST['message']).'")';
    mysql_query($sql) or die('Erreur SQL !'.$sql.'<br />'.mysql_error());mysql_close();
    mysql_close();

?>

          <SCRIPT LANGUAGE="Javascript">alert("  Votre Message \340 bien \351t\351envoy\351");
		     window.location.replace("messagerie_candidat.php");</SCRIPT>
      <?php   }?>



    <a href="messagerie_candidat.php">Boite de reception:<i class="material-icons left">reply</i></a><br><br> <?php













	     // si au moins un membre qui n'est pas nous même a été trouvé, on affiche le formulaire d'envoie de message


	     ?><div class="ro">
	     <form action="envoyer_candidat.php" method="post">




         <div class="row">
         <div class="input-field col s12">

         <input id="username" type="text" class="validate"  disabled  name="destinataire" value="<?php echo $ps;?>">
         <label for="icon_prefix"> Destinaire :</label>
         </div></div>




	          <div class="row">
              <div class="input-field col s12">
              <i class="material-icons prefix">title</i>
              <input id="email" name="titre"  type="text" class="validate" value="<?php if (isset($_POST['titre'])) echo stripslashes(htmlentities(trim($_POST['titre']))); ?>">
              <label for="icon_telephone" for="email" data-error="wrong" data-success="right">Titre:<span class="red-text text-darken-2">*</span></label>
              </div>
              </div><br>

<input type="hidden" name="a" value="<?php echo $idorg; ?>">


	         <div class=" center">
	         <h6><b>Votre Message :</b>  </h6></div>
	         <textarea  name="message" >  <?php if (isset($_POST['message'])) echo stripslashes(htmlentities(trim($_POST['message']))); ?></textarea>
	         <div class="input-field center">
             <button class="btn waves-effect  waves-light" type="submit"  name="action">Envoyer
             <i class="material-icons right">send</i></button>
             </div>



	     </form>
	     </div>
	     </div>









<script>$(document).ready(function() {$('select').material_select();});</script>
