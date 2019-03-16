<?php session_start();
if (!isset($_SESSION['user'])) { header ('Location: accueil.php'); exit(); }
include 'conbdd.php';
?>







     <style>
       body{background-color: #eceff1} footer.page-footer{background-color:#e0e0e0  ;}
	   div.d111{ margin: 7vh 12vw; border-radius: 5px;padding: 3vh 2vw;background-color:#ffffff;}
	   div.d222{ margin: 1vh 20vw; border-radius: 5px;padding: 1vh 1vw;background-color:#f1f8e9;}
	</style>









<?php include('include/mec.php');?>





      <div class="hoverable d111 z-depth-5 ">
      <div class=" d222 center   ">
      <h5>  Ma boîte de réception  </h5>
      </div>

<br />  <br> <br>

<?php










$sql = 'SELECT titre, date, candidat.pseudo_cand as expediteur, messages.id as id_message FROM messages, candidat WHERE id_destinataire="'.$_SESSION['user'].'" AND id_expediteur=candidat.id_cand ORDER BY date DESC';

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
               <td><?php echo ' <a href="lire_msg_rec.php?id_message=' , $data['id_message'] , '">'  ?> <i class="material-icons left">message</i>Lire <?php  '</a> ' ?></td>
		       <td><?php echo '<a href="sup_msg_rec.php?id_message=' , $data['id_message'] , '">'     ?>
		        <i class="material-icons left">delete</i>Supprimer <?php '</a>'     ?>    </td>

		 </tbody>
        <?php } ?>
    </table>





  <?php } mysql_free_result($req);mysql_close();?><br><br><br></div>






      <?php include('include/footer.php');?>





  <script >
    $(document).ready(function() {
    $('select').material_select();});
  </script>




</body>
</html>
