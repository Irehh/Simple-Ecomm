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
    <title>Emcee | Catalog</title>
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
    <link rel="stylesheet" media="screen" href="vendor/nouislider/dist/nouislider.min.css"/>
    <!-- Main Theme Styles + Bootstrap-->
    <link rel="stylesheet" media="screen" href="css/theme.min.css">
  </head>
  <!-- Body-->
  <body class="handheld-toolbar-enabled">
    <!-- Sign in / sign up modal-->
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
      <div class="bg-accent pt-4 pb-5">
        <div class="container pt-2 pb-3 pt-lg-3 pb-lg-4">
          <div class="d-lg-flex justify-content-between pb-3">
            <div class="order-lg-2 mb-3 mb-lg-0 pt-lg-2">
              <nav aria-label="breadcrumb">
                <ol class="breadcrumb breadcrumb-light flex-lg-nowrap justify-content-center justify-content-lg-start">
                  <li class="breadcrumb-item"><a class="text-nowrap" href="index.html"><i class="ci-home"></i>Home</a></li>
                  <li class="breadcrumb-item text-nowrap"><a href="home-nft.html">Catalog</a>
                  </li>
                  <li class="breadcrumb-item text-nowrap active" aria-current="page">All Product</li>
                </ol>
              </nav>
            </div>
            <div class="order-lg-1 pe-lg-4 text-center text-lg-start">
              <h1 class="h3 text-light mb-0">Catalog</h1>
            </div>
          </div>
        </div>
      </div>
      <div class="container pb-5 mb-2 mb-md-4">
        <!-- Toolbar-->
        <div class="bg-light shadow-lg rounded-3 p-4 mt-n5 mb-4">
          <div class="row gy-3 gx-4 justify-content-between">
            <div class="col-lg-2 col-md-3 col-sm-5 col-12 order-md-1 order-sm-2 order-3">
              <div class="dropdown"><a class="btn btn-outline-secondary dropdown-toggle w-100" href="#shop-filters" data-bs-toggle="collapse"><i class="ci-filter me-2"></i>Filters</a></div>
            </div>
            <div class="col-md col-12 order-md-2 order-sm-1 order-1">
              <div class="input-group">
                <input class="form-control pe-5 rounded" type="text" placeholder="Search collection, title or user..."><i class="ci-search position-absolute top-50 end-0 translate-middle-y zindex-5 me-3"></i>
              </div>
            </div>
            <div class="col-lg-3 col-md-4 col-sm-7 col-12 order-md-3 order-sm-3 order-2">
              <div class="d-flex align-items-center flex-shrink-0">
                <label class="form-label mb-0 me-2 pe-1 fw-normal text-nowrap d-sm-block d-none">Sort by:</label>
                <select class="form-select">
                  <option selected disabled>Newest</option>
                  <option>Oldest</option>
                </select>
              </div>
            </div>
          </div>
          <!-- Toolbar with expandable filters-->
          <div class="collapse" id="shop-filters">
            <div class="row g-4 pt-4">
              <div class="col-lg-4 col-sm-6">
                <!-- Categories-->
                <div class="card">
                  <div class="card-body px-4">
                    <div class="widget">
                      <h3 class="widget-title mb-2 pb-1">Categories</h3>
                      <ul class="widget-list list-unstyled">
                        <li class="d-flex justify-content-between align-items-center mb-1">
                          <div class="form-check">
                            <input class="form-check-input" type="checkbox" id="all">
                            <label class="form-check-label" for="all">Price</label>
                          </div><span class="fs-xs text-muted">< 20,000</span>
                        </li>
                        <li class="d-flex justify-content-between align-items-center mb-1">
                          <div class="form-check">
                            <input class="form-check-input" type="checkbox" id="premium">
                            <label class="form-check-label" for="premium">Price</label>
                          </div><span class="fs-xs text-muted">< 30,000</span>
                        </li>
                        <li class="d-flex justify-content-between align-items-center mb-1">
                          <div class="form-check">
                            <input class="form-check-input" type="checkbox" id="art">
                            <label class="form-check-label" for="art">Price</label>
                          </div><span class="fs-xs text-muted">< 50,000</span>
                        </li>
                      </ul>
                    </div>
                  </div>
                </div>
              </div>
              <div class="col-lg-4 col-sm-6">
              </div>
            </div>
          </div>
        </div>
        <!-- Products grid-->
        <div class="row row-cols-lg-4 row-cols-md-3 row-cols-sm-2 row-cols-1 gy-sm-4 gy-3 pt-sm-3">
          <!-- Product-->

          <?php

              $category = $_GET['category'];
              $sqls = "SELECT * FROM product WHERE category='$category' ";
              $results = mysqli_query($conn , $sqls);
              if(mysqli_num_rows($results) > 0){  if($rows = mysqli_fetch_array($results)) {
              while($rows = mysqli_fetch_assoc($results)){?>
          <div class="col mb-2">
            <article class="card h-100 border-0 shadow">
              <div class="card-img-top position-relative overflow-hidden"><a class="d-block" href="nft-single-auction-live.html"><img src="images/<?php echo $rows['image']; ?>" alt="<?php echo $rows['name']; ?>"></a>
                <!-- Wishlist button-->
                <button class="btn-wishlist btn-sm position-absolute top-0 end-0" type="button" data-bs-toggle="tooltip" data-bs-placement="left" title="Add to Favorites" style="margin: 12px;"><i class="ci-heart"></i></button>
              </div>
              <div class="card-body">
                <h3 class="product-title mb-2 fs-base"><a class="d-block text-truncate" href="nft-single-auction-live.html"><?php echo $rows['name']; ?></a></h3><span class="fs-sm text-muted">Current Price:</span>
                <div class="d-flex align-items-center flex-wrap">
                  <h4 class="mt-1 mb-0 fs-base text-darker"><?php echo $rows['amount']; ?></h4>
                </div>
              </div>
            </article>
          </div>

          <?php } } } ?>
        
        </div>
        <hr class="mt-4 mb-3">
      </div>
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
      <div class="mt-n10 pt-10 bg-dark">
        <div class="container py-5">
          <div class="row py-lg-4 text-center">
            <div class="fs-xs text-light opacity-50">&copy; All rights reserved. Made by <a class="text-light" href="https://createx.studio/" target="_blank" rel="noopener">Createx Studio</a></div>
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
    <script src="vendor/nouislider/dist/nouislider.min.js"></script>
    <!-- Main theme script-->
    <script src="js/theme.min.js"></script>
  </body>
</html>