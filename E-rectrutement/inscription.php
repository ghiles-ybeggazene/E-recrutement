<?php
 session_start();



  include 'conbdd.php';

 // if( isset($_SESSION['user'])!="" ){
  // header("Location: recruteur.php");



 if (isset ($_POST['sub']) ){




 $nom = $_POST['nom'];
 $desc = $_POST['statut'];
 $domaine = $_POST['secteur'];
 $tel = $_POST['tél'];
 $adresse = $_POST['adresse'];
 $email = $_POST['email'];
 $pseudo = $_POST['pseudo'];

 $pass = $_POST['pass'];
 $pass = trim($pass);
 $pass = strip_tags($pass);
 $pass = htmlspecialchars($pass);




 // var_dump($pass,$pseudo,$email,$adresse,$tél,$nom,$prenom,$daten);
 // exit;

 $resultt = mysql_query("SELECT pseudo_org FROM organisme WHERE pseudo_org = '$pseudo'") or die (mysql_error());
 $countt = mysql_num_rows($resultt);
 $result = mysql_query( "SELECT email_org FROM organisme WHERE email_org ='$email'") or die (mysql_error());
 $count = mysql_num_rows($result);

 if(($desc=="") or ($domaine=="")){
 ?>
 <script type="text/javascript">
   alert("Veuillez remplir tout les champs");

 </script>

 <?php

}



 else if ($count!==0) {
   ?>
 <script type="text/javascript">
   alert("l adresse email que vous avez choisis existe deja");

 </script>

   <?php

 }
 else if($countt!==0){
   ?>
   <script type="text/javascript">
   alert("le pseudo que vous avez choisis existe deja");

   </script>

   <?php

 }

  else if (strlen($pass)<6)
 {
   ?>
 <script>
   alert("Le mot de passe doit contenir au moins 6 caracteres");


 </script>

   <?php
 }


else{


 $query="INSERT INTO organisme (nom_org,desc_org,domaine_org,tel_org,adresse_org,email_org,pseudo_org,mdp_org)
  VALUES ('$nom','$desc','$domaine','$tel','$adresse','$email','$pseudo','$pass')";
 mysql_query($query)or die(mysql_error());
 $vv=mysql_query("SELECT * FROM organisme WHERE pseudo_org='$pseudo'");
 $v=mysql_fetch_assoc($vv);
 $_SESSION ['user'] = $v['id_org'];
   $_SESSION['username']= $pseudo;
 header("Location: recruteur.php");
}



 }

 ?>

<!DOCTYPE html>
 <html>
    <head>
     <title>Inscription</title>

      <link href="css/icons.css" rel="stylesheet">
      <link type="text/css" rel="stylesheet" href="css/materialize.min.css"  media="screen,projection"/>
      <link type="text/css" rel="stylesheet"    href="accueil.css" media="screen,projection"/>

      <meta name="viewport" content="width=device-width, initial-scale=1.0"/>


     <meta charset="utf-8">


	<style>

  .cl{
    margin: 7vh 10vw;
    padding: 12vh 12vw;
    background-color:#ffffff;
  }





@media screen and (max-width:680px) {
  .cl {
    margin: 9vh 10vw;
    padding: 3vh 2vw;
  }


}



	</style>



    </head>

    <body>

<?php include 'include/menu.php';

 ?>



<div class="cl z-depth-5 ">

           <div class="center-align"><h4><b>Inscription organisme</b> </h4>

 </div> <br>







    <form name="formulaire" method="POST" onSubmit="return verify(this.pass, this.pass2)" >


   <div class="row">
        <div class="input-field col s11">
          <i class="material-icons prefix">account_circle</i>
          <input id="icon_prefix" type="text" class="validate" name="nom" pattern="[a-zéçàèA-Z]+['a-zéçèàA-Z- ]{1,}" title="Doit contenir que des lettres" autofocus required>
          <label for="icon_prefix">Nom de l'organisme :</label>
        </div></div>






        <div class="row">
          <div class="input-field col s11">
          <i class="material-icons prefix">school</i>
           <select name="statut" class="validate">
               <option value="" disabled selected>Le statut de votre organisme</option>
               <option value="prive">Privé</option>
               <option value="public">Public</option>
              </select>
         <label for="icon_telephone">Statut : <span class="red-text text-darken-2">*</span></label>
      </div>

      </div>


      <div class="row">
        <div class="input-field col s11">
        <i class="material-icons prefix">school</i>
         <select name="secteur" class="validate">
             <option value="" disabled selected>Choisissez votre secteur</option>
             <option value="Industriel">Industriel</option>
             <option value="Medical">Médical</option>
             <option value="Informatique">Informatique</option>
             <option value="Economique">Economique</option>
            </select>
       <label for="icon_telephone">Secteur : <span class="red-text text-darken-2">*</span></label>
    </div>

    </div>
















      <div class="row">
     <div class="input-field col s11">
          <i class="material-icons prefix">phone</i>
          <input id="tel" name="tél"  type="text" class="validate"    pattern="0[5-7]+[0-9]{8,}" title="Doit commencer par un Zero et ne doit pas contenir d'espaces ou de caractères spéciaux" autofocus required>
          <label for="icon_telephone">Téléphone : <span class="red-text text-darken-2">*</span></label>
        </div>
                </div>







      <div class="row">
     <div class="input-field col s11">
          <i class="material-icons prefix">my_location</i>
          <input id="adresse" name="adresse"  type="text" class="validate"   pattern="[a-zéèàçA-Z0-9_ -.,:']+" title="Ce champ ne doit pas contenir de caractères spéciaux" autofocus required>
          <label for="icon_telephone">Adresse : <span class="red-text text-darken-2">*</span></label>
        </div>

 </div>




      <div class="row">
     <div class="input-field col s11">
          <i class="material-icons prefix">email</i>
          <input id="email" name="email"  type="email" class="validate"  pattern="[àéèça-zA-Z0-9._%+-]+@[a-z0-9.-àéèç]+\.[a-z]{2,4}$" title="Doit commencer par une lettre et ne contient pas d'espaces ou de caractères spéciaux" autofocus required>
          <label for="icon_telephone" for="email" data-error="wrong" data-success="right">Adresse e-mail:<span class="red-text text-darken-2">*</span></label>
        </div>
          </div>



          <div class="row">
                  <div class="input-field col s11">
                    <i class="material-icons prefix">supervisor_account</i>
                    <input id="icon_prefix" type="text" class="validate"  name="pseudo" pattern="[a-zéçàèA-Z]+['0-9a-zéçèàA-Z_]{1,}" title="Doit commencer par une lettre et ne contient pas d'espaces ou de caractères spéciaux" autofocus required>
                    <label for="icon_prefix">Nom d'utilisateur :<span class="red-text text-darken-2">*</span></label>
                  </div></div>


      <div class="row">
     <div class="input-field col s11">
          <i class="material-icons prefix">lock_outline</i>
          <input required name="pass"   type="password" class="validate"  >
          <label for="icon_telephone">Mot de passe : <span class="red-text text-darken-2">*</span></label>
        </div>
                </div>





      <div class="row">
     <div class="input-field col s11">
          <i class="material-icons prefix">lock_outline</i>
          <input required  name="pass2"    type="password" class="validate" >
          <label for="icon_telephone">Confirmer Mot de passe : <span class="red-text text-darken-2">*</span></label>
        </div>
      </div>





 <div class="center-align">
		 <button class="btn waves-effect waves-light blue darken-4" type="submit" name="sub">S'inscrire

  </button>



</div>
</form>

</div>



<?php include 'include/footer.php'; ?>





<script >

var fieldalias="mot de passe"
function verify(element1, element2)
 {
  var passed=false
   if (element1.value=='')
   {
    alert("Veuillez entrer votre "+fieldalias+" dans le premier champ!")
    element1.focus()
   }
   else if (element2.value=='')
   {
    alert("Veuillez confirmer votre "+fieldalias+" dans le second champ!")
    element2.focus()
   }
   else if (element1.value!=element2.value)
   {
    alert("Les deux "+fieldalias+" ne se correspondent pas")
    element1.select()
   }
   else
   passed=true
   return passed
 };



   $(document).ready(function() {
       $('select').material_select();
     });


</script>










</body>
</html>
