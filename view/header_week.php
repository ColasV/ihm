<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">


    <title>IHM Project</title>

    <!-- Bootstrap -->
    <link href="view/css/bootstrap-theme.min.css" rel="stylesheet">
    <link href="view/css/bootstrap.min.css" rel="stylesheet">
    <link href="view/css/bootstrap-datetimepicker.min.css" rel="stylesheet">
    <link href="view/css/style.css" rel="stylesheet">

    <meta name="viewport" content="initial-scale=1.0, user-scalable=no" />
  </head>
  <body>
    <div class="container">
        <!-- First row containing all header menu -->
        <div class="row text-center">
            <div class="col-xs-12">
                <a href="?d=semaine&week=<?php echo $date_b; ?>" type="button" class="btn btn-primary">
                    <span class="glyphicon glyphicon-chevron-left"></span>
                </a>
                <a id="click" type="button" class="btn btn-primary">
                    <span class="glyphicon glyphicon-search"></span>
                </a>
                <a href="/projet_ihm" type="button" class="btn btn-primary">
                    <span class="glyphicon glyphicon-home"></span>
                </a>
                <a type="button" class="btn btn-primary" id="datetimepicker">
                    <span class="glyphicon glyphicon-calendar"></span>
                </a>
                <a href="?d=semaine&week=<?php echo $date_a; ?>" type="button" class="btn btn-primary">
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
        <div class="row" id="calendrier" style="display:none">
            <div id="calendar"></div>
        </div>
