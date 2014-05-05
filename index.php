<?php
if($_GET['d'] == 'search') {
    $search = true;
    $recherche = $_POST['recherche'];
}
include('controler/index.php');

?>
