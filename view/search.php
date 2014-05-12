<?php
echo '<ul>';
if ($data) {
    foreach($data as $d) {
        echo '<li><a href="?d=semaine&week=">' . $d->getPrenom() . ' ' . $d->getNom() . '</a></li>';
    }
}
echo '</ul>';
?>
