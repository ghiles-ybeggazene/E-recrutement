<?php


//include'connexrec.php';


session_start();
include 'conbdd.php';
if (!(isset($_SESSION['user'])) ){

header("location: accueil.php");

}



 ?><!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Espace recruteur</title>


</head>
<body>

<style media="screen">



  .cont{
    margin: 7vh 10vw;
    padding: 12vh 12vw;
    background-color:#ffffff;
  }





  @media screen and (max-width:680px) {
  .cont {
    margin: 9vh 10vw;
    padding: 3vh 2vw;
  }


  }


  form{
    padding: 4vh 0vw;
  }
</style>





  <?php
  include 'include/mec.php';

 ?>

<div class="cont white">

  <h5 class="center align">Trouver les meilleurs compétences selon vos propres besoins</h5>


<form class="recherche" action="affichage.php" onSubmit="return fct(this.domaine,this.mclé)" method="post">

<div class="row">


  <div class="input-field col s10 offset-s1">

    <select name="domaine" class="validate">
      <option value="" disabled selected>Choisissez le domaine</option>
      <option value="informatique">informatique</option>
      <option value="electronique">éléctronique</option>
      <option value="mecanique">mécanique</option>
      <option value="economie">économie</option>
    </select>
    <label>Domaine</label>
  </div>

</div>





  <div class="row">
    <div class="input-field col s10 offset-s1">
      <select name="age" class="validate">

        <option value="1">20 - 30</option>
        <option value="2">30 - 40</option>
        <option value="3">40 - 50</option>
        <option value="4"> < 50 </option>
      </select>
      <label>Age</label>
  </div>
  </div>


  <div class="row">
    <div class="input-field col s10 offset-s1">

      <select name="domicile" class="validate">

          <option value="1">1-Adrar</option>
          <option value="2">2-Chlef</option>
          <option value="3">3-Laghouat</option>
          <option value="4">4-Oum El Bouaghi</option>
          <option value="5">5-Batna</option>
          <option value="6">6-Béjaïa</option>
          <option value="7">7-Biskra</option>
          <option value="8">8-Béchar</option>
          <option value="9">9-Blida</option>
          <option value="10">10-Bouira</option>
          <option value="11">11-Tamanrasset</option>
          <option value="12">12-Tébessa</option>
          <option value="13">13-Tlemcen</option>
          <option value="14">14-Tiaret</option>
          <option value="15">15-Tizi Ouzou</option>
          <option value="16">16-Alger</option>
          <option value="17">17-Djelfa</option>
          <option value="18">18-Jijel</option>
          <option value="19">19-Sétif</option>
          <option value="20">20-Saïda</option>
          <option value="21">21-Skikda</option>
          <option value="22">22-Sidi Bel Abbès</option>
          <option value="23">23-Annaba</option>
          <option value="24">24-Guelma</option>
          <option value="25">25-Constantine</option>
          <option value="26">26-Médéa</option>
          <option value="27">27-Mostaganem</option>
          <option value="28">28-MSila</option>
          <option value="29">29-Mascara</option>
          <option value="30">30-Ouargla</option>
          <option value="31">31-Oran</option>
          <option value="32">32-El Bayadh</option>
          <option value="33">33-Illizi</option>
          <option value="34">34-Bordj Bou Arreridj</option>
          <option value="35">35-Boumerdès</option>
          <option value="36">36-El Tarf</option>
          <option value="37">37-Tindouf</option>
          <option value="38">38-Tissemsilt</option>
          <option value="39">39-El Oued</option>
          <option value="40">40-Khenchela</option>
          <option value="41">41-Souk Ahras</option>
          <option value="42">42-Tipaza</option>
          <option value="43">43-Mila</option>
          <option value="44">44-Aïn Defla</option>
          <option value="45">45-Naâma</option>
          <option value="46">46-Aïn Témouchent</option>
          <option value="47">47-Ghardaïa</option>
          <option value="48">48-Relizane</option>
      </select >
      <label>Domicile</label>



    </div>
  </div>


  <div class="row">
    <div class="input-field col s10 offset-s1">
      <label for="">Certificat</label> <br>
  <p>
      <input class="with-gap" name="radio" type="radio" id="gender_id_red" value="1"/>
      <label for="gender_id_red">Avec</label>
    </p>
    <p>

      <input class="with-gap" name="radio" type="radio" id="gender_id_yellow" value="0"checked />
      <label for="gender_id_yellow">Sans</label>
    </p>
  </div>
</div> <br>




<div class="row">
  <div class="input-field col s10 offset-s1">
    <select name="poste" class="validate">
      <option value="" disabled selected>Choisissez le poste</option>
      <option value="expert">Expert</option>
      <option value="ingenieur">Ingénieur</option>
      <option value="technicien">Technicien</option>
      <option value="assistant">Assistant</option>
    </select>
    <label>Poste</label>
</div>
</div>

<div class="row">
  <div class="input-field col s10 offset-s1">
    <select name="temps" class="validate">

      <option value="plein">plein</option>
      <option value="mi-temps">Mi-temps</option>

    </select>
    <label>Temps</label>
</div>
</div>


<div class="row">
  <div class="input-field col s10 offset-s1">
    <select name="exp" class="validate">

      <option value="1">Sans</option>
      <option value="2"> < 2 ans</option>
      <option value="3">2 - 10 ans</option>
      <option value="4">10 - 20 ans </option>
    </select>
    <label>Expérience de travail</label>
</div>
</div>


  <div class="row">
    <div class="input-field col s10 offset-s1">
      <input name="mclé" type="text" class="validate">
      <label for="icon_prefix">Mot clés (mooc): <span class="red-text text-darken-2">*</span></label>
    </div>
  </div>
<br>

  <div class="center-align">
      <button class="btn waves-effect waves-light blue darken-4" type="submit" name="subm">Rechercher
       <i class="material-icons left">search</i>

   </button>




</form>
</div>
</div>

  <?php include 'include/footer.php';
  ?>


<script type="text/javascript">
function fct(el1,el2){

  if (el1.value=="" && el2.value==""){
    alert("domaine ou mot cles doivent etre saisis")
    return false
  }

  else
  {
    return true
  }

}






</script>

  <script type="text/javascript">




  $(document).ready(function() {
      $('select').material_select();
    });




  </script>


</body>
</html>
