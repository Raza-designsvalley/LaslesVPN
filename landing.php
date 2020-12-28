<?php

/*
	Template Name: Homepage Template
*/

get_header(); ?>



<div id="homepage-banner-sections">
	<div class="container">
		<div class="row">
			<div class="col-sm-6">
				<div class="banner-txt">
					
					<h1><?php the_field('banner_title'); ?></h1>
				
					<p><?php the_field('banner_text'); ?></p>
					
					<a href="#plan"><?php the_field('banner_button'); ?></a>
				</div>
			</div>
			<div class="col-sm-6">
			
			<?php
				$image = get_field('banner_image');
				if( !empty( $image ) ):
			?>
			<img src="<?php echo esc_url($image['url']); ?>" alt="<?php echo esc_attr($image['alt']); ?>" />
			<?php endif; ?>
			
			</div>
		</div>
	</div>
	
	<div class="container text-center">
		<div class="inner-benner-sec">
			<div class="row">
				<div class="col-sm-4">
					<div class="avter-sec">
						<div class="icon">
						
							<?php
								$image = get_field('user_icon_image');
								if( !empty( $image ) ):
							?>
							<img src="<?php echo esc_url($image['url']); ?>" alt="<?php echo esc_attr($image['alt']); ?>" />
							<?php endif; ?>
						
						</div>
						<div class="text">
							<b><?php the_field('user_number'); ?></b>
							<p><?php the_field('user_text'); ?></p>
						</div>
					</div>
				</div>
				<div class="col-sm-4 middle-col">
					<div class="avter-sec">
						<div class="icon">
						
							<?php
								$image = get_field('location_icon_image');
								if( !empty( $image ) ):
							?>
							<img src="<?php echo esc_url($image['url']); ?>" alt="<?php echo esc_attr($image['alt']); ?>" />
							<?php endif; ?>
							
						</div>
						<div class="text">
							<b><?php the_field('location_number'); ?></b>
							<p><?php the_field('location_text'); ?></p>
						</div>
					</div>
				</div>
				<div class="col-sm-4">
					<div class="avter-sec">
						<div class="icon">
						
							<?php
								$image = get_field('server_icon_image');
								if( !empty( $image ) ):
							?>
							<img src="<?php echo esc_url($image['url']); ?>" alt="<?php echo esc_attr($image['alt']); ?>" />
							<?php endif; ?>
							
						</div>
						<div class="text">
							<b><?php the_field('server_number'); ?></b>
							<p><?php the_field('server_text'); ?></p>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>

<div id="featers">
	<div class="container">
		<div class="row">
			<div class="col-sm-6">
			
				<?php
					$image = get_field('Features-sec-img');
					if( !empty( $image ) ):
				?>
				<img src="<?php echo esc_url($image['url']); ?>" alt="<?php echo esc_attr($image['alt']); ?>" />
				<?php endif; ?>
			
			</div>
			<div class="col-sm-6">
				<div class="content">
					<h3><?php the_field('features-sec-title'); ?></h3>
					<p><?php the_field('features-sec-text'); ?></p>
					<ul>
						<li><i class="fa fa-check" aria-hidden="true"></i><?php the_field('features_li_1'); ?></li>
						<li><i class="fa fa-check" aria-hidden="true"></i><?php the_field('features_li_2'); ?></li>
						<li><i class="fa fa-check" aria-hidden="true"></i><?php the_field('features_li_3'); ?></li>
						<li><i class="fa fa-check" aria-hidden="true"></i><?php the_field('features_li_4'); ?></li>
					</ul>
				</div>
			</div>
		</div>
	</div>
</div>

<div class="grad-bg-cl">

	<div id="plan">
		<div class="container text-center">
			<div class="heading-content text-center">
				<h3><?php the_field('plan_choose_sec_heading'); ?></h3>
				<p><?php the_field('plan_choose_sec_text'); ?></p>
			</div>
			<div class="row">
				<div class="col-sm-4">
					<div class="box">
						<div>
							<?php
								$image = get_field('plan_choose_box_1_img');
								if( !empty( $image ) ):
							?>
							<img src="<?php echo esc_url($image['url']); ?>" alt="<?php echo esc_attr($image['alt']); ?>" />
							<?php endif; ?>
						</div>
						<b><?php the_field('plan_choose_box_1_title'); ?></b>
						<ul>
							<li><i class="fa fa-check" aria-hidden="true"></i><?php the_field('plan_choose_box_li_1'); ?></li>
							<li><i class="fa fa-check" aria-hidden="true"></i><?php the_field('plan_choose_box_li_2'); ?></li>
							<li><i class="fa fa-check" aria-hidden="true"></i><?php the_field('plan_choose_box_li_3_no'); ?></li>
							<li><i class="fa fa-check" aria-hidden="true"></i><?php the_field('plan_choose_box_li_4'); ?></li>
						</ul>
						<div class="box-bottom">
							<h4><?php the_field('plan_choose_box_1_heading'); ?></h4>
							<a href="/laslesvpn/membership-account/membership-checkout/?level=4"><?php the_field('plan_choose_box_1_btn'); ?></a>
						</div>
					</div>
				</div>
				<div class="col-sm-4">
					<div class="box">
						<div>
							<?php
								$image = get_field('plan_choose_box_2_img');
								if( !empty( $image ) ):
							?>
							<img src="<?php echo esc_url($image['url']); ?>" alt="<?php echo esc_attr($image['alt']); ?>" />
							<?php endif; ?>
						</div>
						<b><?php the_field('plan_choose_box_2_title'); ?></b>
						<ul>
							<li><i class="fa fa-check" aria-hidden="true"></i><?php the_field('plan_choose_box_li_1'); ?></li>
							<li><i class="fa fa-check" aria-hidden="true"></i><?php the_field('plan_choose_box_li_2'); ?></li>
							<li><i class="fa fa-check" aria-hidden="true"></i><?php the_field('plan_choose_box_li_3_yes'); ?></li>
							<li><i class="fa fa-check" aria-hidden="true"></i><?php the_field('plan_choose_box_li_4'); ?></li>
							<li><i class="fa fa-check" aria-hidden="true"></i><?php the_field('plan_choose_box_li_5'); ?></li>
						</ul>
						<div class="box-bottom">
							<h4><?php the_field('plan_choose_box_2_heading_a'); ?> <span><?php the_field('plan_choose_box_2_heading_b'); ?></span></h4>
							<a href="/laslesvpn/membership-account/membership-checkout/?level=5"><?php the_field('plan_choose_box_2_btn'); ?></a>
						</div>
					</div>
				</div>
				<div class="col-sm-4">
					<div class="box">
						<div>
							<?php
								$image = get_field('plan_choose_box_3_img');
								if( !empty( $image ) ):
							?>
							<img src="<?php echo esc_url($image['url']); ?>" alt="<?php echo esc_attr($image['alt']); ?>" />
							<?php endif; ?>
						</div>
						<b><?php the_field('plan_choose_box_3_title'); ?></b>
						<ul>
							<li><i class="fa fa-check" aria-hidden="true"></i><?php the_field('plan_choose_box_li_1'); ?></li>
							<li><i class="fa fa-check" aria-hidden="true"></i><?php the_field('plan_choose_box_li_2'); ?></li>
							<li><i class="fa fa-check" aria-hidden="true"></i><?php the_field('plan_choose_box_li_3_yes'); ?></li>
							<li><i class="fa fa-check" aria-hidden="true"></i><?php the_field('plan_choose_box_li_4'); ?></li>
							<li><i class="fa fa-check" aria-hidden="true"></i><?php the_field('plan_choose_box_li_5'); ?></li>
							<li><i class="fa fa-check" aria-hidden="true"></i><?php the_field('plan_choose_box_li_6'); ?></li>
						</ul>
						<div class="box-bottom">
							<h4><?php the_field('plan_choose_box_3_heading_a'); ?> <span><?php the_field('plan_choose_box_3_heading_b'); ?></span></h4>
							<a href="/laslesvpn/membership-account/membership-checkout/?level=6"><?php the_field('plan_choose_box_3_btn'); ?></a>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	
	<div id="locations-sec">
		<div class="container text-center">
			<div class="heading-content text-center">
				<h3><?php the_field('map_sec_heading'); ?></h3>
				<p><?php the_field('map_sec_text'); ?></p>
			</div>
			<div class="map-img">
				<?php
					$image = get_field('map_image');
					if( !empty( $image ) ):
				?>
				<img src="<?php echo esc_url($image['url']); ?>" alt="<?php echo esc_attr($image['alt']); ?>" />
				<?php endif; ?>
			</div>
		</div>
	</div>
	
	<div id="logos-sec">
		<div class="container text-center">
			<div class="logo-img">
				<?php
					$image = get_field('logo_img_netflix');
					if( !empty( $image ) ):
				?>
				<img src="<?php echo esc_url($image['url']); ?>" alt="<?php echo esc_attr($image['alt']); ?>" />
				<?php endif; ?>
			</div>
			<div class="logo-img">
				<?php
					$image = get_field('logo_img_reddit');
					if( !empty( $image ) ):
				?>
				<img src="<?php echo esc_url($image['url']); ?>" alt="<?php echo esc_attr($image['alt']); ?>" />
				<?php endif; ?>
			</div>
			<div class="logo-img">
				<?php
					$image = get_field('logo_img_amazon');
					if( !empty( $image ) ):
				?>
				<img src="<?php echo esc_url($image['url']); ?>" alt="<?php echo esc_attr($image['alt']); ?>" />
				<?php endif; ?>
			</div>
			<div class="logo-img">
				<?php
					$image = get_field('logo_img_discord');
					if( !empty( $image ) ):
				?>
				<img src="<?php echo esc_url($image['url']); ?>" alt="<?php echo esc_attr($image['alt']); ?>" />
				<?php endif; ?>
			</div>
			<div class="logo-img">
				<?php
					$image = get_field('logo_img_shopify');
					if( !empty( $image ) ):
				?>
				<img src="<?php echo esc_url($image['url']); ?>" alt="<?php echo esc_attr($image['alt']); ?>" />
				<?php endif; ?>
			</div>
		</div>
	</div>
	
	<div id="review-sec">
		<div class="container">
			<div class="heading-content text-center">
				<h3><?php the_field('review_sec_heading'); ?></h3>
				<p><?php the_field('review_sec_text'); ?></p>
			</div>
		</div>
		<div class="owl-carousel owl-theme">
		
		<?php if(have_rows('reviews_box_spes')): ?>
		<?php while( have_rows('reviews_box_spes')): the_row(); ?>
			<div class="item">
				<div class="card mb-2">
					<div class="card-body">
					
						<div class="avater-profile-img">
							<?php
								$image = get_sub_field('review_box_avatar_img');
								if( !empty( $image ) ):
							?>
							<img src="<?php echo esc_url($image['url']); ?>" alt="<?php echo esc_attr($image['alt']); ?>" />
							<?php endif; ?>
						</div>
						<div class="name">
							<p><?php the_sub_field('review_box_name'); ?></p>
							<span><?php the_sub_field('review_box_name_billow'); ?></span>
						</div>
						<div class="ratting-ic">
							<span><?php the_sub_field('review_box_ratting'); ?></span> <i class="fa fa-star" aria-hidden="true"></i>
						</div>
						<p class="card-text"><?php the_sub_field('review_box_cotntent'); ?></p>

					</div>
				</div>
			</div>
			
			<?php endwhile; ?>
			<?php endif; ?>	
		</div>
	</div>
	
</div>

<div id="subscribe-sec">
	<div class="container">
		<div class="row">
			<div class="col-sm-6">
				<h3><?php the_field('subscribe_sec_heading'); ?></h3>
				<p><?php the_field('subscribe_sec_text'); ?></p>
			</div>
			<div class="col-sm-6 subscribe-btn-col">
				<div class="subscribe-btn-r">
					<a href="javascript:;"><?php the_field('subscribe_sec_btn'); ?></a>
				</div>
			</div>
		</div>
	</div>
</div>

<?php get_footer(); ?>
