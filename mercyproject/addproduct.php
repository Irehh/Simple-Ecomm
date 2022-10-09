<?php

include "db.php";

session_start();
$msg = $css_class ="";
error_reporting(0);

if(isset($_SESSION["email"])){
  
}elseif($_SESSION["usertype"] = "client"){
  header("location:index.php");
}elseif(!isset($_SESSION['email'])){
  header("location:index.php");
}


if ($conn === false){
  die("OGA check your database connection" . mysqli_connect_error()) ;
}

  if(isset($_POST["submit"])){

      $image1 = $_FILES["image1"]["name"];
      $movin = $_FILES["image1"]["tmp_name"];
      $name = $_POST["name"];
      $amount = $_POST["amount"];
      $brand = $_POST["brand"];
      $desc = $_POST["desc"];
      $target = "images/" . $image1;
      $category = $_POST['category'];


      if(move_uploaded_file($movin, $target)){

        $sql = "INSERT INTO `product`(image,amount,brand,descp,name,category) VALUES ('$image1','$amount','$brand','$desc','$name','$category')";

        $result = mysqli_query($conn,$sql);
     if($result){
      $msg = "image added succcessfully";
      $css_class = "alert-success";
     }else{
      $msg = "Try again";
      $css_class = "alert-danger";
     }
      }else{
        $msg = "failed to upload file";
        $css_class = "alert-danger";
      }
  }

  $sqlcount = "SELECT * FROM `product` ";
$resultcount = mysqli_query($conn , $sqlcount);
$count = mysqli_num_rows($resultcount);

?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <title>Emcee Stores | NFT Marketplace - Account</title>
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
      <!-- Remove "navbar-sticky" class to make navigation bar scrollable with the page.-->
      <?= include "./template/adminheader.php"; ?>
      <div class="container mb-5 pb-3">
        <div class="bg-light shadow-lg rounded-3 overflow-hidden">
          <div class="row">
            <?php include "./template/adminsidebar.php";  ?>
            <!-- Content-->
            <section class="col-lg-9 pt-lg-4 pb-4 mb-3">
              <div class="pt-2 px-4 ps-lg-0 pe-xl-5">
                <h1 class="h3 mb-4 pt-2 text-center text-sm-start">Add Product Details</h1>
                <?php if(!empty($msg)){ ?>
          <div class="alert <?php echo $css_class; ?>">
          <?php echo $msg; ?>
           </div>
          <?php } ?>
                <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="POST" enctype="multipart/form-data">
                  <div class="row gy-3 mb-4 pb-md-3 mb-2">
                  <div class="form-group">
    <input type="file" class="form-control-file" name="image1" id="exampleFormControlFile1">
  </div>
                    <div class="col-sm-6">
                      <label class="form-label" for="profile-name">Name</label>
                      <input class="form-control" id="profile-name" name="name" type="text" value="handbag">
                    </div>
                    <div class="col-sm-6">
                      <label class="form-label" for="profile-username">Brand</label>
                      <input class="form-control" id="profile-username" name="brand" type="text" placeholder="Dior">
                    </div>
                    <div class="col-sm-6">
                      <label class="form-label" for="profile-amount">Amount</label>
                      <input class="form-control" id="profile-amount" name="amount" type="number" placeholder="5000" min="1000" max="200000"  value="" required>
                    </div>
                    <div class="col-sm-6">
                      <label for="category" class="form-label"> Category </label>
                      <div class="form-check">
                        <input class="form-check-input" placeholder="menshoe" type="radio" name="category" id="exampleRadios1" value="menshoe">
                        <label class="form-check-label" for="exampleRadios1">
                            menshoe
                          </label>
                      </div>
                      <div class="form-check">
                          <input class="form-check-input" placeholder="womenshoe" type="radio" name="category" id="exampleRadios2" value="womenshoe" checked>
                          <label class="form-check-label" for="exampleRadios2">
                              womenshoe
                          </label>
                      </div>
                      <div class="form-check">
                          <input class="form-check-input" placeholder="womenbag" type="radio" name="category" id="exampleRadios3" value="womenbag">
                          <label class="form-check-label" for="exampleRadios3">
                              Womenbag
                          </label>
                      </div>
                      <div class="form-check">
                          <input class="form-check-input" placeholder="others" type="radio" name="category" id="exampleRadios4" value="others">
                          <label class="form-check-label" for="exampleRadios4">
                              Others
                          </label>
                      </div>
                    </div>
                    <div class="col-12">
                      <label class="form-label" for="profile-bio">Short Description</label>
                      <textarea class="form-control" name="desc" id="profile-bio" rows="4" placeholder="Tell about product in few words"></textarea><span class="form-text">0 of 500 characters used.</span>
                    </div>
                  </div>
                  <!-- Submit-->
                  <div class="d-flex flex-sm-row flex-column">
                    <button class="btn btn-accent" name="submit" type="submit">Add Product</button>
                  </div>
                </form>
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
            <div class="fs-xs text-light opacity-50">&copy; All rights reserved. Made by <a class="text-light" href="https://index.php" target="_blank" rel="noopener">Emcee Stores</a></div>
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