<div class="ionix bBanco" style="padding:80px 0 50px;">
    <div class="general">
		<div style="width:80%; margin:0 auto;">
        	<div class="campers">
              <div><?php include "../../../view/general/modeloCampamentosSlide.php"; ?></div>
              <div><?php include "../../../view/general/modeloCampamentosSlide.php"; ?></div>
              <div><?php include "../../../view/general/modeloCampamentosSlide.php"; ?></div>
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
	  slidesToShow: 1,
	  slidesToScroll: 1,
	  responsive: [
		{
		  breakpoint: 1024,
		  settings: {
			slidesToShow: 1,
			slidesToScroll: 1,
			infinite: true,
			dots: true
		  }
		},
		{
		  breakpoint: 600,
	  	  settings: {
			slidesToShow: 1,
			slidesToScroll: 1
		  }
		},
		{
		  breakpoint: 480,
		  settings: {
			slidesToShow: 1,
			slidesToScroll: 1
		  }
		}
	  ]
	});

</script>