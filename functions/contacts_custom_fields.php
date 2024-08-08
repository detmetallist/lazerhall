<?php
	function extra_fields_contacts_func( $post ){
		?>
		<link rel="stylesheet" href="<?php echo get_template_directory_uri() ?>/css/admin-style.css" />
		<h1>Страница Контакты</h1>
		<div class="admblock">
			<h2>Первый экран</h2>
			<div class="item">
				<div class="item">
					<p><b>Заголовок</b></p>
					<input  type="text" name="extra[zagolovok_contacts]" value="<?php echo get_post_meta($post->ID, 'zagolovok_contacts', 1);?>" placeholder="Заголовок"/><br>
					<?php upload_image('16','img_contacts_bg','Выберите картинку фона'); ?>
				</div>
			</div>
			<div class="many_items items_6">
				<?php 
					for($i=1;$i<=6;$i++){ ?>
						<div class="item">
							<p><b>Город</b></p>
							<input  type="text" name="extra[city_<?php echo $i; ?>]" value="<?php echo get_post_meta($post->ID, 'city_'.$i, 1);?>" placeholder="Город"/><br>
							<p><b>Адрес</b></p>
							<textarea rows="5" name="extra[adres_<?php echo $i; ?>]"><?php echo get_post_meta($post->ID, 'adres_'.$i, 1);?></textarea><br>
							<p><b>Телефон</b></p>
							<input  type="text" name="extra[phone_<?php echo $i; ?>]" value="<?php echo get_post_meta($post->ID, 'phone_'.$i, 1);?>" placeholder="Телефон"/><br>
						</div>
					<?php }
				?>
			</div>
		</div>
		<input type="hidden" name="extra_fields_nonce" value="<?php echo wp_create_nonce(__FILE__); ?>" />
		<?
	}
	add_action( 'save_post', 'my_extra_fields_contacts_update', 0 );
	function my_extra_fields_contacts_update( $post_id ){
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