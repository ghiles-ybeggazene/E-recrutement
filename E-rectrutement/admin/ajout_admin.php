<?php  session_start();
if (!isset($_SESSION['admin'])) { header ('Location: admin.php');exit();}




?>




     <!DOCTYPE html>
    <html>
    <head>
    <title>Ajout Admin</title>
    <link type="text/css" rel="stylesheet" href="../css/materialize.min.css"  media="screen,projection"/>
    <link type="text/css" rel="stylesheet"    href="../accueil.css"   media="screen,projection"/>
    <link href="../css/icons.css" rel="stylesheet">
    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
    <meta charset="utf-8">




     <style>


		.gh{background-color:white;
         margin: 0vw 30vh;
    padding: 2vw 19vh;}
		 .f{padding: 15px}
    .o{margin: 4vw 0vh;}

	</style>





</head>
<body>

      <script type="text/javascript" src="../js/jquery-2.1.1.min.js"></script>
      <script type="text/javascript" src="../js/materialize.min.js"></script>






       <?php include('menu_admin.php'); ?>

       <h4 class="o center align">Gérer les administrateurs</h4>





   <div class=" gh z-depth-5 ">







	  <form name="formulaire" action="ajout.php" method=post  >
      <div class="ghil ">



        <div class="center">

        <h5><b>Ajouter un  Admin</b></h5>
        </div>

        <div class="f">
       <a href="profil_admin.php">Retour<i class="material-icons left">reply</i></a><br>

       </div>

        <div class="row">
        <div class="input-field col s12">
        <i class="material-icons prefix">person_pin</i>
        <input  name="pseudo" type="text" class="validate"    pattern="[1-9a-zA-Z]+[0-9a-zA-Z:/_-é&èç ]{2,}" title="Ce champ ne doit contenir que des lettres" autofocus required>
        <label for="icon_prefix">Nom d'utilisateur: <span class="red-text text-darken-2">*</span></label>
        </div>
        </div>


        <div class="row">
        <div class="input-field col s12">
        <i class="material-icons prefix">lock</i>
        <input id="mdp" name="mdp" type="password" class="validate"  pattern="[0-9a-zA-Z]+[0-9a-zA-Z ]{2,}" title="Ce champ ne doit contenir que des lettres" autofocus required>
        <label for="icon_prefix">Mot de passe: <span class="red-text text-darken-2">*</span></label>
        </div>
        </div>





        <div class="input-field col s12 center">
        <button class="btn waves-effect waves-light blue darken-4" type="submit"  name="action">Ajouter
        <i class="material-icons right">done_all</i></button>
        </div>






      </div>
      </form>



    </div>



</body>
