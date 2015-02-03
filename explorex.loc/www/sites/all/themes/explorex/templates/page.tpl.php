	<header>
		<div id="header">
			<div id="logo"></div>
			<nav>
				<div class="navigation_top">
					<?print render($page['main_menu']);?>
				</div>
				
				<div class="navigation_middle">
					<?print render($page['secondary_menu']);?>
				</div>
			</nav>
		</div>
	</header>
	
	<section class="wrapper">
		<div class="btn_content">
			<div class="join_now">
				<span>Sign In Or</span>
				<a href="#">
					<div class="user_marker"></div>
					Join Now
				</a>
			</div>
			<div class="location_like">
				<div class="heart_box">
					<a href="#" class="heart_small">
						<div class="heart_small_img"></div>
						<div class="counter">371</div>
					</a>
				</div>
				<div class="ch_loc">
					<span>Change Location</span>
					<a href="#" class="ch_loc_wrap_btn">
						<div class="ch_loc_btn"></div>
					</a>
				</div>
			</div>
		</div>

		<div class="social">
			<a href="#" class="facebook_social">
				<img src="<?php print base_path() . path_to_theme();?>/images/facebook_social.png" />
			</a>
			<a href="#" class="subscribe_social">
				<img src="<?php print base_path() . path_to_theme();?>/images/subscribe_social.png"/>
			</a>
			<a href="#" class="twitter_social">
				<img src="<?php print base_path() . path_to_theme();?>/images/twitter_social.png"/>
			</a>
			<a href="#" class="mail_social">
				<img src="<?php print base_path() . path_to_theme();?>/images/mail_social.png"/>
			</a>
		</div>
			
			
		<div id="slider1_container">
			<?print render($page['slider_large']);?>
		</div>
	
	
	
	
		<div class="short_info">
			<?print render($page['short_info']);?>
		</div>
		<div class="information">
			<div class="wrap_content">
				<div class="nav_content">
					<?print render($page['nav_content']);?>
				</div>
				<div class="info_content">
					<?php  if(drupal_is_front_page()){
								unset($page['content']['system_main']['default_message']);
							} 
							print render($page['content']);
					?>
				</div>
			</div>
			<div class="wrap_slider_like">
				<div class="count">
					<a href="#" class="star_1">
						<div class="star_img"></div>
						<div class="counter">138</div>
					</a>
					<a href="#" class="star_2">
						<div class="star_img"></div>
						<div class="counter">345</div>
					</a>
					<a href="#" class="heart">
						<div class="heart_img"></div>
						<div class="counter">371</div>
					</a>
				</div>
				
				<div id="slider2_container">
					<?print render($page['slider_small']);?>
				</div>
			</div>
		</div>
	</section>
	
	<footer>
		<div class="wrapper_footer">
			<?print render($page['footer']);?>
		</div>
	</footer>