<?php 
	$menu_params = array(
        'container'=> false,
        'link_after'=>'<img src="'.get_template_directory_uri().'/img/arrow-bottom.png">',
        'after' => '<i class="fa fa-angle-down"></i>'
    ); 
    $currentlang = get_bloginfo('language'); 
    function get_image($field){
		global $post;
		$img=get_post_meta($post->ID, $field, 1); 
		$src = wp_get_attachment_image_src( $img,'full');
		return $src[0];
	}
?>
<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01//EN" "http://www.w3.org/TR/html4/strict.dtd">
<html>
<head>
	<?php wp_head(); ?>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="icon" href="<?php echo get_template_directory_uri() ?>/img/cropped-favicon-32x32.png" sizes="32x32">
	<link rel="icon" href="<?php echo get_template_directory_uri() ?>/img/cropped-favicon-192x192.png" sizes="192x192">
	<link rel="apple-touch-icon" href="<?php echo get_template_directory_uri() ?>/img/cropped-favicon-180x180.png">
	<link rel="stylesheet" href="<?php echo get_template_directory_uri() ?>/style.css?v1.1" />
	<link rel="stylesheet" href="<?php echo get_template_directory_uri() ?>/css/media.css?v1.1" />
	<link rel="stylesheet" href="<?php echo get_template_directory_uri() ?>/css/animate.min.css?v1.1" />
	<link rel="stylesheet" type="text/css" href="<?php echo get_template_directory_uri() ?>/css/font-awesome.min.css">
	<link rel="stylesheet" href="<?php echo get_template_directory_uri() ?>/css/owl.carousel.min.css">
	<link rel="stylesheet" href="<?php echo get_template_directory_uri() ?>/css/owl.theme.default.min.css">
	<title>Lazerhall - центр лазерной косметологии</title>
</head>
<body>
	<a href="#vverh" class="button_vverh">
		<i class="fa fa-angle-up"></i>
	</a>
	<div class="popup">
		<div class="popup_form">
			<div class="popup_close">
				<i class="fa fa-times"></i>
			</div>
			<?php if($currentlang=='uk'): ?>
				<h2>Ми Вам зателефонуємо</h2>
			<?php else: ?>
				<h2>Мы Вам перезвоним</h2>
			<?php endif; ?>
			<form>
				<?php if($currentlang=='uk'): ?>
				<input type="text" name="name" placeholder="Ваше им'я" required>
				<?php else: ?>
				<input type="text" name="name" placeholder="Ваше имя" required>
				<?php endif; ?>
				<input type="text" name="phone" placeholder="+38 ХХХ ХХ-ХХ-ХХХ" required>
				<input type="hidden" name="mailto" value="<?php echo do_shortcode('[sc name="mailto"][/sc]'); ?>">
				<?php if($currentlang=='uk'): ?>
				<button type="submit" class="zapis">Записатися</button>
				<?php else: ?>
				<button type="submit" class="zapis">Записаться</button>
				<?php endif; ?>
			</form>
		</div>
	</div>
	<div class="popup_thanks">
		<?php if($currentlang=='uk'): ?>
		<p>Дякуємо за заявку<br>Ми з Вами зв'яжемося<br>найближчим часом</p>
		<?php else: ?>
		<p>Спасибо за заявку<br>Мы с Вами свяжемся<br>в ближайшее время</p>
		<?php endif; ?>
	</div>
	<div class="mobile_menu">
		<div class="popup_close">
			<i class="fa fa-times"></i>
		</div>
		<img src="<?php echo get_template_directory_uri() ?>/img/logo_menu.jpg">
		<?php wp_nav_menu($menu_params); ?>
	</div>
	<div class="popup_over"></div>
	<header>
		<div class="header_contacts">
			<div class="container">
				<?php  
					for($i=1;$i<=6;$i++){
						if(get_post_meta(46, 'city_'.$i, 1)){
							if($currentlang=='uk'){
								if(get_post_meta(46, 'city_'.$i, 1)){
									echo '<a href="tel:'.get_post_meta(46, 'phone_'.$i, 1).'"><i class="fa fa-phone"></i> '.get_post_meta(46, 'phone_'.$i, 1).' '.get_post_meta(46, 'city_'.$i, 1).'</a>';
								}
						    } else {
						    	if(get_post_meta(48, 'city_'.$i, 1)){
						    		echo '<a href="tel:'.get_post_meta(48, 'phone_'.$i, 1).'"><i class="fa fa-phone"></i> '.get_post_meta(48, 'phone_'.$i, 1).' '.get_post_meta(48, 'city_'.$i, 1).'</a>';
						    	}
						    }
						}
					}
				?>
			</div>
		</div>
		<div class="header_logo_menu_lang">
			<div class="container">
				<div class="logo">
					<a href="/"><img src="<?php echo get_template_directory_uri() ?>/img/logo.png"></a>
				</div>
				<div class="header_menu_lang">
					<div class="header_lang">
						<?php pll_the_languages( array('display_names_as' => 'slug', 'show_names' => 1 ) ); ?>
					</div>
					<div class="header_menu">
						<?php wp_nav_menu($menu_params); ?>
					</div>
				</div>
				<div class="header_menu_button">
					<div class="menu_polosa"></div>
					<div class="menu_polosa"></div>
					<div class="menu_polosa"></div>
				</div>
			</div>
		</div>
	</header>
