<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Message bien envoyé</title>
</head>
<body>

<style>
  .o{
    margin: 20vh 15vw;
    background-color:#ffffff;
    border-radius: 10px;
    padding: 5vh 0vw;
  }
  @media screen and (max-width:680px) {
    .o{
      margin: 20vh 5vw;

    }
  }

</style>


  <?php
  include 'include/menu.php'; ?>


<div class="o z-depth-5 hoverable">


  <div class="center-align">

  <i class="large material-icons prefix">verified_user</i>
  </div>

    <h5 class="center-align">

          Merci ! Votre message a bien été envoyé. <br>
          Vous aurez votre réponse le plus proche possible.
          <br>
      <a href='accueil.php'>Cliquer ici</a> pour revenir a la page d'accueil

    </h5>


</div>



<?php include 'include/footer.php'; ?>
</body>
</html>
