<div class="ionix bWhite pAA50">
	<div class="general">

    	<a href="#/personas/explorarproyectos" class="t18 ff3 color333 btnGenerionX rr40 cP" style="float:right;">Explorar Proyectos</a>
    	<div class="t40 color333 ff1">Proyectos Destacados en:</div>

        <br><br>
        <br><br>
		<div>
        <?php
			for($h=0; $h<3; $h++){
				include "../../../view/general/vista-proyecto.php";
			}
		?>
        <br style="clear:both;">
        </div>
        
        <!--
            
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