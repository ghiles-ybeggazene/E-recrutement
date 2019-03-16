<?php session_start();
include 'conbdd.php';
if (!isset($_SESSION['user'])) { header ('Location: accueil.php'); exit(); }?>





<!DOCTYPE html>
    <html>
    <head>
     <title>Paramètre organisme </title>
     <link href="css/icons.css" rel="stylesheet">
     <link type="text/css" rel="stylesheet" href="css/materialize.min.css"  media="screen,projection"/>
     <link type="text/css" rel="stylesheet"    href="accueil.css" media="screen,projection"/>
     <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
     <meta charset="utf-8">




<style>
	.e{text-decoration-color: black;text-decoration: underline}body{background-color:#eceff1 ;}
	div.gh{margin-left: auto;margin-right: auto;}.pp{margin-left: 4.5vw}
	div.hoverable{margin: 6vh 12vw;border-radius: 5px;padding: 5vh 10vw;	background-color:#ffffff;}
</style>







</head>





<?php include'include/mec.php'; ?>






          <br><div class="hoverable z-depth-5 ">

           <div class="center-align"><h4><b>Modifier mes informations personnelles</b> </h4>
           <i class="large material-icons">supervisor_account</i> </div>  <?php










$us= $_SESSION['user'];

$base = mysql_fetch_array(mysql_query("SELECT * FROM organisme WHERE id_org='$us' "));




		       $email_org  = $base['email_org'];
           $pseudo_org  = $base['pseudo_org'];
			     $adresse_org  = $base['adresse_org'];
		       $tel_org  = $base['tel_org'];
		       $mdp_org  = $base['mdp_org'];




	?>







    <form name="formulaire" action="modifie_org.php" method="post"  onSubmit="return verify(this.mdp_org, this.pass2)" >


        <div class="row">
        <div class="input-field col s11">
        <i class="material-icons prefix">supervisor_account</i>
        <input id="username" type="text" class="validate"  disabled  name="email_org" value="<?php echo $email_org ;?>">
        <label for="icon_prefix"> Adresse email :</label>
        </div></div>



        <div class="row">
        <div class="input-field col s11">
        <i class="material-icons prefix">supervisor_account</i>
        <input id="username" type="text" class="validate"  name="pseudo_org" value="<?php echo $pseudo_org ;?>">
        <label for="icon_prefix"> Nom d'utilisateur :</label>
        </div></div>






        <div class="row">
        <div class="input-field col s11">
        <i class="material-icons prefix">supervisor_account</i>
        <input id="username" type="text" class="validate"  name="adresse_org" value="<?php echo $adresse_org ;?>">
        <label for="icon_prefix">Adresse :<span class="red-text text-darken-2">*</span></label>
        </div></div>




         <div class="row">
        <div class="input-field col s11">
        <i class="material-icons prefix">supervisor_account</i>
        <input id="username" type="text" class="validate"  name="tel_org" value="<?php echo $tel_org ;?>">
        <label for="icon_prefix">Téléphone :</label>
        </div></div>




         <div class="row">
         <div class="input-field col s11">
         <i class="material-icons prefix">lock_outline</i>
         <input required name="mdp_org" id="password"  type="text" class="validate" value="<?php echo $mdp_org ;?>" >
         <label for="icon_telephone">Nouveau Mot de passe : <span class="red-text text-darken-2">*</span></label>
         </div>
         </div>





         <div class="row">
         <div class="input-field col s11">
         <i class="material-icons prefix">lock_outline</i>
         <input required  name="pass2" id="pass2"    type="password" class="validate" >
         <label for="icon_telephone">Confirmer votre nouveau Mot de passe : </label>
         </div>
         </div>





         <div class="center-align">
		 <button class="btn waves-effect waves-light blue darken-4" type="submit" onclick="if(window.confirm('Voulez-vous vraiment modifier ?')){return true;}else{return false;}"    name="action">Modifier </button>
         </div><br>






</form>
</div>






 <?php include 'include/footer.php'; ?>


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
