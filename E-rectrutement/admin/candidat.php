<?php session_start();
if (!isset($_SESSION['admin'])) { header ('Location: admin.php'); exit();}





 include('../conbdd.php');




$table=mysql_query("select * from candidat order by pseudo_cand ASC")or die (mysql_error());


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
			 margin: 0vw 19vh;
		 }

		.o{margin: 4vw 0vh; }

	</style>



</head>
<body>

      <script type="text/javascript" src="../js/jquery-2.1.1.min.js"></script>
      <script type="text/javascript" src="../js/materialize.min.js"></script>




       <?php include('menu.php'); ?>



<h4 class="o center align">Gérer les candidats</h4>

    <div class=" gh z-depth-5 ">
    <table class="bordered">
        <thead>
        <tr>
            <th data-fieled="id">Numéro</th>
						<th data-fieled="pseudo">Utilisateur</th>
						<th data-fieled="nom">Nom</th>

						<th data-fieled="prenom">Prénom</th>


            <th data-fieled="age">Age </th>
            <th data-fieled="domicile">Code wilaya</th>
            <th data-fieled="tel">Téléphone </th>
            <th data-fieled="email">Email</th>
						<th data-fieled="supp">Supprimer</th>


        </tr>
        </thead>
        <?php $i=1;
				while($b=mysql_fetch_array($table)){?>
       <tbody>
            <tr>
             <td><?php echo $i ?></td>
						 <td><?php echo $b['pseudo_cand'] ?></td>
						<td><?php echo $b['nom_cand'] ?></td>
            <td><?php echo $b['prenom_cand'] ?></td>


            <td><?php echo $b['age_cand'] ?></td>
            <td><?php echo $b['domicile_cand'] ?></td>
            <td><?php echo '0'.$b['tel_cand'] ?></td>
            <td><?php echo $b['email_cand'] ?></td>








            <td><a href="sup_can_admin.php?id_cand=<?php echo $b['id_cand']?>"><button class="btn waves-effect waves-light blue darken-4" type="submit"  onclick="if(window.confirm('Voulez-vous vraiment supprimer ?')){return true;}else{return false;}"   name="action">
<i class="material-icons">delete</i></button>
</a></td>

        </tr>
        </tbody>
        <?php $i++;} ?>
        </table>
        </div>






</body>
