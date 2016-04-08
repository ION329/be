<div class="ionix bWhite p50 datosAbsolutePadding2">
    <div class="general">

        <br><br>
        

      
        
		<div>
        <?php
        	$daties =  array (
				array(1, "Análisis de mercados y tendencias para la consecución de ideas"),
				array(2, "Fortalecimiento y maduración de la idea"),
				array(3, "Creación de un proyecto de negocio basado en la idea"),
				array(4, "Proyección y creación del negocio"),
				array(5, "Fortalecimiento y maduración del negocio"),
				array(6, "Mercado, exposición y ventas")
			); 
			for($dd=0; $dd<6; $dd++){
		?>
        	<a href="#/personas/modulo<?php echo $dd+1; ?>">
                <div class="formacion texr<?php echo $dd+1; ?>">
                    <div class="formacionIn for<?php echo $dd+1; ?> for0">
                        <div class="infoModulo">
                            <div class="tab">
                                <div class="tabIn taL">
                                    <span class="tagModulo t18 ff6 colorfff rr20">Módulo <?php echo $dd+1; ?></span>
                                    &nbsp;
                                    <div class="t14 ff5 colorfff iCalend"><div class="tabIn">Duración: 1 mes</div></div>

                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="forTti p20 t20 ff6"><?= $daties[$dd][1]?></div>
                </div>
            </a>
        <?php } ?>
        <br style="clear:both;" />
		</div>

    </div>
</div>



<script>

var anioFinal = 2016 //año de la fecha
var mesFinal = 2 //mes de la fecha
var diaFinal = 12 //día de la fecha

mesFinal -= 1
function faltan(){
	fechaFinal = new Date(anioFinal,mesFinal,diaFinal)
	fechaActual = new Date()
	diferencia = fechaFinal - fechaActual
	diferenciaSegundos = diferencia /1000
	diferenciaMinutos = diferenciaSegundos/60
	diferenciaHoras = diferenciaMinutos/60
	diferenciaDias = diferenciaHoras/24
	diferenciaHoras2 = parseInt(diferenciaHoras) - (parseInt(diferenciaDias) *24)
	diferenciaMinutos2 = parseInt(diferenciaMinutos) - (parseInt(diferenciaHoras) * 60)
	diferenciaSegundos2 = parseInt(diferenciaSegundos) - (parseInt(diferenciaMinutos) * 60)
	diferenciaDias = parseInt(diferenciaDias)
	if (diferenciaDias < 10 && diferenciaDias > -1){diferenciaDias = "0" + diferenciaDias}
	if(diferenciaHoras2 < 10 && diferenciaHoras2 > -1){diferenciaHoras2 = "0" + diferenciaHoras2}
	if(diferenciaMinutos2 < 10 && diferenciaMinutos2 > -1){diferenciaMinutos2 = "0" + diferenciaMinutos2}
	if(diferenciaSegundos2 < 10 && diferenciaSegundos2 > -1){diferenciaSegundos2 = "0" + diferenciaSegundos2}
	if(diferenciaDias <= 0 && diferenciaHoras2<= 0 && diferenciaMinutos2 <= 0 && diferenciaSegundos2 <= 0){
		diferenciaDias = 0
		diferenciaHoras2 = 0
		diferenciaMinutos2 = 0
		diferenciaSegundos2 = 0
		document.getElementById('pepe').innerHTML = mensajeInicio + diferenciaDias + " días, " + diferenciaHoras2 + " horas, " + diferenciaMinutos2 + " minutos, " + diferenciaSegundos2 + mensajeFinal 
	}else{
		document.getElementById('dias').innerHTML = diferenciaDias;
		document.getElementById('horas').innerHTML = diferenciaHoras2; 
		document.getElementById('minutos').innerHTML = diferenciaMinutos2;
		document.getElementById('segundos').innerHTML =  diferenciaSegundos2; 
		setTimeout('faltan()',1000)
	}
}

</script>
<script language="JavaScript">faltan()</script>