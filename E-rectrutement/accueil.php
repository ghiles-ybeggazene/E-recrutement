<?php
session_start();
include 'conbdd.php';








if (isset ($_POST['connecter']) ){


$pseudo = $_POST['pseudo'];
$pass = trim($_POST['mdp']);
$pass = strip_tags($pass);
$pass = htmlspecialchars($pass);

//if (!isset($pseudo)OR !isset($pass))




$queryy = mysql_query ("SELECT * FROM candidat WHERE pseudo_cand='$pseudo' AND mdp_cand='$pass'") or die (mysql_error());

$query = mysql_query ("SELECT * FROM organisme WHERE pseudo_org='$pseudo' AND mdp_org='$pass'") or die (mysql_error());

$coo = mysql_num_rows($queryy);
$co = mysql_num_rows($query);
$roww = mysql_fetch_assoc($queryy);
$row = mysql_fetch_assoc($query);



if (($pseudo=='') or ($pass=='')){
  ?>
  <script type="text/javascript">
    alert('veuillez renseigner tout les champs');
  </script>
  <?php

}



else if ($coo == 1){
  $_SESSION['candidat']= $roww['id_cand'];
  $_SESSION['username']= $roww['pseudo_cand'];

  header("location: candidat.php");


}
else if ($co==1){
$_SESSION['user']= $row['id_org'];
  $_SESSION['username']= $row['pseudo_org'];

header("location:  recruteur.php");
}





else {

    ?>

<SCRIPT LANGUAGE="Javascript">alert("Login ou mot de passe incorrect");
</SCRIPT>



<?php

//header("location: accueil.php");
}



}

 ?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
<link rel="stylesheet" href="css/accueil.css">
<link rel="stylesheet" href="css/icons.css">
<link rel="stylesheet" href="css/materialize.min.css">
  <title>Accueil</title>


</head>
<body>

<style media="screen">
.desc{
  margin : 15vh 0vw;
}
#forr{
padding: 4vh 3vw;
border-radius: 6px;
}

.f3 {
  display: flex;
  flex-direction: row;
    justify-content: space-around;
margin: 20vh 0vw;
}
.f31 , .f32, .f33{
border-radius: 12px;
padding: 1vh 1vw;

  flex-basis: 20%;
}



@media screen and (max-width:680px) {







 img{
        width: 100%;
            margin-top: 50px;
        margin-left: 0px;
        margin-right: 0px;



}


  .f3{
    margin: 0vh 0vw;
   display: flex;
   flex-direction: column;
   justify content: space-between;
  }
    .f31, .f32, .f33{
  flex-basis: 30%;
      margin: 0vw 7vh;
  }



}



</style>
<?php include 'include/menu.php'; ?>







<div class=" desc row">

<style media="screen">
  .b{
    padding: 2vw 0vh;
  }
</style>


       <div  class="col s10 m6 offset-s1 offset-m1">
         <div class=" card z-depth-5">
           <div class="b row card-content ">
<img src="images/ee.jpg" alt="" class="col m7 s12 ">

             <span class="card-title col m5 s12 "> EM-recrutement"</span>
             <p class="">L'e-recrutement est le terme consacré tant par les universitaires que par les professionnels des RH pour définir les processus de recrutement sur internet <br>
             L'e-recrutement a considérablement fait évoluer le paysage du recrutement tant pour les entreprises que pour les chercheurs d'emploi <br>

 </p>
           </div>

         </div>
       </div>


       <form id="forr"class="col s10 m3 offset-s1 offset-m1 z-depth-5 white " method="POST">



       <h5>Connexion</h5>


             <div class="input-field ">
            <input id="icon_prefix" type="text" class="validate" name="pseudo"  pattern="[a-zéèçA-Z]+[0-9a-zéèçA-Z_-]{1,}" title="erreur de synthaxe"autofocus required >
             <label for="icon_prefix">Nom d'utilisateur</label>
           </div>

           <div class="input-field">
             <input type="password" class="validate" name="mdp" class="validate" autofocus required>
             <label for="password">Password</label>
           </div>


            <button class="btn waves-effect waves-light blue darken-4" type="submit" onclick="#" name="connecter">Connecter
             <i class="material-icons right">send</i>
           </button>

       </form>






     </div>


<?php include 'include/footer.php' ?>

</body>
</html>
