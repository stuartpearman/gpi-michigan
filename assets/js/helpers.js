$(function(){
	$('a[href^="#"]').on('click',function (e) {
	    e.preventDefault();

	    var target = this.hash;
	    var $target = $(target);

	    $('html, body').stop().animate({
	        'scrollTop': $target.offset().top
	    }, 900, 'swing', function () {
	        window.location.hash = target;
	    });
	});
});


function stickyFooter () {
  var bodyHeight = $('body').height();
  var windowHeight = $(window).height();
  var footer = $('footer');
  if (footer.hasClass('sticky-footer')){
    bodyHeight += footer.height();
  }
  if (bodyHeight < windowHeight) {
    footer.addClass('sticky-footer');
  } else if (footer.hasClass('sticky-footer')) {
    footer.removeClass('sticky-footer');
  }
};

$(function(){
  stickyFooter();

  $(window).resize(function(){
    stickyFooter();
  });
});
