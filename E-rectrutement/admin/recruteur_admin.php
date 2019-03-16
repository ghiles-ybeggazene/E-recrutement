<?php session_start();
if (!isset($_SESSION['admin']) ||  $_SESSION['admin']!=='admin' ){header ('Location: admin.php'); exit();}



  include('../conbdd.php');




$table=mysql_query(" SELECT * FROM organisme order by pseudo_org ASC")or die (mysql_error());


?>


     <!DOCTYPE html>
    <html>
    <head>
    <title>Candidat Admin</title>
    <link type="text/css" rel="stylesheet" href="../css/materialize.min.css"  media="screen,projection"/>
    <link type="text/css" rel="stylesheet"    href="../accueil.css"   media="screen,projection"/>
    <link href="../css/icons.css" rel="stylesheet">
    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
    <meta charset="utf-8">




        <style>
		   body{background-color:#eceff1 ;} .gh{background-color:white;
       margin: 0vw 20vh;
     padding: 0vw 4vh;}


      .o{margin: 4vw 0vh;}
      </style>



</head>
<body>

      <script type="text/javascript" src="../js/jquery-2.1.1.min.js"></script>
      <script type="text/javascript" src="../js/materialize.min.js"></script>






       <?php include('menu_admin.php'); ?>



              <h4 class="o center align">Gérer les recruteurs</h4>

   <div class=" gh z-depth-5 ">

    <table class="responsive-table">
        <thead>
        <tr>
          <th data-fieled="num">Numéro</th>
            <th data-fieled="prenom">Utilisateur</th>

            <th data-fieled="password">Nom de l'organisme</th>
            <th data-fieled="tel">Adresse</th>
            <th data-fieled="email">Email</th>
            <th data-fieled="">Téléphone</th>
            <th data-fieled="">supprimer</th>
        </tr>
        </thead>
        <?php $i=1;
        while($b=mysql_fetch_array($table)){?>
       <tbody>
            <tr>

              <td><?php echo $i ?></td>
            <td><?php echo $b['pseudo_org'] ?></td>

            <td><?php echo $b['nom_org'] ?></td>
            <td><?php echo $b['adresse_org'] ?></td>
            <td><?php echo $b['email_org'] ?></td>
            <td><?php echo $b['tel_org'] ?></td>



            <td><a href="sup_rec_admin.php?id_org=<?php echo $b['id_org']?>"><button class="btn waves-effect waves-light blue darken-4" type="submit"  onclick="if(window.confirm('Voulez-vous vraiment supprimer ?')){return true;}else{return false;}"   name="action">
    <i class="material-icons">delete</i></button></a></td>

        </tr>
        </tbody>
        <?php $i++;} ?>
    </table>
    </div>
</body>
