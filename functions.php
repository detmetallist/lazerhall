<?php
	register_nav_menus( array(
		'main_menu' => __( 'main-menu', 'lazerhall' ),
	) );
	add_action('add_meta_boxes', 'my_extra_fields', 1);
	function load_custom_wp_admin_style() {
	    wp_enqueue_script( 'my_custom_script', get_template_directory_uri() . '/js/my_admin_script.js' );
	}
	add_action( 'admin_enqueue_scripts', 'load_custom_wp_admin_style' );

	add_action('add_meta_boxes', 'my_extra_fields', 1);
	function my_extra_fields() {
		global $post;
	    if ( $post->ID==5||$post->ID==10 ) {
	        add_meta_box( 'extra_fields', 'Параметры главной', 'extra_fields_mainpage_func', 'page', 'normal', 'high'  );
	    }
	    if ( $post->ID==42||$post->ID==44 ) {
	        add_meta_box( 'extra_fields', 'Параметры страницы до после', 'extra_fields_doposle_func', 'page', 'normal', 'high'  );
	    }
	    if ( $post->ID==14||$post->ID==16 ) {
	        add_meta_box( 'extra_fields', 'Параметры страницы о нас', 'extra_fields_onas_func', 'page', 'normal', 'high'  );
	    }
	    if ( $post->ID==38||$post->ID==40 ) {
	        add_meta_box( 'extra_fields', 'Параметры страницы команда', 'extra_fields_team_func', 'page', 'normal', 'high'  );
	    }
	    if ( $post->ID==46||$post->ID==48 ) {
	        add_meta_box( 'extra_fields', 'Параметры страницы контакты', 'extra_fields_contacts_func', 'page', 'normal', 'high'  );
	    }
	    if ( $post->ID==22||$post->ID==24 ) {
	        add_meta_box( 'extra_fields', 'Параметры страницы лазерная эпиляция', 'extra_fields_lazernaya_epilyacia_func', 'page', 'normal', 'high'  );
	    }
	    if ( $post->ID==26||$post->ID==28 ) {
	        add_meta_box( 'extra_fields', 'Параметры страницы косметология', 'extra_fields_cosmetologiya_func', 'page', 'normal', 'high'  );
	    }
	    if ( $post->ID==30||$post->ID==32 ) {
	        add_meta_box( 'extra_fields', 'Параметры страницы аппаратная косметология', 'extra_fields_apparat_cosmetologiya_func', 'page', 'normal', 'high'  );
	    }
	    if ( $post->ID==34||$post->ID==36 ) {
	        add_meta_box( 'extra_fields', 'Параметры страницы инъекции красоты', 'extra_fields_inekcii_func', 'page', 'normal', 'high'  );
	    }
	}

	function upload_image($role, $extra_name, $button_text){
		global $post;
		?>
		<input id="image-url<?php echo $role; ?>" type="hidden" name="extra[<?php echo $extra_name; ?>]" style="width: 100px"  value="<?php echo get_post_meta($post->ID, $extra_name, 1);?>"/><br>
		<input  role="<?php echo $role; ?>" type="button" class="buttonupload btn" value="<?php echo $button_text; ?>" />
		<div id="upli<?php echo $role; ?>">
			<?php if(get_post_meta($post->ID, $extra_name, true)):?>
			<?php $img=get_post_meta($post->ID, $extra_name, 1); $src = wp_get_attachment_image_src( $img,'full');?>
			<img src="<?php echo $src[0]; ?>" style="height: 100px; width: auto; margin: 10px 0">
			<?php endif;?> 
		</div><!-- upli -->
		<?php if(get_post_meta($post->ID, $extra_name, true)):?>
			<br />
			<button  class="delete btn" role="<?php echo $role; ?>">Удалить</button>
		<?php endif;?>
		<?
	}
	include (TEMPLATEPATH . '/functions/main_custom_fields.php');
	include (TEMPLATEPATH . '/functions/doposle_custom_fields.php');
	include (TEMPLATEPATH . '/functions/onas_custom_fields.php');
	include (TEMPLATEPATH . '/functions/team_custom_fields.php');
	include (TEMPLATEPATH . '/functions/contacts_custom_fields.php');
	include (TEMPLATEPATH . '/functions/uslugi_lazernaya_epilyacia_fields.php');
	include (TEMPLATEPATH . '/functions/uslugi_cosmetologiya_fields.php');
	include (TEMPLATEPATH . '/functions/uslugi_apparat_cosmetologiya_fields.php');
	include (TEMPLATEPATH . '/functions/uslugi_inekcii_fields.php');
?>