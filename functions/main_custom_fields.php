<?php
	function extra_fields_mainpage_func( $post ){
		?>
		<link rel="stylesheet" href="<?php echo get_template_directory_uri() ?>/css/admin-style.css" />
		<h1>Главный экран</h1>
		<div class="admblock">
			<h2>Слайдер на главной</h2>
			<button class="new_item">Добавить слайд</button>
			<div class="many_items">
				<?php 
					$last_item=99;
					for($i=100; $i<200; $i++){
						if(get_post_meta($post->ID, 'slide_name_'.$i, 1)){ ?>
							<div class="item">
								<p><b>Заголовок слайда</b></p>
								<input type="text" name="extra[slide_name_<?php echo $i; ?>]" value="<?php echo get_post_meta($post->ID, 'slide_name_'.$i, 1);?>" placeholder="Заголовок слайда"/><br>
								<p><b>Текст слайда</b></p>
								<input type="text" name="extra[slide_text_<?php echo $i; ?>]" value="<?php echo get_post_meta($post->ID, 'slide_text_'.$i, 1);?>" placeholder="Текст слайда"/><br>
								<p><b>Текст на кнопке слайда</b></p>
								<input  type="text" name="extra[slide_button_<?php echo $i; ?>]" value="<?php echo get_post_meta($post->ID, 'slide_button_'.$i, 1);?>" placeholder="Текст на кнопке слайда"/><br>
								<?php upload_image($i,'img_slide_'.$i,'Картинка слайда'); $last_item=$i; ?>
							</div>
						<?php } 
					}
				?>
			</div>
			<p>Можете текст любого слайда или кнопки слайда оставить пустым, и тогда этот элемент на слайде не отобразится</p>
			<div class="empty_item" data-last="<?php echo $last_item; ?>">
				<div class="item">
					<p><b>Заголовок слайда</b></p>
					<input  type="text" name="extra[slide_name_0]" value="<?php echo get_post_meta($post->ID, 'slide_name_0', 1);?>" placeholder="Заголовок слайда"/><br>
					<p><b>Текст слайда</b></p>
					<input  type="text" name="extra[slide_text_0]" value="<?php echo get_post_meta($post->ID, 'slide_text_0', 1);?>" placeholder="Текст слайда"/><br>
					<p><b>Текст на кнопке слайда</b></p>
					<input  type="text" name="extra[slide_button_0]" value="<?php echo get_post_meta($post->ID, 'slide_button_0', 1);?>" placeholder="Текст на кнопке слайда"/><br>
					<input id="image-url1000" class="image-url" type="hidden" name="extra[img_slide_0]" /><br>
					<input  role="1000" type="button" class="buttonupload btn" id="buttonupload1000" value="Картинка слайда" />
					<div id="upli1000" class="upli"></div><!-- upli -->
				</div>
			</div>
		</div>
		<div class="admblock">
			<h2>Экран "Наши услуги"</h2>
			<p><b>Заголовок</b></p>
			<input  type="text" name="extra[zagolovok_nashi_uslugi]" value="<?php echo get_post_meta($post->ID, 'zagolovok_nashi_uslugi', 1);?>" placeholder="Заголовок"/><br>
			<div class="many_items">
				<div class="item">
					<p><b>Заголовок</b></p>
	                <input  type="text" name="extra[zagolovok_uslugi_item1]" value="<?php echo get_post_meta($post->ID, 'zagolovok_uslugi_item1', 1);?>" placeholder="Заголовок"/><br>
	                <p><b>Ссылка</b></p>
	                <input  type="text" name="extra[url_uslugi_item1]" value="<?php echo get_post_meta($post->ID, 'url_uslugi_item1', 1);?>" placeholder="Ссылка"/><br>
	                <?php upload_image('1','img_uslugi_item1','Выберите картинку услуги'); ?>
            	</div>
            	<div class="item">
					<p><b>Заголовок</b></p>
	                <input  type="text" name="extra[zagolovok_uslugi_item2]" value="<?php echo get_post_meta($post->ID, 'zagolovok_uslugi_item2', 1);?>" placeholder="Заголовок"/><br>
	                <p><b>Ссылка</b></p>
	                <input  type="text" name="extra[url_uslugi_item2]" value="<?php echo get_post_meta($post->ID, 'url_uslugi_item2', 1);?>" placeholder="Ссылка"/><br>
	                <?php upload_image('2','img_uslugi_item2','Выберите картинку услуги'); ?>
            	</div>
            	<div class="item">
					<p><b>Заголовок</b></p>
	                <input  type="text" name="extra[zagolovok_uslugi_item3]" value="<?php echo get_post_meta($post->ID, 'zagolovok_uslugi_item3', 1);?>" placeholder="Заголовок"/><br>
	                <p><b>Ссылка</b></p>
	                <input  type="text" name="extra[url_uslugi_item3]" value="<?php echo get_post_meta($post->ID, 'url_uslugi_item3', 1);?>" placeholder="Ссылка"/><br>
	                <?php upload_image('3','img_uslugi_item3','Выберите картинку услуги'); ?>
            	</div>
            	<div class="item">
					<p><b>Заголовок</b></p>
	                <input  type="text" name="extra[zagolovok_uslugi_item4]" value="<?php echo get_post_meta($post->ID, 'zagolovok_uslugi_item4', 1);?>" placeholder="Заголовок"/><br>
	                <p><b>Ссылка</b></p>
	                <input  type="text" name="extra[url_uslugi_item4]" value="<?php echo get_post_meta($post->ID, 'url_uslugi_item4', 1);?>" placeholder="Ссылка"/><br>
	                <?php upload_image('4','img_uslugi_item4','Выберите картинку услуги'); ?>
            	</div>
			</div>
			<p>Рекомендуемый размер картинок услуг 300x300</p>
		</div>
		<div class="admblock">
			<h2>Экран "Доверяйте лучшим"</h2>
			<div class="item">
				<p><b>Фоновая картинка</b></p>
				<?php upload_image('5','img_doverie_bg','Выберите фоновую картинку'); ?>
				<p>Рекомендуемый размер картинки от 1920 до 2560 по ширине</p>
			</div>
			<p><b>Заголовок</b></p>
			<input  type="text" name="extra[zagolovok_doverie]" value="<?php echo get_post_meta($post->ID, 'zagolovok_doverie', 1);?>" placeholder="Заголовок"/><br>
			<div class="many_items">
				<div class="item">
					<p><b>Заголовок</b></p>
	                <input  type="text" name="extra[zagolovok_doverie_item1]" value="<?php echo get_post_meta($post->ID, 'zagolovok_doverie_item1', 1);?>" placeholder="Заголовок"/><br>
            	</div>
            	<div class="item">
					<p><b>Заголовок</b></p>
	                <input  type="text" name="extra[zagolovok_doverie_item2]" value="<?php echo get_post_meta($post->ID, 'zagolovok_doverie_item2', 1);?>" placeholder="Заголовок"/><br>
            	</div>
            	<div class="item">
					<p><b>Заголовок</b></p>
	                <input  type="text" name="extra[zagolovok_doverie_item3]" value="<?php echo get_post_meta($post->ID, 'zagolovok_doverie_item3', 1);?>" placeholder="Заголовок"/><br>
            	</div>
            	<div class="item">
					<p><b>Заголовок</b></p>
	                <input  type="text" name="extra[zagolovok_doverie_item4]" value="<?php echo get_post_meta($post->ID, 'zagolovok_doverie_item4', 1);?>" placeholder="Заголовок"/><br>
            	</div>
			</div>
		</div>
		<div class="admblock">
			<h2>Экран "10+ лет опыта"</h2>
			<div class="two_items">
				<div class="item">
					<p><b>Заголовок</b></p>
					<input  type="text" name="extra[zagolovok_opit]" value="<?php echo get_post_meta($post->ID, 'zagolovok_opit', 1);?>" placeholder="Заголовок"/><br>
					<p><b>Текст в тени заголовка</b></p>
					<input  type="text" name="extra[opit_shadow_text]" value="<?php echo get_post_meta($post->ID, 'opit_shadow_text', 1);?>" placeholder="10+"/><br>
					<p><b>Текст</b></p>
					<textarea rows="3" name="extra[opit_text]"><?php echo get_post_meta($post->ID, 'opit_text', 1);?></textarea>
					<p><b>Название кнопки</b></p>
					<input  type="text" name="extra[opit_button_text]" value="<?php echo get_post_meta($post->ID, 'opit_button_text', 1);?>" placeholder="Записаться"/><br>
				</div>
				<div class="item">
					<div class="two_items">
						<div class="item">
							<?php upload_image('6','img_opit_item1','Выберите картинку'); ?>
						</div>
						<div class="item">
							<?php upload_image('7','img_opit_item2','Выберите картинку'); ?>
						</div>
						<div class="item">
							<?php upload_image('8','img_opit_item3','Выберите картинку'); ?>
						</div>
						<div class="item">
							<?php upload_image('9','img_opit_item4','Выберите картинку'); ?>
						</div>
					</div>
				</div>
			</div>
		</div>
		<div class="admblock">
			<h2>Экран "Записывайся уже сегодня"</h2>
			<div class="item">
				<p><b>Заголовок</b></p>
				<input type="text" name="extra[zagolovok_zapis]" value="<?php echo get_post_meta($post->ID, 'zagolovok_zapis', 1);?>" placeholder="Заголовок"/><br>
				<p><b>Название кнопки</b></p>
				<input  type="text" name="extra[zagolovok_button_text]" value="<?php echo get_post_meta($post->ID, 'zagolovok_button_text', 1);?>" placeholder="Записаться"/><br>
				<?php upload_image('10','img_zapis_bg','Выберите фоновую картинку'); ?>
			</div>
		</div>
		<div class="admblock">
			<h2>Экран видео</h2>
			<div class="item">
				<p><b>Заголовок</b></p>
				<input type="text" name="extra[zagolovok_video]" value="<?php echo get_post_meta($post->ID, 'zagolovok_video', 1);?>" placeholder="Заголовок"/><br>
			</div>
			<div class="two_items">
				<div class="item">
					<p><b>Ссылка видео с Youtube для встраивания</b></p>
					<input type="text" name="extra[kod_video1]" value="<?php echo get_post_meta($post->ID, 'kod_video1', 1);?>" placeholder="Код видео с Youtube"/><br>
				</div>
				<div class="item">
					<p><b>Ссылка видео с Youtube для встраивания</b></p>
					<input type="text" name="extra[kod_video2]" value="<?php echo get_post_meta($post->ID, 'kod_video2', 1);?>" placeholder="Код видео с Youtube"/><br>
				</div>
				<div class="item">
					<p><b>Ссылка видео с Youtube для встраивания</b></p>
					<input type="text" name="extra[kod_video3]" value="<?php echo get_post_meta($post->ID, 'kod_video3', 1);?>" placeholder="Код видео с Youtube"/><br>
				</div>
				<div class="item">
					<p><b>Ссылка видео с Youtube для встраивания</b></p>
					<input type="text" name="extra[kod_video4]" value="<?php echo get_post_meta($post->ID, 'kod_video4', 1);?>" placeholder="Код видео с Youtube"/><br>
				</div>
			</div>
			<p style="color:red">Ссылка для встраивания отличается от обычной ссылки, обычная работать не будет. Чтобы получить ссылку для встраивания, нужно в ютубе под видео нажать кнопку "Поделиться" и "Встроить". Из того текста, что увидите, надо взять то что внутри кавычек после слова "src"</p>
		</div>
		<div class="admblock">
			<h2>Экран с текстом</h2>
			<div class="item">
				<?php 
					$settings = array(
						'textarea_name'	=>	'extra[main_content]',
						'dfw'		=>	true,
						'quicktags'	=>	false
					);
					wp_editor( get_post_meta($post->ID, 'main_content', true), 'truewpeditor', $settings );
				?>
			</div>
		</div>
		<div class="admblock">
			<h2>Футер</h2>
			<div class="many_items two_items">
				<div class="item">
					<p><b>График работы</b></p>
					<?php 
						for($i=1; $i<=10; $i++){ ?>
							<input type="text" name="extra[stroka_grafic_<?php echo $i; ?>]" value="<?php echo get_post_meta($post->ID, 'stroka_grafic_'.$i, 1);?>" placeholder="Строка графика"/><br>
						<?php }
					?>
				</div>
				<div class="item">
					<p><b>Адреса</b></p>
					<?php 
						for($i=1; $i<=10; $i++){ ?>
							<input type="text" name="extra[stroka_adres_<?php echo $i; ?>]" value="<?php echo get_post_meta($post->ID, 'stroka_adres_'.$i, 1);?>" placeholder="Строка адреса"/><br>
						<?php }
					?>
				</div>
			</div>
			<div class="item">
				<p><b>Строка копирайтов</b></p>
				<input type="text" name="extra[copyright_stroka]" value="<?php echo get_post_meta($post->ID, 'copyright_stroka', 1);?>" placeholder="Копирайты"/><br>
			</div>
			<p><b>Ссылки</b></p>
			<div class="many_items items_6">
				<?php 
					for($i=1; $i<=24; $i++){ ?>
						<div class="item">
							<input type="text" name="extra[footer_url_anchore_<?php echo $i; ?>]" value="<?php echo get_post_meta($post->ID, 'footer_url_anchore_'.$i, 1);?>" placeholder="Текст ссылки"/><br>
							<input type="text" name="extra[footer_url_<?php echo $i; ?>]" value="<?php echo get_post_meta($post->ID, 'footer_url_'.$i, 1);?>" placeholder="Ссылка"/><br>
						</div>
					<?php }
				?>
			</div>
		</div>
		<input type="hidden" name="extra_fields_nonce" value="<?php echo wp_create_nonce(__FILE__); ?>" />
		<?
	}
	add_action( 'save_post', 'my_extra_fields_update', 0 );
	function my_extra_fields_update( $post_id ){
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