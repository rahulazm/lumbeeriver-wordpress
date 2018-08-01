


$(window).resize(function () {

});
$(document).ready(function () {
 function resizeForm(){
    var width = (window.innerWidth > 0) ? window.innerWidth : document.documentElement.clientWidth;

    $('.nav navbar-nav .dropdown-toggle').click(function () {
        var location = $(this).attr('href');
        window.location.href = location;
        return false;
    });
    $('.dropdown').on('show.bs.dropdown', function () {
        $(this).find('.dropdown-menu').first().stop(true, true).slideDown();
    });

    // Add slideUp animation to Bootstrap dropdown when collapsing.
    $('.dropdown').on('hide.bs.dropdown', function () {
        $(this).find('.dropdown-menu').first().stop(true, true).slideUp();
    });
    $('.navbar-nav > li ul').addClass('dropdown-menu');
    $("#navbar-menu .dropdown-toggle").after('<span class="dropdown-toggle" data-toggle="dropdown" aria-expanded="true"><i class="fa fa-angle-down" aria-hidden="true"></i></span>');
    
    if(width > 993){
      $('#navbar-menu .dropdown-toggle').find('i').hide();
  }
}

//     window.onresize = resizeForm;
resizeForm();
$('.main-slider').owlCarousel({
    loop: true,
    margin: 10,
    responsiveClass: true,
    nav: true,
    autoplay: true,
    autoplayTimeout: 3800,
    navText : ["<i class='fa fa-caret-left'></i>","<i class='fa fa-caret-right'></i>"],
    responsiveClass:true,
    responsive: {
        0: {
            items: 1,
            nav: true
        }
    }
});

});

(function ($) {
	$.fn.equalHeight = function (option) {
		var $this = this
		var get_height = function () {
			var maxheight = 0;
			setTimeout(function () {
				$this.css("height", "")
				$this.each(function () {
					maxheight = $(this).outerHeight() > maxheight ? $(this).outerHeight() : maxheight;
				})
				$this.css('height', maxheight + 'px');
			}, 501)
		}
		var init = function () {
			get_height()
			$(window).bind("resize", get_height)
		}
		$this.destroy = function () {
			$this.css("height", "auto")
			$(window).unbind("resize", get_height)
		}
		init()
		return this
	}
})(jQuery)

$(window).load(function () {
	$(".service-icon").equalHeight();
    /*$(".equal-hg").equalHeight(); */

});
$(window).resize(function () {
	$(".service-icon").equalHeight(); 
   /* $(".equal-hg").equalHeight(); */

});

$(document).ready(function() {
   $(".nc-accordian .panel-title > a").click(function() {
       if($(this).attr('aria-expanded') == 'true')
        {
            $(this).children('img.close-img').hide();
            $(this).children('img.open-img').show();
        }
        else
        {
            $('.nc-accordian .panel-title > a').children('img.close-img').hide();
            $('.nc-accordian .panel-title > a').children('img.open-img').show();
            $(this).children('img.open-img').hide();
            $(this).children('img.close-img').show();
        }
   }); 
});
