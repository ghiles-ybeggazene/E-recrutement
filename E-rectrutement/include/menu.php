<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">

  <link rel="stylesheet" href="css/icons.css">
  <link rel="stylesheet" href="css/materialize.min.css">
  <title>Document</title>
</head>
<body>

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



@media screen and (max-width:680px) {

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
  background-image: url("images/E4.jpg");
background-size: cover;
 font-family: "century gothic";
}

</style>



  <div class="navbar-fixed">


  <nav>



  <ul class="topnav" id="myTopnav">
  <li class="nom"> M-recrutement </li>
  <li class="icon">
    <a href="javascript:void(0);" onclick="myFunction()">&#9776;</a>
  </li>

  <li><a href="contact.php"> <i class="material-icons left">email</i>Contact</a></li>
  <li><a href="inscription.php"><i class="material-icons left">supervisor_account</i>Inscription</a></li>
  <li><a href="accueil.php"> <i class="material-icons left">home</i>Accueil</a></li>

  </ul>
  </nav> </div>




          <script type="text/javascript" src="js/jquery-2.1.1.min.js"></script>
          <script type="text/javascript" src="js/materialize.min.js"></script>



          <script type="text/javascript">



          function myFunction() {
              var x = document.getElementById("myTopnav");
              if (x.className === "topnav") {
                  x.className += " responsive";
              } else {
                  x.className = "topnav";
              }
          }
          </script>
