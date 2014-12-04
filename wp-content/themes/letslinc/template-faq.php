<?php /* Template Name: FAQ Page Template */ get_header(); ?>
	<!-- CSS -->
        <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/css_002.css">
        <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/css.css">
        <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/css_003.css">
        
	    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/bootstrap.css">
        <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/font-awesome.css">
        <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/animate.css">
        <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/ultm.htm">
		<link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/form-elements.css">
        <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/buttons.css">
        <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/style_app.css">
        <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/media-queries.css">
	</head>
	<body>
        <!-- FAQ -->
        <div class="faq-container section-container"> <!--
            <a href="/">
                <img class="faqbutton" src="../assets/img/BackArrow.png" alt="return to home">
            </a>  -->
            <div class="container">
                <div class="row">
                    <div style="visibility: visible; animation-name: fadeIn;" class="col-sm-12 faq section-description wow fadeIn animated">
                        <h2>Frequent questions</h2>
                    </div>
                </div>
                <div class="row">
					<div style="visibility: visible; animation-name: fadeInLeft;" class="col-sm-6 faq-box wow fadeInLeft animated">
						
					<?php
						$i = 1;
						$args = array(
							'post_type' => 'faq',
							'posts_per_page' => 14,
							'orderby' => 'post_date',
							'order' => 'ASC'
						);
						$new_query = new WP_Query($args);
						while ( $new_query->have_posts()) : $new_query->the_post();
							if( $i>1 && ($i-1)%7==0)
							{
								?></div><div style="visibility: visible; animation-name: fadeInUp;" class="col-sm-6 faq-box wow fadeInUp animated">
							<?php }
							?>
							<div class="single-faq">
								<h3><strong><?php the_title(); ?></strong></h3>
								<span><i class="fa fa-plus"></i></span>
								<div class="single-faq-text">
										<?php the_content(); ?>
								</div>
							</div>
							<?php $i++;
						endwhile; ?> 
						
						</div>
						
					<!--<div style="visibility: visible; animation-name: fadeInLeft;" class="col-sm-6 faq-box wow fadeInLeft animated">
                        <div class="single-faq">
                            <h3><strong>Does Linc access my credit card or banking information?</strong></h3>
                            <span><i class="fa fa-plus"></i></span>
                            <div class="single-faq-text">
                                <p>
                                    
                                </p>
                            </div>
                        </div>
                    </div>
                    <div style="visibility: visible; animation-name: fadeInUp;" class="col-sm-6 faq-box wow fadeInUp animated">
						
                    </div>-->
                </div>
            </div>
        </div>
        <!-- FAQ -->

        <!-- Call to action -->
        <div class="call-to-action-container section-container section-container-full-bg" style="background-color: #25A3D5">
            <div class="container">
                <div class="row">
                    <div style="visibility: visible; animation-name: fadeIn;" class="col-sm-12 call-to-action section-description wow fadeIn animated">
                        <h2> Linc to the Rescue
                     
                        </h2>
                        
                    </div>
                </div>
                <div class="row">
                    <div style="visibility: visible; animation-name: fadeInUp;" class="col-sm-12 call-to-action-button wow fadeInUp animated">
                        <a class="button-1" href="https://itunes.apple.com/us/app/linc-shopping-assist-messenger/id909501660?ls=1&amp;mt=8">
                            <span class="button-1-left"><i class="fa fa-mobile"></i></span>
                            <span class="button-1-right">
                                <span class="button-1-right-top">Available on the</span>
                                <span class="button-1-right-bottom">App Store</span>
                            </span>
                         </a>
                         <a class="button-2" href="https://play.google.com/store/apps/details?id=com.proximiant">
                            <span class="button-2-left"><i class="fa fa-android"></i></span>
                            <span class="button-2-right">
                                <span class="button-2-right-top">Get it now for</span>
                                <span class="button-2-right-bottom">Android</span>
                            </span>
                         </a>
                    </div>
                </div>
            </div>
        </div>
        
        
        
       
        <!-- Subscription form -->
        <!-- <div id='email' class="subscribe-container section-container" style="background-color: #9D9D9D;">
            <div class="container">
                <div class="row">
                    <div class="col-sm-12 subscribe section-description wow fadeIn">
                        <h2 id="whitetxt2">Stay Informed</h2>
                        <p class="whitetxt"> <strong> Sign up now and you'll be among the first to know about new features and releases.</strong> </p>
                        <form class="form-inline" action="../assets/subscribe.php" method="post">
                            <input type="text" name="email" placeholder="Enter your email..." class="subscribe-email">
                            <button type="submit" class="btn"> <strong>Let's Linc</strong></button>
                        </form>
                        <div class="success-message"></div>
                        <div class="error-message"></div>
                    </div>
                </div>
            </div>
        </div> -->

        <!-- Javascript -->
        <script src="<?php echo get_template_directory_uri(); ?>/js/jquery-1.js"></script>
        <script src="<?php echo get_template_directory_uri(); ?>/js/jquery.js"></script>
        <script src="<?php echo get_template_directory_uri(); ?>/js/wow.js"></script>
        <script src="<?php echo get_template_directory_uri(); ?>/js/retina-1.js"></script>
        <script src="<?php echo get_template_directory_uri(); ?>/js/scripts.js"></script>
        
        <!--[if lt IE 10]>
            <script src="<?php echo get_template_directory_uri(); ?>/js/placeholder.js"></script>
        <![endif]-->

    

</body>
</html>
<?php //get_sidebar(); ?>

<?php //get_footer(); ?>
