<div class="ionix bGray3" style="padding:80px 0 50px;">
    <div class="general">
    	<div class="mb30 t24 ff6 color666">Instituciones Inscritas</div>
        
		<div style="width:80%; margin:0 auto;">        	
        	<div class="campers">
              <div><img src="resources/img/marcas/1.png" /></div>
              <div><img src="resources/img/marcas/2.png" /></div>
              <div><img src="resources/img/marcas/3.png" /></div>
              <div><img src="resources/img/marcas/5.png" /></div>
              <div><img src="resources/img/marcas/1.png" /></div>
              <div><img src="resources/img/marcas/2.png" /></div>
              <div><img src="resources/img/marcas/3.png" /></div>
              <div><img src="resources/img/marcas/5.png" /></div>
            </div>
		</div>
    </div>
</div>




<script>
					
	$('.campers').slick({
	  dots: true,
	  infinite: true,
	  speed: 300,
	  autoplay: true,
	  autoplaySpeed: 4000,
	  slidesToShow: 5,
	  slidesToScroll: 1,
	  responsive: [
		{
		  breakpoint: 1024,
		  settings: {
			slidesToShow: 4,
			slidesToScroll: 1,
			infinite: true,
			dots: true
		  }
		},
		{
		  breakpoint: 600,	
	  	  settings: {
			slidesToShow: 3,
			slidesToScroll: 1
		  }
		},
		{
		  breakpoint: 480,
		  settings: {
			slidesToShow: 2,
			slidesToScroll: 1
		  }
		}
	  ]
	});
			
</script>