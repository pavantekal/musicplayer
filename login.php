<?php
session_start();
$email = $_POST['email'];
$password = $_POST['psw'];
require 'C:\xampp\htdocs\compvendor\vendor\autoload.php';
 

    $client = new MongoDB\Client;
    $musicpicks = $client->musicpicks;
    $userdb = $musicpicks->userdb;
    $result = $userdb->findOne(
        ['email'=>$email,'password'=>$password]
    );
    if($result)
    {
        $_SESSION['name'] = $result['fname'];
            $_SESSION['email'] = $result['email'];
            $_SESSION['dp'] = $result['displaypic'];
            header("Location: homepage.php");
    }
    else
    {
                  echo "Invalid Email/password";
                    include 'index.php';
    }
    // foreach($result as $res)
    // {
    //     if($res['email']==$email && $res['password']==$password)
    //     {
    //         $_SESSION['name'] = $res['fname'];
    //         $_SESSION['email'] = $res['email'];
    //         header("Location: homepage.php");
    //     }
    //     else
    //     {
    //         echo "Invalid Email/password";
    //         include 'index.php';
    //     }
    // }




?>