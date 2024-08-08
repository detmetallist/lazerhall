<?php
	add_image_size( 'doposle_mini', 150, 150 );
	function extra_fields_doposle_func( $post ){
		?>
		<link rel="stylesheet" href="<?php echo get_template_directory_uri() ?>/css/admin-style.css" />
		<h1>Страница До/после</h1>
		<div class="admblock">
			<h2>Первый экран</h2>
			<div class="item">
				<p><b>Заголовок</b></p>
				<input  type="text" name="extra[zagolovok_doposle]" value="<?php echo get_post_meta($post->ID, 'zagolovok_doposle', 1);?>" placeholder="Заголовок"/><br>
				<?php upload_image('11','img_doposle_bg','Выберите картинку фона'); ?>
			</div>
			<button class="new_item">Добавить картинку</button>
			<div class="many_items items_6">
				<?php 
					$last_item=199;
					for($i=200; $i<300; $i++){
						if(get_post_meta($post->ID, 'img_slide_'.$i, 1)){ ?>
							<div class="item">
								<?php upload_image($i,'img_slide_'.$i,'Картинка'); $last_item=$i; ?>
							</div>
						<?php } 
					}
				?>
			</div>
			<div class="empty_item" data-last="<?php echo $last_item; ?>">
				<div class="item">
					<input id="image-url1000" class="image-url" type="hidden" name="extra[img_slide_0]" /><br>
					<input  role="1000" type="button" class="buttonupload btn" id="buttonupload1000" value="Картинка" />
					<div id="upli1000" class="upli"></div><!-- upli -->
				</div>
			</div>
		</div>
		<input type="hidden" name="extra_fields_nonce" value="<?php echo wp_create_nonce(__FILE__); ?>" />
		<?
	}
	add_action( 'save_post', 'my_extra_fields_doposle_update', 0 );
	function my_extra_fields_doposle_update( $post_id ){
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