<?php
require ("tour.php");
$tid=$_GET['tid'];
$mtour=new tour;
$mtour->del_tour($tid);
header("location:list_tour.php");
exit();
?>