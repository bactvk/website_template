$(document).ready(function(){
	$('.side_menu_button').click(function(){
          $(".menu_right_content").css({"right":"0","transition":"0.5s"});
        })

        $('.close_menu').click(function(){
          $(".menu_right_content").css({"right":"-60%","transition":"0.8s"});
        })
	// slide up, down
	$(".common_questions_dropdown").click(function(){
		$('.common_questions_dropdown_content').slideUp();
	    $(this).siblings(".common_questions_dropdown_content").slideToggle("slow");


	});

	$('.common_questions_dropdown_content').slideUp();
	$('.common_questions_dropdown_content.active').slideDown();
	
	$(window).scroll(function(){
	    var scrollPos = $(document).scrollTop();
	    if(scrollPos > 600){
	    	$(".menu_right_content").hide(300);
	    	$("#back_to_top").show();
	    }else{
	    	$("#back_to_top").hide();
	    } 
	});


	//Hiệu ứng Accodion
	$('.ndmotkhoi').slideUp();
	var mode = true;
	$('.motkhoi_title').click(function(event){
		$('.motkhoi_title').children('span').removeClass('span_color'); 
		$('.motkhoi_title').removeClass('span_color');
		$(this).children('span').addClass('span_color');
		$(this).addClass('span_color');


		$('.motkhoi_title i').removeClass();
		$('.motkhoi_title i').addClass('fa fa-plus');

		
		if(mode==true){
			$(this).children('i').removeClass();
			$(this).children('i').addClass('fa fa-window-minimize');
		}
		if(mode==false){
			$(this).children('i').removeClass();
			$(this).children('i').addClass('fa fa-plus');
		}
		mode=!mode;


		$('.ndmotkhoi').not($(this).next()).slideUp();
		$(this).next().slideToggle();
	

	});


	$("#back_to_top").click(function(){
		$("html, body").animate({ scrollTop: 0 }, "slow");
	});
})