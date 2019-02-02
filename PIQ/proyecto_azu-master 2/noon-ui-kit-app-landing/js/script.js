


$(document).ready(function() {
	

	$(window).load(function () {
		$(".loaded").fadeOut();
		$(".preloader").delay(1000).fadeOut("slow");
	});

	  
	  
	  


<!-- =============================================== -->
<!-- ========== fancy box ========== -->
<!-- =============================================== -->



	$(".youtube-media").on("click", function(e) {
		var jWindow = $(window).width();
		if (jWindow <= 410) {
			return;
		}
		$.fancybox({
			href: this.href,
			padding: 4,
			type: "iframe",
			'href': this.href.replace(new RegExp("watch\\?v=", "i"), 'v/'),
		});
		return false;
	});
	





<!-- =============================================== -->
<!-- ========== owlcarousel team ========== -->
<!-- =============================================== -->




$("").owlCarousel({

/*autoPlay: 3000, //Set AutoPlay to 3 seconds*/
items : 4,
itemsDesktop : [1199,3],
itemsDesktopSmall : [979,3],

pagination : true,
paginationNumbers: false,


responsive: true,
responsiveRefreshRate : 200,
responsiveBaseWidth: window

});








<!-- =============================================== -->
<!-- ========== scrollTop.js ========== -->
<!-- =============================================== -->
    
$('.scrollup').click(function(){
$("html, body").animate({ scrollTop: 0 }, 2000);
return false;
});



<!-- =============================================== -->
<!-- ========== scrolldown.js ========== -->
<!-- =============================================== -->

$('.scrolldown a').bind('click', function () {
    $('html , body').stop().animate({
        scrollTop: $($(this).attr('href')).offset().top - 160
    }, 1500, 'easeInOutExpo');
    event.preventDefault();
});

			


<!-- =============================================== -->
<!-- ========== navbardown.js ========== -->
<!-- =============================================== -->

$('.nav a').bind('click', function () {
    $('html , body').stop().animate({
        scrollTop: $($(this).attr('href')).offset().top - 80
    }, 1500, 'easeInOutExpo');
    event.preventDefault();
});			
			
			

 new WOW().init();
 
 // main-menu-scroll

	jQuery(window).scroll(function () {
	  var top = jQuery(document).scrollTop();
		var height = 300;
	  //alert(batas);
	  
	  if (top > height) {
		jQuery('.navbar-fixed-top').addClass('menu-scroll');
	  } else {
	   jQuery('.navbar-fixed-top').removeClass('menu-scroll');
	  }
	});	
	
// scroll Up

    $(window).scroll(function(){
        if ($(this).scrollTop() > 600) {
            $('.scrollup').fadeIn('slow');
        } else {
            $('.scrollup').fadeOut('slow');
        }
    });
    $('.scrollup').click(function(){
        $("html, body").animate({ scrollTop: 0 }, 1000);
        return false;
    });		


		
		
});


//light box galería

// Create a lightbox
(function() {
  var $lightbox = $("<div class='lightbox'></div>");
  var $img = $("<img>");
  var $caption = $("<p class='caption'></p>");

  // Add image and caption to lightbox

  $lightbox
    .append($img)
    .append($caption);

  // Add lighbox to document

  $('body').append($lightbox);

  $('.lightbox-gallery img').click(function(e) {
    e.preventDefault();

    // Get image link and description
    var src = $(this).attr("data-image-hd");
    var cap = $(this).attr("alt");

    // Add data to lighbox

    $img.attr('src', src);
    $caption.text(cap);

    // Show lightbox

    $lightbox.fadeIn('fast');

    $lightbox.click(function() {
      $lightbox.fadeOut('fast');
    });
  });

}());

//pop0 up images button

 $(document).ready(function () {
     $(".boton0").click(function () {
         $(".pop").fadeIn(300);
         positionPopup();
     });

     $(".pop > span, .pop").click(function () {
         $(".pop").fadeOut(300);
     });
 });


//pop1 up images button

 $(document).ready(function () {
     $(".boton1").click(function () {
         $(".pop1").fadeIn(300);
         positionPopup();
     });

     $(".pop1 > span, .pop1").click(function () {
         $(".pop1").fadeOut(300);
     });
 });

//pop2 up images button

 $(document).ready(function () {
     $(".boton2").click(function () {
         $(".pop2").fadeIn(300);
         positionPopup();
     });

     $(".pop2 > span, .pop2").click(function () {
         $(".pop2").fadeOut(300);
     });
 });

//pop3 up images button

 $(document).ready(function () {
     $(".boton3").click(function () {
         $(".pop3").fadeIn(300);
         positionPopup();
     });

     $(".pop3 > span, .pop3").click(function () {
         $(".pop3").fadeOut(300);
     });
 });

//pop4 up images button

 $(document).ready(function () {
     $(".boton4").click(function () {
         $(".pop4").fadeIn(300);
         positionPopup();
     });

     $(".pop4 > span, .pop4").click(function () {
         $(".pop4").fadeOut(300);
     });
 });


 
//pop6 up images button

 $(document).ready(function () {
     $(".boton6").click(function () {
         $(".pop6").fadeIn(300);
         positionPopup();
     });

     $(".pop6 > span, .pop6").click(function () {
         $(".pop6").fadeOut(300);
     });
 });
 
  
//pop7 up images button

 $(document).ready(function () {
     $(".btn7").click(function () {
         $(".popup7").fadeIn(300);
         positionPopup();
     });

     $(".popup7 > span, .popup7").click(function () {
         $(".popup7").fadeOut(300);
     });
 });


