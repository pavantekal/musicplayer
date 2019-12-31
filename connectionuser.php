<?php

require 'C:\xampp\htdocs\compvendor\vendor\autoload.php';
    $client = new MongoDB\Client;
    $musicpicks = $client->musicpicks;
    $userdb = $musicpicks->userdb;
    
?>