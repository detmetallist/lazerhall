<?php get_header(); ?>
<section class="main_slider">
	<div class="owl-carousel owl-theme" id="slider">
		<?php 
			for($i=100; $i<200; $i++){
				if(get_post_meta($post->ID, 'slide_name_'.$i, 1)){ ?>
					<div class="slide" style="background-image: url(<?php echo get_image('img_slide_'.$i); ?>)">
						<div class="slide_content">
							<h3><?php echo get_post_meta($post->ID, 'slide_name_'.$i, 1); ?></h3>
							<?php if(get_post_meta($post->ID, 'slide_text_'.$i, 1)): ?>
								<p><?php echo get_post_meta($post->ID, 'slide_text_'.$i, 1); ?></p>
							<?php endif; ?>
							<?php if(get_post_meta($post->ID, 'slide_button_'.$i, 1)): ?>
								<button class="zapis"><?php echo get_post_meta($post->ID, 'slide_button_'.$i, 1); ?></button>
							<?php endif; ?>
						</div>
					</div>
				<?php } 
			}
		?>
	</div>
</section>
<section class="uslugi">
	<h2 class="wow fadeInUp" data-wow-duration="1s" data-wow-offset="100"><?php echo get_post_meta($post->ID, 'zagolovok_nashi_uslugi', 1); ?></h2>
	<div class="container">
		<div class="item wow fadeInLeft" data-wow-duration="1s" data-wow-offset="100">
			<h3><?php echo get_post_meta($post->ID, 'zagolovok_uslugi_item1', 1); ?></h3>
			<a href="<?php echo get_post_meta($post->ID, 'url_uslugi_item1', 1);?>"><img src="<?php echo get_image('img_uslugi_item1') ?>"></a>
		</div>
		<div class="item wow fadeInLeft" data-wow-duration="0.5s" data-wow-offset="100">
			<a href="<?php echo get_post_meta($post->ID, 'url_uslugi_item2', 1);?>"><img src="<?php echo get_image('img_uslugi_item2') ?>"></a>
			<h3><?php echo get_post_meta($post->ID, 'zagolovok_uslugi_item2', 1); ?></h3>
		</div>
		<div class="item wow fadeInRight" data-wow-duration="0.5s" data-wow-offset="100">
			<h3><?php echo get_post_meta($post->ID, 'zagolovok_uslugi_item3', 1); ?></h3>
			<a href="<?php echo get_post_meta($post->ID, 'url_uslugi_item3', 1);?>"><img src="<?php echo get_image('img_uslugi_item3') ?>"></a>
		</div>
		<div class="item wow fadeInRight" data-wow-duration="1s" data-wow-offset="100">
			<a href="<?php echo get_post_meta($post->ID, 'url_uslugi_item4', 1);?>"><img src="<?php echo get_image('img_uslugi_item4') ?>"></a>
			<h3><?php echo get_post_meta($post->ID, 'zagolovok_uslugi_item4', 1); ?></h3>
		</div>
	</div>
</section>
<section class="best" style="background-image: url(<?php echo get_image('img_doverie_bg'); ?>)">
	<div class="container">
		<h2 class="wow fadeInUp" data-wow-duration="1s" data-wow-offset="100"><?php echo get_post_meta($post->ID, 'zagolovok_doverie', 1); ?></h2>
		<div class="icon wow fadeIn" data-wow-duration="0.5s" data-wow-offset="100">
			<img src="<?php echo get_template_directory_uri() ?>/img/cert.png" class="icon-img">
			<img src="<?php echo get_template_directory_uri() ?>/img/cert-hover.png" class="icon-hover-img">
		</div>
		<p class="wow fadeInRight" data-wow-duration="1s" data-wow-offset="100"><?php echo get_post_meta($post->ID, 'zagolovok_doverie_item1', 1); ?></p>
		<div class="icon wow fadeIn" data-wow-duration="0.5s" data-wow-offset="100">
			<i class="fa fa-user-md"></i>
		</div>
		<p class="wow fadeInRight" data-wow-duration="1s" data-wow-offset="100"><?php echo get_post_meta($post->ID, 'zagolovok_doverie_item2', 1); ?></p>
		<div class="icon wow fadeIn" data-wow-duration="0.5s" data-wow-offset="100">
			<i class="fa fa-diamond"></i>
		</div>
		<p class="wow fadeInRight" data-wow-duration="1s" data-wow-offset="100"><?php echo get_post_meta($post->ID, 'zagolovok_doverie_item3', 1); ?></p>
		<div class="icon wow fadeIn" data-wow-duration="0.5s" data-wow-offset="100">
			<img src="<?php echo get_template_directory_uri() ?>/img/award.png" class="icon-img">
			<img src="<?php echo get_template_directory_uri() ?>/img/award-hover.png" class="icon-hover-img">
		</div>
		<p class="wow fadeInRight" data-wow-duration="1s" data-wow-offset="100"><?php echo get_post_meta($post->ID, 'zagolovok_doverie_item4', 1); ?></p>
	</div>
</section>
<section class="opit">
	<div class="container">
		<div class="left wow fadeInLeft" data-wow-duration="1s" data-wow-offset="100">
			<h2 data-title="<?php echo get_post_meta($post->ID, 'opit_shadow_text', 1);?>"><?php echo get_post_meta($post->ID, 'zagolovok_opit', 1);?></h2>
			<span class="gradient"></span>
			<p><?php echo get_post_meta($post->ID, 'opit_text', 1);?></p>
			<?php if(get_post_meta($post->ID, 'opit_button_text', 1)): ?>
				<button class="zapis"><?php echo get_post_meta($post->ID, 'opit_button_text', 1);?></button>
			<?php endif; ?>
		</div>
		<div class="right">
			<div class="img_block wow flipInY" data-wow-duration="1s" data-wow-offset="100">
				<div class="opit_img">
					<img src="<?php echo get_image('img_opit_item1') ?>">
				</div>
				<div class="opit_img">
					<img src="<?php echo get_image('img_opit_item3') ?>">
				</div>
			</div>
			<div class="img_block wow flipInY" data-wow-duration="2s" data-wow-offset="100">
				<div class="opit_img">
					<img src="<?php echo get_image('img_opit_item2') ?>">
				</div>
				<div class="opit_img">
					<img src="<?php echo get_image('img_opit_item4') ?>">
				</div>
			</div>
		</div>
	</div>
</section>
<section class="zapis_section fixed_bg" style="background-image: url(<?php echo get_image('img_zapis_bg') ?>);">
	<h2 class="wow fadeInUp" data-wow-duration="1s" data-wow-offset="100"><?php echo get_post_meta($post->ID, 'zagolovok_zapis', 1);?></h2>
	<?php if(get_post_meta($post->ID, 'zagolovok_button_text', 1)): ?>
		<button class="zapis wow fadeInUp" data-wow-duration="1s" data-wow-offset="100"><?php echo get_post_meta($post->ID, 'zagolovok_button_text', 1);?></button>
	<?php endif; ?>
</section>
<section class="video">
	<h2 class="wow fadeInUp" data-wow-duration="1s" data-wow-offset="100"><?php echo get_post_meta($post->ID, 'zagolovok_video', 1);?></h2>
	<div class="container">
		<?php if(get_post_meta($post->ID, 'kod_video1', 1)): ?>
			<iframe loading="lazy" class="wow fadeInLeft" data-wow-duration="1s" data-wow-offset="100" width="540" height="303" src="<?php echo get_post_meta($post->ID, 'kod_video1', 1);?>" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
		<?php endif; ?>
		<?php if(get_post_meta($post->ID, 'kod_video2', 1)): ?>
			<iframe loading="lazy" class="wow fadeInRight" data-wow-duration="0.5s" data-wow-offset="100" width="540" height="303" src="<?php echo get_post_meta($post->ID, 'kod_video2', 1);?>" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
		<?php endif; ?>
		<?php if(get_post_meta($post->ID, 'kod_video3', 1)): ?>
			<iframe loading="lazy" class="wow fadeInLeft" data-wow-duration="0.5s" data-wow-offset="100" width="540" height="303" src="<?php echo get_post_meta($post->ID, 'kod_video3', 1);?>" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
		<?php endif; ?>
		<?php if(get_post_meta($post->ID, 'kod_video4', 1)): ?>
			<iframe loading="lazy" class="wow fadeInRight" data-wow-duration="1s" data-wow-offset="100" width="540" height="303" src="<?php echo get_post_meta($post->ID, 'kod_video4', 1);?>" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
		<?php endif; ?>
	</div>
</section>
<section class="section_text">
	<div class="container">
		<?php echo get_post_meta($post->ID, 'main_content', 1);?>
	</div>
</section>
<?php get_footer(); ?>