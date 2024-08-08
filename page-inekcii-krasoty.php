<?php get_header(); ?>
	<section class="page_main_section">
		<div class="bg_img" style="background-image: url(<?php echo get_image('img_inekcii_bg') ?>)"></div>
		<div class="bg_over"></div>
		<h1><?php echo get_post_meta($post->ID, 'zagolovok_inekcii', 1);?></h1>
		<div class="page_main_sprite"></div>
	</section>
	<section class="section_text">
		<div class="container wow fadeInUp" data-wow-duration="1s" data-wow-offset="100">
			<?php echo get_post_meta($post->ID, 'inekcii_content_block1', true); ?>
		</div>
	</section>
	<section class="tablici">
		<div class="container">
			<div class="background-overlay opacity" style="background-image: url(<?php echo get_image('img_inekcii_block1_bg') ?>)"></div>
			<div class="table33 wow fadeInLeft" data-wow-duration="1s" data-wow-offset="100">
				<h3><?php echo get_post_meta($post->ID, 'zagolovok_inekcii_block1', 1);?></h3>
				<ul>
					<?php 
						for($i=1;$i<=30;$i++){
							if(get_post_meta($post->ID, 'usluga_inekcii_block1_'.$i, 1)){ ?>
								<li><span><?php echo get_post_meta($post->ID, 'usluga_inekcii_block1_'.$i, 1);?></span><span><?php echo get_post_meta($post->ID, 'cena_inekcii_block1_'.$i, 1);?></span></li>
							<?php }
						}
					?>
				</ul>
				<?php if(get_post_meta($post->ID, 'button_inekcii_block1', 1)): ?>
					<button class="zapis"><?php echo get_post_meta($post->ID, 'button_inekcii_block1', 1);?></button>
				<?php endif; ?>
			</div>
			<div class="table33 wow fadeInUp" data-wow-duration="1s" data-wow-offset="100">
				<h3><?php echo get_post_meta($post->ID, 'zagolovok_inekcii_block2', 1);?></h3>
				<ul>
					<?php 
						for($i=1;$i<=30;$i++){
							if(get_post_meta($post->ID, 'usluga_inekcii_block2_'.$i, 1)){ ?>
								<li><span><?php echo get_post_meta($post->ID, 'usluga_inekcii_block2_'.$i, 1);?></span><span><?php echo get_post_meta($post->ID, 'cena_inekcii_block2_'.$i, 1);?></span></li>
							<?php }
						}
					?>
				</ul>
				<?php if(get_post_meta($post->ID, 'button_inekcii_block2', 1)): ?>
					<button class="zapis"><?php echo get_post_meta($post->ID, 'button_inekcii_block2', 1);?></button>
				<?php endif; ?>
			</div>
			<div class="table33 wow fadeInRight" data-wow-duration="1s" data-wow-offset="100">
				<h3><?php echo get_post_meta($post->ID, 'zagolovok_inekcii_block3', 1);?></h3>
				<ul>
					<?php 
						for($i=1;$i<=30;$i++){
							if(get_post_meta($post->ID, 'usluga_inekcii_block3_'.$i, 1)){ ?>
								<li><span><?php echo get_post_meta($post->ID, 'usluga_inekcii_block3_'.$i, 1);?></span><span><?php echo get_post_meta($post->ID, 'cena_inekcii_block3_'.$i, 1);?></span></li>
							<?php }
						}
					?>
				</ul>
				<?php if(get_post_meta($post->ID, 'button_inekcii_block3', 1)): ?>
					<button class="zapis"><?php echo get_post_meta($post->ID, 'button_inekcii_block3', 1);?></button>
				<?php endif; ?>
			</div>
		</div>
	</section>
	<section class="tablici fixed_bg" style="background-image: url(<?php echo get_image('img_inekcii_block4_bg') ?>);">
		<div class="background-overlay-color opacity"></div>
		<div class="container">
			<div class="table50 wow fadeInLeft" data-wow-duration="1s" data-wow-offset="100">
				<h3><?php echo get_post_meta($post->ID, 'zagolovok_inekcii_block4', 1);?></h3>
				<ul>
					<?php 
						for($i=1;$i<=30;$i++){
							if(get_post_meta($post->ID, 'usluga_inekcii_block4_'.$i, 1)){ ?>
								<li><span><?php echo get_post_meta($post->ID, 'usluga_inekcii_block4_'.$i, 1);?></span><span><?php echo get_post_meta($post->ID, 'cena_inekcii_block4_'.$i, 1);?></span></li>
							<?php }
						}
					?>
				</ul>
				<?php if(get_post_meta($post->ID, 'button_inekcii_block4', 1)): ?>
					<button class="zapis"><?php echo get_post_meta($post->ID, 'button_inekcii_block4', 1);?></button>
				<?php endif; ?>
			</div>
			<div class="table50 wow fadeInRight" data-wow-duration="1s" data-wow-offset="100">
				<h3><?php echo get_post_meta($post->ID, 'zagolovok_inekcii_block5', 1);?></h3>
				<ul>
					<?php 
						for($i=1;$i<=30;$i++){
							if(get_post_meta($post->ID, 'usluga_inekcii_block5_'.$i, 1)){ ?>
								<li><span><?php echo get_post_meta($post->ID, 'usluga_inekcii_block5_'.$i, 1);?></span><span><?php echo get_post_meta($post->ID, 'cena_inekcii_block5_'.$i, 1);?></span></li>
							<?php }
						}
					?>
				</ul>
				<?php if(get_post_meta($post->ID, 'button_inekcii_block5', 1)): ?>
					<button class="zapis"><?php echo get_post_meta($post->ID, 'button_inekcii_block5', 1);?></button>
				<?php endif; ?>
			</div>
		</div>
	</section>
	<section class="tablici fixed_bg" style="background-image: url(<?php echo get_image('img_inekcii_block6_bg') ?>);">
		<div class="background-overlay-color opacity"></div>
		<div class="container">
			<div class="table50 wow fadeInLeft" data-wow-duration="1s" data-wow-offset="100">
				<h3><?php echo get_post_meta($post->ID, 'zagolovok_inekcii_block6', 1);?></h3>
				<ul>
					<?php 
						for($i=1;$i<=30;$i++){
							if(get_post_meta($post->ID, 'usluga_inekcii_block6_'.$i, 1)){ ?>
								<li><span><?php echo get_post_meta($post->ID, 'usluga_inekcii_block6_'.$i, 1);?></span><span><?php echo get_post_meta($post->ID, 'cena_inekcii_block6_'.$i, 1);?></span></li>
							<?php }
						}
					?>
				</ul>
				<?php if(get_post_meta($post->ID, 'button_inekcii_block6', 1)): ?>
					<button class="zapis"><?php echo get_post_meta($post->ID, 'button_inekcii_block6', 1);?></button>
				<?php endif; ?>
			</div>
			<div class="table50 wow fadeInRight" data-wow-duration="1s" data-wow-offset="100">
				<h3><?php echo get_post_meta($post->ID, 'zagolovok_inekcii_block7', 1);?></h3>
				<ul>
					<?php 
						for($i=1;$i<=30;$i++){
							if(get_post_meta($post->ID, 'usluga_inekcii_block7_'.$i, 1)){ ?>
								<li><span><?php echo get_post_meta($post->ID, 'usluga_inekcii_block7_'.$i, 1);?></span><span><?php echo get_post_meta($post->ID, 'cena_inekcii_block7_'.$i, 1);?></span></li>
							<?php }
						}
					?>
				</ul>
				<?php if(get_post_meta($post->ID, 'button_inekcii_block7', 1)): ?>
					<button class="zapis"><?php echo get_post_meta($post->ID, 'button_inekcii_block7', 1);?></button>
				<?php endif; ?>
			</div>
		</div>
	</section>
<?php get_footer(); ?>