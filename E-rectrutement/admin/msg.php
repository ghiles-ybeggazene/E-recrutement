<?php  session_start();
ini_set('session.bug_compat_warn', 0);
ini_set('session.bug_compat_42', 0);
if (!isset($_SESSION['admin'])) { header ('Location: admin.php');exit();}




        include('../conbdd.php');


   $id=$_GET['id_cnt'];
$table=mysql_query("select * from contact where id_cnt='$id'    ")or die (mysql_error());

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
       margin: 10vw 30vh;
       padding: 2vw 15vh;
     }

		.g{ margin: 1.5vh 0vw; border-radius: 5px;padding: 1vh 1vw;background-color:#f1f8e9;margin-bottom: 30px}
		 .h{margin-bottom: 20px}.f{margin-top: 60px;margin-left: 2vw}
	</style>





</head>
<body>

      <script type="text/javascript" src="../js/jquery-2.1.1.min.js"></script>
      <script type="text/javascript" src="../js/materialize.min.js"></script>



       <?php include('menu.php'); ?>


   <div class=" gh z-depth-5 " center>



           <h4 class="center g">Message</h4>

           <div class="f">
           <a href="contact_admin.php">Retour<i class="material-icons left">reply</i></a><br><br><br>

           </div>

        <div  class="center h ">
        <?php while($b=mysql_fetch_array($table)){?>



      <b><?php echo $b['msg_cnt'] ?></b>


        <?php  } ?>



    </div>











    </div>





</body>
