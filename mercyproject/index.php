<?php
include "db.php";
session_start();
$report= $class = "";


#connection 
if($conn === false ){
    die("Database get connection problem" . mysqli_connect_error());
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
    <?php include("./template/signinmodal.php"); ?>
    <main class="page-wrapper">
      <!-- Remove "navbar-sticky" class to make navigation bar scrollable with the page.-->
      <header class="navbar d-block navbar-sticky navbar-expand-lg navbar-light position-absolute w-100">
        <div class="container"><a class="navbar-brand d-none d-sm-block me-4 order-lg-1" href="index.html"><img src="img/Emcee-removebg-preview (2).png" width="142" alt="Cartzilla"></a><a class="navbar-brand d-sm-none me-2 order-lg-1" href="index.html"><img src="img/Emcee-removebg-preview (2).png" width="74" alt="Cartzilla"></a>
          <div class="navbar-toolbar d-flex align-items-center order-lg-3">
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarCollapse"><span class="navbar-toggler-icon"></span></button><a class="navbar-tool d-none d-lg-flex" href="javascript:void(0)" data-bs-toggle="collapse" data-bs-target="#searchBox" role="button" aria-expanded="false" aria-controls="searchBox"><span class="navbar-tool-tooltip">Search</span>
              <div class="navbar-tool-icon-box"><i class="navbar-tool-icon ci-search"></i></div></a><a class="navbar-tool ms-lg-2" href="#signin-modal" data-bs-toggle="modal"><span class="navbar-tool-tooltip">Account</span>
              <div class="navbar-tool-icon-box"><i class="navbar-tool-icon ci-user"></i></div></a>
          </div>
          <?php  include "./template/Primarymenu.php";  ?>
      </header>
       <!-- Hero slider-->
       <section class="tns-carousel tns-controls-lg mb-4 mb-lg-5">
        <div class="tns-carousel-inner" data-carousel-options="{&quot;mode&quot;: &quot;gallery&quot;, &quot;responsive&quot;: {&quot;0&quot;:{&quot;nav&quot;:true, &quot;controls&quot;: false},&quot;992&quot;:{&quot;nav&quot;:false, &quot;controls&quot;: true}}}">
          <!-- Item-->
          <div class="px-lg-5" style="background-color: #f5b1b0;">
            <div class="d-lg-flex justify-content-between align-items-center ps-lg-4"><img class="d-block order-lg-2 me-lg-n5 flex-shrink-0" src="img/home/hero-slider/02.jpg" alt="Women Sportswear">
              <div class="position-relative mx-auto me-lg-n5 py-5 px-4 mb-lg-5 order-lg-1" style="max-width: 42rem; z-index: 10;">
                <div class="pb-lg-5 mb-lg-5 text-center text-lg-start text-lg-nowrap">
                  <h3 class="h2 text-light fw-light pb-1 from-bottom">Hurry up! Limited time offer.</h3>
                  <h2 class="text-light display-5 from-bottom delay-1">Women Sportswear Sale</h2>
                  <p class="fs-lg text-light pb-3 from-bottom delay-2">Sneakers, Keds, Sweatshirts, Hoodies &amp; much more...</p>
                  <div class="d-table scale-up delay-4 mx-auto mx-lg-0"><a class="btn btn-primary" href="shop-grid-ls.html">Shop Now<i class="ci-arrow-right ms-2 me-n1"></i></a></div>
                </div>
              </div>
            </div>
          </div>
          <!-- Item-->
          <div class="px-lg-5" style="background-color: #3aafd2;">
            <div class="d-lg-flex justify-content-between align-items-center ps-lg-4"><img class="d-block order-lg-2 me-lg-n5 flex-shrink-0" src="img/home/hero-slider/01.jpg" alt="Summer Collection">
              <div class="position-relative mx-auto me-lg-n5 py-5 px-4 mb-lg-5 order-lg-1" style="max-width: 42rem; z-index: 10;">
                <div class="pb-lg-5 mb-lg-5 text-center text-lg-start text-lg-nowrap">
                  <h3 class="h2 text-light fw-light pb-1 from-start">Has just arrived!</h3>
                  <h2 class="text-light display-5 from-start delay-1">Huge Summer Collection</h2>
                  <p class="fs-lg text-light pb-3 from-start delay-2">Swimwear, Tops, Shorts, Sunglasses &amp; much more...</p>
                  <div class="d-table scale-up delay-4 mx-auto mx-lg-0"><a class="btn btn-primary" href="shop-grid-ls.html">Shop Now<i class="ci-arrow-right ms-2 me-n1"></i></a></div>
                </div>
              </div>
            </div>
          </div>
          <!-- Item-->
          <div class="px-lg-5" style="background-color: #eba170;">
            <div class="d-lg-flex justify-content-between align-items-center ps-lg-4"><img class="d-block order-lg-2 me-lg-n5 flex-shrink-0" src="img/home/hero-slider/03.jpg" alt="Men Accessories">
              <div class="position-relative mx-auto me-lg-n5 py-5 px-4 mb-lg-5 order-lg-1" style="max-width: 42rem; z-index: 10;">
                <div class="pb-lg-5 mb-lg-5 text-center text-lg-start text-lg-nowrap">
                  <h3 class="h2 text-light fw-light pb-1 from-top">Complete your look with</h3>
                  <h2 class="text-light display-5 from-top delay-1">New Men's Accessories</h2>
                  <p class="fs-lg text-light pb-3 from-top delay-2">Hats &amp; Caps, Sunglasses, Bags &amp; much more...</p>
                  <div class="d-table scale-up delay-4 mx-auto mx-lg-0"><a class="btn btn-primary" href="shop-grid-ls.html">Shop Now<i class="ci-arrow-right ms-2 me-n1"></i></a></div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </section>


        <!-- Product carousel (women shoes)-->
    <?php
                      $sqls = "SELECT * FROM `product` WHERE category='womenshoe' ";
                      $results = mysqli_query($conn , $sqls);
                      if(mysqli_num_rows($results) > 0){  if($rows = mysqli_fetch_array($results)) {
                ?>
      <section class="container mb-2 py-lg-5 py-4">
                      <div class="d-flex align-items-center justify-content-between mb-sm-3 mb-2">
                        <h2 class="h3 mb-0">Women Shoes</h2><a class="btn btn-outline-accent ms-3" href="productcatalog.php?category=<?php echo $rows['category']; ?>">Explore more<i class="ci-arrow-right ms-2"></i></a>
                      </div>
                      <!-- Product carousel-->
                      <div class="tns-carousel tns-controls-static tns-controls-outside mx-xl-n4 mx-n2 px-xl-4 px-0">
                        <div class="tns-carousel-inner row gx-xl-0 gx-3 mx-0" data-carousel-options="{&quot;items&quot;: 2, &quot;nav&quot;: true, &quot;responsive&quot;: {&quot;0&quot;:{&quot;items&quot;:1,&quot;controls&quot;: false, &quot;gutter&quot;: 0},&quot;500&quot;:{&quot;items&quot;:2},&quot;768&quot;:{&quot;items&quot;:3}, &quot;1100&quot;:{&quot;items&quot;:4}, &quot;1278&quot;:{&quot;controls&quot;: true, &quot;nav&quot;: false, &quot;gutter&quot;: 30}}}">
                      <?php 
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
                    <h4 class="mt-1 mb-0 fs-base text-darker"><span style="color: red;">&#8358;</span><?php echo $rows['amount']; ?></h4>
                  </div>
                </div>
              </article>
            </div>
            <?php }  ?>
          </div>
        </div>
      </section>
    <?php } } ?>


    <!-- Product carousel (women bags)-->
    <?php
                      $sqls = "SELECT * FROM `product` WHERE category='womenbag' ";
                      $results = mysqli_query($conn , $sqls);
                      if(mysqli_num_rows($results) > 0){  if($rows = mysqli_fetch_array($results)) {
                ?>
      <section class="container mb-2 py-lg-5 py-4">
                      <div class="d-flex align-items-center justify-content-between mb-sm-3 mb-2">
                        <h2 class="h3 mb-0">Women Bags</h2><a class="btn btn-outline-accent ms-3" href="productcatalog.php?category=<?php echo $rows['category']; ?>">Explore more<i class="ci-arrow-right ms-2"></i></a>
                      </div>
                      <!-- Product carousel-->
                      <div class="tns-carousel tns-controls-static tns-controls-outside mx-xl-n4 mx-n2 px-xl-4 px-0">
                        <div class="tns-carousel-inner row gx-xl-0 gx-3 mx-0" data-carousel-options="{&quot;items&quot;: 2, &quot;nav&quot;: true, &quot;responsive&quot;: {&quot;0&quot;:{&quot;items&quot;:1,&quot;controls&quot;: false, &quot;gutter&quot;: 0},&quot;500&quot;:{&quot;items&quot;:2},&quot;768&quot;:{&quot;items&quot;:3}, &quot;1100&quot;:{&quot;items&quot;:4}, &quot;1278&quot;:{&quot;controls&quot;: true, &quot;nav&quot;: false, &quot;gutter&quot;: 30}}}">
                      <?php 
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
                    <h4 class="mt-1 mb-0 fs-base text-darker"><span style="color: red;">&#8358;</span> <?php echo $rows['amount']; ?></h4>
                  </div>
                </div>
              </article>
            </div>
            <?php }  ?>
          </div>
        </div>
      </section>
    <?php } } ?>


    <!-- Product carousel (men shoes)-->
    <?php
                      $sqls = "SELECT * FROM `product` WHERE category='menshoe' ";
                      $results = mysqli_query($conn , $sqls);
                      if(mysqli_num_rows($results) > 0){  if($rows = mysqli_fetch_array($results)) {
                ?>
      <section class="container mb-2 py-lg-5 py-4">
                      <div class="d-flex align-items-center justify-content-between mb-sm-3 mb-2">
                        <h2 class="h3 mb-0">Men Shoes</h2><a class="btn btn-outline-accent ms-3" href="productcatalog.php?category=<?php echo $rows['category']; ?>">Explore more<i class="ci-arrow-right ms-2"></i></a>
                      </div>
                      <!-- Product carousel-->
                      <div class="tns-carousel tns-controls-static tns-controls-outside mx-xl-n4 mx-n2 px-xl-4 px-0">
                        <div class="tns-carousel-inner row gx-xl-0 gx-3 mx-0" data-carousel-options="{&quot;items&quot;: 2, &quot;nav&quot;: true, &quot;responsive&quot;: {&quot;0&quot;:{&quot;items&quot;:1,&quot;controls&quot;: false, &quot;gutter&quot;: 0},&quot;500&quot;:{&quot;items&quot;:2},&quot;768&quot;:{&quot;items&quot;:3}, &quot;1100&quot;:{&quot;items&quot;:4}, &quot;1278&quot;:{&quot;controls&quot;: true, &quot;nav&quot;: false, &quot;gutter&quot;: 30}}}">
                      <?php 
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
                    <h4 class="mt-1 mb-0 fs-base text-darker"><span style="color: red;">&#8358;</span><?php echo $rows['amount']; ?></h4>
                  </div>
                </div>
              </article>
            </div>
            <?php }  ?>
          </div>
        </div>
      </section>
    <?php } } ?>


    <!-- Product carousel (Others)-->
    <?php
                      $sqls = "SELECT * FROM `product` WHERE category='others' ";
                      $results = mysqli_query($conn , $sqls);
                      if(mysqli_num_rows($results) > 0){  if($rows = mysqli_fetch_array($results)) {
                ?>
      <section class="container mb-2 py-lg-5 py-4">
                      <div class="d-flex align-items-center justify-content-between mb-sm-3 mb-2">
                        <h2 class="h3 mb-0">Others</h2><a class="btn btn-outline-accent ms-3" href="productcatalog.php?category=<?php echo $rows['category']; ?>">Explore more<i class="ci-arrow-right ms-2"></i></a>
                      </div>
                      <!-- Product carousel-->
                      <div class="tns-carousel tns-controls-static tns-controls-outside mx-xl-n4 mx-n2 px-xl-4 px-0">
                        <div class="tns-carousel-inner row gx-xl-0 gx-3 mx-0" data-carousel-options="{&quot;items&quot;: 2, &quot;nav&quot;: true, &quot;responsive&quot;: {&quot;0&quot;:{&quot;items&quot;:1,&quot;controls&quot;: false, &quot;gutter&quot;: 0},&quot;500&quot;:{&quot;items&quot;:2},&quot;768&quot;:{&quot;items&quot;:3}, &quot;1100&quot;:{&quot;items&quot;:4}, &quot;1278&quot;:{&quot;controls&quot;: true, &quot;nav&quot;: false, &quot;gutter&quot;: 30}}}">
                      <?php 
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
                    <h4 class="mt-1 mb-0 fs-base text-darker"><span style="color: red;">&#8358;  </span> <?php echo $rows['amount']; ?></h4>
                  </div>
                </div>
              </article>
            </div>
            <?php }  ?>
          </div>
        </div>
      </section>
    <?php } } ?>
        
         <!-- Blog + Instagram info cards-->
      <section class="container-fluid px-0">
        <div class="row g-0">
          <div class="col-md-6"><a class="card border-0 rounded-0 text-decoration-none py-md-4 bg-faded-primary" href="blog-list-sidebar.html">
              <div class="card-body text-center"><i class="ci-whatsapp h3 mt-2 mb-4 text-primary"></i>
                <h3 class="h5 mb-1">We post daily</h3>
                <p class="text-muted fs-sm">Latest store, fashion and trends</p>
              </div></a></div>
          <div class="col-md-6"><a class="card border-0 rounded-0 text-decoration-none py-md-4 bg-faded-accent" href="#">
              <div class="card-body text-center"><i class="ci-instagram h3 mt-2 mb-4 text-accent"></i>
                <h3 class="h5 mb-1">Follow on Instagram</h3>
                <p class="text-muted fs-sm">#ShopWithEmceeStores</p>
              </div></a></div>
        </div>
      </section>
      <!-- Features-->
      <section class="container py-lg-5 py-4">
        <h2 class="mb-4 pb-md-3 pb-2">Why you should BUY from us!</h2>
        <!-- Features carousel-->
        <div class="tns-carousel mb-4">
          <div class="tns-carousel-inner" data-carousel-options="{&quot;items&quot;: 2, &quot;nav&quot;: true, &quot;gutter&quot;: 30, &quot;responsive&quot;: {&quot;0&quot;:{&quot;items&quot;:1,&quot;controls&quot;: false},&quot;500&quot;:{&quot;items&quot;:2},&quot;768&quot;:{&quot;items&quot;:3}, &quot;1100&quot;:{&quot;items&quot;:4}, &quot;1278&quot;:{&quot;controls&quot;: true}}}">
            <!-- Carousel item-->
            <div><img class="mb-4" src="img/nft/features/wallet.svg" width="60" alt="Icon">
              <h4 class="mb-2 fs-lg text-body">Delivery</h4>
              <p class="mb-0 fs-sm text-muted">We deliver all across the country.</p>
            </div>
            <!-- Carousel item-->
            <div><img class="mb-4" src="img/nft/features/add.svg" width="60" alt="Icon">
              <h4 class="mb-2 fs-lg text-body">Quality</h4>
              <p class="mb-0 fs-sm text-muted">We offer quality product with affordable prices.</p>
            </div>
            <!-- Carousel item-->
            <div><img class="mb-4" src="img/nft/features/image.svg" width="60" alt="Icon">
              <h4 class="mb-2 fs-lg text-body">product</h4>
              <p class="mb-0 fs-sm text-muted">We have wide range of product fro different brands.</p>
            </div>
            <!-- Carousel item-->
            <div><img class="mb-4" src="img/nft/features/shopping-cart.svg" width="60" alt="Icon">
              <h4 class="mb-2 fs-lg text-body">Honesty</h4>
              <p class="mb-0 fs-sm text-muted">We believe honesty is business.</p>
            </div>
          </div>
        </div>
      </section>
    </main>
    <!-- Bg shape-->
    <div class="pt-4 bg-secondary">
      <!-- Blog recent posts-->
      <section class="container py-lg-5 py-4">
        <div class="d-flex align-items-center justify-content-between mb-sm-4 mb-2 pb-2">
          <h2 class="h3 mb-0">Resources for getting started</h2><a class="btn btn-outline-accent ms-3" href="blog-grid.html">All articles<i class="ci-arrow-right ms-2"></i></a>
        </div>
        <!-- Blog (carousel)-->
        <div class="tns-carousel pb-lg-5 pb-4">
          <div class="tns-carousel-inner" data-carousel-options="{&quot;items&quot;: 2, &quot;controls&quot;: false, &quot;nav&quot;: true, &quot;gutter&quot;: 30, &quot;responsive&quot;: {&quot;0&quot;:{&quot;items&quot;:1},&quot;576&quot;:{&quot;items&quot;:2},&quot;992&quot;:{&quot;items&quot;:3}}}">
            <!-- Carousel item-->
            <article><a class="d-block mb-3" href="blog-single.html"><img class="rounded-3" src="img/01.jpg" alt="Blog image"></a>
              <div class="d-flex align-items-center fs-sm pb-2"><a class="blog-entry-meta-link" href="#">by Wade Warren</a><span class="blog-entry-meta-divider"></span><a class="blog-entry-meta-link" href="#">Aug 15</a></div>
              <h2 class="h6 blog-entry-title mb-0"><a href="blog-single.html">The complete guide to NFTs art for creators and investors</a></h2>
            </article>
            <!-- Carousel item-->
            <article><a class="d-block mb-3" href="blog-single.html"><img class="rounded-3" src="img/02.jpg" alt="Blog image"></a>
              <div class="d-flex align-items-center fs-sm pb-2"><a class="blog-entry-meta-link" href="#">by Kathryn Murphy</a><span class="blog-entry-meta-divider"></span><a class="blog-entry-meta-link" href="#">Sep 18</a></div>
              <h2 class="h6 blog-entry-title mb-0"><a href="blog-single.html">A chance to win a variety of common, rare and unique NFTs</a></h2>
            </article>
            <!-- Carousel item-->
            <article><a class="d-block mb-3" href="blog-single.html"><img class="rounded-3" src="img/03.jpg" alt="Blog image"></a>
              <div class="d-flex align-items-center fs-sm pb-2"><a class="blog-entry-meta-link" href="#">by Devon Lane</a><span class="blog-entry-meta-divider"></span><a class="blog-entry-meta-link" href="#">Nov 26</a></div>
              <h2 class="h6 blog-entry-title mb-0"><a href="blog-single.html">Exclusive premium events, from exhibitions to unique collectibles</a></h2>
            </article>
            <!-- Carousel item-->
            <article><a class="d-block mb-3" href="blog-single.html"><img class="rounded-3" src="img/01.jpg" alt="Blog image"></a>
              <div class="d-flex align-items-center fs-sm pb-2"><a class="blog-entry-meta-link" href="#">by Wade Warren</a><span class="blog-entry-meta-divider"></span><a class="blog-entry-meta-link" href="#">Aug 15</a></div>
              <h2 class="h6 blog-entry-title mb-0"><a href="blog-single.html">The complete guide to NFTs art for creators and investors</a></h2>
            </article>
            <!-- Carousel item-->
            <article><a class="d-block mb-3" href="blog-single.html"><img class="rounded-3" src="img/02.jpg" alt="Blog image"></a>
              <div class="d-flex align-items-center fs-sm pb-2"><a class="blog-entry-meta-link" href="#">by Kathryn Murphy</a><span class="blog-entry-meta-divider"></span><a class="blog-entry-meta-link" href="#">Sep 18</a></div>
              <h2 class="h6 blog-entry-title mb-0"><a href="blog-single.html">A chance to win a variety of common, rare and unique NFTs</a></h2>
            </article>
            <!-- Carousel item-->
            <article><a class="d-block mb-3" href="blog-single.html"><img class="rounded-3" src="img/03.jpg" alt="Blog image"></a>
              <div class="d-flex align-items-center fs-sm pb-2"><a class="blog-entry-meta-link" href="#">by Devon Lane</a><span class="blog-entry-meta-divider"></span><a class="blog-entry-meta-link" href="#">Nov 26</a></div>
              <h2 class="h6 blog-entry-title mb-0"><a href="blog-single.html">Exclusive premium events, from exhibitions to unique collectibles</a></h2>
            </article>
            <!-- Carousel item-->
            <article><a class="d-block mb-3" href="blog-single.html"><img class="rounded-3" src="img/01.jpg" alt="Blog image"></a>
              <div class="d-flex align-items-center fs-sm pb-2"><a class="blog-entry-meta-link" href="#">by Wade Warren</a><span class="blog-entry-meta-divider"></span><a class="blog-entry-meta-link" href="#">Aug 15</a></div>
              <h2 class="h6 blog-entry-title mb-0"><a href="blog-single.html">The complete guide to NFTs art for creators and investors</a></h2>
            </article>
            <!-- Carousel item-->
            <article><a class="d-block mb-3" href="blog-single.html"><img class="rounded-3" src="img//blog/02.jpg" alt="Blog image"></a>
              <div class="d-flex align-items-center fs-sm pb-2"><a class="blog-entry-meta-link" href="#">by Kathryn Murphy</a><span class="blog-entry-meta-divider"></span><a class="blog-entry-meta-link" href="#">Sep 18</a></div>
              <h2 class="h6 blog-entry-title mb-0"><a href="blog-single.html">A chance to win a variety of common, rare and unique NFTs</a></h2>
            </article>
            <!-- Carousel item-->
            <article><a class="d-block mb-3" href="blog-single.html"><img class="rounded-3" src="img/03.jpg" alt="Blog image"></a>
              <div class="d-flex align-items-center fs-sm pb-2"><a class="blog-entry-meta-link" href="#">by Devon Lane</a><span class="blog-entry-meta-divider"></span><a class="blog-entry-meta-link" href="#">Nov 26</a></div>
              <h2 class="h6 blog-entry-title mb-0"><a href="blog-single.html">Exclusive premium events, from exhibitions to unique collectibles</a></h2>
            </article>
          </div>
        </div>
      </section>
      <!-- Mail subscription-->
      <?php 
      
      include("./template/mailsub.php");
      
      ?>
    </div>
    <!-- Footer-->
    <footer class="footer bg-darker">
      <div class="mt-n10 pt-10 bg-dark">
        <div class="container py-5">
          <div class="row py-lg-4 text-center">
            <div class="fs-xs text-light opacity-50">&copy; All rights reserved. Made by <a class="text-light" href="" target="_blank" rel="noopener">EmceeStores</a></div>
        </div>
      </div>
    </footer>
    <!-- Toolbar for handheld devices-->
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
    <!-- Main theme script-->
    <script src="js/theme.min.js"></script>
  </body>
</html>