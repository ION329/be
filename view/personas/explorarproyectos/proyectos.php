<div class="ionix bWhite pAA50">
	<div class="general">






        <div class="row" style="">
        	<div class="col-sm-6 col-xs-6 vcenter">
            	<div class="ff6 color666 taL t20">
            		<strong style="color:#09C;">5.348</strong> proyectos activos
                </div>
            </div><!--
			--><div class="col-sm-6 col-xs-6 vcenter">
            	<div class="ff5 color666 taR">
                    <strong class="t14">Ver por categorías</strong>
                    &nbsp;&nbsp;&nbsp;&nbsp;
                    <select class="selecttion22 rr5">
                        <option>Todos los proyectos</option>
                    </select>
                </div>
            </div>
        </div>

        <br><br>
        <br><br>
        
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

        <div>
            <!-- Tab panes -->
            <div class="tab-content p30">
                <div role="tabpanel" class="tab-pane active" id="info1">
               		<?php
						$h=0;
                    	for($hh=0; $hh<9; $hh++){
							include "../../../view/general/vista-proyecto.php";

							if($h!=2) 	$h++;
							else		$h=0;
						}
					?>
                </div>
                <div role="tabpanel" class="tab-pane" id="info2">
                    <?php
						$h=1;
                    	for($hh=0; $hh<9; $hh++){
							include "../../../view/general/vista-proyecto.php";
                    	}
					?>
                </div>
                <div role="tabpanel" class="tab-pane" id="info3">
                    <?php
						$h=0;
                    	for($hh=0; $hh<9; $hh++){
							include "../../../view/general/vista-proyecto.php";
                    	}
					?>
                </div>
                <div role="tabpanel" class="tab-pane" id="info4">
                    <?php
						$h=2;
                    	for($hh=0; $hh<9; $hh++){
							include "../../../view/general/vista-proyecto.php";
                    	}
					?>
                </div>
            </div>
        </div>


        <br style="clear:both;"><br /><br />


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

