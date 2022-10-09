<?php

require "db.php";
if ($conn === false){
    die("OGA check your database connection" . mysqli_connect_error()) ;
  }

$select = "SELECT *FROM product WHERE `product`.`id`=$id";
$result = mysqli_query($conn,$select);
if($result){
    $row = mysqli_fetch_assoc($result);
$path = "images/" . $row['image'];
unlink($path);

}

?>