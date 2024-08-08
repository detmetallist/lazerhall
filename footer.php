	<footer>
		<?php $currentlang = get_bloginfo('language');  ?>
		<div class="footer_top">
			<div class="container">
				<div class="row">
					<?php if($currentlang=='uk'): ?>
					<h3>Контакти</h3>
					<?php else: ?>
					<h3>Контакты</h3>
					<?php endif; ?>
						<?php  
						for($i=1;$i<=6;$i++){
								if($currentlang=='uk'){
									if(get_post_meta(46, 'city_'.$i, 1)){
										echo '<a href="tel:'.get_post_meta(46, 'phone_'.$i, 1).'">'.get_post_meta(46, 'phone_'.$i, 1).' '.get_post_meta(46, 'city_'.$i, 1).'</a>';
									}
							    } else {
							    	if(get_post_meta(48, 'city_'.$i, 1)){
							    		echo '<a href="tel:'.get_post_meta(48, 'phone_'.$i, 1).'">'.get_post_meta(48, 'phone_'.$i, 1).' '.get_post_meta(48, 'city_'.$i, 1).'</a>';
							    	}
							    }
							}
					?>
				</div>
				<div class="row">
					<?php if($currentlang=='uk'): ?>
					<h3>Графік роботи</h3>
					<?php else: ?>
					<h3>График работы</h3>
					<?php endif; ?>
					<?php 
						for($i=1; $i<=10; $i++){
								if($currentlang=='uk'){
									if(get_post_meta(5, 'stroka_grafic_'.$i, 1)){ 
										echo '<p class="strong">'.get_post_meta(10, 'stroka_grafic_'.$i, 1).'</p>';
									}
								} else{
									if(get_post_meta(5, 'stroka_grafic_'.$i, 1)){ 
										echo '<p class="strong">'.get_post_meta(5, 'stroka_grafic_'.$i, 1).'</p>';
									}
								}
						}
					?>
				</div>
				<div class="row">
					<h3>Адреса</h3>
					<?php 
						for($i=1; $i<=10; $i++){
								if($currentlang=='uk'){
									if(get_post_meta(10, 'stroka_adres_'.$i, 1)){
										echo '<p>'.get_post_meta(10, 'stroka_adres_'.$i, 1).'</p>';
									}
									
								} else{
									if(get_post_meta(5, 'stroka_adres_'.$i, 1)){
										echo '<p>'.get_post_meta(5, 'stroka_adres_'.$i, 1).'</p>';
									}
								}
						}
					?>
				</div>
			</div>
		</div>
		<div class="footer_copyright">
			<?php if($currentlang=='uk'): ?>
			<p><?php echo get_post_meta(10, 'copyright_stroka', 1);?></p>
			<?php else: ?>
			<p><?php echo get_post_meta(5, 'copyright_stroka', 1);?></p>
			<?php endif; ?>
		</div>
		<div class="footer_bottom">
			<?php 
				for($i=1; $i<=24; $i++){
						if($currentlang=='uk'){
							if(get_post_meta(10, 'footer_url_'.$i, 1)){ 
								echo '<a href="'.get_post_meta(10, 'footer_url_'.$i, 1).'">'.get_post_meta(10, 'footer_url_anchore_'.$i, 1).'</a>';
							}
						} else{
							if(get_post_meta(5, 'footer_url_'.$i, 1)){ 
								echo '<a href="'.get_post_meta(5, 'footer_url_'.$i, 1).'">'.get_post_meta(5, 'footer_url_anchore_'.$i, 1).'</a>';
							}
						}
				}
			?>
		</div>
	</footer>
	<div class="vverh"></div>
</body>
<script type="text/javascript" src="<?php echo get_template_directory_uri() ?>/js/jquery-3.3.1.min.js"></script>
<script type="text/javascript" src="<?php echo get_template_directory_uri() ?>/js/jquery.inputmask.js"></script>
<script src="<?php echo get_template_directory_uri() ?>/js/owl.carousel.min.js"></script>
<script src="<?php echo get_template_directory_uri() ?>/js/wow.min.js"></script>
<script type="text/javascript" src="<?php echo get_template_directory_uri() ?>/js/script.js?v1.1"></script>
</html>
<?php wp_footer(); ?>