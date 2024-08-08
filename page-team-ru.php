<?php get_header(); ?>
	<section class="page_main_section">
		<div class="bg_img" style="background-image: url(<?php echo get_image('img_team_bg') ?>)"></div>
		<div class="bg_over"></div>
		<h1><?php echo get_post_meta($post->ID, 'zagolovok_team', 1);?></h1>
		<div class="page_main_sprite"></div>
	</section>
	<section class="text_img">
		<!--
		<div class="container zag_left">
			<h2>Наша команда</h2>
		</div>
		-->
		<div class="container">
			<div class="pol_contenta wow fadeInLeft" data-wow-duration="1s" data-wow-offset="100">
				<img src="<?php echo get_image('img_team_cont') ?>">
			</div>
			<div class="pol_contenta text_center wow fadeInRight" data-wow-duration="1s" data-wow-offset="100">
				<?php echo get_post_meta($post->ID, 'team_content', true); ?>
			</div>
		</div>
	</section>
	<section class="team_items">
		<div class="container">
			<?php 
				for($i=300; $i<400; $i++){
					if(bcmod($i-300,3)==0){
						$class='fadeInLeft';
					} else if(bcmod($i-300,3)==1){
						$class='fadeInUp';
					} else {
						$class='fadeInRight';
					}
					if(get_post_meta($post->ID, 'slide_name_'.$i, 1)){ ?>
						<div class="item wow <?php echo $class; ?>" data-wow-duration="1s" data-wow-offset="100">
							<div class="bg_img" style="background-image: url(<?php echo get_image('img_slide_'.$i); ?>)"></div>
							<div class="bg_over"></div>
							<div class="team_item_content">
								<h3><?php echo get_post_meta($post->ID, 'slide_name_'.$i, 1);?></h3>
								<p><?php echo get_post_meta($post->ID, 'slide_text_'.$i, 1);?></p>
							</div>
						</div>
					<?php } 
				}
			?>
		</div>
	</section>
<?php get_footer(); ?>