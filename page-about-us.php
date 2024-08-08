<?php get_header(); ?>
	<section class="page_main_section">
		<div class="bg_img" style="background-image: url(<?php echo get_image('img_onas_bg') ?>)"></div>
		<div class="bg_over"></div>
		<h1><?php echo get_post_meta($post->ID, 'zagolovok_onas', 1);?></h1>
		<div class="page_main_sprite"></div>
	</section>
	<section class="text_img">
		<div class="container">
			<div class="pol_contenta">
				<div class="wow fadeInUp" data-wow-duration="1s" data-wow-offset="100">
					<?php echo get_post_meta($post->ID, 'onas_content', true); ?>
				</div>
				<?php if(get_post_meta($post->ID, 'onas_button_text', 1)): ?>
					<button class="zapis wow fadeInUp" data-wow-duration="1s" data-wow-offset="100"><?php echo get_post_meta($post->ID, 'onas_button_text', 1);?></button>
				<?php endif; ?>
			</div>
			<div class="pol_contenta wow fadeInUp" data-wow-duration="1s" data-wow-offset="100">
				<img src="<?php echo get_image('img_onas_cont') ?>">
			</div>
		</div>
	</section>
<?php get_footer(); ?>