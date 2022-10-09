<?php
require "db.php";
session_start();
$id  = $_GET['id'];
include "pathunlink.php";

if(isset($_GET['id'])) {

    $id = $_GET['id'];
    $sql = "DELETE FROM product WHERE `product`.`id` = $id";

    $result = mysqli_query($conn , $sql);
    

    if($result){
        
        header("location:admin.php");
        echo "successfully deleted!";
    }
    

}
?>