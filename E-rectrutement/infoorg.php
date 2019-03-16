<?php
include 'conbdd.php';
$re=($_GET['re']);
$or=mysql_query("SELECT * FROM organisme WHERE id_org='$re'");
?>
 <!DOCTYPE html>
 <html lang="en">
 <head>
   <meta charset="UTF-8">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <meta http-equiv="X-UA-Compatible" content="ie=edge">
   <link rel="stylesheet" href="css/icons.css">
   <link rel="stylesheet" href="css/materialize.min.css">
   <script type="text/javascript" src="js/jquery-2.1.1.min.js"></script>
   <script type="text/javascript" src="js/materialize.min.js"></script>

   <title>infos organisme</title>
 </head>
 <body>
 <?php include'include/mecn.php'; ?>
 <style media="screen">
   .s{
     margin: 5vw 0vh;

   }
   #l{
 padding: 5vw 0vh;


   }
 </style>
     <div class="row">
 <div id="l" class="s col s6 offset-s3 white center align">


       <h4>Entrprise</h4>
       <?php while($org=mysql_fetch_assoc($or)){
       ?>
        <p>Nom : <?php echo $org['nom_org']; ?> <br>
        <p>Secteur: <?php echo $org['domaine_org']; ?> <br>
        <p>Statut : <?php echo $org['desc_org']; ?> <br>
        <p>Email: <?php echo $org['email_org']; ?> <br>
        <p>Téléphone: <?php echo $org['tel_org']; ?> <br>
        <p>Adresse: <?php echo $org['adresse_org']; ?> <br>

       </p> <br>

    <?php } ?>

                  <a href="candidat.php">   <button type="button" name="retour" class="waves-effect waves-light btn blue darken-4">Retour</button></a>


 </div>
 </div>
 <?php include'include/footer.php'; ?>

 </body>
 </html>
