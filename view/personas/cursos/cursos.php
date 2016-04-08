<div class="ionix bWhite p50">
    <div class="general">

        <br><br><br><br />
        
        <div class="ff1 t40 color000 taC mb30">Conoce los mejores cursos gratuitos en:</div>
        
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

        <div style="display:none;">
        	<?php for($dd=0; $dd<8; $dd++){ ?>
                <div class="bloqueCurso">
                    <div class="bFull bloqueCursoIn" style="background-image:url(resources/img/demo/cur<?php echo $dd+1?>.jpg);">
                        <div class="tabAll backSlash3">
                            <div class="tabIn">
                                <div class="colorfff ff5">
                                    <a href="#/personas/curso" class="t14 ff3 colorfff btnGenerion3 rr60 cP">Ver Tutorial</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="tab" style="height:120px; padding-bottom:20px;">
                    	<div class="tabIn taL">
                        	<div class="ff3 p10">
                            	6 consejos para aumentar la motivación
                                <br /><br />
                                <span class="tagion t12 ff0 rr20 color333">Emprendimiento</span>
                            </div>
                        </div>
                    </div>
                </div>
            <?php } ?>
            <br style="clear:both;" /><br /><br />

            <center>
                <ul class="pager ff2">
                	<li><a href="">Anterior</a></li>
					&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                    <li class="onlyPCBoo"><a href="">1</a></li>
                    <li class="onlyPCBoo" class="active"><a href="">2</a></li>
                    <li class="onlyPCBoo"><a href="">3</a></li>
                    <li class="onlyPCBoo"><a href="">4</a></li>
                    <li class="onlyPCBoo"><a href="">5</a></li>
                    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                    <li><a href="">Siguiente</a></li>
                </ul>
            </center>

        </div>

    </div>
</div>

<br /><br /><br />




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