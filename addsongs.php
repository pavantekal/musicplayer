<?php
require 'C:\xampp\htdocs\compvendor\vendor\autoload.php';
$sname = $_POST['sname'];
$artist = $_POST['artist'];
$album = $_POST['album'];
$language = $_POST['language'];
$genre = $_POST['genre'];
$songscreen;
$songpath;

$target_dir = "music/songscreen/";
$target_file = $target_dir . basename($_FILES["dp"]["name"]);
$songscreen = $target_file;
$uploadOk = 1;
$imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));
// Check if image file is a actual image or fake image
if(isset($_POST["submit"])) {
    $check = getimagesize($_FILES["dp"]["tmp_name"]);
    if($check !== false) {
        $uploadOk = 1;
    } else {
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
    if (move_uploaded_file($_FILES["dp"]["tmp_name"], $target_file)) {
       
$target_dirs = "music/";
$target_files = $target_dirs . basename($_FILES["fileToUpload"]["name"]);
$songpath = $target_files;
$uploadOk = 1;
if (move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $target_files)) {
    $client = new MongoDB\Client;
    $musicpicks = $client->musicpicks;
    $songsdb = $musicpicks->songsdb;
    $insertOneResult = $songsdb->insertOne(
        ['song' => $sname, 'album' => $album, 'artist' => $artist,'genre'=>$genre, 'language' => $language, 'songpath' => $songpath,'songscreen' => $songscreen,'rating' => null,'users'=>[]]
    );
    var_dump($insertOneResult->getInsertedId());

    header("Location: admin.php");
    echo "<script type='text/javascript'>alert('Registration Success!.Login to continue');</script>";
}

}


?>