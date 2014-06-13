( function ( $ ) {
	
	$(function() {
		
    	        	 		        
    /************************************************************************/
    /*	confUne hover background lien
    /************************************************************************/
    
    $("#confUneHover").hover(function(){
        $("#confUne span").addClass("shadowConfnone");
        $("#confUne h1 span").removeClass("shadowConfnone");
    });
    $("#confUneHover").mouseout(function(){
        $(".shadeau").addClass("shadowConf");
        $(".shadeau").removeClass("shadowConfnone");
    });

    /* SmoothScrool */
    
    $(function() {
      $('a[href*=#]:not([href=#])').click(function() {
        if (location.pathname.replace(/^\//,'') == this.pathname.replace(/^\//,'') && location.hostname == this.hostname) {
          var target = $(this.hash);
          target = target.length ? target : $('[name=' + this.hash.slice(1) +']');
          if (target.length) {
            $('html,body').animate({
              scrollTop: target.offset().top
            }, 1000);
            return false;
          }
        }
      });
    });
    
   /************************************************************************/
    /*	RESPONSIVE NAV
    /************************************************************************/
    
    
    
    var navigation = responsiveNav("site-navigation", {
        customToggle: ".nav-toggle",
        animate: true,        // Boolean: Use CSS3 transitions, true or false
        transition: 1000,      // Integer: Speed of the transition, in milliseconds
        label: "Menu",        // String: Label for the navigation toggle
        insert: "after",      // String: Insert the toggle before or after the navigation
        openPos: "relative",  // String: Position of the opened nav, relative or static
        jsClass: "js",        // String: 'JS enabled' class which is added to <html> el
        init: function(){},   // Function: Init callback
        open: function(){},   // Function: Open callback
        close: function(){}
    });
   
   
   
   /************************************************************************/
   /*	CLASS CATEGORY
   /************************************************************************/
   
   $(".post-categories li a").addClass("btn btn-xs btn-primary mhm");
   
   
   /************************************************************************/
   /*	THEME PAS ENCORE OK
   /************************************************************************/
	  
	  
	  
	  $(".category-front-end").hover(function(){
        $(".catFront").addClass("active");
        $(".catHistorique").removeClass("active");
        $(".catDesign").removeClass("active");
        $(".catUx").removeClass("active");
    });
    $(".category-historique").hover(function(){
        $(".catHistorique").addClass("active");
        $(".catFront").removeClass("active");
        $(".catDesign").removeClass("active");
        $(".catUx").removeClass("active");
    });
    $(".category-design").hover(function(){
        $(".catDesign").addClass("active");
        $(".catHistorique").removeClass("active");
        $(".catFront").removeClass("active");
        $(".catUx").removeClass("active");
    });
    $(".category-ux").hover(function(){
        $(".catUx").addClass("active");
        $(".catFront").removeClass("active");
        $(".catDesign").removeClass("active");
        $(".catHistorique").removeClass("active");
    });
	  
	  
	  
	  
	  
	  
	  /*  */
	  
	});	

}( jQuery ) )