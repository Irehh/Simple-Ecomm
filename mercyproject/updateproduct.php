<?php

session_start();
include("db.php");
error_reporting(0);

if(isset($_SESSION["email"])){
  
}elseif($_SESSION["usertype"] = "client"){
  header("location:index.php");
}elseif(!isset($_SESSION['email'])){
  header("location:index.php");
}

$msg = $css_class ="";
if ($conn === false){
  die("OGA check your database connection" . mysqli_connect_error()) ;
}

$id = $_GET['id'];

  //select data from database
  $change = "SELECT *FROM product WHERE `product`.`id`=$id";
  $result=mysqli_query($conn,$change) or die("could not select");
  while($row=mysqli_fetch_assoc($result)){
  $oldname = $row['name'];
  $oldamount = $row['amount'];
  $olddesc = $row['descp'];
  $oldbrand = $row['brand'];
  $oldimage1 = $row['image'];
  }

//update product

if(isset($_POST["submit"])){

$image1 = $_FILES["image1"]["name"];
$movin = $_FILES["image1"]["tmp_name"];
$name = $_POST["name"];
$amount = $_POST["amount"];
$brand = $_POST["brand"];
$sex = $_POST["sex"];
$type = $_POST["type"];
$desc = $_POST["desc"];
$target = "images/" . $image1;

include "pathunlink.php";


if(move_uploaded_file($movin, $target)){

   //update query
   $update = "UPDATE `product` SET `image`='$image1',`type`='$type',`amount`='$amount',`sex`='$sex',`descp`='$desc',`name`='$name' WHERE id = $id";

  $result = mysqli_query($conn,$update);
if($result){
$msg = "image updated succcessfully";
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

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <title>Emcee Stores</title>
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
      <!-- Navbar for NFT Marketplace demo-->
      <!-- Remove "navbar-sticky" class to make navigation bar scrollable with the page.-->
      <?= include "./template/adminheader.php"; ?>
      <div class="container mb-5 pb-3">
        <div class="bg-light shadow-lg rounded-3 overflow-hidden">
          <div class="row">
            <?php include "./template/adminsidebar.php";  ?>
            <!-- Content-->
            <section class="col-lg-9 pt-lg-4 pb-4 mb-3">
              <div class="pt-2 px-4 ps-lg-0 pe-xl-5">
                <h1 class="h3 mb-4 pt-2 text-center text-sm-start">Update Product Details</h1>
                <?php if(!empty($msg)){ ?>
          <div class="alert <?php echo $css_class; ?>">
          <?php echo $msg; ?>
           </div>
          <?php } ?>

          <img src="images/<?php echo $oldimage1; ?>"  width='80' height='80'>
                <form action="<?php htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="POST" enctype="multipart/form-data">
                  <div class="row gy-3 mb-4 pb-md-3 mb-2">
                  <div class="form-group">
                    <input type="file" class="form-control-file" name="image1" id="exampleFormControlFile1">
                  </div>
                    <div class="col-sm-6">
                      <label class="form-label" for="profile-name">Name</label>
                      <input class="form-control" id="profile-name" name="name" type="text" value="<?php echo $oldname; ?>">
                    </div>
                    <div class="col-sm-6">
                      <label class="form-label" for="profile-username">Brand</label>
                      <input class="form-control" id="profile-username" name="brand" value="<?php echo $oldbrand; ?>" type="text" placeholder="Dior">
                    </div>
                    <div class="col-sm-6">
                      <div class="form-check">
                        <input class="form-check-input" type="radio" name="type" id="exampleRadios1" value="shoe" placeholder="shoe" checked>
                        <label class="form-check-label" for="exampleRadios1">
                            Shoe
                          </label>
                      </div>
                      <div class="form-check">
                          <input class="form-check-input" type="radio" placeholder="bag" name="type" id="exampleRadios2" value="bag">
                          <label class="form-check-label" for="exampleRadios2">
                              Bags
                          </label>
                      </div>
                    </div>
                    <div class="col-sm-6">
                      <div class="form-check">
                        <input class="form-check-input" placeholder="men" type="radio" name="sex" id="exampleRadios1" value="men" checked>
                        <label class="form-check-label" for="exampleRadios1">
                            men
                          </label>
                      </div>
                      <div class="form-check">
                          <input class="form-check-input" placeholder="women" type="radio" name="sex" id="exampleRadios2" value="women">
                          <label class="form-check-label" for="exampleRadios2">
                              women
                          </label>
                      </div>
                    </div>
                    <div class="col-sm-6">
                      <label class="form-label" for="profile-amount">Amount</label>
                      <input class="form-control" id="profile-amount" name="amount" type="number" placeholder="5000" value="<?php echo $oldamount; ?>" min="1000" max="200000"  value="" required>
                    </div>
                    <div class="col-12">
                      <label class="form-label" for="profile-bio">Short Description</label>
                      <textarea class="form-control" name="desc" id="profile-bio" rows="4" placeholder="<?php echo $olddesc; ?>" value="<?php echo $olddesc; ?>"><?php echo $olddesc; ?></textarea><span class="form-text">0 of 500 characters used.</span>
                    </div>
                  </div>
                  <!-- Submit-->
                  <div class="d-flex flex-sm-row flex-column">
                    <button class="btn btn-accent" name="submit" type="submit">Update Product</button>
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
    <!-- Toolbar for handheld devices (NFT Marketplace)-->
    <div class="handheld-toolbar">
      <div class="d-table table-layout-fixed w-100"><a class="d-table-cell handheld-toolbar-item" href="nft-account-settings.html" data-bs-toggle="modal"><span class="handheld-toolbar-icon"><i class="ci-user"></i></span><span class="handheld-toolbar-label">Account</span></a><a class="d-table-cell handheld-toolbar-item" href="javascript:void(0)" data-bs-toggle="collapse" data-bs-target="#navbarCollapse" onclick="window.scrollTo(0, 0)"><span class="handheld-toolbar-icon"><i class="ci-menu"></i></span><span class="handheld-toolbar-label">Menu</span></a><a class="d-table-cell handheld-toolbar-item" href="nft-create-item.html"><span class="handheld-toolbar-icon"><i class="ci-add"></i></span><span class="handheld-toolbar-label">Create item</span></a>
      </div>
    </div>
    <!-- Back To Top Button--><a class="btn-scroll-top" href="#top" data-scroll><span class="btn-scroll-top-tooltip text-muted fs-sm me-2">Top</span><i class="btn-scroll-top-icon ci-arrow-up">   </i></a>
    <!-- Vendor scrits: js libraries and plugins-->
    <script src="vendor/bootstrap/dist/js/bootstrap.bundle.min.js"></script>
    <script src="vendor/simplebar/dist/simplebar.min.js"></script>
    <script src="vendor/tiny-slider/dist/min/tiny-slider.js"></script>
    <script src="vendor/smooth-scroll/dist/smooth-scroll.polyfills.min.js"></script>
    <!-- Main theme script-->
    <script src="js/theme.min.js"></script>
  </body>

<!-- Mirrored from cartzilla.createx.studio/nft-account-settings.html by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 30 Aug 2022 17:02:02 GMT -->
</html>