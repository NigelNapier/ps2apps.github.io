// Design: velvia 
// Date: 1/Aug/2012

$(function(){
	
	//Tabs setup
	$('#myTab a').click(function (e) {
	  e.preventDefault();
	  $(this).tab('show');
	})
	
	//hover effect
	$('.thumbnail-work').adipoli({
		'startEffect' : 'overlay', 
		'hoverEffect' : 'boxRainGrowReverse'
	});
	
	//fancybox setup
	$("a.grouped_elements").fancybox();
	$(".tab-buttons-title").tooltip();
	$(".tooltips").tooltip();
	
	// collapse for footer links
	$(".icon-holder a").click(function(e){
		var linksId = $(this).attr("href");
		  $(linksId).slideToggle(1000);
	});
	 /**********************************Back To Top Setup************************/	
	// hide #back-top first
	$("#back-top").hide();	
	// fade in #back-top
	$(window).scroll(function () {
		if ($(this).scrollTop() > 100) {
			$('#back-top').fadeIn();
		} else {
			$('#back-top').fadeOut();
		}
	});
	// scroll body to 0px on click
	$('#back-top a').click(function () {
		$('body,html').animate({
			scrollTop: 0
		}, 800);
		return false;
	});
});