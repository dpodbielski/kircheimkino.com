$(document).ready(function() {
	$(".fancybox").fancybox({
		prevEffect		: 'fade',
		nextEffect		: 'fade',
		closeBtn		: true,
		helpers		: {
			title	: { type : 'inside' },
			buttons	: {}
		},
	});
	$('.wdForm').wdForm();
	goSpinner();
	wdLink();
	form();
	fancybox_images();
	$('.wdSlider').wdSlider();
	rwd_menu();
	rwd_search_form();
});

function rwd_menu() {

	$(".show_menu").click(function () {
		$("header > nav > ul").slideToggle(600);
		$('.show_menu').html($('.show_menu').text() == 'Hide menu' ? 'Show menu' : 'Hide menu');
	});

}

function rwd_search_form() {

	$(".show_search_form").click(function () {
		$("#search_form").show;
	});

}
function fancybox_images() {
	$('.p_left a[href*=".png"], .p_left a[href*=".gif"], .p_left a[href*=".jpg"]').each(function() {
		$(this).addClass('fancybox');
		var url = $(this).attr('href');
		var title = $('.p_right a[href="'+url+'"]').attr('title');
		if (title) {
			$(this).attr('title', title);
		}
	});
}

function goSpinner() {
	var opts = {
		lines: 12, // The number of lines to draw
		length: 5, // The length of each line
		width: 2, // The line thickness
		radius: 3, // The radius of the inner circle
		corners: 1, // Corner roundness (0..1)
		rotate: 0, // The rotation offset
		direction: 1, // 1: clockwise, -1: counterclockwise
		color: '#fff', // #rgb or #rrggbb or array of colors
		speed: 1, // Rounds per second
		trail: 60, // Afterglow percentage
		shadow: false, // Whether to render a shadow
		hwaccel: false, // Whether to use hardware acceleration
		className: 'spinner', // The CSS class to assign to the spinner
		zIndex: 2e9, // The z-index (defaults to 2000000000)
		top: 0, // Top position relative to parent in px
		left: 0 // Left position relative to parent in px
	};

	$('.loader').each(function(el){

		var spinner = new Spinner(opts).spin(this);
	});
}

function wdLink() {
	$('.wdLink').each(function(el){

		$(this).click(function( event ){
			event.preventDefault();
			var formAction = $(this).attr('href');
			$.ajax({
				type: "POST",
				url: formAction,

				success: function(response) {
					if(response.redirect) {
						 window.location.href = response.redirect.url;
					}
				}	
			});
		});
	});
}

function form(){
	if ($('#timer').size()) {
		var time = 0;
		window.setInterval(function(){
			time = time + 1;
			$('#timer').val(time);
		}, 1000);
	}
}