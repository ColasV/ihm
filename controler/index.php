<?php
include('dao/coursdao.php');
include('dao/peopledao.php');

if ($search) {
    if (empty($recherche)) {
        $data = array();
    } else {
        $data = getPeople($recherche);
    }
    include('view/search.php');
} else if($semaine) {
    $data = getCoursSemaine();

    $year = 2014;
    $week_no = $week;

    $week_start = new DateTime();
    $week_start->setISODate($year,$week_no);
    $week_end = clone $week_start;
    $week_end = $week_end->add(new DateInterval("P1W"));



    $week_name = array("Lundi","Mardi","Mercredi","Jeudi","Vendredi");

    if($week_no) {
        $date_b = $week_no -1;
        $date_a = $week_no + 1;
    } else {
        $weekNumber = date("W");
        $date_b = $weekNumber -1;
        $date_a = $weekNumber + 1;
    }


    include('view/header_week.php');
    include('view/week.php');
    include('view/footer.php');
} else {
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
    include('view/header.php');
    include('view/index.php');
    include('view/footer.php');
}

?>
