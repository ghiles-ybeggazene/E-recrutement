<?php


  session_start();
  session_destroy();
  unset($_SESSION['user']) ; unset($_SESSION['candidat']);
  session_unset();

  header("Location: accueil.php");
  exit;
  ?>
