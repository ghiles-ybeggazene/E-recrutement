
<!DOCTYPE html>
    <html>
    <head>
    <title>Espace Admin</title>
    <link type="text/css" rel="stylesheet" href="../css/materialize.min.css"  media="screen,projection"/>
    
    <link href="../css/icons.css" rel="stylesheet">
    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
    <meta charset="utf-8">
     
     
     
     <style>
		body{background-color:#eceff1 ;} div.ghil{margin:11vh 20vw;padding: 5vh 8vw;background-color:#ffffff;}.pp{margin-left: 4.5vw}
	</style>
	
<style media="screen">




ul.topnav {
    list-style-type: none;
    margin: 0;
    padding: 0;
    overflow: hidden;
    background-color: #061a4e;
}


ul.topnav li {float: right;}
ul.topnav li.nom {
  font-weight: bold;

  float: left;
  display: inline-block;
  color: orange;
  text-align: center;
  padding: 9px 19px;
  text-decoration: none;

  font-size: 20px;}

ul.topnav li a {
    display: inline-block;
    color: #f2f2f2;
    text-align: center;
    padding: 9px 19px;
    text-decoration: none;
    transition: 0.3s;
    font-size: 17px;
}


ul.topnav li a:hover {background-color: #555;}


ul.topnav li.icon {display: none;}



@media screen and (max-width:985px) {

 ul.topnav li a {
   font-size: 15px;
 }
 ul.topnav li:not(:first-child) {display: none;}
 ul.topnav li.icon {
   float: right;
   display: inline-block;
 }

 ul.topnav.responsive {
 position: relative;
 display: flex;
 flex-direction: column-reverse;
}


ul.topnav.responsive li.nom{
  display: none;
}

 ul.topnav.responsive li.icon  {
   position: absolute;
   right: 0;
   top: 0;
 }
 ul.topnav.responsive li {
   float: none;
   display: inline;
 }
 ul.topnav.responsive li a {
   display: block;
   text-align: left;

 }

}
body{

position: absolute;
 font-family: "century gothic";
          top: 0; bottom: 0; left: 0; right: 0;
         height: 100%;
     margin:0;
     padding:0;
     background-size: 100% ;
     width:100%;

}
body:before {
  position: fixed;
  background-image: url("images/ee.jpg");
  content: "";
       position: fixed;
       height: 100%; width: 100%;
       background-size: cover;
       z-index: -1;
       -webkit-filter: blur(4px);
   -webkit-background-size: cover;
   -moz-background-size: cover;
   -o-background-size: cover;
   background-size: cover;
}
</style>
	
</head>
<body>
	
      <script type="text/javascript" src="../js/jquery-2.1.1.min.js"></script>
      <script type="text/javascript" src="../js/materialize.min.js"></script>


	
	
	
     <div class="navbar-fixed">
     <nav>
     <ul class="topnav" id="myTopnav">
     <li class="icon"> </li>
     <div class="center">
     <li>  <i class="material-icons left"></i></li>
     <li>  <i class="material-icons left"></i> </li>
     <li><a href=""> <i class="material-icons left"></i></a></li>
     </div>
     </ul>
     </nav>
     </div>



	
	
	  <form name="formulaire" action="login.php" method=post  >
      <div class="ghil ">
 
      
      
        <div class="center">
        <i class="medium material-icons prefix center">account_circle</i>
        <h5><b>Espace Admin</b></h5>
        </div><br>
      
      

        <div class="row">
        <div class="input-field col s12">
        <i class="material-icons prefix">person_pin</i>
        <input id="pseudo" name="pseudo" type="text" class="validate"       pattern="[a-zA-Z0-9]+[0-9a-zA-Z:/_-é&èç ]{2,}" title="Ce champ ne doit contenir que des lettres" autofocus required>
        <label for="icon_prefix">Nom d'utilisateur: <span class="red-text text-darken-2">*</span></label>
        </div>
        </div>
    

        <div class="row">
        <div class="input-field col s12">
        <i class="material-icons prefix">lock</i>
        <input id="mdp" name="mdp" type="password" class="validate"  pattern="[a-zA-Z0-9]+[0-9a-zA-Z ]{2,}" title="Ce champ ne doit contenir que des lettres" autofocus required>
        <label for="icon_prefix">Mot de passe: <span class="red-text text-darken-2">*</span></label>
        </div>
        </div>
    


        

        <div class="input-field col s12 center">
        <button class="btn waves-effect waves-light blue darken-4" type="submit"  name="action">Envoyer
        <i class="material-icons right">done_all</i></button>
        </div>

     

     
     
     
      </div>  
      </form>


     
	
	<script>
	 $( document ).ready(function);
     $(".dropdown-button").dropdown();
	</script>
	
	
	
	
</body>
</html>