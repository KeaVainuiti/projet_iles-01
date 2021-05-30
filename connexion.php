<?php

    $host = 'localhost' ; // nom de l'hôte 
    $username = 'root' ; //nom de l'admin serveur
    $password = '' ; // mot de passe
    $bdd_name = 'iles'; // nom de la bdd (base de données)

    $connect_bdd = new mysqli ($host , $username , $password , $bdd_name); //ce connecter à la base de données