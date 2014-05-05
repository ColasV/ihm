<?php
    include('model/cours.php');



    function getCours($date) {
        $bdd = new PDO('mysql:host=localhost;dbname=ihm', 'root', 'root');
        $stmt = $bdd->prepare("SELECT * FROM cours where jour = ?");
		$stmt->execute(array($date));

		$arr = array();

        while($cours = $stmt->fetch()) {
            $c = new Cours($cours['nom'],$cours['salle'],$cours['horaire']);
            array_push($arr,$c);
        }

        $stmt->closeCursor();
        return $arr;

    }








?>
