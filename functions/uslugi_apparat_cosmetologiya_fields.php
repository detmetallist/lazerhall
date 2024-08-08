<?php
	function extra_fields_apparat_cosmetologiya_func( $post ){
		?>
		<link rel="stylesheet" href="<?php echo get_template_directory_uri() ?>/css/admin-style.css" />
		<h1>Страница Услуги - аппаратная косметология</h1>
		<div class="admblock">
			<h2>Первый экран</h2>
			<div class="item">
				<input  type="text" name="extra[zagolovok_cosmetologiya]" value="<?php echo get_post_meta($post->ID, 'zagolovok_cosmetologiya', 1);?>" placeholder="Заголовок"/><br>
				<?php upload_image('25','img_cosmetologiya_bg','Выберите картинку фона'); ?>
			</div>
			<div class="two_items">
				<div class="item">
					<?php upload_image('26','img_cosmetologiya_block1_bg','Выберите картинку фона блока'); ?>
					<p><b>Заголовок</b></p>
					<input type="text" name="extra[zagolovok_cosmetologiya_block1]" value="<?php echo get_post_meta($post->ID, 'zagolovok_cosmetologiya_block1', 1);?>" placeholder="Заголовок"/><br>
					<?php
						for($i=1; $i<=30; $i++){ ?>
							<div class="dva_polya">
								<input type="text" name="extra[usluga_cosmetologiya_block1_<?php echo $i; ?>]" value="<?php echo get_post_meta($post->ID, 'usluga_cosmetologiya_block1_'.$i, 1);?>" placeholder="Услуга"/>
								<input type="text" name="extra[cena_cosmetologiya_block1_<?php echo $i; ?>]" value="<?php echo get_post_meta($post->ID, 'cena_cosmetologiya_block1_'.$i, 1);?>" placeholder="Цена"/>
							</div>	
						<?php }
					?>
					<p><b>Название кнопки</b></p>
					<input type="text" name="extra[button_cosmetologiya_block1]" value="<?php echo get_post_meta($post->ID, 'button_cosmetologiya_block1', 1);?>" placeholder="Название кнопки"/><br>
				</div>
				<div class="item">
					<?php
						$settings = array(
							'textarea_name'	=>	'extra[cosmetologiya_content_block1]',
							'dfw'		=>	true,
							'quicktags'	=>	false
						);
						wp_editor( get_post_meta($post->ID, 'cosmetologiya_content_block1', true), 'truewpeditor', $settings );
					?>
				</div>
			</div>
			<div class="two_items">
				<div class="item">
					<?php upload_image('27','img_cosmetologiya_block2_bg','Выберите картинку фона блока'); ?>
					<p><b>Заголовок</b></p>
					<input type="text" name="extra[zagolovok_cosmetologiya_block2]" value="<?php echo get_post_meta($post->ID, 'zagolovok_cosmetologiya_block2', 1);?>" placeholder="Заголовок"/><br>
					<?php
						for($i=1; $i<=30; $i++){ ?>
							<div class="dva_polya">
								<input type="text" name="extra[usluga_cosmetologiya_block2_<?php echo $i; ?>]" value="<?php echo get_post_meta($post->ID, 'usluga_cosmetologiya_block2_'.$i, 1);?>" placeholder="Услуга"/>
								<input type="text" name="extra[cena_cosmetologiya_block2_<?php echo $i; ?>]" value="<?php echo get_post_meta($post->ID, 'cena_cosmetologiya_block2_'.$i, 1);?>" placeholder="Цена"/>
							</div>	
						<?php }
					?>
					<p><b>Название кнопки</b></p>
					<input type="text" name="extra[button_cosmetologiya_block2]" value="<?php echo get_post_meta($post->ID, 'button_cosmetologiya_block2', 1);?>" placeholder="Название кнопки"/><br>
				</div>
				<div class="item">
					<?php
						$settings = array(
							'textarea_name'	=>	'extra[cosmetologiya_content_block2]',
							'dfw'		=>	true,
							'quicktags'	=>	false
						);
						wp_editor( get_post_meta($post->ID, 'cosmetologiya_content_block2', true), 'truewpeditor2', $settings );
					?>
				</div>
			</div>
			<div class="two_items">
				<div class="item">
					<?php upload_image('28','img_cosmetologiya_block3_bg','Выберите картинку фона блока'); ?>
					<p><b>Заголовок</b></p>
					<input type="text" name="extra[zagolovok_cosmetologiya_block3]" value="<?php echo get_post_meta($post->ID, 'zagolovok_cosmetologiya_block3', 1);?>" placeholder="Заголовок"/><br>
					<?php
						for($i=1; $i<=30; $i++){ ?>
							<div class="dva_polya">
								<input type="text" name="extra[usluga_cosmetologiya_block3_<?php echo $i; ?>]" value="<?php echo get_post_meta($post->ID, 'usluga_cosmetologiya_block3_'.$i, 1);?>" placeholder="Услуга"/>
								<input type="text" name="extra[cena_cosmetologiya_block3_<?php echo $i; ?>]" value="<?php echo get_post_meta($post->ID, 'cena_cosmetologiya_block3_'.$i, 1);?>" placeholder="Цена"/>
							</div>	
						<?php }
					?>
					<p><b>Название кнопки</b></p>
					<input type="text" name="extra[button_cosmetologiya_block3]" value="<?php echo get_post_meta($post->ID, 'button_cosmetologiya_block3', 1);?>" placeholder="Название кнопки"/><br>
				</div>
				<div class="item">
					<?php
						$settings = array(
							'textarea_name'	=>	'extra[cosmetologiya_content_block3]',
							'dfw'		=>	true,
							'quicktags'	=>	false
						);
						wp_editor( get_post_meta($post->ID, 'cosmetologiya_content_block3', true), 'truewpeditor3', $settings );
					?>
				</div>
			</div>
			<?php upload_image('29','img_cosmetologiya_block4_bg','Выберите картинку фона блоков'); ?>
			<div class="two_items">
				<div class="item">
					<p><b>Заголовок</b></p>
					<input type="text" name="extra[zagolovok_cosmetologiya_block4]" value="<?php echo get_post_meta($post->ID, 'zagolovok_cosmetologiya_block4', 1);?>" placeholder="Заголовок"/><br>
					<?php
						for($i=1; $i<=30; $i++){ ?>
							<div class="dva_polya">
								<input type="text" name="extra[usluga_cosmetologiya_block4_<?php echo $i; ?>]" value="<?php echo get_post_meta($post->ID, 'usluga_cosmetologiya_block4_'.$i, 1);?>" placeholder="Услуга"/>
								<input type="text" name="extra[cena_cosmetologiya_block4_<?php echo $i; ?>]" value="<?php echo get_post_meta($post->ID, 'cena_cosmetologiya_block4_'.$i, 1);?>" placeholder="Цена"/>
							</div>	
						<?php }
					?>
					<p><b>Название кнопки</b></p>
					<input type="text" name="extra[button_cosmetologiya_block4]" value="<?php echo get_post_meta($post->ID, 'button_cosmetologiya_block4', 1);?>" placeholder="Название кнопки"/><br>
				</div>
				<div class="item">
					<p><b>Заголовок</b></p>
					<input type="text" name="extra[zagolovok_cosmetologiya_block5]" value="<?php echo get_post_meta($post->ID, 'zagolovok_cosmetologiya_block5', 1);?>" placeholder="Заголовок"/><br>
					<?php
						for($i=1; $i<=30; $i++){ ?>
							<div class="dva_polya">
								<input type="text" name="extra[usluga_cosmetologiya_block5_<?php echo $i; ?>]" value="<?php echo get_post_meta($post->ID, 'usluga_cosmetologiya_block5_'.$i, 1);?>" placeholder="Услуга"/>
								<input type="text" name="extra[cena_cosmetologiya_block5_<?php echo $i; ?>]" value="<?php echo get_post_meta($post->ID, 'cena_cosmetologiya_block5_'.$i, 1);?>" placeholder="Цена"/>
							</div>	
						<?php }
					?>
					<p><b>Название кнопки</b></p>
					<input type="text" name="extra[button_cosmetologiya_block5]" value="<?php echo get_post_meta($post->ID, 'button_cosmetologiya_block5', 1);?>" placeholder="Название кнопки"/><br>
				</div>
			</div>
			<?php
				$settings = array(
					'textarea_name'	=>	'extra[cosmetologiya_content_block6]',
					'dfw'		=>	true,
					'quicktags'	=>	false
				);
				wp_editor( get_post_meta($post->ID, 'cosmetologiya_content_block6', true), 'truewpeditor6', $settings );
			?>
			<div class="two_items">
				<div class="item">
					<?php upload_image('30','img_cosmetologiya_block7_bg','Выберите картинку фона блока'); ?>
					<p><b>Заголовок</b></p>
					<input type="text" name="extra[zagolovok_cosmetologiya_block7]" value="<?php echo get_post_meta($post->ID, 'zagolovok_cosmetologiya_block7', 1);?>" placeholder="Заголовок"/><br>
					<?php
						for($i=1; $i<=30; $i++){ ?>
							<div class="dva_polya">
								<input type="text" name="extra[usluga_cosmetologiya_block7_<?php echo $i; ?>]" value="<?php echo get_post_meta($post->ID, 'usluga_cosmetologiya_block7_'.$i, 1);?>" placeholder="Услуга"/>
								<input type="text" name="extra[cena_cosmetologiya_block7_<?php echo $i; ?>]" value="<?php echo get_post_meta($post->ID, 'cena_cosmetologiya_block7_'.$i, 1);?>" placeholder="Цена"/>
							</div>	
						<?php }
					?>
					<p><b>Название кнопки</b></p>
					<input type="text" name="extra[button_cosmetologiya_block7]" value="<?php echo get_post_meta($post->ID, 'button_cosmetologiya_block7', 1);?>" placeholder="Название кнопки"/><br>
				</div>
				<div class="item">
					<?php
						$settings = array(
							'textarea_name'	=>	'extra[cosmetologiya_content_block7]',
							'dfw'		=>	true,
							'quicktags'	=>	false
						);
						wp_editor( get_post_meta($post->ID, 'cosmetologiya_content_block7', true), 'truewpeditor7', $settings );
					?>
				</div>
			</div>
			<div class="two_items">
				<div class="item">
					<?php upload_image('31','img_cosmetologiya_block8_bg','Выберите картинку фона блока'); ?>
					<p><b>Заголовок</b></p>
					<input type="text" name="extra[zagolovok_cosmetologiya_block8]" value="<?php echo get_post_meta($post->ID, 'zagolovok_cosmetologiya_block8', 1);?>" placeholder="Заголовок"/><br>
					<?php
						for($i=1; $i<=30; $i++){ ?>
							<div class="dva_polya">
								<input type="text" name="extra[usluga_cosmetologiya_block8_<?php echo $i; ?>]" value="<?php echo get_post_meta($post->ID, 'usluga_cosmetologiya_block8_'.$i, 1);?>" placeholder="Услуга"/>
								<input type="text" name="extra[cena_cosmetologiya_block8_<?php echo $i; ?>]" value="<?php echo get_post_meta($post->ID, 'cena_cosmetologiya_block8_'.$i, 1);?>" placeholder="Цена"/>
							</div>	
						<?php }
					?>
					<p><b>Название кнопки</b></p>
					<input type="text" name="extra[button_cosmetologiya_block8]" value="<?php echo get_post_meta($post->ID, 'button_cosmetologiya_block8', 1);?>" placeholder="Название кнопки"/><br>
				</div>
				<div class="item">
					<?php
						$settings = array(
							'textarea_name'	=>	'extra[cosmetologiya_content_block8]',
							'dfw'		=>	true,
							'quicktags'	=>	false
						);
						wp_editor( get_post_meta($post->ID, 'cosmetologiya_content_block8', true), 'truewpeditor8', $settings );
					?>
				</div>
			</div>
			<?php upload_image('32','img_cosmetologiya_block9_bg','Выберите картинку фона блока'); ?>
			<div class="two_items">
				<div class="item">
					<p><b>Заголовок</b></p>
					<input type="text" name="extra[zagolovok_cosmetologiya_block9]" value="<?php echo get_post_meta($post->ID, 'zagolovok_cosmetologiya_block9', 1);?>" placeholder="Заголовок"/><br>
					<?php
						for($i=1; $i<=30; $i++){ ?>
							<div class="dva_polya">
								<input type="text" name="extra[usluga_cosmetologiya_block9_<?php echo $i; ?>]" value="<?php echo get_post_meta($post->ID, 'usluga_cosmetologiya_block9_'.$i, 1);?>" placeholder="Услуга"/>
								<input type="text" name="extra[cena_cosmetologiya_block9_<?php echo $i; ?>]" value="<?php echo get_post_meta($post->ID, 'cena_cosmetologiya_block9_'.$i, 1);?>" placeholder="Цена"/>
							</div>	
						<?php }
					?>
					<p><b>Название кнопки</b></p>
					<input type="text" name="extra[button_cosmetologiya_block9]" value="<?php echo get_post_meta($post->ID, 'button_cosmetologiya_block9', 1);?>" placeholder="Название кнопки"/><br>
				</div>
				<div class="item">
					<p><b>Заголовок</b></p>
					<input type="text" name="extra[zagolovok_cosmetologiya_block10]" value="<?php echo get_post_meta($post->ID, 'zagolovok_cosmetologiya_block10', 1);?>" placeholder="Заголовок"/><br>
					<?php
						for($i=1; $i<=30; $i++){ ?>
							<div class="dva_polya">
								<input type="text" name="extra[usluga_cosmetologiya_block10_<?php echo $i; ?>]" value="<?php echo get_post_meta($post->ID, 'usluga_cosmetologiya_block10_'.$i, 1);?>" placeholder="Услуга"/>
								<input type="text" name="extra[cena_cosmetologiya_block10_<?php echo $i; ?>]" value="<?php echo get_post_meta($post->ID, 'cena_cosmetologiya_block10_'.$i, 1);?>" placeholder="Цена"/>
							</div>	
						<?php }
					?>
					<p><b>Название кнопки</b></p>
					<input type="text" name="extra[button_cosmetologiya_block10]" value="<?php echo get_post_meta($post->ID, 'button_cosmetologiya_block10', 1);?>" placeholder="Название кнопки"/><br>
				</div>
			</div>
			<?php
				$settings = array(
					'textarea_name'	=>	'extra[cosmetologiya_content_block11]',
					'dfw'		=>	true,
					'quicktags'	=>	false
				);
				wp_editor( get_post_meta($post->ID, 'cosmetologiya_content_block11', true), 'truewpeditor11', $settings );
			?>
		</div>
		<input type="hidden" name="extra_fields_nonce" value="<?php echo wp_create_nonce(__FILE__); ?>" />
		<?
	}
	add_action( 'save_post', 'my_extra_fields_apparat_cosmetologiya_update', 0 );
	function my_extra_fields_apparat_cosmetologiya_update( $post_id ){
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