<!DOCTYPE html>
 <html>
    <head>
     <title>Contact</title>

      <link href="css/icons.css" rel="stylesheet">
      <link type="text/css" rel="stylesheet" href="css/materialize.min.css"  media="screen,projection"/>
      <link type="text/css" rel="stylesheet" href="accueil.css" media="screen,projection"/>

      <meta name="viewport" content="width=device-width, initial-scale=1.0"/>


     <meta charset="utf-8">

     <style>

    		.f{
          margin: 7vh 10vw;
    			padding: 12vh 0vw;
    			background-color:#ffffff;
    		}
        h4{
          text-align: center;
        }

	   </style>
</head>
<body>





<?php include 'include/menu.php'; ?>

	  <form name="formulaire" action="cocontact.php" method="post"  >

<div class="f">
 <h4><b>contacter nous</b></h4>
      <div class="row">
        <div class="input-field col s8 offset-s2">
          <i class="material-icons prefix">account_circle</i>
          <input id="nom" name="nom" type="text" class="validate"       pattern="[a-zéèçA-Z ]{2,}" title="format incorrect" autofocus required>
          <label for="icon_prefix">Nom: <span class="red-text text-darken-2">*</span></label>
        </div>
            </div>


      <div class="row">
          <div class="input-field col s8 offset-s2">
          <i class="material-icons prefix">account_circle</i>
          <input name="prenom" type="text" class="validate"       pattern="[a-zéèçA-Z ]{2,}" title="format incorrect" autofocus required>
          <label for="icon_prefix">Prenom:<span class="red-text text-darken-2">*</span></label>
        </div>
            </div>


      <div class="row">
       <div class="input-field col s8 offset-s2">
          <i class="material-icons prefix">email</i>
          <input  name="email"  type="email" class="validate"              pattern="[a-zA-Z]+[a-zA-Z@_-.0-9]{1,}" title="Doit commencer par une lettre et ne contient pas d'espaces ou de caractères spéciaux" autofocus required>
          <label for="icon_telephone" for="email" data-error="wrong" data-success="right">Adresse e-mail:<span class="red-text text-darken-2">*</span></label>
        </div>
          </div>


      <div class="row">
          <div class="input-field col s8 offset-s2">
          <i class="material-icons prefix">textsms</i>
          <input type="text" name="message"  class="validate"                   pattern="[a-zA-Z0-9_-,;@?!:. ]{10,}" title="Ce champ ne doit contenir de caractères spéciaux" autofocus required>
          <label for="autocomplete-input">Votre Demande:<span class="red-text text-darken-2">*</span></label>
        </div>
      </div>




      <div class="center-align">
          <button class="btn waves-effect waves-light blue darken-4" type="submit" name="sub"> envoyer

       </button>


</div>
</div>
 </form>








	<?php include 'include/footer.php'; ?>















</body>
</html>
