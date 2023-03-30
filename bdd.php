<?php
        
    function connect(){

        $host = 'localhost';
        $base = 'terre_faer';
        $login = 'root';
        $pwd = '';

        $oDbh = new PDO('mysql:host='.$host.';dbname='.$base,$login,$pwd);                
        $oDbh->exec("SET NAMES 'utf8'");                                                                         
        $oDbh->setAttribute( PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION );

        return $oDbh;                                                                                                
    }


    function addData($nom, $prenom, $mail, $tel, $adulte, $enfant){
        $oDbh = connect();        
        $sQuery = 'INSERT INTO reservation (Nom,Prenom,Mail,Telephone,nb_adulte,nb_enfant)
        VALUES ("'.$nom.'", "'.$prenom.'", "'.$mail.'", "'.$tel.'", "'.$adulte.'", "'.$enfant.'")';

        if($tel == "Entrer votre numéro de téléphone"){
            $sQuery='INSERT INTO reservation (Nom,Prenom,Mail,nb_adulte,nb_enfant) VALUES ("'.$nom.'", "'.$prenom.'", "'.$mail.'", "'.$adulte.'", "'.$enfant.'")';}
        if($prenom == "Entrer votre prénom"){
            $sQuery='INSERT INTO reservation (Nom,Mail,Telephone,nb_adulte,nb_enfant) VALUES ("'.$nom.'", "'.$mail.'", "'.$tel.'", "'.$adulte.'", "'.$enfant.'")';}
        if($prenom == "Entrer votre prénom" AND $tel == "Entrer votre numéro de téléphone"){
            $sQuery='INSERT INTO reservation (Nom,Mail,nb_adulte,nb_enfant) VALUES ("'.$nom.'", "'.$mail.'", "'.$adulte.'", "'.$enfant.'")';}
        
        echo `<p class="bold">Votre réservation à bien été enregistrer</p>` ;

        $sQueryResult = $oDbh->query($sQuery);                                                                    
        return $sQueryResult->fetchAll();  
    }

?>
