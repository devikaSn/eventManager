
/* Selection and deselction of event cells*/

$(document).ready(function(){
	$('table.cal_blue.ecwd_calendar_container .has-events').click(function(e){
	   $('table.cal_blue.ecwd_calendar_container .has-events').removeClass('active');
       $(this).addClass('active');
	});
});