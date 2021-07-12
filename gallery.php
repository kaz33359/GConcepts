<?php
   include('config/db_connection.php');

$per_page=10;
$start=0;
$current_page=1;
if(isset($_GET['start'])){
	$start=$_GET['start'];
	if($start<=0){
		$start=0;
		$current_page=1;
	}else{
		$current_page=$start;
		$start--;
		$start=$start*$per_page;
	}
}
$record=mysqli_num_rows(mysqli_query($conn,"select * from images"));
$pagi=ceil($record/$per_page);

$sql="select * from images limit $start,$per_page";
$res=mysqli_query($conn,$sql);
?>


<!doctype html>
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
    <meta property="og:image" content="images/gconcept.jpeg" />

    <!-- Twitter -->
    <meta property="twitter:card" content="summary_large_image">
    <!-- <meta property="twitter:url" content="https://thedaxads.com/"> -->
    <meta property="twitter:title" content="G-Concepts | About Us">
    <!-- <meta property="twitter:description"
            content="We are more than just a marketing agency. Our work involves both analysis and creation. We communicate, design, develop and publish… To influence, experience, move and encourage . We understand that there’s more to marketing Than making you look good, we work to escalate your growth in business. As your strategic partner, we devise an expert plan to market your brand to gain maximum exposure.
        			We also over-deliver our customer expectations with our versatile style of doing work with innovative working methodology and embedding teamed and brilliant execution results in high-quality advertising with standards difficult to rise up to.">
        <meta property="twitter:image" content="assets/images/image.jpeg" /> -->
    <meta property="twitter:image" content="images/gconcept.jpeg" />

    <link rel="icon" href="images/gconcept.jpeg" />

    <link href="plugin/fonts/transfonter/fonts.css" rel="stylesheet">
    <link href="plugin/fonts/font-awesome/css/font-awesome.min.css" rel="stylesheet" />
    <link href="plugin/fonts/platicon/font/flaticon.css" rel="stylesheet">
    <link href="plugin/fonts/themify/themify-icons.css" rel="stylesheet" />
    <link href="plugin/bootstrap/css/bootstrap.min.css" rel="stylesheet" />
    <link href="plugin/animsition/css/animsition.min.css" rel="stylesheet" />
    <link href="plugin/lightbox/css/lightbox.min.css" rel="stylesheet" />
    <link href="css/animate.css" rel="stylesheet" />
    <link href="plugin/slick/slick.css" rel="stylesheet" />
    <link href="plugin/player/mediaelementplayer.css" rel="stylesheet" />
    <link href="plugin/jquery-ui/jquery-ui.css" rel="stylesheet" />

    <link href="css/style.css" rel="stylesheet" />
    <link href="css/customize.css" rel="stylesheet" />

    <script src="plugin/modernizr.js"></script>
    <script src="../../../vjs.zencdn.net/ie8/1.1.2/videojs-ie8.min.js"></script>
</head>

<body>

    <!-- Whatsapp icon start -->
    <style media="screen">
        .float {
            position: fixed;
            width: 60px;
            height: 60px;
            bottom: 120px;
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
    <a href="https://api.whatsapp.com/send?phone=919746583440" class="float" target="_blank">
        <i class="fa fa-whatsapp my-float"></i>
    </a>
    <!-- Whatsapp icon end -->
    <div class="animsition main-wrapper">

        <header class="vk-header vk-header-transparent" style="background-color: rgba(0,0,0,0.9);">
            <div class="logo-header">
                <a href="index.html"><img src="images/gcpng.png" style="height: 61px;" alt="G-Concepts"></a>
            </div>
            <!--./logo-header-->



            <div class="vk-menu-box">
                <div class="container vk-container">
                    <nav class="vk-navbar navbar">
                        <div class="navbar-header">
                            <button type="button" class="navbar-toggle vk-btn-navbar-toggle" data-toggle="collapse"
                                data-target="#myNavbar">
                                <span class="icon-bar"></span>
                                <span class="icon-bar"></span>
                                <span class="icon-bar"></span>
                            </button>
                        </div>
                        <div class="collapse navbar-collapse vk-navbar-collapse" id="myNavbar">
                            <ul class="nav navbar-nav vk-nav vk-navbar-nav">
                                <li class="active"><a href="index.html">Homes</a></li>
                                <li class=""><a href="about.html">About</a></li>
                                <li class=""><a href="contact.html">Project</a></li>
                                <li class=""><a href="contact.html">Our Services</a></li>
                                <li class=""><a href="contact.html">Clients</a></li>
                                <li class=""><a href="contact.html">Contact</a></li>

                            </ul>
                        </div>
                    </nav>
                </div>
                <!--./container-->
            </div>
            <!--./vk-menu-box-->

            <div class="vk-function-header">
                <ul class="vk-list vk-list-inline vk-list-social-footer">
                    <li><a href="#" target="_blank"><i class="fa fa-facebook"></i></a></li>
                    <li><a href="#" target="_blank"><i class="fa fa-instagram"></i></a></li>
                    <li><a href="#" target="_blank"><i class="fa fa-linkedin"></i></a></li>
                </ul>
            </div>
            <!--./vk-function-header-->



        </header>
        <!--./vk-header-->

        <section class="vk-content">

            <div class="vk-banner vk-background-image-3">
                <div class="vk-background-overlay vk-background-black _60"></div>
                <div class="container ">
                    <div class="vk-banner-wrapper">
                        <div class="page-heading">
                            Gallery
                        </div>

                        <div class="vk-breadcrumb">
                            <ul class="">

                                <li><a href="index.html">Home</a></li>
                                <li class="active">Gallery</li>
                            </ul>
                        </div>
                        <!--./vk-breadcrumb-->
                    </div>
                    <!--./vk-banner-wrapper-->
                </div>
            </div>
            <!--./vk-banner-->
			 <div class="vk-page portfolio portfolio-masonry">
            <div class="container">
              
			 <div class="row">
                    <div class="vk-portfolio-list" data-layout="masonry">
<?php 
	if(mysqli_num_rows($res)>0){
	while($row=mysqli_fetch_assoc($res)){?>
                        <div class="col-sm-6 col-md-4 data image living-room" data-filter="data image living-room" data-layout="masonry-item">
                            <div class="vk-portfolio-item">
                         
                                
                                <img src="gallery\<?php echo $row['file_name']?>" alt="">
                                <i class="vk-icon fa fa-picture-o"></i>
                            </div>
                        </div>
  <?php } } else {?>
	No records
	<?php } ?>
                    </div> <!--./vk-portfolio-list-->
                </div> <!--./row-->
  <div class="box-pagination">
                    <nav aria-label="pagination">
                        <ul class="pagination vk-pagination">
                            <?php 
	for($i=1;$i<=$pagi;$i++){
	$class='';
	if($current_page==$i){
		?>
                            <li class="active"> <a href="javascript:void(0)"><?php echo $i?> <span class="sr-only">(current)</span></a></li>
                            <?php
	}else{
	?>
	 <li><a href="?start=<?php echo $i?>"><?php echo $i?><span class="sr-only">(current)</span></a></li>
	 <?php
	}
	?>
    
	<?php } ?>
	
	
                        </ul>
                    </nav>
                </div> <!--./box-pagination-->
            </div> <!--./container-->
        </div><!--./vk-page-->
             

                
            <!--./vk-page-->

        </section>
        <!--./content-->

        <footer class="vk-footer vk-footer-style-1 ">
            <div class="container">
                <div class="content">
                    <div class="logo-footer">
                        <a href="#"><img src="images/gcpng.png" alt="" style="height: 61px;"></a>
                    </div>

                    <div class="social-link">
                        <ul class="vk-list vk-list-inline vk-list-social-footer">
                            <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                            <li><a href="#"><i class="fa fa-instagram"></i></a></li>
                            <li><a href="#"><i class="fa fa-linkedin"></i></a></li>
                        </ul>
                    </div>

                    <div class="powerby">©2021 <span class="vk-text-color-blue-1">G-Concepts</span> Designed By <a
                            href="https://thedaxads.com/"> &nbsp DaxAds</div>
                </div>
            </div>
            <!--./container-->
        </footer>
        <!--./vk-footer-->
    </div>
    <!--./main-wrapper-->

    <!-- BEGIN: SCRIPT -->
    <script src="plugin/jquery/jquery-2.0.2.min.js"></script>

    <script src="plugin/plugin.min.js"></script>


    <script src="plugin/main.js"></script>
    <script src="plugin/custom.js"></script>
    <!-- END: SCRIPT -->

</body>


</html>