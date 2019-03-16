<?php
session_start();

if (!isset($_SESSION['user'])) { header ('Location: accueil.php'); exit(); }






if (!isset($_GET['id_message']) || empty($_GET['id_message'])) {
	header ('Location: messagerie_recruteur.php');
	exit();
}


else {
	include('conbdd.php');


	$sql = 'DELETE FROM messages WHERE id_destinataire="'.$_SESSION['user'].'" AND id="'.$_GET['id_message'].'"';

	$req = mysql_query($sql) or die('Erreur SQL !<br />'.$sql.'<br />'.mysql_error());

	mysql_close();

	header ('Location: messagerie_recruteur.php');
	exit();
}




?>
