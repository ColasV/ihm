<?php
error_reporting(-1);
include('dao/coursdao.php');

if (!empty($_GET['date'])) {
    $str = $_GET['date'];

    $time = strtotime($str);
    $date = date('l j F',$time);

    $date_y = date('d-m-o',$time - 60*60*24);
    $date_t = date('d-m-o',$time + 60*60*24);

    $cours = getCours(date('N',$time));

} else {
    $date = date('l j F');
    $date_y = date('d-m-o',time() - 60*60*24);
    $date_t = date('d-m-o',time() + 60*60*24);
    $cours = getCours(date('N'));
}


include('view/index.php');

?>
