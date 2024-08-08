$(document).ready(function(){
	$("#slider").owlCarousel({
		loop:true,
		nav:true,
		margin: 0,
		items:1
	});
	$('.opit_img').mousemove(function(e){
		var pos = $(this).offset();
	    var elem_left = pos.left;
	    var elem_top = pos.top;
	    var Xinner = 10-(e.pageX - elem_left)/$(this).width()*20;
    	var Yinner = (e.pageY - elem_top)/$(this).height()*20-10;
	    $(this).css("transform","perspective(700px) rotateX("+Yinner+"deg) rotateY("+Xinner+"deg) scale3d(1, 1, 1)");
	})
	$('.opit_img').mouseout(function(e){
		$(this).css("transform","perspective(700px) rotateX(0deg) rotateY(0deg) scale3d(1, 1, 1)")
	});
	$(".popup_over, .popup_close").click(function(){
		$(".popup, .popup_over, .popup_img, .popup_thanks").fadeOut(200);
		$(".mobile_menu").animate({"left":"-350px"},200);
	})
	$(".do_posle_images a").click(function(){
		var src=$(this).attr("href");
		$(".popup_img").html("<img src='"+src+"'>");
		$(".popup_over, .popup_img").fadeIn(300);
		return false;
	})
	ifr_height();
	$(window).resize(function(){
		ifr_height();
	})
	function ifr_height(){
		var video_height=$("iframe").width()*0.56;
		$("iframe").attr("height",video_height);
	}
	$(".mobile_menu .menu-item-has-children>a, .mobile_menu .menu-item-has-children i").click(function(){
		if($(this).parent('li').children('ul').css("height")=="0px"){
			$(this).parent('li').children('ul').animate({"height":"180px"},200);
		} else {
			$(this).parent('li').children('ul').animate({"height":"0"},200);
		}
		return false;
	});
	$(".header_menu_button").click(function(){
		$(".mobile_menu").animate({"left":"0"},200);
		$(".popup_over").fadeIn(200);
	});
	$(".zapis").click(function(){
		$(".popup").fadeIn(200);
		$(".popup_over").fadeIn(200);
	})
	new WOW().init();
	$("input[name='phone']").inputmask("+38(999)999-99-99");
	$(window).scroll(function() {
		if($(this).scrollTop() != 0) {
			$('.button_vverh').fadeIn(300);
		} 
		else {
		 	$('.button_vverh').fadeOut(300);
		}
	});
	$('.button_vverh').click(function() {
		$('body,html').animate({scrollTop:0},800);
		return false;
	});
	$("form").submit(function(){
		var th = $(this);
		$.ajax({
			type: "POST",
			url: "/send.php", //Change
			data: th.serialize()
		}).done(function() {
			$(".popup_thanks, .popup_over").fadeIn(300);
			$(".popup").fadeOut(300);		
			setTimeout(function() {
				$(".popup_thanks, .popup_over").fadeOut(300);
				th.trigger("reset");
			}, 5000);
		});
		return false;
	})
})