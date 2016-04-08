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

					<a href="#/personas/noticias?noticia=2343">

                    <div class="newPrev cP">
                        <div class="col-md-4 col-xs-4 vcenter taC"><img id="img-noti-1" src=""></div><!--
                        --><div class="col-md-8 col-xs-8 vcenter ff5">
                            <div id="titulo-noti-1" class="color000 mb10 t18" style="font-weight:700;">

                            </div>
                            <div id="contenido-noti-1" class="color999">

                            </div>
                        </div>
                    </div>

                    </a>


                    <a href="#/personas/noticias?noticia=4546">

                    <div class="newPrev cP">
                        <div class="col-md-4 col-xs-4 vcenter taC"><img id="img-noti-2" src=""></div><!--
                        --><div class="col-md-8 col-xs-8 vcenter ff5">
                            <div id="titulo-noti-2" class="color000 mb10 t18" style="font-weight:700;">

                            </div>
                            <div id="contenido-noti-2" class="color999">

                            </div>
                        </div>
                    </div>

                    </a>


                    <a href="#/personas/noticias?noticia=1548">

                    <div class="newPrev cP">
                        <div class="col-md-4 col-xs-4 vcenter taC"><img id="img-noti-3" src=""></div><!--
                        --><div class="col-md-8 col-xs-8 vcenter ff5">
                            <div id="titulo-noti-3" class="color000 mb10 t18" style="font-weight:700;">

                            </div>
                            <div id="contenido-noti-3" class="color999">

                            </div>
                        </div>
                    </div>

                    </a>

                <!--<br><br>
                <a class="t20 ff3 color666 btnGenerion rr60 cP" style="margin-left:20px;">Ver más noticias</a>
                -->
            </div><!--
            <div class="col-md-1 vcenter"></div><!--
            --><div class="col-md-6 col-xs-12 vcenter">

<?php
	$quotes_a = [
					"Emprende o te prenden.",
					"Dejarse guiar por alguien quien nunca a emprendido, es igual a que un ciego guíe a otro, solo les espera caer en el mismo hoyo.",
					"Los tres pilares de un emprendedor exitoso: Liderazgo; Estrategia y Trabajo  en equipo.",
					"Quien emprende es aquella persona que encontró la llave para su libertad y la usa.",
					"El Emprendímiento es sinónimo de libertad, no hacerlo es esclavizarce por voluntad.",
					"Emprender es vivir en sus propios términos, romper los moldes y abandonar las zonas de confort por elección.",
					"Emprender es descubrirse las alas y usarlas para lo que son; no hacerlo es vivir a rastras recogiendo las migajas que dejan caer quien lo ha hecho.",
					"Los emprendedores son aquellos que le generan el hacer a quienes por temor no lo intentan.","Ser emprender es generar riqueza, no serlo es generar sobre vivencia.",
					"Emprender es tomar el lienzo llamado tiempo, los pinceles llamados eleciones y los colores llamados acciones y pintar el mas hermoso cuadro llamado futuro.",
					"No emprender es como si un pintor permitiera que otro le tome la mano y guíe su trazo, terminara siendo parte de la creación de un mamarracho llamado frustración.",
					"Emprender es arar tras los bueyes, no hacerlo es tirar del yugo y convertirse en uno."
	];
	$random_keys = array_rand($quotes_a);

 ?>

                <div style="width:90%; margin:0 auto;">
                    <div class="testimonios">
                      <div>
						<div class="taC">
							<center><img src="resources/img/demo/vdr.png" class="rr50" /></center>
						    <br /><br />

						    <div class="t16 ff5 color333">
						    	"<?php echo $quotes_a[$random_keys];?>"
							</div>

						    <br /><br />

						    <div class="t14 ff5 color999" style="font-weight:700">Victor Ramírez</div>
						    <div class="t14 ff5 color999">Fundador Banco de la Vida</div>
						</div>
                      </div>
                      <div>
						<div class="taC">
							<center><img src="resources/img/demo/testimonio2.png" class="rr50" /></center>
						    <br /><br />

						    <div class="t16 ff5 color333">
						    	"Me gusta Banco del emprendimiento, por que no solo brinda apoyo a emprendimientos tecnológicos si no tambien a cualquiera que quiera emprender"
							</div>

						    <br /><br />

						    <div class="t14 ff5 color999" style="font-weight:700">Marlene Agudelo</div>
						    <div class="t14 ff5 color999">Enfermera</div>
						</div>
                      </div>
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


