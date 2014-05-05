<?php
    include('model/people.php');



    function getPeople($recherche) {
        $bdd = new PDO('mysql:host=localhost;dbname=ihm', 'root', 'root');
        $stmt = $bdd->prepare("SELECT * FROM people where nom LIKE ?");
        $stmt->execute(array('%' . $recherche . '%'));

        $arr = array();

        while($cours = $stmt->fetch()) {
            $c = new People($cours['nom'],$cours['prenom']);
            array_push($arr,$c);
        }

        $stmt->closeCursor();
        return $arr;

    }

?>
