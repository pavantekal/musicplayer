<?php

require 'C:\xampp\htdocs\compvendor\vendor\autoload.php';
    $client = new MongoDB\Client;
    $musicpicks = $client->musicpicks;
    $songsdb = $musicpicks->songsdb;
    
?>