<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">


    <title>IHM Project</title>

    <!-- Bootstrap -->
    <link href="view/css/bootstrap-theme.min.css" rel="stylesheet">
    <link href="view/css/bootstrap.min.css" rel="stylesheet">
    <link href="view/css/style.css" rel="stylesheet">

    <meta name="viewport" content="initial-scale=1.0, user-scalable=no" />
  </head>
  <body>
    <div class="container">
        <!-- First row containing all header menu -->
        <div class="row text-center">
            <div class="col-xs-12">
                <a href="?date=<?php echo $date_y; ?>" type="button" class="btn btn-primary">
                    <span class="glyphicon glyphicon-chevron-left"></span>
                </a>
                <a id="click" type="button" class="btn btn-primary">
                    <span class="glyphicon glyphicon-search"></span>
                </a>
                <a href="/ihm/" type="button" class="btn btn-primary">
                    <span class="glyphicon glyphicon-home"></span>
                </a>
                <a type="button" class="btn btn-primary">
                    <span class="glyphicon glyphicon-calendar"></span>
                </a>
                <a href="?date=<?php echo $date_t; ?>" type="button" class="btn btn-primary">
                    <span class="glyphicon glyphicon-chevron-right"></span>
                </a>
            </div>
        </div>

        <div class="row text-center search" id="hide" style="display:none;">
            <div class="col-xs-12">
            <input type="text" class="form-control" id="champ_recherche" placeholder="Text input">
        </div>
        </div>

        <div class="row" id="resultat"></div>

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


    </div>






    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
    <script src="view/js/bootstrap.min.js"></script>
    <script src="view/js/search_ajax.js"></script>
    <script>
        $( "#click" ).click(function() {
          $( "#hide" ).toggle();
        });
    </script>

  </body>
</html>
