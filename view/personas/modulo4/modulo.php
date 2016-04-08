<style>
	.testimonios .slick-prev,
	.testimonios .slick-next								{
		background:none; width:0;
	}
	.testimonios .slick-dots li button:before				{
		color:#ab9147;
	}
	.testimonios .slick-dots li.slick-active button:before	{
		color:#81703e;
	}

</style>

<div class="ionix bWhite">
    <div class="general">

        <div class="row">
            <div class="col-sm-9 col-xs-12 vcenter" style="vertical-align:top;">

                <div class="modulex">
                  <!-- Nav tabs -->
                  <ul class="nav nav-tabs ff6 t16 taC" role="tablist">
                    <li role="presentation" class="modE1 active">
                        <span class="tabAll">
                        	<a href="#info1" class="tabIn" target="_self" aria-controls="info1" role="tab" data-toggle="tab">
                                <img src="resources/img/icons/mode1.png" class="icjQ1 mb10" />
                                Descripción del programa
                            </a>
                        </span>
                    </li>
                    <li role="presentation" class="modE2">
                    	<span class="tabAll">
                        <a href="#info2" class="tabIn" target="_self" aria-controls="info2" role="tab" data-toggle="tab">
                            <img src="resources/img/icons/mode22.png" class="icjQ2 mb10" />
                            ¿Que voy a aprender?
                        </a>
                        </span>
                    </li>
                    <li role="presentation" class="modE3">
                    	<span class="tabAll">
                        <a href="#info3" class="tabIn" target="_self" aria-controls="info3" role="tab" data-toggle="tab">
                            <img src="resources/img/icons/mode33.png" class="icjQ3 mb10" />
                            Preguntas Frecuentes
                        </a>
                        </span>
                    </li>
                  </ul>

                <!-- Tab panes -->
                <div class="tab-content p30">
                    <div role="tabpanel" class="tab-pane active" id="info1">
                        <div ng-include src=" 'view/personas/modulo4/modulo-descripcion.php' "></div>
                    </div>
                    <div role="tabpanel" class="tab-pane" id="info2">
                        <div ng-include src=" 'view/personas/modulo4/modulo-contenido.php' "></div>
                    </div>
                    <div role="tabpanel" class="tab-pane" id="info3">
                        <div ng-include src=" 'view/personas/modulo2/modulo-pqrs.php' "></div>
                    </div>
                </div>
            </div>

            </div><!--
            --><div class="col-sm-3 col-xs-12 vcenter" style="padding:0; vertical-align:top;">

                <div class="p30 roud" style="padding:40px;">
                	<div class="colorDBlue t24 ff3 mb30">Proyecta ahora tu futuro y hazlo posible</div>
                    <div class="color666 putnna t16 ff1 mb20">
                    	Programas Impartidos por instructores expertos
                        que con habilidades relevantes y demostrables.
                    </div>
                    <div class="color666 putnna t16 ff1 mb20">
                    	Nuestros programas están enfocados en construir
                        proyectos reales para el mundo real.
                    </div>
                    <div class="color666 putnna t16 ff1 mb20">
                    	Complete su formación en seis meses o menos,
                        y logre la consolidación de su empresa o negocio.
                    </div>
                </div>

                <br /><br />
                <br /><br />

                <div style="width:90%; margin:0 auto;">
                    <div class="testimonios">
                      <div><?php include "../../../view/general/testimonio.php"; ?></div>
                      <div><?php include "../../../view/general/testimonio.php"; ?></div>
                      <div><?php include "../../../view/general/testimonio.php"; ?></div>
                      <div><?php include "../../../view/general/testimonio.php"; ?></div>
                    </div>
                </div>

                <br /><br />

            </div>
        </div>

        <br /><br />

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