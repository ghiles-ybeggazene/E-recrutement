<?php
include'conbdd.php';
$or=($_GET['recr']);
$cn=($_GET['cand']);
mysql_query("DELETE FROM offre WHERE id_cand = '$cn' AND id_org='$or' ");



 ?>
 <script>

 window.location.href = "aj_offre.php";

 </script>
