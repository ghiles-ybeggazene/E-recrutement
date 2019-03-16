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

  <title>CV</title>
</head>
<body>
<?php include'include/mec.php'; ?>
<style media="screen">
  .s{
    margin: 5vw 0vh;

  }
  #l{
padding: 5vw 0vh;


  }
</style>
    <div class="row">
<div id="l" class="s col s8 offset-s2 white center align">
<?php $exp= $_GET['exp'];

if ($exp==0){
  $exp='Sans';
  }
else{
  $exp=$exp.' ans';
}
?>

      <h4>Plus de détails</h4>
      <p>Nom : <?php echo $_GET['nom']; ?> <br>
        Prenom : <?php echo $_GET['prenom']; ?> <br>
        Age : <?php echo $_GET['age'] ; ?> <br>
        Code wilaya : <?php echo $_GET['domicile'] ; ?> <br>
        Tél : <?php echo '0'.$_GET['tel'] ; ?><br>
        E-mail : <?php echo $_GET['email'] ; ?><br>
        Centre d'interet : <?php echo $_GET['ci'] ; ?><br>
        Mooc suivis : <?php echo $_GET['mooc'] ; ?><br>
        Note obtenue : <?php echo $_GET['note'].'/20' ; ?><br>
        Expérience de travail : <?php echo $exp; ?>
      </p>


</div>
</div>
<?php include'include/footer.php'; ?>

</body>
</html>
