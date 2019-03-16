<?php session_start();
include 'conbdd.php';
if (!isset($_SESSION['candidat'])) {header ('Location: accueil.php');exit();}?>



<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Esapce candidat</title>
  <?php


include 'include/mecn.php';   ?>




  <style>
	.e{text-decoration-color: black; text-decoration: underline} body{background-color:#eceff1 ;}
	div.gh{margin-left: auto;margin-right: auto;}
	div.hoverable{margin: 6vh 12vw;border-radius: 5px;padding: 5vh 10vw;background-color:#ffffff;}
	.pp{margin-left: 4.5vw}
  </style>




</head>
<body>















          <br> <div class="hoverable z-depth-5 ">
          <div class="center-align"><h4><b>Modifier mes informations personnelles</b> </h4>
          <i class="large material-icons">supervisor_account</i>  </div>  <?php















$cu=$_SESSION['candidat'];
 $base = mysql_fetch_array(mysql_query("SELECT * FROM candidat WHERE id_cand='$cu' "));




		        $email_cand  = $base['email_cand'];
                $pseudo_cand  = $base['pseudo_cand'];
			    $domicile_cand  = $base['domicile_cand'];
		        $tel_cand = $base['tel_cand'];
		        $ci_cand = $base['ci_cand'];
		        $mdp_cand  = $base['mdp_cand'];



	?>




    <form name="formulaire" action="modifie_cand.php" method="post"  onSubmit="return verify(this.mdp_cand, this.pass2)" >




        <div class="row">
        <div class="input-field col s11">
        <i class="material-icons prefix">email</i>
        <input id="email" name="email_cand"  type="email" class="validate" disabled  value="<?php echo $email_cand ;?>  " >
        <label for="icon_telephone" for="email" data-error="wrong" data-success="right">Adresse e-mail:</label>
        </div>
        </div>



        <div class="row">
        <div class="input-field col s11">
        <i class="material-icons prefix">supervisor_account</i>
        <input id="username" type="text" class="validate"  name="pseudo_cand" value="<?php echo $pseudo_cand ;?>">
        <label for="icon_prefix">Nom d'utilisateur :</label>
        </div></div>



        <div class="row">
        <div class="input-field col s11">
        <i class="material-icons prefix">supervisor_account</i>
        <input id="username" type="text" class="validate"  name="domicile_cand" value="<?php echo $domicile_cand ;?>">
        <label for="icon_prefix">Code wilaya :</label>
        </div></div>





        <div class="row">
        <div class="input-field col s11">
        <i class="material-icons prefix">supervisor_account</i>
        <input id="username" type="text" class="validate"  name="tel_cand" value="<?php echo '0'.$tel_cand ;?>">
        <label for="icon_prefix">Numéro de téléphone :</label>
        </div></div>



        <div class="row">
        <div class="input-field col s11">
        <i class="material-icons prefix">supervisor_account</i>
        <input id="username" type="text" class="validate"  name="ci_cand" value="<?php echo $ci_cand ;?>">
        <label for="icon_prefix">Centre d'intérêt :</label>
        </div></div>



       <div class="row">
       <div class="input-field col s11">
       <i class="material-icons prefix">lock_outline</i>
       <input required name="mdp_cand" id="password"  type="text" class="validate" value="<?php echo $mdp_cand ;?>" >
       <label for="icon_telephone"> Mot de passe : </label>
       </div>
       </div>





      <div class="row">
      <div class="input-field col s11">
      <i class="material-icons prefix">lock_outline</i>
      <input required  name="pass2" id="pass2"    type="password" class="validate" >
      <label for="icon_telephone">Confirmer votre  Mot de passe :</label>
      </div> </div>






     <div class="center-align">
     <button class="btn waves-effect waves-light blue darken-4" type="submit" onclick="if(window.confirm('Voulez-vous vraiment modifie vos parametres ?')){return true;}else{return false;}"   name="action">Modifier  </button>
     </div><br>


</form>
</div>




 <?php include'include/footer.php';?>




 <script >
       var fieldalias="mot de passe"
       function verify(element1, element2)
       {var passed=false
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
       alert("Les deux "+fieldalias+" ne condordent pas")
       element1.select()
       }
       else
       passed=true
       return passed
       }
    </script>


</body>
</html>
