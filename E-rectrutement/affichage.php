<?php
session_start();
include'conbdd.php';
//if (isset($_POST['subm'])){
$crt = $_POST['radio'];
//var_dump($crt);exit;
$exp = $_POST['exp'];
$domaine = $_POST['domaine'];
$mclé = $_POST['mclé'];
$mclé = strtolower($mclé);
$age = $_POST['age'];
$domicile = $_POST['domicile'];
$domicile = strtolower($domicile);
$temps = $_POST['temps'];
$poste = $_POST['poste'];


if (($crt=='') or ($exp=='') or ($age=='') or ($domicile=='') or ($poste=='' )) {

  ?>
  <script type="text/javascript">
    alert('Veuillez renseigner tout les champs');

  </script>
  <?php
  header("location: recruteur.php");}

switch ($age){

  case 1:
  $agem=20;$agemx=30;
  break;
  case 2:
  $agem=30;$agemx=40;
  break;
  case 3:
  $agem=40;$agemx=50;
  break;
  case 4:
  $agem=50;$agemx=70;
  break;

}


switch ($exp){

  case 1:
  $expm=0;$expmx=0;
  break;
  case 2:
  $expm=0;$expmx=2;
  break;
  case 3:
  $expm=2;$expmx=10;
  break;
  case 4:
  $expm=10;$expmx=20;
  break;

}


//var_dump($age,$agem,$agemx);exit;



if ($mclé!=='') {


$dm = mysql_query("SELECT *
FROM moocsuivis s
JOIN candidat c ON c.id_cand = s.id_cand
JOIN mooccle m ON m.id_mooc = s.id_mooc
JOIN mooc o ON o.id_mooc = s.id_mooc
WHERE m.id_mcle =  '$mclé'
AND c.age_cand between '$agem' AND '$agemx'
AND c.exp_travail between '$expm' AND '$expmx'
AND c.domicile_cand =  '$domicile'
AND s.obt_crt='$crt'");

//var_dump($ddd);exit;
$aff=$dm;
}



else{



$mc = mysql_query(" SELECT *
FROM moocsuivis s
JOIN candidat c ON c.id_cand = s.id_cand
JOIN mooc m ON m.id_mooc = s.id_mooc
WHERE m.domaine_mooc =  '$domaine'
AND c.age_cand between '$agem' AND '$agemx'
AND c.exp_travail between '$expm' AND '$expmx'
AND c.domicile_cand =  '$domicile'
AND s.obt_crt='$crt' ");
$aff=$mc;

//var_dump($douu);exit;


}



$n = mysql_num_rows($aff);


if ($n==0){
  ?>
  <script type="text/javascript">
    alert('Aucun resultat trouve');
    window.location.href = "recruteur.php";
  </script><?php

}


else{



include 'include/mec.php';







?>

<style media="screen">
  h4{
    margin: 12vh;

  }
</style>
<div class="row">

<h4 class="center align">Résultats trouvés</h4>
<table class="striped white col s10 offset-s1">
    <thead>
    <tr>
        <th data-fieled="nom">Nom</th>
        <th data-fieled="prenom">Prenom</th>
        <th data-fieled="age" class="hide-on-small-only">Age</th>
        <th data-fieled="domicile" class="hide-on-small-only">Wilaya</th>
        <th data-fieled="mooc">Mooc</th>
        <th data-fieled="score">Note</th>
        <th data-fieled="od">Certificat</th>
        <th data-fieled="cv">Plus</th>
        <th data-fieled="ct">Contacter</th>
        <th data-fieled="ajouter">Ajouter</th>




    </tr>
    </thead>
    <?php while($a=mysql_fetch_assoc($aff)){
    ?>
    <tbody>
       <tr>
        <td><?php  echo $a['nom_cand'] ?></td>
        <td><?php echo $a['prenom_cand'] ?></td>
        <td class="hide-on-small-only"><?php echo $a['age_cand'] ?></td>
        <td class="hide-on-small-only"><?php echo $a['domicile_cand'] ?></td>
        <td><?php echo $a['des_mooc'] ?></td>
        <td><?php echo $a['note_cand'].'/20' ?></td>
        <td><?php if ($a['obt_crt']=1)
        {
          echo "Avec";
         }
        else{
          echo"Sans";
        }
        ?></td>
        <td>
          <a id="openBtn" href="cv.php?nom=<?php echo $a['nom_cand'];?>&prenom=<?php echo $a['prenom_cand'];?>&age=<?php echo $a['age_cand'];?>&domicile=<?php echo $a['domicile_cand'];?>&tel=<?php echo $a['tel_cand'];?>
&email=<?php echo $a['email_cand'];?>&exp=<?php echo $a['exp_travail'];?>&ci=<?php echo $a['ci_cand'];?>&mooc=<?php echo $a['des_mooc'];?>&note=<?php echo $a['note_cand'];?>" target="_blank" ><button type="button" name="button">+</button></a>











        </td>




  <td><button type="button" name=""><a href="envoyer_recruteur.php?cnd=<?php echo $a['id_cand'];?>&pseudocnd=<?php echo $a['pseudo_cand'];?>" target="_blank"><i class="material-icons">message</i></a></button></td>
        <td><a href="aj_offre.php?rec=<?php echo $_SESSION['user'];?>&cnd=<?php echo $a['id_cand'];?>&pst=<?php echo $poste;?>&tmp=<?php echo $temps;?>"><button type="submit" >Ajouter</button></a></td>






    </tr>
    </tbody>
    <?php } ?>
</table>

</div>


  <?php








include 'include/footer.php';


}

 ?>
