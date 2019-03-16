<?php session_start();

include'conbdd.php';

if ( !(isset($_SESSION['candidat']))){

header("location: accueil.php");

}
$s= $_SESSION['candidat'];

$o=mysql_query("SELECT * FROM offre o, organisme oo WHERE o.id_cand='$s'
AND o.id_org = oo.id_org");
$no=mysql_num_rows($o);
//var_dump($no);exit;

 ?>







<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Esapce candidat</title>
  <?php


include 'include/mecn.php';   ?>
<style media="screen">

  h4{
    margin: 5vw 0vh;
  }

  .striped{
    margin: 5vw 27vh;
    width:80%;
  }
  .c{
  margin: 8vw 49vh;
  padding: 1vw 0vh;
  }
</style>





<?php if ($no==0) {?>
  <div class="c white">

  <h4 class="center align">Aucune offre reçue</h4>

  </div>
  <?php
}
else{
?>
<h4 class="center align">Offres reçus</h4>

<table class="striped white">
    <thead>
    <tr>
        <th data-fieled="nom">Nom de l'organisme</th>
        <th data-fieled="domaine">Secteur</th>
        <th data-fieled="poste">Poste</th>
        <th data-fieled="temps">Temps</th>
        <th data-fieled="réponse">Réponse</th>
          <th data-fieled="msg">Contacter</th>
        <th data-fieled="accepter">Accepter</th>
        <th data-fieled="refuser">Refuser</th>
        <th data-fieled="Plus">Plus</th>





    </tr>
    </thead>
    <?php while($oo=mysql_fetch_assoc($o)){
    ?>
    <tbody>
       <tr>
        <td><?php  echo $oo['nom_org'] ?></td>
        <td><?php  echo $oo['domaine_org'] ?></td>
        <td><?php  echo $oo['poste'] ?></td>
        <td><?php  echo $oo['temps'] ?></td>
        <td><?php  echo $oo['rep_offre'] ?></td>
<td><button type="button" name=""><a href="envoyer_candidat.php?org=<?php echo $oo['id_org'];?>&pseudorg=<?php echo $oo['pseudo_org'];?>"><i class="material-icons">message</i></a></button></td>
        <td>
          <button type="button" name="">
            <a href="ac_offre.php?re=<?php echo $oo['id_org']?>&ca=<?php echo $s?>"><i class="material-icons">done</i></a>
          </button>

        </td> <td>
          <button type="button" name="">
            <a href="ref_offre.php?re=<?php echo $oo['id_org']?>&ca=<?php echo $s?>"><i class="material-icons">delete</i></a>
          </button>

        </td>

        <td>
          <button type="button" name="">
            <a href="infoorg.php?re=<?php echo $oo['id_org']?>">+</a>

          </button>

        </td>

      </tr>
      </tbody>

      <?php } ?>
  </table>
<?php }
include 'include/footer.php'; ?>
