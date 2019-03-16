<?php  session_start();
if (!isset($_SESSION['admin'])) { header ('Location: admin.php');exit();}



       include('../conbdd.php');


$table=mysql_query("select * from contact")or die (mysql_error());

?>




     <!DOCTYPE html>
    <html>
    <head>
    <title>Contact Admin</title>
    <link type="text/css" rel="stylesheet" href="../css/materialize.min.css"  media="screen,projection"/>
    <link type="text/css" rel="stylesheet"    href="../accueil.css"   media="screen,projection"/>
    <link href="../css/icons.css" rel="stylesheet">
    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
    <meta charset="utf-8">




     <style>
		 body{background-color:#eceff1 ;} .gh{background-color:white;
     margin: 0vw 19vh;
   padding: 0vw 3vh;}
.o{
  margin: 4vw 0vh;
}

	</style>





</head>
<body>

      <script type="text/javascript" src="../js/jquery-2.1.1.min.js"></script>
      <script type="text/javascript" src="../js/materialize.min.js"></script>






       <?php include('menu.php'); ?>


<h4 class="o center align">Messages reçus</h4>


   <div class=" gh z-depth-5 ">
    <table class="responsive-table">
        <thead>
        <tr><th data-fieled="id">Numéro:</th>
            <th data-fieled="nom">Nom :</th>
            <th data-fieled="prenom">Prenom :</th>
            <th data-fieled="email">Email :</th>
            <th>Date </th>
            <th data-fieled="message">Message :</th>
              <th data-fieled="supp">Supprimer :</th>

        </tr>
        </thead>
        <?php $i=1;
         while($b=mysql_fetch_array($table)){?>
        <tbody>
           <tr>
           <td><?php echo $i ?></td>
            <td><?php echo $b['nom_cnt'] ?></td>
            <td><?php echo $b['prenom_cnt'] ?></td>
            <td><?php echo $b['email_cnt'] ?></td>
            <td><?php echo $b['date'] ?></td>
            <td>

            <a href="msg.php?id_cnt=<?php echo $b['id_cnt']?>">Lire <i class="material-icons left">message</i>  </a>





                          </td>







            <td><a href="supp_admin.php?id_cnt=<?php echo $b['id_cnt']?>"><button class="btn waves-effect waves-light blue darken-4" type="submit"  onclick="if(window.confirm('Voulez-vous vraiment supprimer ?')){return true;}else{return false;}"  name="action">
    <i class="material-icons">delete</i></button></a></td>









        </tr>
        </tbody>
        <?php $i++; } ?>

    </table></div>



















</body>
