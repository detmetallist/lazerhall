<?php get_header(); ?>
	<section class="page_main_section">
		<div class="bg_img" style="background-image: url(<?php echo get_image('img_cosmetologiya_bg') ?>)"></div>
		<div class="bg_over"></div>
		<h1><?php echo get_post_meta($post->ID, 'zagolovok_cosmetologiya', 1);?></h1>
		<div class="page_main_sprite"></div>
	</section>
	<section class="tablici">
		<div class="container">
			<div class="table50 wow fadeInLeft" data-wow-duration="1s" data-wow-offset="100">
				<div class="background-overlay opacity" style="background-image: url(<?php echo get_image('img_cosmetologiya_block1_bg') ?>)"></div>
				<h3><?php echo get_post_meta($post->ID, 'zagolovok_cosmetologiya_block1', 1);?></h3>
				<ul>
					<?php 
						for($i=1;$i<=30;$i++){
							if(get_post_meta($post->ID, 'usluga_cosmetologiya_block1_'.$i, 1)){ ?>
								<li><span><?php echo get_post_meta($post->ID, 'usluga_cosmetologiya_block1_'.$i, 1);?></span><span><?php echo get_post_meta($post->ID, 'cena_cosmetologiya_block1_'.$i, 1);?></span></li>
							<?php }
						}
					?>
				</ul>
				<?php if(get_post_meta($post->ID, 'button_cosmetologiya_block1', 1)): ?>
					<button class="zapis"><?php echo get_post_meta($post->ID, 'button_cosmetologiya_block1', 1);?></button>
				<?php endif; ?>
			</div>
			<div class="text wow fadeInRight" data-wow-duration="1s" data-wow-offset="100">
				<?php echo get_post_meta($post->ID, 'cosmetologiya_content_block1', true); ?>
			</div>
		</div>
		<div class="container">
			<div class="table50 wow fadeInLeft" data-wow-duration="1s" data-wow-offset="100">
				<div class="background-overlay opacity" style="background-image: url(<?php echo get_image('img_cosmetologiya_block2_bg') ?>)"></div>
				<h3><?php echo get_post_meta($post->ID, 'zagolovok_cosmetologiya_block2', 1);?></h3>
				<ul>
					<?php 
						for($i=1;$i<=30;$i++){
							if(get_post_meta($post->ID, 'usluga_cosmetologiya_block2_'.$i, 1)){ ?>
								<li><span><?php echo get_post_meta($post->ID, 'usluga_cosmetologiya_block2_'.$i, 1);?></span><span><?php echo get_post_meta($post->ID, 'cena_cosmetologiya_block2_'.$i, 1);?></span></li>
							<?php }
						}
					?>
				</ul>
				<?php if(get_post_meta($post->ID, 'button_cosmetologiya_block2', 1)): ?>
					<button class="zapis"><?php echo get_post_meta($post->ID, 'button_cosmetologiya_block2', 1);?></button>
				<?php endif; ?>
			</div>
			<div class="text wow fadeInRight" data-wow-duration="1s" data-wow-offset="100">
				<?php echo get_post_meta($post->ID, 'cosmetologiya_content_block2', true); ?>
			</div>
		</div>
		<div class="container">
			<div class="table50 wow fadeInLeft" data-wow-duration="1s" data-wow-offset="100">
				<div class="background-overlay opacity" style="background-image: url(<?php echo get_image('img_cosmetologiya_block3_bg') ?>)"></div>
				<h3><?php echo get_post_meta($post->ID, 'zagolovok_cosmetologiya_block3', 1);?></h3>
				<ul>
					<?php 
						for($i=1;$i<=30;$i++){
							if(get_post_meta($post->ID, 'usluga_cosmetologiya_block3_'.$i, 1)){ ?>
								<li><span><?php echo get_post_meta($post->ID, 'usluga_cosmetologiya_block3_'.$i, 1);?></span><span><?php echo get_post_meta($post->ID, 'cena_cosmetologiya_block3_'.$i, 1);?></span></li>
							<?php }
						}
					?>
				</ul>
				<?php if(get_post_meta($post->ID, 'button_cosmetologiya_block3', 1)): ?>
					<button class="zapis"><?php echo get_post_meta($post->ID, 'button_cosmetologiya_block3', 1);?></button>
				<?php endif; ?>
			</div>
			<div class="text wow fadeInRight" data-wow-duration="1s" data-wow-offset="100">
				<?php echo get_post_meta($post->ID, 'cosmetologiya_content_block3', true); ?>
			</div>
		</div>
		<div class="container">
			<div class="table50 wow fadeInLeft" data-wow-duration="1s" data-wow-offset="100">
				<div class="background-overlay opacity" style="background-image: url(<?php echo get_image('img_cosmetologiya_block4_bg') ?>)"></div>
				<h3><?php echo get_post_meta($post->ID, 'zagolovok_cosmetologiya_block4', 1);?></h3>
				<ul>
					<?php 
						for($i=1;$i<=30;$i++){
							if(get_post_meta($post->ID, 'usluga_cosmetologiya_block4_'.$i, 1)){ ?>
								<li><span><?php echo get_post_meta($post->ID, 'usluga_cosmetologiya_block4_'.$i, 1);?></span><span><?php echo get_post_meta($post->ID, 'cena_cosmetologiya_block4_'.$i, 1);?></span></li>
							<?php }
						}
					?>
				</ul>
				<?php if(get_post_meta($post->ID, 'button_cosmetologiya_block4', 1)): ?>
					<button class="zapis"><?php echo get_post_meta($post->ID, 'button_cosmetologiya_block4', 1);?></button>
				<?php endif; ?>
			</div>
			<div class="text wow fadeInRight" data-wow-duration="1s" data-wow-offset="100">
				<?php echo get_post_meta($post->ID, 'cosmetologiya_content_block4', true); ?>
			</div>
		</div>
	</section>
	<section class="section_text">
		<div class="container wow fadeInUp" data-wow-duration="1s" data-wow-offset="100">
			<?php echo get_post_meta($post->ID, 'cosmetologiya_content_block5', true); ?>
		</div>
	</section>
<?php get_footer(); ?>