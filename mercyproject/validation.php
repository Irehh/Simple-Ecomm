<?php
include "db.php";
session_start();
    $email = $_POST["email"];
    $pw = $_POST["password"];
if($conn === false ){
    die("Database connection error" . mysqli_connect_error());
}

if($_SERVER["REQUEST_METHOD"] === "POST"){



if(isset($_POST["submit"])){
    $email = $_POST["email"];
    $pw = $_POST["password"];
    $sql = "SELECT * FROM users WHERE email = '".$email."' AND password = '".$pw."'";
    $query = mysqli_query($conn,$sql);
    $result = mysqli_fetch_assoc($query);

    if($result["usertype"] === "admin"){
        $_SESSION['usertype'] = "admin";
        header("location:admin.php");

    }elseif($result["usertype"]=== "client"){
        $_SESSION['usertype'] = "client";
        header("location:client.php");
    }else{
        $report ="Email or Password is incorrect";
        $alert = "alert-danger";
        $_SESSION['message'] = $report;
        $_SESSION['class'] = $alert;
        header("location:index.php");

    }
}
}

?>