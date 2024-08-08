<?php
	function extra_fields_onas_func( $post ){
		?>
		<link rel="stylesheet" href="<?php echo get_template_directory_uri() ?>/css/admin-style.css" />
		<h1>Страница О нас</h1>
		<div class="admblock">
			<h2>Первый экран</h2>
			<div class="item">
				<div class="item">
					<p><b>Заголовок</b></p>
					<input  type="text" name="extra[zagolovok_onas]" value="<?php echo get_post_meta($post->ID, 'zagolovok_onas', 1);?>" placeholder="Заголовок"/><br>
					<?php upload_image('12','img_onas_bg','Выберите картинку фона'); ?>
				</div>
				<div class="two_items">
					<div class="item">
						<?php 
							$settings = array(
								'textarea_name'	=>	'extra[onas_content]',
								'dfw'		=>	true,
								'quicktags'	=>	false
							);
							wp_editor( get_post_meta($post->ID, 'onas_content', true), 'truewpeditor', $settings );
						?>
						<p><b>Название кнопки</b></p>
						<input  type="text" name="extra[onas_button_text]" value="<?php echo get_post_meta($post->ID, 'onas_button_text', 1);?>" placeholder="Записаться"/><br>
					</div>
					<div class="item">
						<?php upload_image('13','img_onas_cont','Выберите картинку'); ?>
					</div>
				</div>
			</div>
		</div>
		<input type="hidden" name="extra_fields_nonce" value="<?php echo wp_create_nonce(__FILE__); ?>" />
		<?
	}
	add_action( 'save_post', 'my_extra_fields_onas_update', 0 );
	function my_extra_fields_onas_update( $post_id ){
	    // базовая проверка
	    if (
	        empty( $_POST['extra'] )
	        || ! wp_verify_nonce( $_POST['extra_fields_nonce'], __FILE__ )
	        || wp_is_post_autosave( $post_id )
	        || wp_is_post_revision( $post_id )
	    )
	        return false;

	    // Все ОК! Теперь, нужно сохранить/удалить данные
	    //$_POST['extra'] = array_map( 'sanitize_text_field', $_POST['extra'] ); // чистим все данные от пробелов по краям
	    foreach( $_POST['extra'] as $key => $value ){
	        if( empty($value) ){
	            delete_post_meta( $post_id, $key ); // удаляем поле если значение пустое
	            continue;
	        }

	        update_post_meta( $post_id, $key, $value ); // add_post_meta() работает автоматически
	    }

	    return $post_id;
	}
?>