<!DOCTYPE html>
<html lang="en" class=" theme-color-07cb79 theme-skin-light">
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">

	<title>RScard</title>

	<!-- Favicon -->
	<link rel="shortcut icon" type="image/ico" href="img/favicon.png"/>

	<!-- Google Fonts -->
	<link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css?family=Fredoka+One">
	<link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css?family=Open+Sans:300,300italic,400,400italic,600,600italic,700,700italic,800,800italic">

	<!-- Icon Fonts -->
	<link rel="stylesheet" type="text/css" href="fonts/map-icons/css/map-icons.min.css">
	<link rel="stylesheet" type="text/css" href="fonts/icomoon/style.css">

    <!-- Styles -->
    <link rel="stylesheet" type="text/css" href="js/plugins/jquery.bxslider/jquery.bxslider.css">
    <link rel="stylesheet" type="text/css" href="js/plugins/jquery.customscroll/jquery.mCustomScrollbar.min.css">
    <link rel="stylesheet" type="text/css" href="js/plugins/jquery.mediaelement/mediaelementplayer.min.css">
    <link rel="stylesheet" type="text/css" href="js/plugins/jquery.fancybox/jquery.fancybox.css">
    <link rel="stylesheet" type="text/css" href="js/plugins/jquery.owlcarousel/owl.carousel.css">
    <link rel="stylesheet" type="text/css" href="js/plugins/jquery.owlcarousel/owl.theme.css">
    <link rel="stylesheet" type="text/css" href="style.css">
    <link rel="stylesheet" type="text/css" href="colors/green.css">

	<!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
	<!--[if lt IE 9]>
	<script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
	<script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
	<![endif]-->

	<!-- Modernizer for detect what features the user�s browser has to offer -->
	<script type="text/javascript" src="js/libs/modernizr.js"></script>
	
	<!-- Google RreCaptcha -->
    <script src='https://www.google.com/recaptcha/api.js'></script>
</head>

<body>

    <div class="mobile-nav">
        <button class="btn-mobile mobile-nav-close"><i class="rsicon rsicon-close"></i></button>
		
        <div class="mobile-nav-inner">
            <nav id="mobile-nav" class="nav">
				<ul class="clearfix">
					<li><a href="index.html#about">About</a></li>
					<li><a href="index.html#skills">Skills</a></li>
					<li><a href="index.html#portfolio">Portfolio</a> </li>
					<li><a href="index.html#experience">Experience</a></li>
					<li><a href="index.html#references">References</a></li>
					<li>
						<a href="category.html">Blog</a>
						<ul>
							<li><a href="single-image.html">Image Post</a></li>
							<li><a href="single-slider.html">Slider Post</a></li>
							<li><a href="single-video.html">Video Post</a></li>
							<li><a href="single-audio.html">Audio Post</a></li>
							<li><a href="single-vimeo.html">Vimeo Post</a></li>
							<li><a href="single-youtube.html">Youtube Post</a></li>
							<li><a href="single-dailymotion.html">Dailymotion Post</a></li>
							<li><a href="single.html">Without Media Post</a></li>
							<li><a href="typography.html">Typography Page</a></li>
							<li><a href="404.html">404 Page</a></li>
						</ul>
					</li>
					<li><a href="index.html#calendar">Calendar <span></span></a></li>
					<li><a href="index.html#contact">Contact <span></span></a></li>
				</ul>
			</nav>
        </div>
    </div><!-- .mobile-nav -->

    <div class="sidebar sidebar-fixed">
        <button class="btn-sidebar btn-sidebar-close"> <i class="rsicon rsicon-close"></i></button>

        <div class="widget-area">
            <aside class="widget widget-profile">
                <div class="profile-photo">
                    <img src="img/uploads/rs-photo-v2.jpg" alt="Robert Smith"/>
                </div>
                <div class="profile-info">
                    <h2 class="profile-title">Robert Smith</h2>
                    <h3 class="profile-position">Developer and businessman</h3>
                </div>
            </aside><!-- .widget-profile -->

            <aside class="widget widget_search">
                <h2 class="widget-title">Search</h2>
                <form class="search-form">
                    <label class="ripple">
                        <span class="screen-reader-text">Search for:</span>
                        <input class="search-field" type="search" placeholder="Search">
                    </label>
                    <input type="submit" class="search-submit" value="Search">
                </form>
            </aside><!-- .widget_search -->

            <aside class="widget widget_contact">
                <h2 class="widget-title">Contact Me</h2>
                <form class="contactForm" action="php/contact_form.php" method="post">
					<div class="input-field">
						<input class="contact-name" type="text" name="name"/>
						<span class="line"></span>
						<label>Name</label>
					</div>

					<div class="input-field">
						<input class="contact-email" type="email" name="email"/>
						<span class="line"></span>
						<label>Email</label>
					</div>

					<div class="input-field">
						<input class="contact-subject" type="text" name="subject"/>
						<span class="line"></span>
						<label>Subject</label>
					</div>

					<div class="input-field">
						<textarea class="contact-message" rows="4" name="message"></textarea>
						<span class="line"></span>
						<label>Message</label>
					</div>

					<span class="btn-outer btn-primary-outer ripple">
						<input class="contact-submit btn btn-lg btn-primary" type="submit" value="Send"/>
					</span>
					
					<div class="contact-response"></div>
				</form>
            </aside><!-- .widget_contact -->

            <aside class="widget widget-popuplar-posts">
                <h2 class="widget-title">Popular posts</h2>
                <ul>
                    <li>
                        <div class="post-media"><a href=""><img src="img/uploads/thumb-78x56-1.jpg" alt=""/></a></div>
                        <h3 class="post-title"><a href="">Standard Post Format With Featured Image</a></h3>
                        <div class="post-info"><a href=""><i class="rsicon rsicon-comments"></i>56 comments</a></div>
                    </li>
                    <li>
                        <div class="post-media"><a href=""><img src="img/uploads/thumb-78x56-2.jpg" alt=""/></a></div>
                        <h3 class="post-title"><a href="">Standard Post Format With Featured Image</a></h3>
                        <div class="post-info"><a href=""><i class="rsicon rsicon-comments"></i>56 comments</a></div>
                    </li>
                    <li>
                        <div class="post-media"><a href=""><img src="img/uploads/thumb-78x56-3.jpg" alt=""/></a></div>
                        <h3 class="post-title"><a href="">Standard Post Format With Featured Image</a></h3>
                        <div class="post-info"><a href=""><i class="rsicon rsicon-comments"></i>56 comments</a></div>
                    </li>
                </ul>
            </aside><!-- .widget-popuplar-posts -->

            <aside class="widget widget_tag_cloud">
                <h2 class="widget-title">Tag Cloud</h2>
                <div class="tagcloud">
                    <a href="" title="1 topic">Business</a>
                    <a href="" title="9 topics">City</a>
                    <a href="" title="10 topics">Creative</a>
                    <a href="" title="6 topics">Fashion</a>
                    <a href="" title="2 topics">Music</a>
                    <a href="" title="5 topics">News</a>
                    <a href="" title="9 topics">Peoples</a>
                </div>
            </aside><!-- .widget_tag_cloud -->

            <aside class="widget widget-recent-posts">
                <h2 class="widget-title">Recent posts</h2>
                <ul>
                    <li>
                        <div class="post-tag">
                            <a href="">#Photo</a>
                            <a href="">#Architect</a>
                        </div>
                        <h3 class="post-title"><a href="">Standard Post Format With Featured Image</a></h3>
                        <div class="post-info"><a href=""><i class="rsicon rsicon-comments"></i>56 comments</a></div>
                    </li>
                    <li>
                        <div class="post-tag">
                            <a href="">#Photo</a>
                            <a href="">#Architect</a>
                        </div>
                        <h3 class="post-title"><a href="">Standard Post Format With Featured Image</a></h3>
                        <div class="post-info"><a href=""><i class="rsicon rsicon-comments"></i>56 comments</a></div>
                    </li>
                    <li>
                        <div class="post-tag">
                            <a href="">#Photo</a>
                            <a href="">#Architect</a>
                        </div>
                        <h3 class="post-title"><a href="">Standard Post Format With Featured Image</a></h3>
                        <div class="post-info"><a href=""><i class="rsicon rsicon-comments"></i>56 comments</a></div>
                    </li>
                </ul>
            </aside><!-- .widget-recent-posts -->

            <aside class="widget widget_categories">
                <h2 class="widget-title">Categories</h2>
                <ul>
                    <li><a href="" title="Architecture Category Posts">Architecture</a> (9)</li>
                    <li><a href="" title="Business Category Posts">Business</a> (16)</li>
                    <li><a href="" title="Creative Category Posts">Creative</a> (18)</li>
                    <li><a href="" title="Design Category Posts">Design</a> (10)</li>
                    <li><a href="" title="Development Category Posts">Development</a> (14)</li>
                    <li><a href="" title="Education Category Posts">Education</a> (9)</li>
                </ul>
            </aside><!-- .widget_categories -->
        </div><!-- .widget-area -->
    </div><!-- .sidebar -->

    <div class="wrapper">
        <header class="header">
			<div class="head-bg" style="background-image: url('img/uploads/rs-cover.jpg')"></div>
			
            <div class="head-bar">
                <div class="head-bar-inner">
                    <div class="row">
                        <div class="col-sm-3 col-xs-6">                            
                            <a class="logo" href="index.html"><span>RS</span>card</a>
							<!-- <a class="head-logo" href=""><img src="img/rs-logo.png" alt="RScard"/></a> -->
                        </div>

                        <div class="col-sm-9 col-xs-6">
                            <div class="nav-wrap">
                                <nav id="nav" class="nav">
									<ul class="clearfix">
										<li><a href="index.html#about">About</a></li>
										<li><a href="index.html#skills">Skills</a></li>
										<li><a href="index.html#portfolio">Portfolio</a> </li>
										<li><a href="index.html#experience">Experience</a></li>
										<li><a href="index.html#references">References</a></li>
										<li>
											<a href="category.html">Blog</a>
											<ul>
												<li><a href="single-image.html">Image Post</a></li>
												<li><a href="single-slider.html">Slider Post</a></li>
												<li><a href="single-video.html">Video Post</a></li>
												<li><a href="single-audio.html">Audio Post</a></li>
												<li><a href="single-vimeo.html">Vimeo Post</a></li>
												<li><a href="single-youtube.html">Youtube Post</a></li>
												<li><a href="single-dailymotion.html">Dailymotion Post</a></li>
												<li><a href="single.html">Without Media Post</a></li>
												<li><a href="typography.html">Typography Page</a></li>
												<li><a href="404.html">404 Page</a></li>
											</ul>
										</li>
										<li><a href="index.html#calendar">Calendar <span></span></a></li>
										<li><a href="index.html#contact">Contact <span></span></a></li>
									</ul>
								</nav>

                                <button class="btn-mobile btn-mobile-nav">Menu</button>
                                <button class="btn-sidebar btn-sidebar-open"><i class="rsicon rsicon-menu"></i></button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </header><!-- .header -->

        <div class="content">
            <div class="container">
						
			<!-- START: PAGE CONTENT -->
			<?php require_once __DIR__ . '/php/recaptcha/autoload.php';				
				$siteKey = ''; // visit https://www.google.com/recaptcha/admin to generate keys
				$secret = '';
				$lang = 'en'; // reCAPTCHA supported 40+ languages listed here: https://developers.google.com/recaptcha/docs/language
			?>
			
			<section class="section section-text text-center">
				<div class="animate-up animated">
					<h2 class="section-title">You're not a bot? Aren't you?</h2>
					<div class="section-box">
					<?php
					if ($siteKey === '' || $secret === ''): ?>
						<h4>Add your keys</h4>
						<p>If you do not have keys already then visit
						<a href = "https://www.google.com/recaptcha/admin">
						https://www.google.com/recaptcha/admin</a> to generate them.<br/>
						Edit <strong>recaptcha.php</strong> file and set the respective keys in <strong>$siteKey</strong> and
						<strong>$secret</strong>. Reload the page after this.</p>
					<?php
					elseif (isset($_POST['g-recaptcha-response'])):
						$recaptcha = new \ReCaptcha\ReCaptcha($secret);
						$resp = $recaptcha->verify($_POST['g-recaptcha-response'], $_SERVER['REMOTE_ADDR']);
						if ($resp->isSuccess()):					
						// If the response is a success, that's it!
							?>
							<h3>Congratulation!</h3>
							<p>Your email was sent successfully! <a href="index.html">Go Back</a></p>
							<?php
							
							require_once __DIR__ . '/php/mailsender.php';
						else:
						// If it's not successful, then one or more error codes will be returned.
							?>
							<p>Something went wrong <a href="index.html">please try again</a>.</p>
						<?php
						endif;
					else:
						// Add the g-recaptcha tag to the form you want to include the reCAPTCHA element
						?>
						<p>Complete the reCAPTCHA then submit the form.</p>
						<form action="" method="post">
							<input type="hidden" value="<?php echo $_POST['rsName'];?>" name="rsName">
							<input type="hidden" value="<?php echo $_POST['rsEmail'];?>" name="rsEmail">
							<input type="hidden" value="<?php echo $_POST['rsSubject'];?>" name="rsSubject">
							<input type="hidden" value="<?php echo $_POST['rsMessage'];?>" name="rsMessage">						                        				
							
							<div class="input-field">
								<div class="g-recaptcha " data-sitekey="<?php echo $siteKey; ?>"></div>
								<script type="text/javascript" src="https://www.google.com/recaptcha/api.js?hl=<?php echo $lang; ?>"></script>
							</div>							
							<input type="submit" class="btn btn-lg btn-primary" value="Submit" />	
						</span>
						</form>
					<?php endif; ?>
					</div>
				</div>
			</section>
			<!-- END: PAGE CONTENT -->
			                
            </div><!-- .container -->
        </div><!-- .content -->

        <footer class="footer">
            <div class="footer-social">
                <ul class="social">
					<li><a class="ripple-centered" href="" target="_blank"><i class="rsicon rsicon-facebook"></i></a></li>
					<li><a class="ripple-centered" href="" target="_blank"><i class="rsicon rsicon-twitter"></i></a></li>
					<li><a class="ripple-centered" href="" target="_blank"><i class="rsicon rsicon-linkedin"></i></a></li>
					<li><a class="ripple-centered" href="" target="_blank"><i class="rsicon rsicon-google-plus"></i></a></li>
					<li><a class="ripple-centered" href="" target="_blank"><i class="rsicon rsicon-dribbble"></i></a></li>
					<li><a class="ripple-centered" href="" target="_blank"><i class="rsicon rsicon-instagram"></i></a></li>
				</ul>
            </div>
        </footer><!-- .footer -->
    </div><!-- .wrapper -->
	
	<a class="btn-scroll-top" href="#"><i class="rsicon rsicon-arrow-up"></i></a>
    <div id="overlay"></div>
    <div id="preloader">
		<div class="preload-icon"><span></span><span></span></div>
		<div class="preload-text">Loading ...</div>
	</div>

    <!-- Scripts -->
    <script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/1/jquery.js"></script>
    <script type="text/javascript" src="https://maps.googleapis.com/maps/api/js"></script>
    <script type="text/javascript" src="fonts/map-icons/js/map-icons.min.js"></script>
    <script type="text/javascript" src="js/plugins/jquery.mousewheel-3.0.6.pack.js"></script>
    <script type="text/javascript" src="js/plugins/imagesloaded.pkgd.min.js"></script>
    <script type="text/javascript" src="js/plugins/isotope.pkgd.min.js"></script>
    <script type="text/javascript" src="js/plugins/jquery.appear.min.js"></script>
    <script type="text/javascript" src="js/plugins/jquery.onepagenav.min.js"></script>
    <script type="text/javascript" src="js/plugins/jquery.bxslider/jquery.bxslider.min.js"></script>
    <script type="text/javascript" src="js/plugins/jquery.customscroll/jquery.mCustomScrollbar.concat.min.js"></script>
    <script type="text/javascript" src="js/plugins/jquery.mediaelement/mediaelement-and-player.min.js"></script>
    <script type="text/javascript" src="js/plugins/jquery.fancybox/jquery.fancybox.pack.js"></script>
    <script type="text/javascript" src="js/plugins/jquery.fancybox/helpers/jquery.fancybox-media.js"></script>
    <script type="text/javascript" src="js/plugins/jquery.owlcarousel/owl.carousel.min.js"></script>
    <script type="text/javascript" src="js/options.js"></script>	
    <script type="text/javascript" src="js/site.min.js"></script>
</body>
</html>