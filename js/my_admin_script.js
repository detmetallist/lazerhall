jQuery(document).ready(function($){
	var mediaUploader;
	$(document).on('click','.buttonupload',function(){	
	    //e.preventDefault();
	    var role=$(this).attr('role');
	    mediaUploader = wp.media.frames.file_frame = wp.media({
		    title: 'Выберите изображение',
		    button: {
		    text: 'Вставить'
	    }, multiple: false });
	    // When a file is selected, grab the URL and set it as the text field's value
	    mediaUploader.on('select', function() {
		    var attachment = mediaUploader.state().get('selection').first().toJSON();
		    //$('#image-url').val(attachment.url);
		    $('#image-url'+role).val(attachment.id);
		    $('#upli'+role).html( '<img src="'+attachment.url+'" alt="" style="height: 100px; width: auto; margin: 10px 0"/>' );
		    //$(this).parent(".item").children(".image-url").val(attachment.id);
		    //$(this).parent(".item").children(".upli").html( '<img src="'+attachment.url+'" alt="" style="height: 100px; width: auto; margin: 10px 0"/>' );
	    });
	    // Open the uploader dialog
	    mediaUploader.open();
	});
	$('.delete').click(function(e) {
		e.preventDefault();
	  	var role=$(this).attr('role');	
	  	if (confirm("Изображение будет удалено. Изменения вступят в силу после сохранения")) {
			$('#image-url'+role).val('');
			$('#upli'+role).html('');	    
	  	} else {
	  		return false;
	  	} 
	});
	$(".new_item").click(function(){
		var last_item=Math.trunc($(this).parent(".admblock").children(".empty_item").attr('data-last'))+1;
		var item=$(this).parent(".admblock").children(".empty_item").html();
		//$(this).parent(".admblock").children(".many_items").html($(this).parent(".admblock").children(".many_items").html()+item);
		var items_kol=$(this).parent(".admblock").children(".many_items").children('.item').length-1;
		if(items_kol!=-1){
			$(this).parent(".admblock").children(".many_items").children(".item").eq(items_kol).after(item);
		} else{
			$(this).parent(".admblock").children(".many_items").html(item);
		}
		$(this).parent(".admblock").children(".empty_item").attr('data-last',last_item);
		$(this).parent(".admblock").children(".many_items").children(".item").children("input[name='extra[slide_name_0]']").attr('name','extra[slide_name_'+last_item+']');
		$(this).parent(".admblock").children(".many_items").children(".item").children("input[name='extra[slide_text_0]']").attr('name','extra[slide_text_'+last_item+']');
		$(this).parent(".admblock").children(".many_items").children(".item").children("input[name='extra[slide_button_0]']").attr('name','extra[slide_button_'+last_item+']');
		$(this).parent(".admblock").children(".many_items").children(".item").children("input[name='extra[img_slide_0]']").attr('name','extra[img_slide_'+last_item+']');
		$(this).parent(".admblock").children(".many_items").children(".item").children("#upli1000").attr("id","upli"+last_item);
		$(this).parent(".admblock").children(".many_items").children(".item").children("#buttonupload1000").attr("role",last_item).attr("id","buttonupload"+last_item);
		$(this).parent(".admblock").children(".many_items").children(".item").children("#image-url1000").attr("id","image-url"+last_item);
	});
});	