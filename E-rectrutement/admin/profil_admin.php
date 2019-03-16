<?php  session_start();
if (!isset($_SESSION['admin']) ||  $_SESSION['admin']!=='admin' ) { header ('Location: admin.php');exit();}




      include('../conbdd.php');




$table=mysql_query("select * from admin where type='sous_admin'")or die (mysql_error());




 $base_ = mysql_fetch_array(mysql_query('select pseudo,mdp,type from admin where pseudo="'.$_SESSION['admin'].'"'));


		       $pseudo  = $base_['pseudo'];
               $mdp  = $base_['mdp'];




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
       margin: 0vw 19vh;}.a{margin:1vw 19vh;}

.o{margin: 5vw 0vh;}
	</style>





</head>
<body>

      <script type="text/javascript" src="../js/jquery-2.1.1.min.js"></script>
      <script type="text/javascript" src="../js/materialize.min.js"></script>






       <?php include('menu_admin.php'); ?>




<h4 class="o center align">Gérer les administrateurs</h4>

    <div class="a">
    <a class="btn waves-effect waves-light blue darken-4" href="ajout_admin.php">Ajouter ADMIN</a>

    </div>








   <div class=" gh z-depth-5 ">








       <table class="responsive-table">
        <thead>
        <tr>

            <th data-fieled="id">Numéro :</th>
            <th data-fieled="pseudo">Nom utilisateur :</th>
            <th data-fieled="mdp">Password :</th>
            <th data-fieled="type">Type :</th>
           <th data-fieled="mdp">Supprimer</th>

        </tr>
        </thead>
        <?php $i=1; while($b=mysql_fetch_array($table)){?>
        <tbody>
           <tr>
            <td><?php echo $i ?></td>
            <td><?php echo $b['pseudo'] ?></td>
            <td><?php echo $b['mdp'] ?></td>
           <td><?php echo $b['type'] ?></td>




            <td><a href="sup_admin.php?id_admin=<?php echo $b['id_admin']?>"><button class="btn waves-effect waves-light blue darken-4" type="submit"  onclick="if(window.confirm('Voulez-vous vraiment supprimer ?')){return true;}else{return false;}"  name="action">
    <i class="material-icons right">delete</i></button></a></td>









        </tr>
        </tbody>
        <?php $i++; } ?>

    </table>












































     </div>











</body>
