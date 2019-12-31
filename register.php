<?php
require 'C:\xampp\htdocs\compvendor\vendor\autoload.php';
$fname = $_POST['fname'];
$lname = $_POST['lname'];
$gender = $_POST['gen'];
$email = $_POST['email'];
$contact = $_POST['contact'];

$preferences = $_POST['pref'];
$password = $_POST['psw'];
$favsong = $_POST['secans'];

$target_dir = "uploads/";
$target_file = $target_dir . basename($_FILES["fileToUpload"]["name"]);
$dp = $target_file;
$uploadOk = 1;
$imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));
// Check if image file is a actual image or fake image
if(isset($_POST["submit"])) {
    $check = getimagesize($_FILES["fileToUpload"]["tmp_name"]);
    if($check !== false) {
        echo "File is an image - " . $check["mime"] . ".";
        $uploadOk = 1;
    } else {
        echo "File is not an image.";
        $uploadOk = 0;
    }
}
// Check if file already exists
if (file_exists($target_file)) {
    echo "Sorry, file already exists.";
    $uploadOk = 0;
}

// Allow certain file formats
if($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg"
&& $imageFileType != "gif" ) {
    echo "Sorry, only JPG, JPEG, PNG & GIF files are allowed.";
    $uploadOk = 0;
}
    if (move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $target_file)) {
        header("Location: index.php");
        echo "<script type='text/javascript'>alert('Registration Success!.Login to continue');</script>";
    }

    $client = new MongoDB\Client;
    $musicpicks = $client->musicpicks;
    $userdb = $musicpicks->userdb;
    $insertOneResult = $userdb->insertOne(
        ['fname' => $fname, 'lname' => $lname, 'gender' => $gender,'displaypic'=>$dp, 'email' => $email, 'contact' => $contact,'preferences' => $preferences,'password' => $password, 'favsong'=>$favsong, 'privateplaylist'=>[],'publicplaylist'=>[]]
    );
    var_dump($insertOneResult->getInsertedId());


?>