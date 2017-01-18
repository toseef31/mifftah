 
 $(document).ready(function(e) {
     

     
	
	  $('.signupclick').click(function(e) {
		  
        $('.loginbox').hide( "drop", { direction: "up" },"fast"  );
		$('.registerbox').delay(300).show( "drop", { direction: "down" },"fast" );
    });
	
	$('.signinclick').click(function(e) {
        $('.registerbox').hide( "drop", { direction: "down" },"fast"  );
		$('.loginbox').delay(300).show( "drop", { direction: "up" },"fast" );
    });
	
	$('.registerclose').click(function(){
		$('body').removeClass("scrollbody");
		$('.loginwrperoverlay, .loginbox, .registerbox ').fadeOut(300);
		
		});
		
		
		// main click starts 
		
		
		$('.signinclickmain').click(function(e) {
				$('body').addClass("scrollbody");
             $('.registerbox').css({"display" : "none"});
			$('.loginbox, .loginwrperoverlay').fadeIn(200);
        });
	
	$('.signupclickmain').click(function(e) {
		$('body').addClass("scrollbody");
       $('.loginbox ').css({"display" : "none"});
	   
	   $('.registerbox, .loginwrperoverlay').fadeIn(200);
	   
    });
	
	
	// for responsive menu
	
	  

	
	 
	 
	
});
 