// JavaScript Document
$(window).load(function() {
	
	//thanh menu left
    $('#menu_left > ul > li:first a').next().slideToggle();
	
    $('#menu_left > ul > li > a').click(function(){
    if ($(this).attr('class') != 'active'){
      $('#menu_left ul li ul').slideUp();
      $(this).next().slideToggle();
      $('#menu_left ul li a').removeClass('active');
      $(this).addClass('active');
    }
  	});
	
	
});