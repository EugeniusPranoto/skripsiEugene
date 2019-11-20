<!doctype html>
<html lang="en">

<head>
	<!-- Required meta tags -->
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<link rel="icon" href="img/favicon.png" type="image/png">
	<title>Inwork Management System</title>
	<!-- Bootstrap CSS -->
	<link rel="stylesheet" href="http://localhost/CI_Project/assets/Template/css/bootstrap.css">
	<link rel="stylesheet" href="http://localhost/CI_Project/assets/Template/vendors/linericon/style.css">
	<link rel="stylesheet" href="http://localhost/CI_Project/assets/Template/css/font-awesome.min.css">
	<link rel="stylesheet" href="http://localhost/CI_Project/assets/Template/vendors/owl-carousel/owl.carousel.min.css">
	<link rel="stylesheet" href="http://localhost/CI_Project/assets/Template/vendors/nice-select/css/nice-select.css">
	<link rel="stylesheet" href="http://localhost/CI_Project/assets/Template/vendors/animate-css/animate.css">
	<link rel="stylesheet" href="http://localhost/CI_Project/assets/Template/vendors/popup/magnific-popup.css">
	<link rel="stylesheet" href="http://localhost/CI_Project/assets/Template/vendors/swiper/css/swiper.min.css">
	<link rel="stylesheet" href="http://localhost/CI_Project/assets/Template/vendors/scroll/jquery.mCustomScrollbar.css">
	<!-- main css -->
	<link rel="stylesheet" href="http://localhost/CI_Project/assets/Template/css/style.css">
    
    
</head>

<body>

	<!-- ================Offcanvus Menu Area =================-->
	<!--================End Offcanvus Menu Area =================-->

	

	<!--================ Start banner section =================-->
	<section class="home-banner-area relative">
		<div class="container-fluid p-0">
			<div class="owl-carousel owl-banner">
				<div class="row  d-flex align-items-center justify-content-center">
                    
					<div class="col-lg-12">
                        <?php foreach($webcontent as $list){ ?>
                        <?php if($list->id_web_content == "1"){  ?>
						<a href="#" class="logo">
							<img src="<?php echo base_url();?>assets/Pictures/<?php echo $list->picture?>" style="width:60px; height:50px; margin-top:2%; margin-left:50%"  alt="logo"   />
						</a>
                        <?php }?>
                        <?php }?>
					</div>
                     

					<div class="col-lg-8 header-left">
						<div class="">
                            <?php foreach($webcontent as $list){ ?>
                            <?php if($list->id_web_content == "37"){  ?>
							<img class="img-fluid w-100" src="<?php echo base_url();?>assets/Template/img/pictures/<?php echo $list->picture?>" alt="">
                            <?php }?>
                            <?php }?>
						</div>
					</div>

					<div class="header-right col-lg-4">
						<h1>
                            <?php foreach($webcontent as $list){ 
                                if($list->id_web_content == "32"){  ?>
							 <?php echo $list->content ?>
                            <?php }}?>
						</h1>
						<p class="pt-20">
                            <?php foreach($webcontent as $list){ 
                                if($list->id_web_content == "33"){  ?>
							 <?php echo $list->content ?>
                            <?php }}?>

						</p>
					</div>
					<div class="col-lg-12">
						<a href="#" class="main_btn">
							Access INWORK Management System
                            <?php foreach($webcontent as $list){ ?>
                            <?php if($list->id_web_content == "38"){  ?>
							<img src="<?php echo base_url();?>assets/Template/img/<?php echo $list->picture?>" alt="">
                            <?php }?>
                            <?php }?>
						</a>
					</div>

				</div>

				
			</div>
		</div>
	</section>
	<!--================ End banner section ================= -->

	<!--================ Start Project Area =================-->
	<section class="section_gap project-area">
		<div class="container">
			<div class="row">
				<div class="col-lg-6 col-md-6">
					<div class="main_title">
						<h1>
							<?php foreach($webcontent as $list){ 
                                if($list->id_web_content == "1"){  ?>
							 <?php echo $list->content ?>
                            <?php }}?>
						</h1>
						<p><?php foreach($webcontent as $list){ 
                                if($list->id_web_content == "2"){  ?>
							 <?php echo $list->content ?>
                            <?php }}?></p>
                        <?php foreach($webcontent as $list){ ?>
                        <?php if($list->id_web_content == "38"){  ?>

						<img src="<?php echo base_url();?>assets/Template/img/<?php echo $list->picture?>" alt="">
                        <?php }?>
                        <?php }?>
					</div>
					<!-- single projects -->
					<div class="single-project">
                        <?php foreach($webcontent as $list){ ?>
                        <?php if($list->id_web_content == "39"){  ?>

                        <div id = "box" style = "background-image:url('<?php echo base_url();?>assets/Template/img/pictures/<?php echo $list->picture?>');background-size:cover">
                        <?php }?>
                        <?php }?>
                        </div>
						<div class="project-details">
							<p><?php foreach($webcontent as $list){ 
                                if($list->id_web_content == "6"){  ?>
							 <?php echo $list->content ?>
                            <?php }}?></p>
							<h4><?php foreach($webcontent as $list){ 
                                if($list->id_web_content == "7"){  ?>
							 <?php echo $list->content ?>
                            <?php }}?></h4>
							<a href="#" class="main_btn1">
								<?php foreach($webcontent as $list){ 
                                if($list->id_web_content == "5"){  ?>
							 <?php echo $list->content ?>
                                <?php }}?>
                                <?php foreach($webcontent as $list){ ?>
                                <?php if($list->id_web_content == "40"){  ?>
								<img src="<?php echo base_url();?>assets/Template/img/<?php echo $list->picture?>" alt="">
                                
                                <?php }?>
                                <?php }?>

							</a>
						</div>
					</div>
					<!-- branding -->
					
				</div>

				<div class="col-lg-6 col-md-6">
					<!-- single projects -->
					<div class="single-project">
                        <?php foreach($webcontent as $list){ ?>
                        <?php if($list->id_web_content == "41"){  ?>
						  <div id = "box" style = "background-image:url('<?php echo base_url();?>assets/Template/img/pictures/<?php echo $list->picture?>');background-size:cover"></div>
                        <?php }?>
                        <?php }?>

						<div class="project-details">
							<p><?php foreach($webcontent as $list){ 
                                if($list->id_web_content == "3"){  ?>
							 <?php echo $list->content ?>
                            <?php }}?></p>
							<h4><?php foreach($webcontent as $list){ 
                                if($list->id_web_content == "4"){  ?>
							 <?php echo $list->content ?>
                            <?php }}?></h4>
							<a href="#" class="main_btn1">
								<?php foreach($webcontent as $list){ 
                                if($list->id_web_content == "5"){  ?>
				            <?php echo $list->content ?>
                            <?php }}?>
                            <?php foreach($webcontent as $list){ ?>
                            <?php if($list->id_web_content == "40"){  ?>
								<img src="<?php echo base_url();?>assets/Template/img/<?php echo $list->picture?>" alt="">
                                <?php }?>
                                <?php }?>

							</a>
						</div>
					</div>
					<!-- single projects -->
					<div class="single-project">
                        <?php foreach($webcontent as $list){ ?>
                        <?php if($list->id_web_content == "42"){  ?>
						  <div id = "box" style = "background-image:url('<?php echo base_url();?>assets/Template/img/pictures/<?php echo $list->picture?>');background-size:cover"></div>
                        <?php }?>
                        <?php }?>

						<div class="project-details"> 
							<p><?php foreach($webcontent as $list){ 
                                if($list->id_web_content == "8"){  ?>
							 <?php echo $list->content ?>
                            <?php }}?> </p>
							<h4><?php foreach($webcontent as $list){ 
                                if($list->id_web_content == "9"){  ?>
							 <?php echo $list->content ?>
                            <?php }}?> </h4>
							<a href="#" class="main_btn1">
								View Details
                            <?php foreach($webcontent as $list){ ?>
                            <?php if($list->id_web_content == "40"){  ?>
								<img src="<?php echo base_url();?>assets/Template/img/<?php echo $list->picture?>" alt="">
                                <?php }?>
                                <?php }?>

							</a>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>
	<!--================ End Project Area =================-->

	<!--================ Start Service Area =================-->
	<section class="service-area">
		<div class="container">
			<div class="row">
				<div class="col-lg-5 col-md-6">
					<div class="main_title">
						<h1>
							<?php foreach($webcontent as $list){ 
                                if($list->id_web_content == "10"){  ?>
							 <?php echo $list->content ?>
                            <?php }}?> 
						</h1>
						<p><?php foreach($webcontent as $list){ 
                                if($list->id_web_content == "11"){  ?>
							 <?php echo $list->content ?>
                            <?php }}?> </p>
                        
                        <?php foreach($webcontent as $list){ ?>
                        <?php if($list->id_web_content == "38"){  ?>
						<img src="<?php echo base_url();?>assets/Template/img/<?php echo $list->picture?>" alt="">
                        <?php }?>
                        <?php }?>

					</div>
				</div>
			</div>
			<div class="row">
				<div class="col-lg-6 col-md-6">
					<div class="service-img">
                        <?php foreach($webcontent as $list){ ?>
                        <?php if($list->id_web_content == "43"){  ?>
						<img class="<?php echo base_url();?>assets/Template/img/img-fluid box1" src="<?php echo base_url();?>assets/Template/img/project/<?php echo $list->picture?>" alt="">
					</div>
                    <?php }?>
                    <?php }?>

				</div>
				<div class="col-lg-5 offset-lg-1 col-md-6" style="padding: 5%">
					<!-- single service -->
					<div class="single-service">
						<h4><?php foreach($webcontent as $list){ 
                                if($list->id_web_content == "12"){  ?>
							 <?php echo $list->content ?>
                            <?php }}?> </h4>
						<p><?php foreach($webcontent as $list){ 
                                if($list->id_web_content == "13"){  ?>
							 <?php echo $list->content ?>
                            <?php }}?> 
                        </p>
						
					</div>
					<!-- single service -->
					<div class="single-service mr-left" >
						<h4><?php foreach($webcontent as $list){ 
                                if($list->id_web_content == "14"){  ?>
							 <?php echo $list->content ?>
                            <?php }}?> </h4>
						<p><?php foreach($webcontent as $list){ 
                                if($list->id_web_content == "15"){  ?>
							 <?php echo $list->content ?>
                            <?php }}?> 
                        
                        </p>
						
					</div>
					<!-- single service -->
					<div class="single-service">
						<h4><?php foreach($webcontent as $list){ 
                                if($list->id_web_content == "16"){  ?>
							 <?php echo $list->content ?>
                            <?php }}?> </h4>
						<p><?php foreach($webcontent as $list){ 
                                if($list->id_web_content == "17"){  ?>
							 <?php echo $list->content ?>
                            <?php }}?> </p>
							</div>
				</div>
			</div>
		</div>
	</section>
	<!--================ End Service Area =================-->

	<!--================ Start Gallery Service Area =================-->
	<section class="gallery-area section_gap">
		<div class="container-fluid">
			<div class="row">
				<div class="col-lg-6 col-md-6 text-right">
					<div class="main_title">
						<h1>
							<?php foreach($webcontent as $list){ 
                                if($list->id_web_content == "18"){  ?>
							 <?php echo $list->content ?>
                            <?php }}?> 
						</h1>
						<p>I<?php foreach($webcontent as $list){ 
                                if($list->id_web_content == "19"){  ?>
							 <?php echo $list->content ?>
                            <?php }}?> </p>
                        <?php foreach($webcontent as $list){ ?>
                        <?php if($list->id_web_content == "38"){  ?>

						<img src="<?php echo base_url();?>assets/Template/img/img/<?php echo $list->picture?>" alt="">
                        <?php }?>
                        <?php }?>

					</div>
					<div class="row">
						<div class="col-lg-12">
							<!-- single gallery -->
							<div class="single-gallery">
                                <?php foreach($webcontent as $list){ ?>
                                <?php if($list->id_web_content == "44"){  ?>

								 <div id = "box4" style = "background-image:url('<?php echo base_url();?>assets/Template/img/pictures/<?php echo $list->picture?>');background-size:cover">
                                    <?php }?>
                                    <?php }?>

                                </div>
								<div class="light-box">
                                    <?php foreach($webcontent as $list){ ?>
                                    <?php if($list->id_web_content == "45"){  ?>

									<a href="<?php echo base_url();?>assets/Template/img/project/<?php echo $list->picture?>" class="img-popup">
                                        <?php }?>
                                        <?php }?>
										<span class="lnr lnr-move"></span>
									</a>
								</div>
							</div>
						</div>
						<div class="col-lg-8 offset-lg-4">
							<!-- single gallery -->
							<div class="single-gallery">
                                <?php foreach($webcontent as $list){ ?>
                                <?php if($list->id_web_content == "46"){  ?>

								<div id = "box3" style = "background-image:url('<?php echo base_url();?>assets/Template/img/pictures/<?php echo $list->picture?>');background-size:cover">
                                <?php }?>
                                <?php }?>
                                </div>
								<div class="light-box">
                                    <?php foreach($webcontent as $list){ ?>
                                    <?php if($list->id_web_content == "47"){  ?>
									<a href="<?php echo base_url();?>assets/Template/img/project/<?php echo $list->picture?>" class="img-popup">
                                        <?php }?>
                                        <?php }?>

										<span class="lnr lnr-move"></span>
									</a>
								</div>
							</div>
						</div>
					</div>
				</div>
				<div class="col-lg-6 col-md-6 text-left">
					<div class="row">
						<div class="col-lg-8">
							<!-- single gallery -->
							<div class="single-gallery">
                                <?php foreach($webcontent as $list){ ?>
                                <?php if($list->id_web_content == "48"){  ?>

								<div id = "box3" style = "background-image:url('<?php echo base_url();?>assets/Template/img/pictures/<?php echo $list->picture?>');background-size:cover"></div>
                                <?php }
                                if($list->id_web_content == "49"){ ?>

								<div class="light-box">
									<a href="<?php echo base_url();?>assets/Template/img/project/<?php echo $list->picture?>" class="img-popup">
                                        <?php }?>
                                        <?php }?>

										<span class="lnr lnr-move"></span>
									</a>
								</div>
							</div>
						</div>
						<div class="col-lg-12">
							<!-- single gallery -->
							<div class="single-gallery">
                                <?php foreach($webcontent as $list){ ?>
                                <?php if($list->id_web_content == "50"){  ?>

							<div id = "box4" style = "background-image:url('<?php echo base_url();?>assets/Template/img/pictures/<?php echo $list->picture?> ');background-size:cover"></div>
                                <?php } if($list->id_web_content == "51"){  
                                ?>

								<div class="light-box">
									<a href="<?php echo base_url();?>assets/Template/img/project/<?php echo $list->picture?>" class="img-popup">
                                        <?php }?>
                                        <?php }?>

										<span class="lnr lnr-move"></span>
									</a>
								</div>
							</div>
							
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>
	<!--================ End Gallery Service Area =================-->

	<!--================ Start Testimonial Area =================-->


	<!--================ End Testimonial Area =================-->

	<!--================ Start Blog Area =================-->
	<section class="blog-area section_gap">
		<div class="container">
			<div class="row">
				<div class="col-lg-6">
					<!-- single-blog -->
					<div class="single-blog">
                        <?php foreach($webcontent as $list){ ?>
                        <?php if($list->id_web_content == "52"){  ?>

						<div id = "box5" style = "background-image:url('<?php echo base_url();?>assets/Template/img/pictures/<?php echo $list->picture?>');background-size:cover"></div>
                        <?php } if($list->id_web_content == "53"){?>
						<div class="blog-meta">
							<img src="<?php echo base_url();?>assets/Template/img/<?php echo $list->picture?>" alt="">
                            <?php }?>
                            <?php }?>

							<h6><?php foreach($webcontent as $list){ 
                                if($list->id_web_content == "22"){  ?>
							 <?php echo $list->content ?>
                            <?php }}?> </h6>
                             <p><?php foreach($webcontent as $list){ 
                                if($list->id_web_content == "23"){  ?>
							 <?php echo $list->content ?>
                            <?php }}?> </p>
						</div>
						<div class="blog-details">
							<h4><?php foreach($webcontent as $list){ 
                                if($list->id_web_content == "25"){  ?>
							 <?php echo $list->content ?>
                            <?php }}?> </h4>
							<p> <?php foreach($webcontent as $list){ 
                                if($list->id_web_content == "26"){  ?>
							 <?php echo $list->content ?>
                            <?php }}?> </p>
							
						</div>
					</div>
					<!-- single-blog -->
					<div class="single-blog">
                        <?php foreach($webcontent as $list){ ?>
                        <?php if($list->id_web_content == "54"){  ?>

						<div id = "box5" style = "background-image:url('<?php echo base_url();?>assets/Template/img/pictures/<?php echo $list->picture?>');background-size:cover"></div>
                        <?php } if($list->id_web_content == "55"){?>
						<div class="blog-meta">
							<img src="<?php echo base_url();?>assets/Template/img/<?php echo $list->picture?>" alt="">
                            <?php }?>
                            <?php }?>

							<h6><?php foreach($webcontent as $list){ 
                                if($list->id_web_content == "22"){  ?>
							 <?php echo $list->content ?>
                            <?php }}?> </h6>
                            <p><?php foreach($webcontent as $list){ 
                                if($list->id_web_content == "24"){  ?>
							 <?php echo $list->content ?>
                            <?php }}?> </p>
							
							
						</div>
						<div class="blog-details">
							<h4><?php foreach($webcontent as $list){ 
                                if($list->id_web_content == "30"){  ?>
							 <?php echo $list->content ?>
                            <?php }}?> </h4>
							<p> <?php foreach($webcontent as $list){ 
                                if($list->id_web_content == "31"){  ?>
							 <?php echo $list->content ?>
                            <?php }}?> </p>
							
						</div>
					</div>
				</div>
				<div class="col-lg-6">
					<div class="main_title">
						<h1>
							<?php foreach($webcontent as $list){ 
                                if($list->id_web_content == "20"){  ?>
							 <?php echo $list->content ?>
                            <?php }}?>
						</h1>
						<p> <?php foreach($webcontent as $list){ 
                                if($list->id_web_content == "21"){  ?>
							 <?php echo $list->content ?>
                            <?php }}?></p>
						<img src="<?php echo base_url();?>assets/Template/img/next.png" alt="">
					</div>
					<!-- single-blog -->
					<div class="single-blog">
                        <?php foreach($webcontent as $list){ ?>
                        <?php if($list->id_web_content == "56"){  ?>
						<div id = "box5" style = "background-image:url('<?php echo base_url();?>assets/Template/img/pictures/<?php echo $list->picture?>');background-size:cover"></div>
                        <?php }if($list->id_web_content == "57"){ ?>

						<div class="blog-meta">
							<img src="<?php echo base_url();?>assets/Template/img/testi-author.png" alt="">
                        <?php }?>
                        <?php }?>
							<h6><?php foreach($webcontent as $list){ 
                                if($list->id_web_content == "22"){  ?>
							 <?php echo $list->content ?>
                            <?php }}?></h6>
							<p><?php foreach($webcontent as $list){ 
                                if($list->id_web_content == "27"){  ?>
							 <?php echo $list->content ?>
                            <?php }}?></p>
						</div>
						<div class="blog-details">
							<h4><?php foreach($webcontent as $list){ 
                                if($list->id_web_content == "28"){  ?>
							 <?php echo $list->content ?>
                            <?php }}?></h4>
							<p><?php foreach($webcontent as $list){ 
                                if($list->id_web_content == "29"){  ?>
							 <?php echo $list->content ?>
                            <?php }}?> </p>
						</div>
					</div>
				</div>
			</div>
		</div>
		<div class="container-fluid">
			<div class="row">
				<div class="col-lg-6 offset-lg-6">
					<div class="cta-area">
						<div class="row align-items-center justify-content-between">
							<div class="col-lg-7 col-md-7">
								<h1><?php foreach($webcontent as $list){ 
                                if($list->id_web_content == "34"){  ?>
							 <?php echo $list->content ?>
                            <?php }}?> </h1>
							</div>
							<div class="col-lg-5 col-md-5">
								<div class="cta-btn">
									<a href="#" class="main_btn1">
										<?php foreach($webcontent as $list){ 
                                if($list->id_web_content == "35"){  ?>
							 <?php echo $list->content ?>
                            <?php }}?> 
                                        <?php foreach($webcontent as $list){ ?>
                                        <?php if($list->id_web_content == "40"){  ?>

										<img src="<?php echo base_url();?>assets/Template/img/<?php echo $list->picture?>" alt="">
                                        <?php }?>
                                        <?php }?>

									</a>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>
	<!--================ End Blog Area =================-->

	<!--================ start footer Area  =================-->
	<footer class="footer_area section_gap">
		<div class="container">
			<div class="row footer_inner">
				<div class="col-lg-5 col-sm-6">
					<aside class="f_widget ab_widget">
						<div class="f_title">
							<h3>About Me</h3>
						</div>
						<p>Do you want to be even more successful? Learn to love learning and growth. The more effort you put into
							improving your skills,</p>
						
					</aside>
				</div>
				<div class="col-lg-5 col-sm-6">
					<aside class="f_widget news_widget">
						<div class="f_title">
							<h3>Newsletter</h3>
						</div>
						<p>Stay updated with our latest trends</p>
						<div id="mc_embed_signup">
							<form target="_blank" action="https://spondonit.us12.list-manage.com/subscribe/post?u=1462626880ade1ac87bd9c93a&amp;id=92a4423d01"
							 method="get" class="subscribe_form relative">
								<div class="input-group d-flex flex-row">
									<input name="EMAIL" placeholder="Enter email address" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Email Address '"
									 required="" type="email">
									<button class="btn sub-btn"><span class="lnr lnr-arrow-right"></span></button>
								</div>
								<div class="mt-10 info"></div>
							</form>
						</div>
					</aside>
				</div>
				<div class="col-lg-2">
					<aside class="f_widget social_widget">
						<div class="f_title">
							<h3>Follow Me</h3>
						</div>
						<p>Let us be social</p>
						<ul class="list">
							<li><a href="http://localhost/CI_Project/assets/Template/css/font-awesome.min.css"><i class="fa fa-facebook"></i></a></li>
							<li><a href="http://localhost/CI_Project/assets/Template/css/font-awesome.min.css"><i class="fa fa-twitter"></i></a></li>
							<li><a href="http://localhost/CI_Project/assets/Template/css/font-awesome.min.css"><i class="fa fa-dribbble"></i></a></li>
							<li><a href="http://localhost/CI_Project/assets/Template/css/font-awesome.min.css"><i class="fa fa-behance"></i></a></li>
						</ul>
					</aside>
				</div>
			</div>
		</div>
	</footer>
	<!--================ End footer Area  =================-->


	<!-- Optional JavaScript -->
	<!-- jQuery first, then Popper.js, then Bootstrap JS -->
	<script src="http://localhost/CI_Project/assets/Template/js/jquery-3.2.1.min.js"></script>
	<script src="http://localhost/CI_Project/assets/Template/js/popper.js"></script>
	<script src="http://localhost/CI_Project/assets/Template/js/bootstrap.min.js"></script>
	<script src="http://localhost/CI_Project/assets/Template/js/stellar.js"></script>
	<script src="http://localhost/CI_Project/assets/Template/vendors/nice-select/js/jquery.nice-select.min.js"></script>
	<script src="http://localhost/CI_Project/assets/Template/vendors/isotope/imagesloaded.pkgd.min.js"></script>
	<script src="http://localhost/CI_Project/assets/Template/vendors/isotope/isotope-min.js"></script>
	<script src="http://localhost/CI_Project/assets/Template/vendors/owl-carousel/owl.carousel.min.js"></script>
	<script src="http://localhost/CI_Project/assets/Template/js/jquery.ajaxchimp.min.js"></script>
	<script src="http://localhost/CI_Project/assets/Template/vendors/counter-up/jquery.waypoints.min.js"></script>
	<script src="http://localhost/CI_Project/assets/Template/vendors/counter-up/jquery.counterup.js"></script>
	<script src="http://localhost/CI_Project/assets/Template/js/mail-script.js"></script>
	<script src="http://localhost/CI_Project/assets/Template/vendors/popup/jquery.magnific-popup.min.js"></script>
	<script src="http://localhost/CI_Project/assets/Template/vendors/swiper/js/swiper.min.js"></script>
	<script src="http://localhost/CI_Project/assets/Template/vendors/scroll/jquery.mCustomScrollbar.js"></script>
	<script src="http://localhost/CI_Project/assets/Template/js/theme.js"></script>
</body>

</html>