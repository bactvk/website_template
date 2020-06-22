$(document).ready(function(){
	$('.common_questions_dropdown').on('show.bs.dropdown', function(e){
	  $(this).find('.dropdown-menu').first().stop(true, true).slideDown(300);
	  $(this).children().children().children('#icon_dropdown').attr('class',"fa fa-minus");
	  
	});

	$('.common_questions_dropdown').on('hide.bs.dropdown', function(e){
	  $(this).find('.dropdown-menu').first().stop(true, true).slideUp(300);
	  $(this).children().children().children('#icon_dropdown').attr('class',"fa fa-plus");
	});
})