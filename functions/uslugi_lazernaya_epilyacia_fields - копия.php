<?php
	function extra_fields_lazernaya_epilyacia_func( $post ){
		?>
		<link rel="stylesheet" href="<?php echo get_template_directory_uri() ?>/css/admin-style.css" />
		<h1>Страница Услуги - лазерная эпиляция</h1>
		<div class="admblock">
			<h2>Первый экран</h2>
			<div class="item">
				<div class="item">
					<p><b>Заголовок</b></p>
					<input  type="text" name="extra[zagolovok_epilyacia]" value="<?php echo get_post_meta($post->ID, 'zagolovok_epilyacia', 1);?>" placeholder="Заголовок"/><br>
					<?php upload_image('17','img_epilyacia_bg','Выберите картинку фона'); ?>
					<?php
						$settings = array(
							'textarea_name'	=>	'extra[epilyacia_content]',
							'dfw'		=>	true,
							'quicktags'	=>	false
						);
						wp_editor( get_post_meta($post->ID, 'epilyacia_content', true), 'truewpeditor', $settings );
					?>
				</div>
				<?php upload_image('18','img_epilyacia_block1_bg','Выберите картинку фона блоков'); ?>
				<div class="many_items tri_items">
					<div class="item">
						<p><b>Заголовок</b></p>
						<input type="text" name="extra[zagolovok_epilyacia_block1]" value="<?php echo get_post_meta($post->ID, 'zagolovok_epilyacia_block1', 1);?>" placeholder="Заголовок"/><br>
						<?php
							for($i=1; $i<=30; $i++){ ?>
								<div class="dva_polya">
									<input type="text" name="extra[usluga_epilyacia_block1_<?php echo $i; ?>]" value="<?php echo get_post_meta($post->ID, 'usluga_epilyacia_block1_'.$i, 1);?>" placeholder="Услуга"/>
									<input type="text" name="extra[cena_epilyacia_block1_<?php echo $i; ?>]" value="<?php echo get_post_meta($post->ID, 'cena_epilyacia_block1_'.$i, 1);?>" placeholder="Цена"/>
								</div>	
							<?php }
						?>
						<p><b>Название кнопки</b></p>
						<input type="text" name="extra[button_epilyacia_block1]" value="<?php echo get_post_meta($post->ID, 'button_epilyacia_block1', 1);?>" placeholder="Название кнопки"/><br>
					</div>
					<div class="item">
						<p><b>Заголовок</b></p>
						<input type="text" name="extra[zagolovok_epilyacia_block2]" value="<?php echo get_post_meta($post->ID, 'zagolovok_epilyacia_block2', 1);?>" placeholder="Заголовок"/><br>
						<?php
							for($i=1; $i<=30; $i++){ ?>
								<div class="dva_polya">
									<input type="text" name="extra[usluga_epilyacia_block2_<?php echo $i; ?>]" value="<?php echo get_post_meta($post->ID, 'usluga_epilyacia_block2_'.$i, 1);?>" placeholder="Услуга"/>
									<input type="text" name="extra[cena_epilyacia_block2_<?php echo $i; ?>]" value="<?php echo get_post_meta($post->ID, 'cena_epilyacia_block2_'.$i, 1);?>" placeholder="Цена"/>
								</div>	
							<?php }
						?>
						<p><b>Название кнопки</b></p>
						<input type="text" name="extra[button_epilyacia_block2]" value="<?php echo get_post_meta($post->ID, 'button_epilyacia_block2', 1);?>" placeholder="Название кнопки"/><br>
					</div>
					<div class="item">
						<p><b>Заголовок</b></p>
						<input type="text" name="extra[zagolovok_epilyacia_block3]" value="<?php echo get_post_meta($post->ID, 'zagolovok_epilyacia_block3', 1);?>" placeholder="Заголовок"/><br>
						<?php
							for($i=1; $i<=30; $i++){ ?>
								<div class="dva_polya">
									<input type="text" name="extra[usluga_epilyacia_block3_<?php echo $i; ?>]" value="<?php echo get_post_meta($post->ID, 'usluga_epilyacia_block3_'.$i, 1);?>" placeholder="Услуга"/>
									<input type="text" name="extra[cena_epilyacia_block3_<?php echo $i; ?>]" value="<?php echo get_post_meta($post->ID, 'cena_epilyacia_block3_'.$i, 1);?>" placeholder="Цена"/>
								</div>	
							<?php }
						?>
						<p><b>Название кнопки</b></p>
						<input type="text" name="extra[button_epilyacia_block3]" value="<?php echo get_post_meta($post->ID, 'button_epilyacia_block3', 1);?>" placeholder="Название кнопки"/><br>
					</div>
				</div>
				<?php upload_image('19','img_epilyacia_block4_bg','Выберите картинку фона блоков'); ?>
				<div class="many_items two_items">
					<div class="item">
						<p><b>Заголовок</b></p>
						<input type="text" name="extra[zagolovok_epilyacia_block4]" value="<?php echo get_post_meta($post->ID, 'zagolovok_epilyacia_block4', 1);?>" placeholder="Заголовок"/><br>
						<?php
							for($i=1; $i<=30; $i++){ ?>
								<div class="dva_polya">
									<input type="text" name="extra[usluga_epilyacia_block4_<?php echo $i; ?>]" value="<?php echo get_post_meta($post->ID, 'usluga_epilyacia_block4_'.$i, 1);?>" placeholder="Услуга"/>
									<input type="text" name="extra[cena_epilyacia_block4_<?php echo $i; ?>]" value="<?php echo get_post_meta($post->ID, 'cena_epilyacia_block4_'.$i, 1);?>" placeholder="Цена"/>
								</div>	
							<?php }
						?>
						<p><b>Название кнопки</b></p>
						<input type="text" name="extra[button_epilyacia_block4]" value="<?php echo get_post_meta($post->ID, 'button_epilyacia_block4', 1);?>" placeholder="Название кнопки"/><br>
					</div>
					<div class="item">
						<p><b>Заголовок</b></p>
						<input type="text" name="extra[zagolovok_epilyacia_block5]" value="<?php echo get_post_meta($post->ID, 'zagolovok_epilyacia_block5', 1);?>" placeholder="Заголовок"/><br>
						<?php
							for($i=1; $i<=30; $i++){ ?>
								<div class="dva_polya">
									<input type="text" name="extra[usluga_epilyacia_block5_<?php echo $i; ?>]" value="<?php echo get_post_meta($post->ID, 'usluga_epilyacia_block5_'.$i, 1);?>" placeholder="Услуга"/>
									<input type="text" name="extra[cena_epilyacia_block5_<?php echo $i; ?>]" value="<?php echo get_post_meta($post->ID, 'cena_epilyacia_block5_'.$i, 1);?>" placeholder="Цена"/>
								</div>	
							<?php }
						?>
						<p><b>Название кнопки</b></p>
						<input type="text" name="extra[button_epilyacia_block5]" value="<?php echo get_post_meta($post->ID, 'button_epilyacia_block5', 1);?>" placeholder="Название кнопки"/><br>
					</div>
				</div>
			</div>

		</div>
		<input type="hidden" name="extra_fields_nonce" value="<?php echo wp_create_nonce(__FILE__); ?>" />
		<?
	}
	add_action( 'save_post', 'my_extra_fields_lazernaya_epilyacia_update', 0 );
	function my_extra_fields_lazernaya_epilyacia_update( $post_id ){
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