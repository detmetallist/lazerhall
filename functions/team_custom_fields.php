<?php
	function extra_fields_team_func( $post ){
		?>
		<link rel="stylesheet" href="<?php echo get_template_directory_uri() ?>/css/admin-style.css" />
		<h1>Страница Команда</h1>
		<div class="admblock">
			<h2>Первый экран</h2>
			<div class="item">
				<div class="item">
					<p><b>Заголовок</b></p>
					<input  type="text" name="extra[zagolovok_team]" value="<?php echo get_post_meta($post->ID, 'zagolovok_team', 1);?>" placeholder="Заголовок"/><br>
					<?php upload_image('14','img_team_bg','Выберите картинку фона'); ?>
				</div>
				<div class="two_items">
					<div class="item">
						<?php upload_image('15','img_team_cont','Выберите картинку'); ?>
					</div>
					<div class="item">
						<?php 
							$settings = array(
								'textarea_name'	=>	'extra[team_content]',
								'dfw'		=>	true,
								'quicktags'	=>	false
							);
							wp_editor( get_post_meta($post->ID, 'team_content', true), 'truewpeditor', $settings );
						?>
					</div>
				</div>
			</div>
			<button class="new_item">Добавить сотрудника</button>
			<div class="many_items tri_items">
				<?php 
					$last_item=299;
					for($i=300; $i<400; $i++){
						if(get_post_meta($post->ID, 'slide_name_'.$i, 1)){ ?>
							<div class="item">
								<p><b>Имя сотрудника</b></p>
								<input type="text" name="extra[slide_name_<?php echo $i; ?>]" value="<?php echo get_post_meta($post->ID, 'slide_name_'.$i, 1);?>" placeholder="Заголовок слайда"/><br>
								<p><b>Должность сотрудника</b></p>
								<input type="text" name="extra[slide_text_<?php echo $i; ?>]" value="<?php echo get_post_meta($post->ID, 'slide_text_'.$i, 1);?>" placeholder="Текст слайда"/><br>
								<?php upload_image($i,'img_slide_'.$i,'Фото сотрудника'); $last_item=$i; ?>
							</div>
						<?php } 
					}
				?>
			</div>
			<div class="empty_item" data-last="<?php echo $last_item; ?>">
				<div class="item">
					<p><b>Имя сотруднка</b></p>
					<input  type="text" name="extra[slide_name_0]" value="<?php echo get_post_meta($post->ID, 'slide_name_0', 1);?>" placeholder="Заголовок слайда"/><br>
					<p><b>Должность сотрудника</b></p>
					<input  type="text" name="extra[slide_text_0]" value="<?php echo get_post_meta($post->ID, 'slide_text_0', 1);?>" placeholder="Текст слайда"/><br>
					<input id="image-url1000" class="image-url" type="hidden" name="extra[img_slide_0]" /><br>
					<input  role="1000" type="button" class="buttonupload btn" id="buttonupload1000" value="Фото сотрудника" />
					<div id="upli1000" class="upli"></div><!-- upli -->
				</div>
			</div>
		</div>
		<input type="hidden" name="extra_fields_nonce" value="<?php echo wp_create_nonce(__FILE__); ?>" />
		<?
	}
	add_action( 'save_post', 'my_extra_fields_team_update', 0 );
	function my_extra_fields_team_update( $post_id ){
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