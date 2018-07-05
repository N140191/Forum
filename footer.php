	 <div id="footerwrap">
	 	<div class="container">
		 	<div class="row">
		 		<div class="col-lg-4">
		 			<h4>Contact</h4>
		 			<div class="hline-w"></div>
		 			<p>
            RGUKT Nuzvid(IIITN),<br/>
            Ph: XXXXXXXXXXX,<br/>
            Follow Us at: <i class="fa fa-facebook" aria-hidden="true" title="facebook" style="font-size: 22px;"></i><i class="fa fa-twitter" aria-hidden="true" title="Twitter" style="font-size: 22px;"></i><i class="fa fa-linkedin" aria-hidden="true" title="LinkedIn" style="font-size: 22px;"></i><i class="fa fa-envelope" aria-hidden="true" title="gmail" style="font-size: 22px;"></i>
          </p>
		 		</div>
		 		
		 		<div class="col-lg-4">
		 			<h4>Our Address</h4>
		 			<div class="hline-w"></div>
		 			<p>
		 				RGUKT Nuzvid,<br/>
		 				Mylavaram Road, Nuzvid,<br/>
            Krishna Dist,<br/>
		 				Andhra Pradesh, 521202.<br/>
		 			</p>
		 		</div>

		 		<div class="col-lg-4">
		 			<h4>Web Team</h4>
		 			<div class="hline-w"></div>
		 			<p>
		 				Shiva Nageswara Rao Thota<br/>
		 				Computer Scince Student<br/>
		 				IIIT Nuzivd,RGUKT.<br/>
		 			</p>
		 		</div>
		 	
		 	</div><!--/row -->
	 	</div><!--/container -->
	 </div><!--/footerwrap -->

   <script src="assets/js/bootstrap.min.js"></script>
   <script src="assets/js/retina-1.1.0.js"></script>
   <script src="assets/js/jquery.hoverdir.js"></script>
   <script src="assets/js/jquery.hoverex.min.js"></script>
    <script src="assets/js/jquery.prettyPhoto.js"></script>
    <script src="assets/js/jquery.isotope.min.js"></script>
    <script src="assets/js/custom.js"></script>
 <script type="text/javascript">
$(document).keyup(function(e){
  if(e.keyCode == 44) return false;
});
    </script>
 <script>
// Portfolio
(function($) {
  "use strict";
  var $container = $('.portfolio'),
    $items = $container.find('.portfolio-item'),
    portfolioLayout = 'fitRows';
    
    if( $container.hasClass('portfolio-centered') ) {
      portfolioLayout = 'masonry';
    }
        
    $container.isotope({
      filter: '*',
      animationEngine: 'best-available',
      layoutMode: portfolioLayout,
      animationOptions: {
      duration: 750,
      easing: 'linear',
      queue: false
    },
    masonry: {
    }
    }, refreshWaypoints());
    
    function refreshWaypoints() {
      setTimeout(function() {
      }, 1000);   
    }
        
    $('nav.portfolio-filter ul a').on('click', function() {
        var selector = $(this).attr('data-filter');
        $container.isotope({ filter: selector }, refreshWaypoints());
        $('nav.portfolio-filter ul a').removeClass('active');
        $(this).addClass('active');
        return false;
    });
    
    function getColumnNumber() { 
      var winWidth = $(window).width(), 
      columnNumber = 1;
    
      if (winWidth > 1200) {
        columnNumber = 5;
      } else if (winWidth > 950) {
        columnNumber = 4;
      } else if (winWidth > 600) {
        columnNumber = 3;
      } else if (winWidth > 400) {
        columnNumber = 2;
      } else if (winWidth > 250) {
        columnNumber = 1;
      }
        return columnNumber;
      }       
      
      function setColumns() {
        var winWidth = $(window).width(), 
        columnNumber = getColumnNumber(), 
        itemWidth = Math.floor(winWidth/columnNumber);
        
        $container.find('.portfolio-item').each(function() { 
          $(this).css( { 
          width : itemWidth + 'px' 
        });
      });
    }
    
    function setPortfolio() { 
      setColumns();
      $container.isotope('reLayout');
    }
      
    $container.imagesLoaded(function () { 
      setPortfolio();
    });
    
    $(window).on('resize', function () { 
    setPortfolio();          
  });
})(jQuery);
</script>
