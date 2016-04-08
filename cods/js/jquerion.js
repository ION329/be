// JavaScript Document

var Ion = {

	init : function()
	{
		$(document).ready(function() {

			var alto = $(window).height();
			var ancho = $(window).width();

			$(".closeModalion").click(function() {
				$('.modal').modal('hide');
		  	});		
			
			$('.tabShut').css('height', alto);

			$( ".jQ1" ).live( "click", function() {
			  $( ".icjQ1" ).attr({ src: "resources/img/icons/fun1.png"});
			  $( ".icjQ2" ).attr({ src: "resources/img/icons/fun22.png"});
			  $( ".icjQ3" ).attr({ src: "resources/img/icons/fun33.png"});
			  $( ".icjQ4" ).attr({ src: "resources/img/icons/fun44.png"});
			});
			$( ".jQ2" ).live( "click", function() {
			  $( ".icjQ1" ).attr({ src: "resources/img/icons/fun11.png"});
			  $( ".icjQ2" ).attr({ src: "resources/img/icons/fun2.png"});
			  $( ".icjQ3" ).attr({ src: "resources/img/icons/fun33.png"});
			  $( ".icjQ4" ).attr({ src: "resources/img/icons/fun44.png"});
			});
			$( ".jQ3" ).live( "click", function() {
			  $( ".icjQ1" ).attr({ src: "resources/img/icons/fun11.png"});
			  $( ".icjQ2" ).attr({ src: "resources/img/icons/fun22.png"});
			  $( ".icjQ3" ).attr({ src: "resources/img/icons/fun3.png"});
			  $( ".icjQ4" ).attr({ src: "resources/img/icons/fun44.png"});
			});
			$( ".jQ4" ).live( "click", function() {
			  $( ".icjQ1" ).attr({ src: "resources/img/icons/fun11.png"});
			  $( ".icjQ2" ).attr({ src: "resources/img/icons/fun22.png"});
			  $( ".icjQ3" ).attr({ src: "resources/img/icons/fun33.png"});
			  $( ".icjQ4" ).attr({ src: "resources/img/icons/fun4.png"});
			});

			$( ".modE1" ).live( "click", function() {
			  $( ".icjQ1" ).attr({ src: "resources/img/icons/mode1.png"});
			  $( ".icjQ2" ).attr({ src: "resources/img/icons/mode22.png"});
			  $( ".icjQ3" ).attr({ src: "resources/img/icons/mode33.png"});
			});
			$( ".modE2" ).live( "click", function() {
			  $( ".icjQ1" ).attr({ src: "resources/img/icons/mode11.png"});
			  $( ".icjQ2" ).attr({ src: "resources/img/icons/mode2.png"});
			  $( ".icjQ3" ).attr({ src: "resources/img/icons/mode33.png"});
			});
			$( ".modE3" ).live( "click", function() {
			  $( ".icjQ1" ).attr({ src: "resources/img/icons/mode11.png"});
			  $( ".icjQ2" ).attr({ src: "resources/img/icons/mode22.png"});
			  $( ".icjQ3" ).attr({ src: "resources/img/icons/mode3.png"});
			});



			$( ".jQ11" ).live( "click", function() {
			  $( ".icjQ1" ).attr({ src: "resources/img/icons/fun111.png"});
			  $( ".icjQ2" ).attr({ src: "resources/img/icons/fun22.png"});
			  $( ".icjQ3" ).attr({ src: "resources/img/icons/fun33.png"});
			  $( ".icjQ4" ).attr({ src: "resources/img/icons/fun44.png"});
			});
			$( ".jQ22" ).live( "click", function() {
			  $( ".icjQ1" ).attr({ src: "resources/img/icons/fun11.png"});
			  $( ".icjQ2" ).attr({ src: "resources/img/icons/fun222.png"});
			  $( ".icjQ3" ).attr({ src: "resources/img/icons/fun33.png"});
			  $( ".icjQ4" ).attr({ src: "resources/img/icons/fun44.png"});
			});
			$( ".jQ33" ).live( "click", function() {
			  $( ".icjQ1" ).attr({ src: "resources/img/icons/fun11.png"});
			  $( ".icjQ2" ).attr({ src: "resources/img/icons/fun22.png"});
			  $( ".icjQ3" ).attr({ src: "resources/img/icons/fun333.png"});
			  $( ".icjQ4" ).attr({ src: "resources/img/icons/fun44.png"});
			});
			$( ".jQ44" ).live( "click", function() {
			  $( ".icjQ1" ).attr({ src: "resources/img/icons/fun11.png"});
			  $( ".icjQ2" ).attr({ src: "resources/img/icons/fun22.png"});
			  $( ".icjQ3" ).attr({ src: "resources/img/icons/fun33.png"});
			  $( ".icjQ4" ).attr({ src: "resources/img/icons/fun444.png"});
			});


			$(window).resize(function() {
				var alto = $(window).height();
				var ancho = $(window).width();

				setTimeout('Ion.calcularAlturas()', 10);
				setTimeout('Ion.calcularAlturas()', 1000);

			});


		// // calcularAlturas()
		// 	setTimeout('calcularAlturas()', 10);
		// setTimeout('calcularAlturas()', 1000);
		// 	setTimeout('calcularAlturas()', 3000);

			$("*").click(function() {
		 		setTimeout('calcularAlturas()', 10);
				setTimeout('Ion.calcularAlturas()', 1000);
			});

		});

		Ion.calcularAlturas();
	},

	calcularAlturas : function(){
		var alto = $(window).height();
		var ancho = $(window).width();
		
		$('.tabShut').css('height', alto);

		var altoDatosAbsolute 	= $(".datosAbsolute").height();
		var altoDatosAbsolute2	= $(".datosAbsolute2").height();
		if(ancho < 780){
			$(".datosAbsolutePadding").css('padding-top', altoDatosAbsolute - 20);
			$(".datosAbsolutePadding2").css('padding-top', altoDatosAbsolute2);
		}else{
			$(".datosAbsolutePadding").css('padding-top', altoDatosAbsolute - 70);
			$(".datosAbsolutePadding2").css('padding-top', altoDatosAbsolute2 - 10);
		}

		var bannerGen = $(".bannerGen").width();
		$(".bannerGen").css('height', (bannerGen/2.9));

		var bannerGenMin = $(".bannerGenMin").width();
			$(".bannerGenMin").css('height', (bannerGenMin/4.2));

		var formacion = $(".formacion").width();
			$(".formacionIn").css('height', (formacion-(formacion/4)));

		var bloqueCuadro = $(".bloqueCuadro").width();
			$(".bloqueCuadro").css('height', (bloqueCuadro));

		var bloqueCuatro = $(".bloqueCuatro").width();
			$(".bloqueCuatro").css('height', (bloqueCuatro));

		var bloqueCurso = $(".bloqueCurso").width();
			$(".bloqueCurso").css('height', (bloqueCurso + 120));
			$(".bloqueCursoIn").css('height', (bloqueCurso));
			$(".bloqueCurso .backSlash3").css('height', (bloqueCurso + 120));

		var fact2 = $(".fact2").height();
			$(".fact1, .fact3").css('height', fact2+90);

		var inv2 = $(".inv2").height();
			$(".inv1, .inv3").css('height', inv2+90);

		var cloudion = $(".cloudion").width();
			$(".cloudion").css('height', (cloudion/1.6));

		setTimeout('Ion.calcularTopFor()', 1000);

		Ion.calcularTopFor();
		// Ion.obtain_selected();

	},

	calcularTopFor : function(){

	var formacion = $(".formacion").width();
	var formacionH = $(".formacion").height();
		$(".infoModulo").css('bottom', (formacionH -(formacion-(formacion/4)))+20 );

	},

};

Ion.init();



