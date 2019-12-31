<?php
require '..\vendor/autoload.php';
$client=new MongoDB\Client('mongodb://localhost:27017');
$companydb=$client->companydb;
$empcollection=$companydb->empcollection;
$document=$empcollection->findOne(['_id'=>'1']);
var_dump($documnet);
echo $documnet[_'id'];
echo("<br><br>");
echo $document['name'];
?>