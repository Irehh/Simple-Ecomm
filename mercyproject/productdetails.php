<?php

session_start();
include("db.php");


if ($conn === false){
  die("OGA check your database connection" . mysqli_connect_error()) ;
}

$id = $_GET['id'];

 

  ?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <title>Product Details</title>
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
    <link rel="stylesheet" media="screen" href="vendor/drift-zoom/dist/drift-basic.min.css"/>
    <!-- Main Theme Styles + Bootstrap-->
    <link rel="stylesheet" media="screen" href="css/theme.min.css">
   
  </head>
  <!-- Body-->
  <body class="handheld-toolbar-enabled">
  <?php include("./template/signinmodal.php"); ?>
    <main class="page-wrapper">
      <!-- Remove "navbar-sticky" class to make navigation bar scrollable with the page.-->
      <header class="navbar d-block navbar-sticky navbar-expand-lg navbar-light bg-light">
        <div class="container"><a class="navbar-brand d-none d-sm-block me-4 order-lg-1" href="index.html"><img src="img/Emcee-removebg-preview (2).png" width="142" alt="Cartzilla"></a><a class="navbar-brand d-sm-none me-2 order-lg-1" href="index.html"><img src="img/Emcee-removebg-preview (2).png" width="74" alt="Cartzilla"></a>
          <div class="navbar-toolbar d-flex align-items-center order-lg-3">
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarCollapse"><span class="navbar-toggler-icon"></span></button><a class="navbar-tool d-none d-lg-flex" href="javascript:void(0)" data-bs-toggle="collapse" data-bs-target="#searchBox" role="button" aria-expanded="false" aria-controls="searchBox"><span class="navbar-tool-tooltip">Search</span>
              <div class="navbar-tool-icon-box"><i class="navbar-tool-icon ci-search"></i></div></a><a class="navbar-tool ms-lg-2" href="#signin-modal" data-bs-toggle="modal"><span class="navbar-tool-tooltip">Account</span>
              <div class="navbar-tool-icon-box"><i class="navbar-tool-icon ci-user"></i></div></a>
          </div>

          <!-- search(mobile collapse) and primary menu -->

          <?php  include "./template/Primarymenu.php";  ?>

        </header>
      <!-- Page Title-->
      <div class="page-title-overlap bg-accent pt-4">
        <div class="container d-lg-flex justify-content-between py-2 py-lg-3">
          <div class="order-lg-2 mb-3 mb-lg-0 pt-lg-2">
            <nav aria-label="breadcrumb">
              <ol class="breadcrumb breadcrumb-light flex-lg-nowrap justify-content-center justify-content-lg-start">
                <li class="breadcrumb-item"><a class="text-nowrap" href="index.html"><i class="ci-home"></i>Home</a></li>
                <li class="breadcrumb-item text-nowrap"><a href="home-nft.html">catalog</a>
                </li>
                <li class="breadcrumb-item text-nowrap active" aria-current="page">Single Item</li>
              </ol>
            </nav>
          </div>
          <div class="order-lg-1 pe-lg-4 text-center text-lg-start">
            <h1 class="h3 text-light mb-0">Single Item</h1>
          </div>
        </div>
      </div>

      <?php  //select data from database
  $change = "SELECT *FROM product WHERE `product`.`id`=$id";
  $result=mysqli_query($conn,$change) or die("could not select");
  while($row=mysqli_fetch_assoc($result)){
  $dname = $row['name'];
  $damount = $row['amount'];
  $ddesc = $row['descp'];
  $dbrand = $row['brand'];
  $dimage1 = $row['image'];
  $dcategory = $row['category'];
 
   ?>
      <!--  main product details -->
      <section class="container pb-md-4">
        <!-- Product-->
        <div class="bg-light shadow-lg rounded-3 px-4 py-lg-4 py-3 mb-5">
          <div class="py-lg-3 py-2 px-lg-3">
            <div class="row gy-4">
              <!-- Product image-->
              <div class="col-lg-6">
                <div class="position-relative rounded-3 overflow-hidden mb-lg-4 mb-2"><img class="image-zoom" src="images/<?php echo $dimage1; ?>" data-zoom="images/<?php echo $dimage1; ?>" alt="Product image">
                  <div class="image-zoom-pane"></div>
                </div>
                <div class="pt-2 text-lg-start text-center">
                  <button class="btn btn-secondary rounded-pill btn-icon me-sm-3 me-2" type="button" data-bs-toggle="tooltip" data-bs-placement="top" title="Add to Favorites"><i class="ci-heart"></i></button>
                  <button class="btn btn-secondary rounded-pill btn-icon me-sm-3 me-2" type="button" data-bs-toggle="tooltip" data-bs-placement="top" title="Share"><i class="ci-share-alt"></i></button>
                </div>
              </div>
              <!-- Product details-->
              <div class="col-lg-6">
                <div class="ps-xl-5 ps-lg-3">
                  <!-- Meta-->
                  <h2 class="h3 mb-3"><?php echo $dname; ?></h2>
                  <div class="d-flex align-items-center flex-wrap text-nowrap mb-sm-4 mb-3 fs-sm">
                    <div class="mb-2 me-sm-3 me-2 text-muted">Minted on Oct 29, 2021</div>
                    <div class="mb-2 me-sm-3 me-2 ps-sm-3 ps-2 border-start text-muted"><i class="ci-eye me-1 fs-base mt-n1 align-middle"></i>15 views</div>
                    <div class="mb-2 me-sm-3 me-2 ps-sm-3 ps-2 border-start text-muted"><i class="ci-heart me-1 fs-base mt-n1 align-middle"></i>4 favorite</div>
                  </div>
                  <div class="row row-cols-sm-2 row-cols-1 gy-3 gx-4 mb-4 pb-md-2">
                    <!-- brand-->

                    <?php if(!empty($dbrand)) { echo  
                    "<div class='col'>
                      <div class='card position-relative h-100'>
                        <div class='card-body p-3'>
                          <h3 class='h6 mb-2 fs-sm text-muted'>Brand</h3>
                          <div class='d-flex align-items-center'><a class='nav-link-style stretched-link fs-sm' href=''>".$dbrand."</a></div>
                        </div>
                      </div>
                    </div>";
                  }
                    ?>
                    <!-- dex-->
                    <?php if(!empty($dcategory)) { ?> 
                    <div class='col'>
                      <div class='card position-relative h-100'>
                        <div class='card-body p-3'>
                          <h3 class='h6 mb-2 fs-sm text-muted'>For</h3>
                          <div class='d-flex align-items-center'><a class='nav-link-style stretched-link fs-sm' href=''><?php if($dcategory==="womenshoe"){echo "Women";}elseif($dcategory==="womenbag"){echo"Women";}elseif($dcategory==="menshoe"){echo"Men";}elseif($dcategory==="others"){echo"uncategorized";} ?></a></div>
                        </div>
                      </div>
                    </div>
                  
                    <?php } ?>
                  </div>
                  <!-- Description-->
                  <p class="mb-4 pb-md-2 fs-sm"><?php echo $ddesc; ?></p>
                  <!-- Auction-->
                  <div class="row row-cols-sm-2 row-cols-1 gy-3 mb-4 pb-md-2">
                    <div class="col">
                      <h3 class="h6 mb-2 fs-sm text-muted">Current Price:</h3>
                      <h2 class="h3 mb-1"><?php echo $damount; ?></h2>
                    </div>
                  </div>
                 <a class="btn btn-lg btn-accent d-block w-100 mb-4" href="#">Buy Now</a>
                </div>
              </div>
            </div>
          </div>
        </div>
      </section>

      

     
      
      <!-- same collection-->

      <!-- Product carousel (others shoes)-->
      <section class='container mb-2 py-lg-5 py-4'>
                                <div class='d-flex align-items-center justify-content-between mb-sm-3 mb-2'>
                                  <h2 class='h3 mb-0'>Collection</h2><a class='btn btn-outline-accent ms-3' href='productcatalog.php'>Explore more<i class='ci-arrow-right ms-2'></i></a>
                                </div>
                                <!-- Product carousel-->
                                <div class='tns-carousel tns-controls-static tns-controls-outside mx-xl-n4 mx-n2 px-xl-4 px-0'>
                                  <div class='tns-carousel-inner row gx-xl-0 gx-3 mx-0' data-carousel-options='{&quot;items&quot;: 2, &quot;nav&quot;: true, &quot;responsive&quot;: {&quot;0&quot;:{&quot;items&quot;:1,&quot;controls&quot;: false, &quot;gutter&quot;: 0},&quot;500&quot;:{&quot;items&quot; :2},&quot;768&quot;:{&quot;items&quot;:3}, &quot;1100&quot;:{&quot;items&quot;:4}, &quot;1278&quot;:{&quot;controls&quot;: true, &quot;nav&quot;: false, &quot;gutter&quot;: 30}}}'>
          
      <?php

            if($dcategory){
              $collectionsql = "SELECT * FROM `product` WHERE category='$dcategory' ";
              $collectionresult = mysqli_query($conn , $collectionsql);
              if(!empty($collectionresult)){
                while($rowr = mysqli_fetch_array($collectionresult)){ 
                echo  "
                <div class='col py-3'>
                  <article class='card h-100 border-0 shadow'>
                    <div class='card-img-top position-relative overflow-hidden'>
                      <a class='d-block' href='productdetails.php?id=".$rowr['id']."'><img style='max-height:312.66px!important;' src='./images/".$rowr['image']."' alt='Product image'></a>
                    
                      <!-- Wishlist button-->
                      <button class='btn-wishlist btn-sm position-absolute top-0 end-0' type='button' data-bs-toggle='tooltip' data-bs-placement='left' title='Add to Favorites' style='margin: 12px;'><i class='ci-heart'></i></button>
                    </div>
                    <div class='card-body'>
                      <h3 class='product-title mb-2 fs-base'><a class='d-block text-truncate' href='productdetails.php?id=".$rowr['id']."'>".$rowr['name']."</a></h3><span class='fs-sm text-muted'>Price:</span>
                      <div class='d-flex align-items-center flex-wrap'>
                        <h4 class='mt-1 mb-0 fs-base text-darker'>&#8358; ".$rowr['amount']."</h4>
                      </div>
                    </div>
                  </article>
                </div> ";
                }
              }
            }  else{
              echo"<h3 class='h6 mb-2 fs-sm text-muted'>unavailable</h3>";
            }

            ?>
            </div>
                  </div>
                </section>
                <?php } ?>

        <!-- Product carousel-->
        <section class="container mb-2 py-lg-5 py-4">
                      <div class="d-flex align-items-center justify-content-between mb-sm-3 mb-2">
                        <h2 class="h3 mb-0">Check Also</h2>
                      </div>
                      <!-- Product carousel-->
                      <div class="tns-carousel tns-controls-static tns-controls-outside mx-xl-n4 mx-n2 px-xl-4 px-0">
                        <div class="tns-carousel-inner row gx-xl-0 gx-3 mx-0" data-carousel-options="{&quot;items&quot;: 2, &quot;nav&quot;: true, &quot;responsive&quot;: {&quot;0&quot;:{&quot;items&quot;:1,&quot;controls&quot;: false, &quot;gutter&quot;: 0},&quot;500&quot;:{&quot;items&quot;:2},&quot;768&quot;:{&quot;items&quot;:3}, &quot;1100&quot;:{&quot;items&quot;:4}, &quot;1278&quot;:{&quot;controls&quot;: true, &quot;nav&quot;: false, &quot;gutter&quot;: 30}}}">
                        <?php
              $sqls = "SELECT * FROM `product`";
              $results = mysqli_query($conn , $sqls);
              while($rows = mysqli_fetch_assoc($results)){
              ?>


            <!-- Product item for men shoe-->
            <div class="col py-3">
              <article class="card h-100 border-0 shadow">
                <div class="card-img-top position-relative overflow-hidden">
                  <a class="d-block" href="productdetails.php?id=<?php echo $rows['id']; ?>"><img style="max-height:312.66px!important;" src="images/<?php echo $rows['image']; ?>" alt="Product image"></a>
                
                  <!-- Wishlist button-->
                  <button class="btn-wishlist btn-sm position-absolute top-0 end-0" type="button" data-bs-toggle="tooltip" data-bs-placement="left" title="Add to Favorites" style="margin: 12px;"><i class="ci-heart"></i></button>
                </div>
                <div class="card-body">
                  <h3 class="product-title mb-2 fs-base"><a class="d-block text-truncate" href="productdetails.php?id=<?php echo $rows['id']; ?>"><?php echo $rows['name']; ?></a></h3><span class="fs-sm text-muted">Current Price:</span>
                  <div class="d-flex align-items-center flex-wrap">
                    <h4 class="mt-1 mb-0 fs-base text-darker"><?php echo $rows['amount']; ?></h4>
                  </div>
                </div>
              </article>
            </div>
            <?php } ?>
          </div>
        </div>
      </section>
    </main>




    
    <!-- Bg shape-->
    <div class="pt-4 bg-secondary">
      <!-- Mail subscription-->
      <section class="container">
        <div class="card py-5 border-0 shadow">
          <div class="card-body py-md-4 py-3 px-4 text-center">
            <h3 class="mb-3">Never miss a drop!</h3>
            <p class="mb-4 pb-2">Subscribe to our ultra-exclusive drop list and be the first to know about upcoming drops.</p>
            <div class="widget mx-auto" style="max-width: 500px;">
              <form class="subscription-form validate" action="https://studio.us12.list-manage.com/subscribe/post?u=c7103e2c981361a6639545bd5&amp;amp;id=29ca296126" method="post" name="mc-embedded-subscribe-form" target="_blank" novalidate>
                <div class="input-group flex-nowrap"><i class="ci-mail position-absolute top-50 translate-middle-y text-muted fs-base ms-3"></i>
                  <input class="form-control rounded-start" type="email" name="EMAIL" placeholder="Your email" required>
                  <button class="btn btn-accent" type="submit" name="subscribe">Subscribe*</button>
                </div>
                <!-- real people should not fill this in and expect good things - do not remove this or risk form bot signups-->
                <div style="position: absolute; left: -5000px;" aria-hidden="true">
                  <input class="subscription-form-antispam" type="text" name="b_c7103e2c981361a6639545bd5_29ca296126" tabindex="-1">
                </div>
                <div class="form-text mt-3">*Receive early discount offers, updates and new products info.</div>
                <div class="subscription-status"></div>
              </form>
            </div>
          </div>
        </div>
      </section>
    </div>
    <!-- Footer-->
     <footer class="footer bg-darker">
        <div class="container py-5">
          <div class="row py-lg-4 text-center">
            <div class="fs-xs text-light opacity-50">&copy; All rights reserved. Made by <a class="text-light" href="" target="_blank" rel="noopener">Emcee Stores</a></div>
        </div>
    </footer>
    <!-- Toolbar for handheld devices (NFT Marketplace)-->
    <div class="handheld-toolbar">
      <div class="d-table table-layout-fixed w-100"><a class="d-none handheld-toolbar-item" href="#vendor-sidebar" data-bs-toggle="offcanvas"><span class="handheld-toolbar-icon"><i class="ci-sign-in"></i></span><span class="handheld-toolbar-label">Sidebar</span></a><a class="d-table-cell handheld-toolbar-item" href="#signin-modal" data-bs-toggle="modal"><span class="handheld-toolbar-icon"><i class="ci-user"></i></span><span class="handheld-toolbar-label">Account</span></a><a class="d-table-cell handheld-toolbar-item" href="javascript:void(0)" data-bs-toggle="collapse" data-bs-target="#navbarCollapse" onclick="window.scrollTo(0, 0)"><span class="handheld-toolbar-icon"><i class="ci-menu"></i></span><span class="handheld-toolbar-label">Menu</span></a>
      </div>
    </div>
    <!-- Back To Top Button--><a class="btn-scroll-top" href="#top" data-scroll><span class="btn-scroll-top-tooltip text-muted fs-sm me-2">Top</span><i class="btn-scroll-top-icon ci-arrow-up">   </i></a>
    <!-- Vendor scrits: js libraries and plugins-->
    <script src="vendor/bootstrap/dist/js/bootstrap.bundle.min.js"></script>
    <script src="vendor/simplebar/dist/simplebar.min.js"></script>
    <script src="vendor/tiny-slider/dist/min/tiny-slider.js"></script>
    <script src="vendor/smooth-scroll/dist/smooth-scroll.polyfills.min.js"></script>
    <script src="vendor/drift-zoom/dist/Drift.min.js"></script>
    <!-- Main theme script-->
    <script src="js/theme.min.js"></script>
  </body>

<!-- Mirrored from cartzilla.createx.studio/nft-single-auction-live.html by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 30 Aug 2022 17:01:49 GMT -->
</html>