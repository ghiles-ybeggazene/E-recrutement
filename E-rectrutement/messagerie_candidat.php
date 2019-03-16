<?php  session_start();
include 'conbdd.php';
if (!isset($_SESSION['candidat'])) { header ('Location: accueil.php'); exit();  }?>




<!DOCTYPE html>
    <html>
    <head>
    <title>Messagerie</title>
    <link href="css/icons.css" rel="stylesheet">
    <link type="text/css" rel="stylesheet" href="css/materialize.min.css"  media="screen,projection"/>
    <link type="text/css" rel="stylesheet"    href="accueil.css"   media="screen,projection"/>
    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
    <meta charset="utf-8">




     <style>
        body{background-color: #eceff1}  footer.page-footer{background-color:#e0e0e0  ;}
		div.d1{margin: 7vh 12vw;border-radius: 5px;padding: 3vh 2vw;background-color:#ffffff;}
	    div.d2{ margin: 1vh 20vw;border-radius: 5px;padding: 1vh 1vw;background-color:#f1f8e9;}
     </style>





 </head>





<?php include('include/mecn.php');?>




     <div class="d1 z-depth-5 ">
     <div class=" d2 center   ">
     <h5>  Ma boîte de réception  </h5>
     </div>



<br />  <br> <br>



<?php






// on prépare une requete SQL cherchant tous les titres, les dates ainsi que l'auteur des messages pour le membre connecté
$sql = 'SELECT titre, date, organisme.pseudo_org as expediteur, messages.id as id_message FROM messages, organisme WHERE id_destinataire="'.$_SESSION['candidat'].'" AND id_expediteur=organisme.id_org ORDER BY date DESC';
// lancement de la requete SQL
$req = mysql_query($sql) or die('Erreur SQL !<br />'.$sql.'<br />'.mysql_error());
$nb = mysql_num_rows($req);

if ($nb == 0) {
	echo 'Vous n\'avez aucun message.';
}
else {?>




		 <table class="highlight responsive-table">
        <thead>
        <tr><th data-fieled="id">Date:</th>
            <th data-fieled="nom">Titre:</th>
            <th data-fieled="prenom">Envoyer par:</th>
            <th data-fieled="prenom">Message:</th>
            <th data-fieled="prenom">Supprimer:</th>

        </thead>
        <?php while($data=mysql_fetch_array($req)){?>
       <tbody>
            <tr>
               <td><?php echo $data['date'] ?></td>
               <td><?php echo  $data['titre'] ?></td>
               <td><?php echo $data['expediteur'] ?></td>
               <td><?php echo ' <a href="lire_msg_can.php?id_message=' , $data['id_message'] , '">'  ?> <i class="material-icons left">message</i>Lire <?php  '</a> ' ?></td>
		       <td><?php echo '<a href="sup_msg_can.php?id_message=' , $data['id_message'] , '">'     ?>
		        <i class="material-icons left">delete</i>Supprimer <?php '</a>'     ?>    </td>

		 </tbody>
        <?php } ?>
    </table>


	<?php }


mysql_free_result($req); mysql_close(); ?>
<br><br><br></div>





      <?php include('include/footer.php');?>






  <script type="text/javascript">
      $(document).ready(function() {
      $('select').material_select();});
  </script>




</body>
</html>
