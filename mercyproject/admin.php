<?php

session_start();
include "./db.php";


if(isset($_SESSION["email"])){
}elseif($_SESSION["usertype"] = "client"){
  header("location:index.php");
}elseif(!isset($_SESSION['email'])){
  header("location:index.php");
}


if ($conn == false){
  die("OGA check your database connection" . mysqli_connect_error()) ;
}

$sqlcount = "SELECT * FROM `product` ";
$resultcount = mysqli_query($conn , $sqlcount);
$count = mysqli_num_rows($resultcount);

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <title>Emcee</title>
    <!-- SEO Meta Tags-->
    <meta name="description" content="Cartzilla - Bootstrap E-commerce Template">
    <meta name="keywords" content="bootstrap, shop, e-commerce, market, modern, responsive,  business, mobile, bootstrap, html5, css3, js, gallery, slider, touch, creative, clean">
    <meta name="author" content="Createx Studio">
    <!-- Viewport-->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- Favicon and Touch Icons-->
    <link rel="apple-touch-icon" sizes="180x180" href="apple-touch-icon.png">
    <link rel="icon" type="image/png" sizes="32x32" href="favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="favicon-16x16.png">
    <link rel="manifest" href="site.webmanifest">
    <link rel="mask-icon" color="#fe6a6a" href="safari-pinned-tab.svg">
    <meta name="msapplication-TileColor" content="#ffffff">
    <meta name="theme-color" content="#ffffff">
    <!-- Vendor Styles including: Font Icons, Plugins, etc.-->
    <link rel="stylesheet" media="screen" href="vendor/simplebar/dist/simplebar.min.css"/>
    <link rel="stylesheet" media="screen" href="vendor/tiny-slider/dist/tiny-slider.css"/>
    <!-- Main Theme Styles + Bootstrap-->
    <link rel="stylesheet" media="screen" href="css/theme.min.css">
  </head>
  <!-- Body-->
  <body class="handheld-toolbar-enabled">
   
    <main class="page-wrapper">

      <?= include "./template/adminheader.php"; ?>
      
      <div class="container mb-5 pb-3">
        <div class="bg-light shadow-lg rounded-3 overflow-hidden">
          <div class="row">
            <!-- Sidebar-->

            <?php  include "./template/adminsidebar.php"; ?>

            <!-- Content-->
            <section class="col-lg-9 pt-lg-4 pb-4 mb-3">
              <div class="pt-2 px-4 ps-lg-0 pe-xl-5">
                <h1 class="h3 mb-4 pb-2 text-sm-start text-center">Product List</h1>
                <div class="bg-secondary rounded-3 p-4">

                  <table class="table table-hover">
                    <thead>
                    <tr>
                      <th scope="col">item</th>
                      <th scope="col">name</th>
                      <th scope="col">category</th>
                      <th scope="col">modify</th>
                      <th scope="col">remove</th>
                    </tr>
                  </thead>
                  <tbody>
                    <tr>
                      <th scope="row"><img class="rounded-circle" src="img/nft/vendor/avatar.png" alt="@foxnet_creator" width="45" height="45"></th>
                      <td>wfge</td>
                      <td>fgebt</td>
                      <td><a class="btn btn-sm btn-success rounded-1" href="nft-create-item.html">modify</a></td>
                      <td><a class="btn btn-sm btn-danger rounded-1" href="nft-create-item.html">Delete</a></td>
                    </tr>
                    <?php
$sqls = "SELECT * FROM `product` ";
$results = mysqli_query($conn , $sqls);
$count = mysqli_num_rows($results);
while($rows = mysqli_fetch_assoc($results)){
?>

   <tr>
   <td> <img width="40" height="32" src="./images/<?php echo $rows['image']; ?>" /></td>
    <td><?php echo $rows['name']; ?></td>
    <td><?php echo $rows['category']; ?></td>
    <td><a class="btn btn-sm btn-success rounded-1" href="./updateproduct.php?id=<?php echo $rows['id']; ?>">EDIT</a> </td>
    <td> <a class="btn btn-sm btn-danger rounded-1" href="./delete.php?id=<?php echo $rows['id']; ?>">REMOVE</a>
  </td>
  </tr>

  <?php 
}
?>
                  </tbody>
                  </table>
                 
                </div>
              </div>
            </section>
          </div>
        </div>
      </div>
    </main>
    <!-- Footer-->
    <footer class="footer bg-darker">
        <div class="container py-5">
          <div class="row py-lg-4 text-center">
            <div class="fs-xs text-light opacity-50">&copy; All rights reserved. Made by <a class="text-light" href="" target="_blank" rel="noopener">Createx Studio</a></div>
        </div>
    </footer>
    <!-- Back To Top Button--><a class="btn-scroll-top" href="#top" data-scroll><span class="btn-scroll-top-tooltip text-muted fs-sm me-2">Top</span><i class="btn-scroll-top-icon ci-arrow-up">   </i></a>
    <!-- Vendor scrits: js libraries and plugins-->
    <script src="vendor/bootstrap/dist/js/bootstrap.bundle.min.js"></script>
    <script src="vendor/simplebar/dist/simplebar.min.js"></script>
    <script src="vendor/tiny-slider/dist/min/tiny-slider.js"></script>
    <script src="vendor/smooth-scroll/dist/smooth-scroll.polyfills.min.js"></script>
    <!-- Main theme script-->
    <script src="js/theme.min.js"></script>
  </body>

</html>