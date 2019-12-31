<?php
session_start();
require 'C:\xampp\htdocs\compvendor\vendor\autoload.php';
$email = $_SESSION['email'];
$song = $_POST['songname'];
$client = new MongoDB\Client;
$musicpicks = $client->musicpicks;
$userdb = $musicpicks->userdb;
if(isset($_POST['private']))
{
$insertOneResult = $userdb->updateOne(
    ['email' => $email],
    ['$pull' => ['privateplaylist' => $song]]
);

header("Location: homepage.php");
}
if(isset($_POST['public']))
{
$insertOneResult = $userdb->updateOne(
    ['email' => $email],
    ['$pull' => ['publicplaylist' => $song]]
);
header("Location: homepage.php");
}


?>