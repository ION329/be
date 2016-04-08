<div class="ionix bGray3 p100 datosAbsolutePadding2">
    <div class="general">

        <br><br><br><br />

        <div class="ff1 t40 color000 taC mb30">Conoce a nuestros mentores en:</div>
        <div class="ff5 t18 color666 taC mb30" style="max-width:800px; margin:0 auto 30px; display:none;">
        	Nuestros mentores están listos para compartir contigo sus experiencias en diferentes campos del conocimiento y guiarte
            para convertir tu idea en un modelo de negocio exitoso ¡Comienza ya!
        </div>
        
        <div class="tab taC colorBanco t80" style="max-width:800px; margin:0 auto;">
        	<div class="tab25" id="dias"></div>
            <div class="tab25" id="horas"></div>
            <div class="tab25" id="minutos"></div>
            <div class="tab25" id="segundos"></div>
        </div>
        <div class="tab taC color666 t30" style="max-width:800px; margin:0 auto;">
        	<div class="tab25">Días</div>
            <div class="tab25">Horas</div>
            <div class="tab25">Minutos</div>
            <div class="tab25">Segundos</div>
        </div>
        
        
        
		<!--
        <div class="ff5 color666 taC mb30">
        	<strong class="t14">Filtrar por sectores</strong>
            &nbsp;&nbsp;&nbsp;&nbsp;
            <select class="selecttion rr5">
            	<option>Todos los sectores</option>
            </select>
        </div>

        <div>
        	<?php for($dd=0; $dd<8; $dd++){ ?>
        	<div class="bloqueCuatro bFull bloqueCuatroIn" style="background-image:url(resources/img/demo/mod<?php echo $dd+1?>.jpg);">
            	<div class="tabAll backSlash2 cP">
                	<div class="tabIn">
                        <div class="colorfff ff5">
                        	<strong class="t18">VICTOR VALDEZ</strong><br />
                            <span class="t14">Ingeniero de Sistemas</span>
                            <br /><br />
                            <img src="resources/img/icons/soc11.png" />
                            <img src="resources/img/icons/soc22.png" />
                            <img src="resources/img/icons/soc33.png" />

                        </div>
                    </div>
                </div>
            </div>
            <?php } ?>
            <br style="clear:both;" />
        </div>
        -->

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