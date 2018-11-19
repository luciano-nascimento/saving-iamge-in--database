<?php

//image path
$image = "spit-fire.jpg";

//read image
$blob = base64_encode(addslashes(file_get_contents($image)));

//put in file to see size easily
//file_put_contents('new.jpg', stripslashes($uncompressed));

//compress data
$compressed = gzcompress($blob, 9);

//put in file to see size easily
//file_put_contents('new.jpg', stripslashes($uncompressed));






$con = new PDO("mysql:host=localhost;dbname=test", "root", ""); 
$stmt = $con->prepare("INSERT INTO user(img) VALUES(?)");
$stmt->bindParam(1,$compressed);
$stmt->execute();


//uncompress
//$uncompressed = gzuncompress($compressed);


//create folder again
//file_put_contents('new.jpg', stripslashes($uncompressed));
?>