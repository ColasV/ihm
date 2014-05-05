<?php
echo '<ul>';
if ($data) {
    foreach($data as $d) {
        echo '<li>' . $d->getPrenom() . ' ' . $d->getNom() . '</li>';
    }
}
echo '</ul>';
?>
