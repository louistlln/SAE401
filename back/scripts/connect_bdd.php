<?php

    try {
        $db = new PDO( 'mysql:host=localhost; dbname=votrebdd' , 'root' , '', [PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION]);
    }
    catch (Exception $e) {
        die( 'Erreur : ' . $e -> getMessage() );
    }

?>
