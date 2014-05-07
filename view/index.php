
        <!-- Second row containing the table -->
        <div class="row text-center" >
            <div class="row">
                <h3><?php echo $date; ?></h3>
            </div>
            <?php
            if(empty($cours)) {
                echo '<div class="row">';
                echo '<h4>Pas de cours</h4>';
                echo '</div>';
            } else {
                foreach($cours as $cour) {
                    echo '<div class="row">';
                    echo '<h4>' . $cour->getNom() . '</h4>';
                    echo '<p>' . $cour->getSalle() . ' - ' . $cour->getHoraire() . '</p>';
                    echo '</div>';
                }
            }
            ?>
        </div>
