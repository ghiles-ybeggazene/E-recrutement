<?php
session_start();
include('conbdd.php');

if (!isset($_SESSION['candidat'])) { header ('Location: accueil.php');exit(); }






if (!isset($_GET['id_message']) || empty($_GET['id_message'])) {
	header ('Location: messagerie_candidat.php');
	exit();
}
else {







	$sql = 'DELETE FROM messages WHERE id_destinataire="'.$_SESSION['candidat'].'" AND id="'.$_GET['id_message'].'"';
	$req = mysql_query($sql) or die('Erreur SQL !<br />'.$sql.'<br />'.mysql_error());

	mysql_close();

header ('Location: messagerie_candidat.php');
	exit();
}


?>
