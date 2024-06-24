<?php
require 'vendor/autoload.php'; 

use MongoDB\Client;

try {
   
    $client = new Client('mongodb://localhost:27017'); 
    $database = $client->selectDatabase('gamerstack'); 
 
    $collections = $database->listCollections();
    foreach ($collections as $collection) {
        echo $collection->getName(), "\n";
    }

    echo "Connexion réussie!";
} catch (Exception $e) {
    echo 'Erreur de connexion : ', $e->getMessage();
}
?>
