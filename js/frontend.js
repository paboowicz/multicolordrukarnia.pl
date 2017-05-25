$(document).ready(function() { 

	
	$('.bxslider').bxSlider({
		  mode: 'fade',
		  auto: true,
		  speed: 1000,
		  pause: 3000,
		  autoHover: true,
		  autoControls: false,
		  captions: true,
		  touchEnabled: true,
		  controls: false
		});
	
	
	$('a.lightbox').magnificPopup({
		type: 'image',
		gallery:{
		    enabled:true,
		    tCounter: 'Zdjęcie %curr% z %total%'
		  }
	});
	
	setPhotoPanel();
	setBoxesMS();
	
	
	
	//.photoPanel .img 
	setInterval(function(){
		obj = $('.photoPanel .img img:visible').next().length?$('.photoPanel .img img:visible').next():$('.photoPanel .img img:first');
		$('.photoPanel .img img:visible').fadeOut(1300,function(){});
		obj.fadeIn(1300);
	},4000);
});

$(window).resize(function(){
	setPhotoPanel();
	setBoxesMS();
});






/* nawigacja */

$(function() {
	
    var sticky_navigation_offset_top = $('.header').offset().top;
    
    var sticky_navigation = function(){
        var scroll_top = $(window).scrollTop(); // our current vertical position from the top
        if (scroll_top > sticky_navigation_offset_top) { 
            //$('.header').css({ 'position': 'fixed', 'top':0, 'left':0 });
            $('.header').addClass('stickyNav');
            $('body').addClass('stickyNav');
        } else {
            //$('.header').css({ 'position': 'relative' });
            $('.header').removeClass('stickyNav');
            $('body').removeClass('stickyNav');
        }   
    };
    
    // run our function on load
    sticky_navigation();
    
    // and run it again every time you scroll
    $(window).scroll(function() {
         sticky_navigation();
    });

});












function setPhotoPanel() {
	var ratio = 0.55;
	var width = $('.photoPanel').width();
	var height = parseInt(width*ratio);
	$('.photoPanel').height(height);
	//$('.photoPanel .wrapper').height(height);
	$('.photoPanel .img').height(height);
	
	
	var ratio = 0.2;
	var width = $('.photoPanel2').width();
	var height = parseInt(width*ratio);
	$('.photoPanel2').height(height);
	$('.photoPanel2 .wrapper').height(height);
	
}

function setBoxesMS(){
	$('.box4ms .item .content').height('auto');
	var maxHeight = 0;
	$('.box4ms .item .content').each(function() {
		if ($(this).height() > maxHeight) {
			maxHeight = $(this).height();
		}
	});
	$('.box4ms .item .content').height(maxHeight);
	
	
}