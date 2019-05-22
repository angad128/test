$('#closePopUpModal').click(function(){
  $('#popUpMain').css('display','none');
});

$(document).ready(function() {
  $("#word_count").on('keyup', function() {
    var words = this.value.match(/\S+/g).length;
      $('#display_count').text(words);
  });
});

$(document).ready(function() {
  $("#mdb-lightbox-ui").load("mdb-addons/mdb-lightbox-ui.html");
});


$(function(){
  $(".open-modal").click(function(){
    $("#deleteModal").modal("show");
  });
});


$(document).ready(function(){
	$('#slider').owlCarousel({
		autoplay: true,
		margin: 10,
		loop: true,
		items: 4,
		nav:true,
		smartSpeed :900,
    	responsiveClass:true,
		responsive:{
		0:{
		    items:1,	            
			},
        500:{
            items:2,			          
			},
        750:{
            items:3,
	        },
        1000:{
            items:4,			           
			}
	    }
	});
	$( ".owl-prev").html('<i class="fas fa-caret-left"></i');
    $( ".owl-next").html('<i class="fas fa-caret-right"></i');	
    $('#slider2').owlCarousel({
				autoplay: true,
				margin: 30,
				loop: true,				
				responsiveClass:true,
			    responsive:{
			        0:{
			            items:1,
			            
			        },
			        780:{
			            items:2,
			          
			        },
			        1200:{
			            items:3,
			        }
			    }
	});
	$(window).scroll(function(){
        if ($(this).scrollTop() > 50) {
            $('#backToTop').fadeIn('slow');
        } else {
            $('#backToTop').fadeOut('slow');
        }
    });
    $('#backToTop').click(function(){
        $("html, body").animate({ scrollTop: 0 }, 600);
        return false;
    });		
});


// Select all links with hashes
$('a[href*="#"]')
  // Remove links that don't actually link to anything
  .not('[href="#"]')
  .not('[href="#0"]')
  .click(function(event) {
    // On-page links
    if (
      location.pathname.replace(/^\//, '') == this.pathname.replace(/^\//, '') 
      && 
      location.hostname == this.hostname
    ) {
      // Figure out element to scroll to
      var target = $(this.hash);
      target = target.length ? target : $('[name=' + this.hash.slice(1) + ']');
      // Does a scroll target exist?
      if (target.length) {
        // Only prevent default if animation is actually gonna happen
        event.preventDefault();
        $('html, body').animate({
          scrollTop: target.offset().top - 82
        }, 1000);
      }
    }
  });
