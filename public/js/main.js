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
	    	$(".menu_right_content").css({"right":"-60%"});
	    	$("#back_to_top").show();
	    }else{
	    	$("#back_to_top").hide();
	    } 
	});


	//Hiệu ứng Accodion
	$('.ndmotkhoi').slideUp();

	$('.motkhoi_title').click(function(event){
		$('.motkhoi_title').children('span').removeClass('span_color'); 
		$('.motkhoi_title').removeClass('span_color');
		$(this).children('span').addClass('span_color');
		$(this).addClass('span_color');



		if($(this).children('i').hasClass('fa fa-plus')){
			$('.motkhoi_title i').removeClass();
			$(this).children('i').addClass('fa fa-window-minimize');
			$('.motkhoi_title i').addClass('fa fa-plus');

		}else if( $(this).children('i').hasClass('fa fa-window-minimize')  ){
			$(this).children('i').removeClass();
			$(this).children('i').addClass('fa fa-plus');

			$(this).children('span').removeClass('span_color'); 
			$(this).removeClass('span_color');

		}
		
		

		$('.ndmotkhoi').not($(this).next()).slideUp();
		$(this).next().slideToggle();
	
	});


	$("#back_to_top").click(function(){
		$("html, body").animate({ scrollTop: 0 }, "slow");
	});

	if($(".slider_top").length > 0){

		setHeightSlider();

		$(window).on('resize', function(){
	      // var win = $(this); //this = window
	      setHeightSlider();
	      
		});
		
	}
	
	function setHeightSlider()
	{
		// pc screen
		if( !(window.matchMedia( "(max-width: 768px)" ).matches)  )
		{
			if (window.innerHeight < 700) { 
		      	$(".slider_top .carousel").css({"height":"initial","padding":"135px 0"});
		    }else{
		    	$(".slider_top .carousel").css({"height":"calc(100vh - 91px)","padding":"0"});
		    }
		}else{
			
			$(".slider_top .carousel").css({"height":"initial","padding":"0"});
		}
		
	}


})