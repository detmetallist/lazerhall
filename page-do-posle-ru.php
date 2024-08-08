<?php get_header(); ?>
<?php 
	function get_mini_image($field){
		global $post;
		$img=get_post_meta($post->ID, $field, 1); 
		$src = wp_get_attachment_image_src( $img,'doposle_mini');
		return $src[0];
	}
?>
<div class="popup_over">
	<div class="popup_close">
		<i class="fa fa-times"></i>
	</div>
</div>
<div class="popup_img"></div>
	<section class="page_main_section">
		<div class="bg_img" style="background-image: url(<?php echo get_image('img_doposle_bg') ?>)"></div>
		<div class="bg_over"></div>
		<h1><?php echo get_post_meta($post->ID, 'zagolovok_doposle', 1);?></h1>
		<div class="page_main_sprite"></div>
	</section>
	<section class="do_posle_images">
		<div class="container">
			<?php
				for($i=200; $i<300; $i++){
					if(bcmod($i-300,3)==0){
						$class='fadeInLeft';
						$duration='1.5s';
					} else if(bcmod($i-300,3)==1){
						$class='fadeInLeft';
						$duration='1s';
					} else if(bcmod($i-300,3)==2){
						$class='fadeInLeft';
						$duration='0.5s';
					} else if(bcmod($i-300,3)==3){
						$class='fadeInRight';
						$duration='0.5s';
					} else if(bcmod($i-300,3)==4){
						$class='fadeInRight';
						$duration='1s';
					} else{
						$class='fadeInRight';
						$duration='1.5s';
					}
					if(get_post_meta($post->ID, 'img_slide_'.$i, 1)){ ?>
						<a href="<?php echo get_image('img_slide_'.$i); ?>" class="wow <?php echo $class; ?>" data-wow-duration="<?php echo $duration; ?>" data-wow-offset="100"><img src="<?php echo get_mini_image('img_slide_'.$i); ?>"></a>
					<?php } 
				}
			?>
		</div>
	</section>
<?php get_footer(); ?>