<?php
include 'conbdd.php';
$io=($_GET['re']);
$ic=($_GET['ca']);
//var_dump($io,$ic);exit;
mysql_query("UPDATE offre SET rep_offre='acceptee' WHERE id_cand='$ic' AND id_org='$io'");

?>
<script>
 window.location.href = "candidat.php";
</script>
