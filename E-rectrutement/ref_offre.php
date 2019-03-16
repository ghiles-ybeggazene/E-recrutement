<?php
include 'conbdd.php';
$io=($_GET['re']);
$ic=($_GET['ca']);
mysql_query("DELETE FROM offre WHERE id_cand='$ic' AND id_org='$io'");

 ?>
 <script>
window.location.href = "candidat.php";
 </script>
