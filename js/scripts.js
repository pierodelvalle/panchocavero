$(document).ready(function(){
  window.onscroll = function(){ scrollMenu()};

  var navbar = document.getElementById('header-menu');
  var sticky = navbar.offsetTop;

  function scrollMenu() {
  	if (window.pageYOffset >= sticky) {
  		navbar.classList.add("sticky")
  	} else {
  		navbar.classList.remove("sticky");
  	}
  }

  $('#toggle-menu').click(function(e) {
  	e.preventDefault();
  	$('#main-nav').slideToggle();
  })

  $('.slick-carousel').slick({
  	autoplay: true,
    dots: true,
  	accessibility: false,
  	autoplaySpeed: 7000,
  	fade: true
  });

  $('.slick-carousel-main').slick({
      autoplay: true,
      dots: true,
      accessibility: false,
      autoplaySpeed: 10000,
      fade: true
  })
});