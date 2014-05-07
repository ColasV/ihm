<div class="row">
<?php
$year = 2014;
$week_no = $week;

$week_start = new DateTime();
$week_start->setISODate($year,$week_no);
$week_end = clone $week_start;
$week_end = $week_end->add(new DateInterval("P1W"));
echo '<h4 class="text-center">';
echo 'Semaine du ';
echo $week_start->format('d M Y') . " au ".$week_end->format('d M Y');
echo '</h4>';


$week_name = array("Lundi","Mardi","Mercredi","Jeudi","Vendredi");


?>
<div class="container">
<?php
$i = 1;
foreach($week_name as $w) {
    echo '<div class="row">';
    echo '<div class="col-xs-3">';
    echo '<b>';
    echo $w;
    echo '</b>';
    echo '</div>';

    foreach($data as $d) {

        if ($d->getJour() == $i) {
        echo '<div class="col-xs-3">';
        echo '<p>' . $d->getNom() . '</p>';
        echo '<p>' . $d->getSalle() . '</p>';
        echo '<p>' . $d->getHoraire() . '</p>';
        echo '</div>';
        }
    }
    echo '</div>';
    $i++;
}


?>
</div>
</div>
