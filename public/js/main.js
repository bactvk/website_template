$(document).ready(function(){

	$(".common_questions_dropdown").click(function(){
	    $(this).siblings(".common_questions_dropdown_content").slideToggle("slow");
	});

	$('.close_menu').click(function(){
		$(".menu_right_content").hide(300);
	})

	$('.side_menu_button').click(function(){
		$(".menu_right_content").show(300);
	})

	$(window).scroll(function(){
	    var scrollPos = $(document).scrollTop();
	    if(scrollPos > 600) $(".menu_right_content").hide(300);
	});

})