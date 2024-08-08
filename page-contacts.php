<?php get_header(); ?>
	<section class="page_main_section">
		<div class="bg_img" style="background-image: url(<?php echo get_image('img_contacts_bg') ?>)"></div>
		<div class="bg_over"></div>
		<h1><?php echo get_post_meta($post->ID, 'zagolovok_contacts', 1);?></h1>
		<div class="page_main_sprite"></div>
	</section>
	<section class="contacts">
		<div class="container">
			<?php 
				for($i=1;$i<=6;$i++){
					if($i==1){
						$class='fadeInLeft';
						$duration='1.5s';
					} else if($i==2){
						$class='fadeInLeft';
						$duration='1s';
					} else if($i==3){
						$class='fadeInLeft';
						$duration='0.5s';
					} else if($i==4){
						$class='fadeInRight';
						$duration='0.5s';
					} else if($i==5){
						$class='fadeInRight';
						$duration='1s';
					} else{
						$class='fadeInRight';
						$duration='1.5s';
					}
					if(get_post_meta($post->ID, 'city_'.$i, 1)): ?>
						<div class="item wow <?php echo $class; ?>" data-wow-duration="<?php echo $duration; ?>" data-wow-offset="100">
							<h2><?php echo get_post_meta($post->ID, 'city_'.$i, 1);?></h2>
							<ul>
								<li>
									<i class="fa fa-map-o"></i>
									<span><?php echo get_post_meta($post->ID, 'adres_'.$i, 1);?></span>
								</li>
								<li>
									<i class="fa fa-phone"></i>
									<span><?php echo get_post_meta($post->ID, 'phone_'.$i, 1);?></span>
								</li>
							</ul>
						</div>
					<?php endif; ?>
				<?php }
			?>
		</div>
	</section>
<?php get_footer(); ?>