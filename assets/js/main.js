// Design: velvia 
// Date: 1/Aug/2012

$(function(){
	/*****************************Main Buttons Setup************************/	
	// main buttons control
	var chkOpen = false;
	$("#pane-buttons .tab-buttons a").click(function(e){
		  var paneId = $(this).attr("href");
		  $(this).toggleClass("active");
		  $(this).parent("div").toggleClass("invisible");
		  $(paneId).slideDown(2000, function(){
			  if(paneId == "#contact")
			  initialize();//google.maps.event.trigger(map, 'resize');
		  });
	});
	$(".pane-main .tab-buttons a").click(function(e){
		var TempPaneId = $(this).attr("href");
		$(TempPaneId).slideUp(2000,function(){
			$("#pane-buttons .tab-buttons a").each(function(index, element) {
				var temp = $(this).attr("href");
				if(TempPaneId == temp){
					$(this).parent("div").toggleClass("invisible");
					return chkbtn = false;
				}
			});
		});
	});
	$(".tab-buttons-title").tooltip();
	/***********Carousel, Tooltips, Footer Collapse Setup********************/	
	$(".tooltips").tooltip();
	$(".carousel-nav").hide();
	$("#myCarousel").carousel({
		interval: 6000,
		pause: "hover"
	});
	$(".banner").hover(function(){
		$(".carousel-nav").show(6000);
	}, function(){
		$(".carousel-nav").hide(6000);
	});
	// collapse for footer links
	$(".icon-holder a").click(function(e){
		var linksId = $(this).attr("href");
		  $(linksId).slideToggle(1000);
	});
	/******************************Back to top setup*************************/	
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
	/*******************Pop out, Zoom and Read more setup*********************/	
	//hover display zoom
	$(".features-item").hover(function(){
		$(this).find(".mask").fadeIn();
	},function(){
		$(this).find(".mask").fadeOut();
	});
	//hover for read more button
	$(".pane-main").hover(function(){
		$(this).find(".read-more").fadeIn();
	},function(){
		$(this).find(".read-more").fadeOut();
	});
	//fancybox setup
	$("a.grouped_elements").fancybox();
	
	/**************************************Contact Form*************************/	
	//contact form validation
	$('#contact-form').validate({
	    rules: {
	      fname: {
	        minlength: 2,
	        required: true
	      },
	      lname: {
	        minlength: 2,
	        required: true
	      },
	      email: {
	        required: true,
	        email: true
	      },
	      message: {
	        minlength: 2,
	        required: true
	      }
	    },
	    highlight: function(label) {
	    	$(label).closest('.control-group').addClass('error');
	    },
	    success: function(label) {
	    	label
	    		.text('OK!').addClass('valid')
	    		.closest('.control-group').addClass('success');
	    }
	 });	
	/**********hide loading bar***********/
	$("#loading").fadeOut();
 });
