<?php
include('config/db_connection.php');

$per_page = 10;
$start = 0;
$current_page = 1;
if (isset($_GET['start'])) {
  $start = $_GET['start'];
  if ($start <= 0) {
    $start = 0;
    $current_page = 1;
  } else {
    $current_page = $start;
    $start--;
    $start = $start * $per_page;
  }
}
$record = mysqli_num_rows(mysqli_query($conn, "select * from images"));
$pagi = ceil($record / $per_page);

$sql = "select * from images limit $start,$per_page";
$res = mysqli_query($conn, $sql);
?>




<!DOCTYPE html>
<html lang="en">

<head>
  <meta name="viewport"
    content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0" />
  <meta charset="UTF-8" />

  <!-- Primary Meta Tags -->
  <title>G-Concepts | Gallery</title>
  <meta name="title" content="G-Concepts | Gallery">
  <!-- <meta name="description"
            content="We are more than just a marketing agency. Our work involves both analysis and creation. We communicate, design, develop and publish… To influence, experience, move and encourage . We understand that there’s more to marketing Than making you look good, we work to escalate your growth in business. As your strategic partner, we devise an expert plan to market your brand to gain maximum exposure.">
        <meta name="keywords"
            content="Dax, DaxAds, Thedaxads ,advertising agency ,graphic designing, graphic designing kannur,kerala, seo,search engine optimization,ecommerce digital marketing agency,advertising mediadigital marketing solutions,digital marketing agency near me,digital marketing classes,mba in digital marketing,digital marketing specialist,digital marketing manager,digital marketing salary,digital marketing interview questions,digital marketing news,digital marketing strategies,digital market,digital marketing companies,digital marketing training,digital marketing certification,google digital marketing certificate,digital marketing agencies,digital marketing institute,digital advertising,digital marketing definition,digital marketer,digital marketing strategy,digital marketing tools,digital marketing courses,learn digital with google,digital marketing services,google garage digital marketing,digital marketing jobs,digital marketing company,google digital marketing,fundamentals of digital marketing,digital marketing agency,digital marketing online course,digital marketing course online,digital marketing course,what is digital marketing,google digital marketing course, best digital marketing agency,online marketing,best digital marketing agency kannur,digital marketing & training,training center,digital courses,web courses,designing courses,digital marketing,web development,app development,top 10 digital marketing agency,digital marketing & training,digital courses,more than just a marketing agency services,Contact,powershift,uae,graphic designing,designing team,brand building,Professional Digital Marketing Company in Kannur, Digital Marketing Company in Kannur, Digital Marketing Company in Kannur near me in Kannur, low Budget website design Digital Marketing Company in Kannur, Low Cost Digital Marketing Company in Kannur, Cheap Digital Marketing Company in Kannur">
         -->
  <meta name="author" content="G-Concepts">

  <!-- Open Graph / Facebook -->
  <meta property="og:type" content="website">
  <!-- <meta property="og:url" content="https://thedaxads.com/"> -->
  <meta property="og:title" content="G-Concepts | About Us">
  <!-- <meta property="og:description"
            content="We are more than just a marketing agency. Our work involves both analysis and creation. We communicate, design, develop and publish… To influence, experience, move and encourage . We understand that there’s more to marketing Than making you look good, we work to escalate your growth in business. As your strategic partner, we devise an expert plan to market your brand to gain maximum exposure.
        			We also over-deliver our customer expectations with our versatile style of doing work with innovative working methodology and embedding teamed and brilliant execution results in high-quality advertising with standards difficult to rise up to."> -->
  <meta property="og:image" content="assets/img/G-CONCEPTS LOGO blur-01.jpg" />

  <!-- Twitter -->
  <meta property="twitter:card" content="summary_large_image">
  <!-- <meta property="twitter:url" content="https://thedaxads.com/"> -->
  <meta property="twitter:title" content="G-Concepts | Gallery">
  <!-- <meta property="twitter:description"
            content="We are more than just a marketing agency. Our work involves both analysis and creation. We communicate, design, develop and publish… To influence, experience, move and encourage . We understand that there’s more to marketing Than making you look good, we work to escalate your growth in business. As your strategic partner, we devise an expert plan to market your brand to gain maximum exposure.
        			We also over-deliver our customer expectations with our versatile style of doing work with innovative working methodology and embedding teamed and brilliant execution results in high-quality advertising with standards difficult to rise up to.">
        <meta property="twitter:image" content="assets/images/image.jpeg" /> -->
  <meta property="twitter:image" content="assets/img/G-CONCEPTS LOGO blur-01.jpg" />

  <link rel="icon" href="assets/img/G-CONCEPTS LOGO blur-01.jpg" />


  <link rel="author" href="https://plus.google.com/u/0/104296509460513856975" />

  <!-- Google Fonts -->
  <link
    href='https://fonts.googleapis.com/css?family=Open+Sans:400italic,700,600,800,400,300%7CMontserrat:400,700%7CRaleway:600,400'
    rel='stylesheet'>

  <!-- Css -->
  <link rel="stylesheet" href="assets/css/bootstrap.min.css" />
  <link rel="stylesheet" href="assets/css/magnific-popup.css" />
  <link rel="stylesheet" href="assets/revolution/css/settings.css" />
  <link rel="stylesheet" href="assets/css/rev-slider.css" />
  <link rel="stylesheet" href="assets/css/font-icons.css" />
  <link rel="stylesheet" href="assets/css/sliders.css" />
  <link rel="stylesheet" href="assets/css/style.css" />
  <link rel="stylesheet" href="assets/css/responsive.css" />
  <link rel="stylesheet" href="assets/css/spacings.css" />
  <link rel="stylesheet" href="assets/css/animate.min.css" />
  <link rel="stylesheet" href="assets/css/color.css" />

  <!-- Favicons -->
  <link rel="shortcut icon" href="assets/img/G-CONCEPTS LOGO blur-01.jpg">
  <link rel="apple-touch-icon" href="assets/img/apple-touch-icon.html" />
  <link rel="apple-touch-icon" sizes="72x72" href="assets/img/apple-icon72.jpg" />
  <link rel="apple-touch-icon" sizes="114x114" href="assets/img/apple-icon117.jpg" />

</head>

<body>

  <!-- Preloader -->
  <div class="loader-mask">
    <div class="loader">
      "Loading..."
    </div>
  </div>

  <!-- Whatsapp icon start -->
  <style media="screen">
  .float {
    position: fixed;
    width: 60px;
    height: 60px;
    bottom: 115px;
    right: 65px;
    background-color: #000;
    color: #fff;
    border-radius: 50px;
    text-align: center;
    font-size: 30px;
    box-shadow: 2px 2px 2px #000;
    z-index: 100;
  }

  .float:hover {
    color: #0770b7;
  }

  .my-float {
    margin-top: 16px;
  }
  </style>

  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css">
  <a href="https://api.whatsapp.com/send?phone=918943990555" class="float" target="_blank">
    <i class="fa fa-whatsapp my-float"></i>
  </a>
  <!-- Whatsapp icon end -->

  <header class="nav-type-1 transparent">

    <nav class="navbar navbar-static-top">
      <div class="navigation">
        <div class="container relative">

          <form method="get" class="search-wrap">
            <input type="search" class="form-control" placeholder="Type &amp; Hit Enter">
          </form>

          <div class="row">

            <div class="navbar-header">
              <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#navbar-collapse">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
              </button>
            </div> <!-- end navbar-header -->

            <!-- Logo -->
            <div class="logo-container">
              <div class="logo-wrap">
                <a href="index.html">
                  <img style="height: 110px;padding-top: 5px;padding-bottom: 5px;" class="logo"
                    src="assets/img/G-CONCEPTS LOGO blur-01.1.png" alt="logo">
                  <img style="height: 110px;padding-top: 5px;" class="logo-dark"
                    src="assets/img/G-CONCEPTS LOGO blur-01.1.png" alt="logo">
                </a>
              </div>
            </div>

            <!-- Mobile Cart -->
            <!-- <div class="cart-mobile hidden-lg hidden-md">
							<div class="nav-cart">
								<div class="cart-outer">
									<div class="cart-inner">
										<a class="shopping-cart relative" href="cart.html">
											<i class="fa fa-shopping-cart"></i>
											<span>2</span>
										</a>
									</div>
								</div>
							</div>	        		        	
						</div> -->

            <div class="col-md-9 nav-wrap right">
              <div class="collapse navbar-collapse" id="navbar-collapse">

                <ul class="nav navbar-nav navbar-right">

                  <li class="dropdown"><a href="index.html">Home</a></li>

                  <li class="dropdown "><a href="about-us.html">About</a></li>
                  <li class="dropdown"><a href="services.html">Services</a></li> <!-- end portfolio -->
                  <li class="dropdown active"><a href="gallery.php">Gallery</a></li>
                  <li class="dropdown"> <a href="contact.html">Contact</a></li> <!-- end features -->

                  <!-- <li id="mobile-search" class="hidden-lg hidden-md">
										<form method="get" class="mobile-search">
											<input type="search" class="form-control" placeholder="Search...">
											<button type="submit" class="search-button">
												<i class="fa fa-search"></i>
											</button>
										</form>
									</li>

									<li>
										<a href="#" class="nav-search">
											<i class="fa fa-search search-trigger"></i>
											<i class="fa fa-times search-close"></i>
										</a>
									</li> -->

                  <!-- Cart -->
                  <!-- <li class="nav-cart-wrap style-1 hidden-sm hidden-xs">
										<div class="nav-cart">
											<div class="cart-outer">
												<div class="cart-inner">
													<a class="shopping-cart relative" href="cart.html">
														<i class="fa fa-shopping-cart"></i>
														<span>2</span>
													</a>
												</div>
											</div>
											<div class="nav-cart-container">
												<div class="nav-cart-items">

													<div class="nav-cart-item clearfix">
														<div class="nav-cart-img">
															<a href="#">
																<img src="img/shop/cart_small_1.jpg" alt="">
															</a>
														</div>
														<div class="nav-cart-title">
															<a href="#">
																Ladies Bag
															</a>
															<div class="nav-cart-price">
																<span>1 x</span>
																<span>1250.00</span>
															</div>
														</div>
														<div class="nav-cart-remove">
															<a href="#"></a>
														</div>
													</div>

													<div class="nav-cart-item clearfix">
														<div class="nav-cart-img">
															<a href="#">
																<img src="img/shop/cart_small_2.jpg" alt="">
															</a>
														</div>
														<div class="nav-cart-title">
															<a href="#">
																Sequin Suit longer title
															</a>
															<div class="nav-cart-price">
																<span>1 x</span>
																<span>1250.00</span>
															</div>
														</div>
														<div class="nav-cart-remove">
															<a href="#"></a>
														</div>
													</div>

												</div>

												<div class="nav-cart-summary">
													<span>Cart Subtotal</span>
													<span class="total-price">$1799.00</span>
												</div>

												<div class="nav-cart-actions mt-20">
													<a href="shop-cart.html" class="btn btn-md btn-dark">View Cart</a>
													<a href="shop-checkout.html" class="btn btn-md btn-color mt-10">Proceed to Checkout</a>
												</div>
											</div>

										</div>
									</li>  -->
                  <!-- end cart -->

                </ul> <!-- end menu -->
              </div> <!-- end collapse -->
            </div> <!-- end col -->

          </div> <!-- end row -->
        </div> <!-- end container -->
      </div> <!-- end navigation -->
    </nav> <!-- end navbar -->
  </header>

  <div class="main-wrapper oh">

    <!-- Page Title -->
    <section class="page-title style-3 text-center" style="background-image: url(assets/img/gconcepts/ab2.jpg);">
      <div class="container relative clearfix">
        <div class="title-holder">
          <div class="title-text">
            <h1 class="uppercase">Gallery</h1>
            <ol class="breadcrumb">
              <li>
                <a href="index.html">Home</a>
              </li>
              <li class="active">
                Gallery
              </li>
            </ol>
          </div>
        </div>
        <div class="local-scroll hidden-sm hidden-xs">
          <a href="#intro" class="scroll-down">
            <i class="fa fa-angle-down"></i>
          </a>
        </div>
      </div>
    </section> <!-- end page title -->


    <!-- gallery start -->
    <section class="section-wrap bg-dark">
      <div class="container-fluid nopadding">

        <h2 class="color-white text-center mb-50 mb-mdm-30">Our Works</h2>


        <div id="portfolio-container" class="works-grid small-gutter masonry grid-4-col">

          <?php
          if (mysqli_num_rows($res) > 0) {
            while ($row = mysqli_fetch_assoc($res)) { ?>

          <div class="work-item masonry-item web-design photography">
            <div class="work-container">
              <div class="work-img">
                <img src="gallery\<?php echo $row['file_name'] ?>" alt="">
                <div class="work-overlay">

                </div>
              </div>
            </div>
          </div>
          <?php }
          } else { ?>
          No records
          <?php } ?>
          <!-- end work-item -->






          <!-- end work-item -->

        </div> <!-- end portfolio container -->




        <div style="justify-content:center; margin-top: 70px;" class="division">
          <div class="box-pagination">
            <nav aria-label="pagination">
              <ul style="border-bottom: 0px solid;" class="pagination">
                <?php
                for ($i = 1; $i <= $pagi; $i++) {
                  $class = '';
                  if ($current_page == $i) {
                ?>
                <li class="active"> <a href="javascript:void(0)"><?php echo $i ?> <span
                      class="sr-only">(current)</span></a></li>
                <?php
                  } else {
                  ?>
                <li><a href="?start=<?php echo $i ?>"><?php echo $i ?><span class="sr-only">(current)</span></a></li>
                <?php
                  }
                  ?>

                <?php } ?>


              </ul>
            </nav>
          </div>
        </div>
      </div>







    </section>
    <!-- Gallery end -->


    <!-- Footer Type-1 -->
    <footer class="footer footer-type-1">
      <div class="container">
        <div style="padding-bottom: 20px" class="footer-widgets">
          <div class="row">
            <div class="col-md-3 col-sm-6 col-xs-12">
              <div class="widget footer-about-us">
                <div class="logo1-container">
                  <div class="logo-wrap">
                    <a href="index.html">
                      <img style="height: 200px" class="logo" src="assets/img/G-CONCEPTS LOGO blur-01.png" alt="logo" />
                    </a>
                  </div>
                </div>
              </div>
            </div>
            <!-- end about us -->

            <div class="col-md-3 col-sm-6 col-xs-12">
              <div class="widget footer-get-in-touch">
                <h5>Address</h5>
                <p class="footer-address">
                  G CONCEPTS <br />
                  2ND FLOOR, ROYAL OAK BUILDING, <br />
                  (NEAR CAPITOL MALL) T K JUNCTION, <br />
                  THANA, KANNUR, KERALA 670002
                </p>
              </div>
            </div>
            <!-- end stay in touch -->

            <div class="col-md-3 col-sm-6 col-xs-12">
              <div class="widget footer-posts">
                <h5>Get in touch</h5>
                <div class="footer-entry-list">
                  <ul class="posts-list no-top-pad">
                    <li class="footer-entry small-space">
                      <article class="post-small clearfix">
                        <div class="entry">
                          <p>Phone: +91 894 399 0555</p>
                        </div>
                      </article>
                    </li>

                    <li class="footer-entry small-space">
                      <article class="post-small clearfix">
                        <div class="entry">
                          <p>
                            Email:
                            <a href="mailto:info@thegconcepts.com">info@thegconcepts.com</a>
                          </p>
                        </div>
                      </article>
                    </li>
                  </ul>
                </div>
              </div>
              <br>

              <div class="widget footer-posts">
                <h5>Join Our Team</h5>
                <div class="footer-entry-list">
                  <ul class="posts-list no-top-pad">
                    <li class="footer-entry small-space" style="padding-top: 0px;">
                      <article class="post-small clearfix">
                        <div class="entry">
                          <p>
                            Email:
                            <a href="mailto:careers@thegconcepts.com">careers@thegconcepts.com</a>
                          </p>
                        </div>
                      </article>
                    </li>
                  </ul>
                </div>
              </div>
            </div>
            <!-- end latest posts -->

            <div class="col-md-3 col-sm-6 col-xs-12">
              <div class="widget footer-links">
                <h5>Useful Links</h5>
                <ul>
                  <li><a href="index.html">Home</a></li>
                  <li><a href="about-us.html">About</a></li>
                  <li><a href="services.html">Services</a></li>
                  <li><a href="gallery.php">Gallery</a></li>
                  <li><a href="contact.html">Contact</a></li>
                </ul>
              </div>
            </div>
            <!-- end useful links -->
          </div>
        </div>
      </div>
      <!-- end container -->

      <div class="bottom-footer">
        <div class="container">
          <div class="row">
            <div class="col-sm-6 copyright">
              <span>
                &copy;
                <script>
                document.querySelector(".copyright span").innerHTML +=
                  new Date().getFullYear();
                </script>
                G-CONCEPTS | Made by <a href="https://thedaxads.com/">DaxAds</a>
              </span>
            </div>

            <div class="col-sm-4 col-sm-offset-2 footer-socials mt-mdm-10">
              <div class="social-icons text-right">
                <a href="https://www.facebook.com/glassandarchitecturalsolutions"><i class="fa fa-facebook"></i></a>
                <a href="https://www.instagram.com/thegconcepts"><i class="fa fa-instagram"></i></a>
                <a href="https://www.linkedin.com/company/gconcepts "><i class="fa fa-linkedin"></i></a>
              </div>
            </div>
          </div>
        </div>
      </div>
      <!-- end bottom footer -->
    </footer>
    <!-- end footer -->

    <div id="back-to-top">
      <a href="#top"><i class="fa fa-angle-up"></i></a>
    </div>

  </div> <!-- end main-wrapper -->

  <!-- jQuery Scripts -->
  <script type="text/javascript" src="assets/js/jquery.min.js"></script>
  <script type="text/javascript" src="assets/js/bootstrap.min.js"></script>
  <script type="text/javascript" src="assets/js/plugins.js"></script>
  <script type="text/javascript" src="assets/revolution/js/jquery.themepunch.tools.min.js"></script>
  <script type="text/javascript" src="assets/revolution/js/jquery.themepunch.revolution.min.js"></script>
  <script type="text/javascript" src="assets/js/rev-slider.js"></script>
  <script type="text/javascript" src="assets/js/scripts.js"></script>


  <script type="text/javascript" src="assets/revolution/js/extensions/revolution.extension.video.min.js"></script>
  <script type="text/javascript" src="assets/revolution/js/extensions/revolution.extension.carousel.min.js"></script>
  <script type="text/javascript" src="assets/revolution/js/extensions/revolution.extension.slideanims.min.js"></script>
  <script type="text/javascript" src="assets/revolution/js/extensions/revolution.extension.actions.min.js"></script>
  <script type="text/javascript" src="assets/revolution/js/extensions/revolution.extension.layeranimation.min.js">
  </script>
  <script type="text/javascript" src="assets/revolution/js/extensions/revolution.extension.kenburn.min.js"></script>
  <script type="text/javascript" src="assets/revolution/js/extensions/revolution.extension.navigation.min.js"></script>
  <script type="text/javascript" src="assets/revolution/js/extensions/revolution.extension.migration.min.js"></script>
  <script type="text/javascript" src="assets/revolution/js/extensions/revolution.extension.parallax.min.js"></script>

</body>


</html>