$( document ).ready(function() {
    console.log( "ready!" );
    $(".menu_btn").click(function(){
		console.log($(this).attr('id'));
		$('html, body').animate({
	        scrollTop: $("."+$(this).attr('id')).offset().top
	    }, 2000);
	});
});
    