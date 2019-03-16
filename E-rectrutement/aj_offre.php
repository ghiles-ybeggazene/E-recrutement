<?php
session_start();
include'conbdd.php';






if (isset($_GET['rec']) AND isset($_GET['cnd']) AND isset($_GET['tmp']) AND isset($_GET['pst'])){
    $id_org=($_GET['rec']);
    $id_cand=($_GET['cnd']);
    $temps = ($_GET['tmp']);
    $poste = ($_GET['pst']);

    $z=mysql_query("SELECT * FROM offre WHERE id_org='$id_org' AND id_cand='$id_cand'");
    $ze=mysql_num_rows($z);

    if($ze==0){
    mysql_query("INSERT INTO offre(id_org,id_cand,temps,poste) VALUES
    ('$id_org','$id_cand','$temps','$poste')");
  }else{?>
    <script>
    alert('Vous avez deja fais une offre a ce candidat');
    </script>
    <?php

  }

}

$d=$_SESSION['user'];
$e=mysql_query("SELECT * FROM offre o, candidat c WHERE o.id_org='$d' AND o.id_cand=c.id_cand");
$ne=mysql_num_rows($e);
//var_dump($ne);exit;


include'include/mec.php';

?>

<style media="screen">

  h4{
    margin: 5vw 0vh;
  }
  .c{
  margin: 8vw 49vh;
padding: 1vw 0vh;
  }
</style>






<?php if ($ne==0){
  ?>
  <div class="c white">

<h4 class="center align">Aucune offre envoyée</h4>

</div>

  <?php
}
else {?>
<h4 class="center align">Offres envoyées</h4>


<div class="row">


<table class="striped white col m10 offset-m1">
    <thead>
    <tr>
        <th data-fieled="nom">Nom</th>
        <th data-fieled="prenom">Prenom</th>

        <th data-fieled="mooc" class="hide-on-small-only">Wilaya</th>

        <th data-fieled="age">Age</th>
        <th data-fieled="poste">poste</th>

        <th data-fieled="reponse" class="hide-on-small-only">Réponse</th>
        <th data-fieled="contacter">Contacter</th>
          <th data-fieled="annuler">Annuler l'offre</th>




    </tr>
    </thead>
    <?php while($ee=mysql_fetch_assoc($e)){
    ?>
    <tbody>
       <tr>
        <td><?php  echo $ee['nom_cand'] ?></td>
        <td><?php echo $ee['prenom_cand'] ?></td>

        <td class="hide-on-small-only"><?php echo $ee['domicile_cand'] ?></td>
        <td><?php echo $ee['age_cand'] ?></td>
        <td class="hide-on-small-only"><?php echo $ee['poste'] ?></td>
        <td class="hide-on-small-only"><?php echo $ee['rep_offre'] ?></td>
        <td><button type="button" name=""><a href="envoyer_recruteur.php?cnd=<?php echo $ee['id_cand'];?>&pseudocnd=<?php echo $ee['pseudo_cand'];?>"><i class="material-icons">message</i></a></button></td>
        <td>
          <button type="button" name="" ><a href="ann_offre.php?recr=<?php echo $d;?>&cand=<?php echo $ee['id_cand'];?>"><i class="material-icons">delete</i></a></button>
          <?php

           ?></td>

      </tr>
      </tbody>
      <?php }  ?>

  </table>
</div>

<?php }
include'include/footer.php';

 ?>
