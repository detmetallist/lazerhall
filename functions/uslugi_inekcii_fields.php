<?php
	function extra_fields_inekcii_func( $post ){
		?>
		<link rel="stylesheet" href="<?php echo get_template_directory_uri() ?>/css/admin-style.css" />
		<h1>Страница Услуги - Инъекции красоты</h1>
		<div class="admblock">
			<h2>Первый экран</h2>
			<div class="item">
				<input  type="text" name="extra[zagolovok_inekcii]" value="<?php echo get_post_meta($post->ID, 'zagolovok_inekcii', 1);?>" placeholder="Заголовок"/><br>
				<?php upload_image('33','img_inekcii_bg','Выберите картинку фона'); ?>
			</div>
			<?php
				$settings = array(
					'textarea_name'	=>	'extra[inekcii_content_block1]',
					'dfw'		=>	true,
					'quicktags'	=>	false
				);
				wp_editor( get_post_meta($post->ID, 'inekcii_content_block1', true), 'truewpeditor', $settings );
			?>
			<?php upload_image('34','img_inekcii_block1_bg','Выберите картинку фона блока'); ?>
			<div class="many_items tri_items">
				<div class="item">
					<p><b>Заголовок</b></p>
					<input type="text" name="extra[zagolovok_inekcii_block1]" value="<?php echo get_post_meta($post->ID, 'zagolovok_inekcii_block1', 1);?>" placeholder="Заголовок"/><br>
					<?php
						for($i=1; $i<=30; $i++){ ?>
							<div class="dva_polya">
								<input type="text" name="extra[usluga_inekcii_block1_<?php echo $i; ?>]" value="<?php echo get_post_meta($post->ID, 'usluga_inekcii_block1_'.$i, 1);?>" placeholder="Услуга"/>
								<input type="text" name="extra[cena_inekcii_block1_<?php echo $i; ?>]" value="<?php echo get_post_meta($post->ID, 'cena_inekcii_block1_'.$i, 1);?>" placeholder="Цена"/>
							</div>	
						<?php }
					?>
					<p><b>Название кнопки</b></p>
					<input type="text" name="extra[button_inekcii_block1]" value="<?php echo get_post_meta($post->ID, 'button_inekcii_block1', 1);?>" placeholder="Название кнопки"/><br>
				</div>
				<div class="item">
					<p><b>Заголовок</b></p>
					<input type="text" name="extra[zagolovok_inekcii_block2]" value="<?php echo get_post_meta($post->ID, 'zagolovok_inekcii_block2', 1);?>" placeholder="Заголовок"/><br>
					<?php
						for($i=1; $i<=30; $i++){ ?>
							<div class="dva_polya">
								<input type="text" name="extra[usluga_inekcii_block2_<?php echo $i; ?>]" value="<?php echo get_post_meta($post->ID, 'usluga_inekcii_block2_'.$i, 1);?>" placeholder="Услуга"/>
								<input type="text" name="extra[cena_inekcii_block2_<?php echo $i; ?>]" value="<?php echo get_post_meta($post->ID, 'cena_inekcii_block2_'.$i, 1);?>" placeholder="Цена"/>
							</div>	
						<?php }
					?>
					<p><b>Название кнопки</b></p>
					<input type="text" name="extra[button_inekcii_block2]" value="<?php echo get_post_meta($post->ID, 'button_inekcii_block2', 1);?>" placeholder="Название кнопки"/><br>
				</div>
				<div class="item">
					<p><b>Заголовок</b></p>
					<input type="text" name="extra[zagolovok_inekcii_block3]" value="<?php echo get_post_meta($post->ID, 'zagolovok_inekcii_block3', 1);?>" placeholder="Заголовок"/><br>
					<?php
						for($i=1; $i<=30; $i++){ ?>
							<div class="dva_polya">
								<input type="text" name="extra[usluga_inekcii_block3_<?php echo $i; ?>]" value="<?php echo get_post_meta($post->ID, 'usluga_inekcii_block3_'.$i, 1);?>" placeholder="Услуга"/>
								<input type="text" name="extra[cena_inekcii_block3_<?php echo $i; ?>]" value="<?php echo get_post_meta($post->ID, 'cena_inekcii_block3_'.$i, 1);?>" placeholder="Цена"/>
							</div>	
						<?php }
					?>
					<p><b>Название кнопки</b></p>
					<input type="text" name="extra[button_inekcii_block3]" value="<?php echo get_post_meta($post->ID, 'button_inekcii_block3', 1);?>" placeholder="Название кнопки"/><br>
				</div>
			</div>
				<?php upload_image('35','img_inekcii_block4_bg','Выберите картинку фона блока'); ?>
				<div class="many_items two_items">
					<div class="item">
						<p><b>Заголовок</b></p>
						<input type="text" name="extra[zagolovok_inekcii_block4]" value="<?php echo get_post_meta($post->ID, 'zagolovok_inekcii_block4', 1);?>" placeholder="Заголовок"/><br>
						<?php
							for($i=1; $i<=30; $i++){ ?>
								<div class="dva_polya">
									<input type="text" name="extra[usluga_inekcii_block4_<?php echo $i; ?>]" value="<?php echo get_post_meta($post->ID, 'usluga_inekcii_block4_'.$i, 1);?>" placeholder="Услуга"/>
									<input type="text" name="extra[cena_inekcii_block4_<?php echo $i; ?>]" value="<?php echo get_post_meta($post->ID, 'cena_inekcii_block4_'.$i, 1);?>" placeholder="Цена"/>
								</div>	
							<?php }
						?>
						<p><b>Название кнопки</b></p>
						<input type="text" name="extra[button_inekcii_block4]" value="<?php echo get_post_meta($post->ID, 'button_inekcii_block4', 1);?>" placeholder="Название кнопки"/><br>
					</div>
					<div class="item">
						<p><b>Заголовок</b></p>
						<input type="text" name="extra[zagolovok_inekcii_block5]" value="<?php echo get_post_meta($post->ID, 'zagolovok_inekcii_block5', 1);?>" placeholder="Заголовок"/><br>
						<?php
							for($i=1; $i<=30; $i++){ ?>
								<div class="dva_polya">
									<input type="text" name="extra[usluga_inekcii_block5_<?php echo $i; ?>]" value="<?php echo get_post_meta($post->ID, 'usluga_inekcii_block5_'.$i, 1);?>" placeholder="Услуга"/>
									<input type="text" name="extra[cena_inekcii_block5_<?php echo $i; ?>]" value="<?php echo get_post_meta($post->ID, 'cena_inekcii_block5_'.$i, 1);?>" placeholder="Цена"/>
								</div>	
							<?php }
						?>
						<p><b>Название кнопки</b></p>
						<input type="text" name="extra[button_inekcii_block5]" value="<?php echo get_post_meta($post->ID, 'button_inekcii_block5', 1);?>" placeholder="Название кнопки"/><br>
					</div>
				</div>
				<?php upload_image('36','img_inekcii_block6_bg','Выберите картинку фона блока'); ?>
				<div class="many_items two_items">
					<div class="item">
						<p><b>Заголовок</b></p>
						<input type="text" name="extra[zagolovok_inekcii_block6]" value="<?php echo get_post_meta($post->ID, 'zagolovok_inekcii_block6', 1);?>" placeholder="Заголовок"/><br>
						<?php
							for($i=1; $i<=30; $i++){ ?>
								<div class="dva_polya">
									<input type="text" name="extra[usluga_inekcii_block6_<?php echo $i; ?>]" value="<?php echo get_post_meta($post->ID, 'usluga_inekcii_block6_'.$i, 1);?>" placeholder="Услуга"/>
									<input type="text" name="extra[cena_inekcii_block6_<?php echo $i; ?>]" value="<?php echo get_post_meta($post->ID, 'cena_inekcii_block6_'.$i, 1);?>" placeholder="Цена"/>
								</div>	
							<?php }
						?>
						<p><b>Название кнопки</b></p>
						<input type="text" name="extra[button_inekcii_block6]" value="<?php echo get_post_meta($post->ID, 'button_inekcii_block6', 1);?>" placeholder="Название кнопки"/><br>
					</div>
					<div class="item">
						<p><b>Заголовок</b></p>
						<input type="text" name="extra[zagolovok_inekcii_block7]" value="<?php echo get_post_meta($post->ID, 'zagolovok_inekcii_block7', 1);?>" placeholder="Заголовок"/><br>
						<?php
							for($i=1; $i<=30; $i++){ ?>
								<div class="dva_polya">
									<input type="text" name="extra[usluga_inekcii_block7_<?php echo $i; ?>]" value="<?php echo get_post_meta($post->ID, 'usluga_inekcii_block7_'.$i, 1);?>" placeholder="Услуга"/>
									<input type="text" name="extra[cena_inekcii_block7_<?php echo $i; ?>]" value="<?php echo get_post_meta($post->ID, 'cena_inekcii_block7_'.$i, 1);?>" placeholder="Цена"/>
								</div>	
							<?php }
						?>
						<p><b>Название кнопки</b></p>
						<input type="text" name="extra[button_inekcii_block7]" value="<?php echo get_post_meta($post->ID, 'button_inekcii_block7', 1);?>" placeholder="Название кнопки"/><br>
					</div>
				</div>
		</div>
		<input type="hidden" name="extra_fields_nonce" value="<?php echo wp_create_nonce(__FILE__); ?>" />
		<?
	}
	add_action( 'save_post', 'my_extra_fields_inekcii_update', 0 );
	function my_extra_fields_inekcii_update( $post_id ){
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