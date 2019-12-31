<?php
session_start();
$rating = $_POST['rate'];
echo $rating;
$song = $_POST['songname'];
$email = $_SESSION['email'];

require 'C:\xampp\htdocs\compvendor\vendor\autoload.php';
$email = $_SESSION['email'];
$song = $_POST['songname'];
$client = new MongoDB\Client;
$musicpicks = $client->musicpicks;
$songsdb = $musicpicks->songsdb;
$findresult = $songsdb->findOne(
['song'=>$song]
);
$rate = $findresult['rating'];
$finalrate = $rate+$rating;
echo $finalrate;
if(isset($_POST['updaterating']))
{
$updateresult = $songsdb->updateOne(
    ['song' => $song],
    ['$set' => ['rating' => $finalrate]]
);
$updateresult = $songsdb->updateOne(
    ['song' => $song],
    ['$addToSet'=>['users'=>$email]]
);
header("Location: homepage.php");
}








?>