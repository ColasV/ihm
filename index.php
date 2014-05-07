<?php
$search = false;
$semaine = false;
if($_GET['d'] == 'search') {
    $search = true;
    $recherche = $_POST['recherche'];
}

if($_GET['d'] == 'semaine') {
    $semaine = true;
    $week = $_GET['week'];
}
include('controler/index.php');

?>
