

$(document).ready(function(){

	 /* Selection and deselction of weekday event cells*/
	$('table.cal_blue.ecwd_calendar_container .has-events').click(function(e){

	   $('.cal_blue.ecwd_calendar_container .events li > a').removeClass('active');
	   $('.cal_blue.ecwd_calendar_container .events li > span').removeClass('active');
	   $('table.cal_blue.ecwd_calendar_container .no-events').removeClass('active');
	   
	   // $(this).find(".ecwd_theme_calendar .ecwd_calendar td .day-number").addClass('active');
	   $('.cal_blue.ecwd_calendar_container .has-events').removeClass('active'); 
       $(this).addClass('active'); //Adding selection color to cell
       $(this).find("li > a").addClass('active'); //Adding selection color to cell elements
       $(this).find("li > span").addClass('active'); //Adding selection color to more events link

	});

	/* Selection and deselction of weekend event cells*/
	$('table.cal_blue.ecwd_calendar_container .no-events').click(function(){

		$('.cal_blue.ecwd_calendar_container .has-events').removeClass('active'); 
	    $('.cal_blue.ecwd_calendar_container .events li > a').removeClass('active');
	    $('.cal_blue.ecwd_calendar_container .events li > span').removeClass('active');

		$('table.cal_blue.ecwd_calendar_container .no-events').removeClass('active');
		$(this).addClass('active');
	});

});