<div class="row">
<?php
echo '<h4 class="text-center">';
echo 'Semaine du ';
echo $week_start->format('d M Y') . " au ".$week_end->format('d M Y');
echo '</h4>';

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
