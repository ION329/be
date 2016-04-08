<style>
	.testimonios .slick-prev,
	.testimonios .slick-next								{
		background:none;
	}
	.testimonios .slick-dots li button:before				{
		color:#ab9147;
	}
	.testimonios .slick-dots li.slick-active button:before	{
		color:#81703e;
	}

</style>

<div class="ionix bGray3 pAA50">
    <div class="general">
    	<div class="row" style="">

            <div class="col-md-5 col-xs-12 vcenter mb30">
            	<div class="t30 ff3 taL">Últimas Noticias</div>
        		<br>
                <?php for($r=0; $r<3; $r++){ ?>
                    <div class="newPrev cP">
                        <div class="col-md-4 col-xs-4 vcenter taC"><img src="resources/img/demo/new.jpg"></div><!--
                        --><div class="col-md-8 col-xs-8 vcenter ff5">
                            <div class="color000 mb10 t18" style="font-weight:700;">
                                Cuando la innovación es una cuestión de supervivencia
                            </div>
                            <div class="color999">
                                Lorem ipsum dolor sit amet, consectetur adipiscing elit,
                                sed do eiusmod tempor incididunt ut labore et dolore
                                magna aliqua...
                            </div>
                        </div>
                    </div>
                <?php } ?>
                <br><br>
                <a class="t20 ff3 color666 btnGenerion rr60 cP" style="margin-left:20px;">Ver más noticias</a>
            </div><!--
            <div class="col-md-1 vcenter"></div><!--
            --><div class="col-md-6 col-xs-12 vcenter">

                <div style="width:90%; margin:0 auto;">
                    <div class="testimonios">
                      <div><?php include "../../../view/general/testimonio.php"; ?></div>
                      <div><?php include "../../../view/general/testimonio.php"; ?></div>
                      <div><?php include "../../../view/general/testimonio.php"; ?></div>
                      <div><?php include "../../../view/general/testimonio.php"; ?></div>
                    </div>
                </div>

                <br><br>
                <br><br>
                <img src="resources/img/demo/registratuidea.jpg">
            </div>

		</div>
    </div>
</div>




<script>

	$('.testimonios').slick({
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


