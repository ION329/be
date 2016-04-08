var menuType, myParam, noticia, general_location, end_charge=0;

var Banco = {

	init: function(){

		var bancoEmprendimiento = angular.module( 'ion' , ['ngRoute']).factory('httpInterceptor', function ($q, $rootScope, $log) {

	    var loadingCount = 0;

		    return {
		        request: function (config) {
		            if(++loadingCount === 1) $rootScope.$broadcast('loading:progress');
		            return config || $q.when(config);
		        },

		        response: function (response) {
		            if(--loadingCount === 0) $rootScope.$broadcast('loading:finish');
		            return response || $q.when(response);
		        },

		        responseError: function (response) {
		            if(--loadingCount === 0) $rootScope.$broadcast('loading:finish');
		            return $q.reject(response);
		        }
		    };

		});

		bancoEmprendimiento.config( [ '$locationProvider','$routeProvider','$httpProvider', function($locationProvider , $routeProvider, $httpProvider) {

			// $locationProvider.html5Mode(true);

	//PERSONAS
	//////// HOME
			$routeProvider.when('/:menuType/inicio-personas', {
				templateUrl: 'view/personas/home.php',
				controller: 'control_init'
	//////// RED EMPRENDIMIENTO
			}).when('/:menuType/red-emprendimiento', {
				templateUrl: 'view/personas/red-emprendimiento.php',
				controller: 'control_init'
	//////// RED JUVENIL
			}).when('/:menuType/red-juvenil', {
				templateUrl: 'view/personas/red-juvenil.php',
				controller: 'control_init'
	//////// BANCO EMPRENDIMIENTO
			}).when('/:menuType/banco-emprendimiento', {
				templateUrl: 'view/personas/banco-emprendimiento.php',
				controller: 'control_init'
	//////// RED MAS 26
			}).when('/:menuType/red-26', {
				templateUrl: 'view/personas/red-26.php',
				controller: 'control_init'	
	//////// RED MENTORES
			}).when('/:menuType/red-mentores', {
				templateUrl: 'view/personas/red-mentores.php',
				controller: 'control_init'
	//////// ENTRENAMIENTO
			}).when('/:menuType/entrenamiento', {
				templateUrl: 'view/personas/entrenamiento.php',
				controller: 'control_init'
	//////// CURSOS
			}).when('/:menuType/cursos', {
				templateUrl: 'view/personas/cursos.php',
				controller: 'control_init'
	//////// CURSO
			}).when('/:menuType/curso', {
				templateUrl: 'view/personas/curso.php',
				controller: 'control_init'
	//////// FORMACION
			}).when('/:menuType/formacion', {
				templateUrl: 'view/personas/formacion.php',
				controller: 'control_init'
	//////// MÓDULO
			}).when('/:menuType/modulo', {
				templateUrl: 'view/personas/modulo.php',
				controller: 'control_init'
	//////// MÓDULO
			}).when('/:menuType/modulo1', {
				templateUrl: 'view/personas/modulo1.php',
				controller: 'control_init'
	//////// MÓDULO
			}).when('/:menuType/modulo2', {
				templateUrl: 'view/personas/modulo2.php',
				controller: 'control_init'
	//////// MÓDULO
			}).when('/:menuType/modulo3', {
				templateUrl: 'view/personas/modulo3.php',
				controller: 'control_init'
	//////// MÓDULO
			}).when('/:menuType/modulo4', {
				templateUrl: 'view/personas/modulo4.php',
				controller: 'control_init'
	//////// MÓDULO
			}).when('/:menuType/modulo5', {
				templateUrl: 'view/personas/modulo5.php',
				controller: 'control_init'
	//////// MÓDULO
			}).when('/:menuType/modulo6', {
				templateUrl: 'view/personas/modulo6.php',
				controller: 'control_init'
	//////// INVIERTA YA
			}).when('/:menuType/inviertaya', {
				templateUrl: 'view/personas/inviertaya.php',
				controller: 'control_init'
	//////// INVIERTA YA
			}).when('/:menuType/explorarproyectos', {
				templateUrl: 'view/personas/explorarproyectos.php',
				controller: 'control_init'
	//////// INVIERTA YA
			}).when('/:menuType/comofunciona', {
				templateUrl: 'view/personas/comofunciona.php',
				controller: 'control_init'
	//////// INVIERTA YA
			}).when('/:menuType/empezarproyecto', {
				templateUrl: 'view/personas/empezarproyecto.php',
				controller: 'control_init'
	//////// NOTICIAS
			}).when('/:menuType/noticias', {
				templateUrl: 'view/personas/noticias.php',
				controller: 'control_init'

	// EMPRESAS
	//////// HOME
			}).when('/:menuType/inicio-empresas', {
				templateUrl: 'view/empresas/home.php',
				controller: 'control_init'

	// ORGANIZACIÓN
	//////// HOME
			}).when('/:menuType/inicio-organizacion', {
				templateUrl: 'view/organizacion/home.php',
				controller: 'control_init'
	//////// TÉRMINOS Y CONDICIONES
			}).when('/:menuType/terminos', {
				templateUrl: 'view/organizacion/terminos.php',
				controller: 'control_init'
	//////// POLÍTICAS DE PRIVACIDAD
			}).when('/:menuType/politicas', {
				templateUrl: 'view/organizacion/politicas.php',
				controller: 'control_init'

	// USUARIOS
	//////// REGISTRO
			}).when('/:menuType/registro', {
				templateUrl: 'view/usuarios/registro.php',
				controller: 'control_init'
	//Buena Educacion
			}).when('/buenaeducacion', {
				templateUrl: 'view/buenaeducacion/home.php',
				controller: 'control_init'
	// VACÍO
			}).otherwise({
				redirectTo: '/',
				templateUrl: 'view/personas/home.php',
				controller: 'control_init'
			});

			$httpProvider.interceptors.push('httpInterceptor');

		}]);



		bancoEmprendimiento.run( function ($rootScope) {

    		$rootScope.$on('loading:progress', function(){
			    console.log("Inicia la carga");

			 //    $("#preload").css('display','block');
				// $("#load_status").css('display','block');

			});

			$rootScope.$on('loading:finish', function(){


			console.log("Termina la carga");

			  		Ion.calcularAlturas();

			  		if( menuType == undefined)
					{
						menuType = "personas";
					}

					setTimeout(function(){
					  	Banco.obtain_selected(menuType);
					}, 100);

			  		console.log(myParam);
			  		console.log("Url de la pagina: "+general_location);

			  		setTimeout(function(){

						  	// $("#preload").css('display','none');
						  	// $("#load_status").css('display','none');

			  		}, 1000);

			end_charge++;

					var data = [ ["1","resources/img/demo/noti1.jpg","Inventores con todos los tornillos","Micaton, una herramienta lanzada en 2014 por dos ingenieros gallegos, llega a Norteamérica","resources/img/demo/noti1-big.jpg","Atornillar con una mano sin que el tornillo se caiga con un sencillo soporte pensado tanto para profesionales como para manitas de fin de semana. Eso logra Micaton, el sujetador de tornillos patentado por dos ingenieros vigueses que comenzaron a comercializarlo a principios de 2014 y que ahora desembarcará en Estados Unidos. En 2015 lograron encargos por medio millón de euros de un producto cuyo coste por unidad ronda los dos euros.<br>\
<br>\
El artilugio es un pequeño cilindro hueco que se inserta en la punta del taladro o destornillador. Un potente imán sujeta el perno, y parte de su cuerpo es de goma deformable, lo que permite tanto proteger la superficie en la que se atornilla como una aproximación a ella con el máximo de potencia de la herramienta que se use. Esas características ya existían por separado en varios productos, pero Micaton las agrupa en uno tras más de cuatro años de desarrollo. El trabajo que requiere que una idea se convierta primero en invento y luego en negocio viable.<br>\
<br>\
La denominación del sujetatornillos viene de Micaton Ergonomics SL, la empresa que fundaron en 2010 Michael W. Pérez y Luis Vaamonde Cotón aprovechando el nombre del primero, el apellido del segundo y la experiencia de ambos en sus empleos previos en fabricación de muebles y electrónica naval. Durante cuatro años, con financiación propia y familiar, se volcaron en mejorar su idea con pruebas profesionales en grandes empresas hasta dar con el producto que es hoy. “Si hacíamos algo, tenía que ser lo mejor”, dice Michael. Pero no lograban colocarlo en el mercado. Hasta que a finales de 2013 contactaron con Roberto Marijuán y Juan José Romero, consultores de marketing, comunicación y ventas. Roberto recuerda lo mal que se encontraron las cuentas de la empresa y lo imposible que les era conseguir en los bancos el dinero que necesitaban para comercializar Micaton. Buscaron financiación privada y la encontraron en Redinvest, la red de inversores del Círculo de Empresarios de Galicia. “Les pedimos 60.000 euros y nos dijeron que o nos daban 120.000 o nos íbamos a quedar por el camino, pero que a cambio Juan José y yo nos teníamos que integrar en la empresa para empezar a vender el producto, sin esperar a seguir mejorándolo”. Hoy son seis las personas que trabajan en la firma.<br>\
<br>\
En 2015 Micaton fue elegido mejor invento del año en la feria Ferroforma de Bilbao, la principal del sector ferretero en España. También son Premio Joven Empresario del Año de Pontevedra. Galardones que reconocen su éxito en todo tipo de mercados, tanto en ferreterías minoristas de una quincena de países europeos, principalmente España y Francia, como a través de Internet en los 87 países a los que ya han enviado algún Micaton —se vende en blísteres de varias unidades o con otros accesorios—, o grandes empresas de la automoción con las que siguen desarrollando sus ideas. “El producto se pensó para profesionales, iniciamos ventas en el bricolaje y ahora nos expandimos entre profesionales”, detalla Michael.<br>\
<br>\
Objetivo claro<br>\
<br>\
El objetivo de la empresa es Estados Unidos y Canadá, que acaparan el 60% del mercado global de la ferretería y el bricolaje y donde en 2014 ya tuvieron una buena acogida en el National Hardware Show de Las Vegas. Para desembarcar en Norteamérica lanzaron a finales de 2015 una campaña de micromecenazgo en Internet con la que esperaban recaudar 50.000 dólares en 50 días. Recibieron 116.620 dólares de 3.399 patrocinadores, por lo que ahora reformulan su plan de internacionalización para hacerlo más ambicioso.<br>\
<br>\
La acogida en el extranjero también la comprobaron sin salir de su ciudad. El pasado septiembre colocaron un pequeño mostrador de venta junto a la terminal de transatlánticos del puerto de Vigo, a la que cada año llegan 250.000 cruceristas, principalmente del norte de Europa. “Tuvimos días de 900 o 1.000 euros de caja”, destacan. De momento, Micaton recorre un largo viaje hasta llegar a sus usuarios finales. Se fabrica en China porque es el principal productor de neodimio, el elemento clave del imán. Pero el constante incremento de pedidos y la necesidad de agilizar sus tiempos de respuesta hacen que sus creadores estén trabajando para acercar el montaje a Ourense."] , ["2","resources/img/demo/noti2.jpg","El cerebro que habla con sus clientes","IMind Technology desarrolla un programa capaz de comprender el lenguaje humano","resources/img/demo/noti2-big.jpg","Un pastor alemán puede ser un perro o un señor que tiene ovejas: el análisis del contexto nos permite comprender la diferencia entre ambos significados. A partir de esta idea, un grupo de emprendedores españoles han creado iMind Technology, una spin off apadrinada por la empresa tecnológica Full on Net que durante ocho años ha trabajado en un programa informático sobre inteligencia artificial.<br>\
<br>\
Su producto es, según sus fundadores, “un cerebro artificial sin conciencia que permite a la máquina ir aprendiendo a medida que se interactúa con ella”. El Banco Santander y Vodafone han adoptado esta herramienta, capaz de procesar el lenguaje e interpretar lo que una persona quiere decir, y que se anuncia como un asistente para realizar ventas, un sustituto de un centro de atención telefónica o un programa para el servicio interno de cualquier compañía. “Es una herramienta enfocada a cómo pensamos las personas, intenta amoldarse a nuestros mecanismos psicológicos”, señala David Martínez, ingeniero informático y uno de los creadores. “Esa mente artificial interactúa con los clientes y los entiende. Comprende su situación emocional. Se diferencia de Siri [el asistente de Apple] en que Siri sólo entiende el idioma, no el sentido de las frases”.<br>\
<br>\
Su director, Ramón J. Fonte, psicólogo de profesión, cree que esa tecnología “puede ayudar tanto a las organizaciones como a las personas”. Pone como ejemplo una empresa que venda 1.000 referencias de productos. Semantics, su software, se informa sobre todas ellas y aprende a asesorar al cliente que busca un producto concreto: “Eso consigue unos importantes ahorros de costes”, señala su director.<br>\
<br>\
“Es capaz de aprender de lo que está ocurriendo y tomar decisiones basándose en lo que tú le pides”. Una de sus características es que incorpora un análisis de sentimientos por medio de la biometría de la voz, “lo que abre las puertas al procesamiento de aspectos típicamente humanos, como la ironía o el sarcasmo”. También recuerda las distintas voces, lo que le ayuda a mejorar la interac­ción gracias a que almacena experiencias previas. Pero no necesita ser entrenado por una voz concreta, como algunos GPS: su índice de acierto es independiente del hablante gracias a una serie de algoritmos que extrapolan las características de cualquier voz y establecen un patrón general.<br>\
<br>\
Se comparan, e incluso dicen estar por delante de grandes multinacionales. “Hay algunas herramientas similares en el mercado, pero no están tan avanzadas como la nuestra en la interacción mental, es decir, en lo que va más allá de la tecnología, la capacidad de comprender”, señala Martínez. Más de 20 desarrolladores y 2,5 millones de euros de inversión han sido necesarios para que Semantics llegue al mercado. “No existe nada en castellano que funcione con esta precisión”, señalan sus creadores, que este año facturarán cinco millones de euros. El producto permite incorporar diccionarios temáticos en su memoria (con terminología técnica procedente de áreas como la financiera o la científica). Es compatible con todo tipo de programas de otros fabricantes y cumple con las normas de seguridad estándar del mercado. Su implantación puede realizarse en unos tres meses, y responde a los humanos tanto por voz como a través de la escritura.<br>\
<br>\
Información clave<br>\
Semantics se alimenta de los datos de la empresa, pero también es capaz de leer otro tipo de información heterogénea contenida en blogs, redes sociales o vídeos. “Puede organizar toda esa información y alinearla con el objetivo que tenga una compañía. La calidad de los datos es su punto fuerte”, asegura Fonte. “Está orientada al big data, así que cuanto más contenido existe en el sistema, más eficaz resulta”.<br>\
<br>\
Los emprendedores, afincados en Madrid, quieren hacer que 2016 sea el verdadero año de lanzamiento, aunque llevan tres comercializando el software. No se han planteado vender la empresa: “Nos interesa desarrollarla, esa es nuestra principal preocupación”. Su reto comercial es llegar a grandes clientes internacionales compitiendo con tecnológicas como Facebook, Google o IBM. Todo desde una pequeña oficina de Madrid."] , ["3","resources/img/demo/noti3.jpg","Iniciar un negocio en Colombia, dolor de cabeza para emprendedores","Así lo dice informe 'Doing Business', que asegura que pese a reformas aún es un proceso engorroso.","resources/img/demo/noti3-big.jpg","Iniciar un negocio, registrarlo, obtener un permiso para comprar una propiedad si se desea expandirlo, pagar impuestos, acceder a un crédito y exportar son requisitos que no han dejado de ser un dolor de cabeza para los innovadores en Colombia.<br>\
<br>\
Si bien el país ha hecho reformas para facilitarles el camino a los emprendedores, el proceso de construir una empresa, y por esta vía generar empleo y ayudar a impulsar la economía, sigue siendo engorroso en el país.<br>\
<br>\
Así lo muestra el informe ‘Doing Business 2016’, presentado ayer por el Banco Mundial, según el cual Colombia pasó del puesto 52 al 54 en un escalafón de 189 países, retrocediendo así dos lugares.<br>\
<br>\
La posición es aún más llamativa, teniendo en cuenta que, durante el año pasado, en esta nación se anunció con bombos y platillos que solo teníamos 33 países por encima en el famoso indicador, tras ocupar el puesto número 34, y ahora tenemos 53 países arriba. Esto se debe, según explicó Augusto López-Claros, director del grupo de indicadores globales del Banco Mundial, a que hubo un cambio en la metodología para obtener los datos.<br>\
<br>\
Es así como en el escalafón presentado ayer, cuya fecha de corte es el primero de junio de 2015, los países que ocupan los diez primeros lugares son Singapur, Nueva Zelanda, Dinamarca, Corea, Hong Kong, el Reino Unido, Estados Unidos, Suecia, Noruega y Finlandia.<br>\
<br>\
Cuarto en la región<br>\
<br>\
En el contexto de América Latina, Colombia aparece mejor posicionada, toda vez que entre sus vecinos se ubica en el cuarto lugar, después de México (puesto 38), Chile (48) y Perú (50).<br>\
<br>\
Una de las razones por las cuales Colombia bajó dos casillas, según lo expresado por López-Claros, es que “otros países están haciendo mejores cosas”.<br>\
<br>\
No obstante, esta nación también ha adoptado reformas, en los últimos 12 años, relacionadas con todas las áreas que mide el ‘Doing Business’, lo que ha contribuido a avanzar en la década, teniendo en cuenta que en un año como el 2005 era necesario realizar 70 pagos anuales para cumplir con la obligación tributaria, y hoy solo se requieren 11.<br>\
<br>\
El Banco Mundial destaca, por ejemplo, la reforma tributaria del 2012, que les redujo a los empleadores los impuestos sobre la nómina (le quitan a las empresas el 8 por ciento, del 12 por ciento sobre el salario, que es el costo de la salud del empleado, cuando su ingreso es inferior a 10 salarios mínimos).<br>\
<br>\
Esta medida hizo que el pago de impuestos sea menos costoso para las empresas, aunque, en esta área en particular, el país quedó en el puesto 136 del escalafón.<br>\
<br>\
Este trámite para las empresas es precisamente uno de los que señala López-Claros como uno de los desafíos para el país, aunque los avances se observan en la reducción de horas que les toma el cumplimiento de la obligación: en el 2004, las empresas en Colombia tardaban 456 horas (19 días) en cumplir esta tarea, y en el 2015 la cifra se redujo a 239 horas (10 días).<br>\
<br>\
Vale la pena destacar que, en el país que ocupó el primer lugar en el ‘Doing Business’, Singapur, los empresarios se tardan 83 horas al año (3 días) en pagar todos los impuestos.<br>\
<br>\
Por el lado de Colombia, la mejoría, según explicó López-Claros, se debe a la introducción de mecanismos electrónicos para hacer los principales pagos tributarios. No obstante, el uso de estas herramientas no se ha logrado masificar aún, y, según agregó el funcionario del organismo internacional, también puede contribuir a que este indicador no mejore el hecho de que no se logre una mayor recaudación.<br>\
<br>\
Tal panorama refleja la inequidad tributaria que hay dentro del sector empresarial, pues solo unas pocas aportan impuestos, lo que hace que, según el ‘Doing Business’, la carga del total de impuestos sea del 69 por ciento de las ganancias.<br>\
<br>\
Facilidad crediticia<br>\
<br>\
En Colombia se adoptaron normas para que los inversionistas locales puedan acceder más fácilmente a un crédito. Esto se hizo a través de la ley sobre garantías mobiliarias (amplía el rango de activos que pueden usarse como garantía para respaldar un empréstito).<br>\
<br>\
El ‘Doing Business’ solo menciona esta reforma y, aún así, este es el mejor indicador que tiene el país (puesto número 2 después de Nueva Zelanda) y el que más impulsó la posición general de Colombia.<br>\
<br>\
Muchos retos<br>\
<br>\
Los indicadores en los que más se raja el país son cumplimiento de contratos (puesto 180), aunque se adoptaron mecanismos para simplificar y acelerar los procedimientos judiciales en disputas comerciales.<br>\
Pero la realidad que viven los empresarios en este aspecto es que la demora para finiquitar este trámite es de 1.288 días y el costo, del 45,8 por ciento de lo que se va a reclamar. En Singapur, donde menos se demora una empresa para hacer cumplir un contrato, se tardan 150 días.<br>\
<br>\
Según López-Claros, “no hay muchos países en el mundo en los que se tome tanto tiempo, casi tres años, hacer cumplir un contrato. Hay mucho por hacer en este proceso”.<br>\
<br>\
Comercio exterior<br>\
<br>\
De igual manera, resulta una dificultad para los empresarios un punto clave para la expansión de estas: el comercio transfronterizo. En este aspecto, Colombia ocupó el puesto 110, debido principalmente a los altos costos del transporte para importar y exportar y a la cantidad de tiempo que esta actividad requiere.<br>\
Con estos indicadores, Colombia obtuvo un puntaje de 70,43 puntos sobre 100, frente a los 69,89 que tenía en el anterior informe.<br>\
<br>\
El país que lleva la delantera en el ‘Doing Business’ tiene un puntaje de 87,34, lo que señala que la calificación de Colombia aún está en niveles regulares.<br>\
<br>\
Espacio para mejorar<br>\
<br>\
Augusto López-Claros respondió inquietudes sobre los resultados de Colombia en el ‘Doing Business’.<br>\
<br>\
En 2014 hubo un cambio tributario fuerte que incrementó impuestos a las empresas. ¿Se alcanza a reflejar en este informe?<br>\
Cualquier cambio después de junio del 2015 sería reflejado en el informe del próximo año.<br>\
<br>\
¿Cree usted que en el informe del próximo año, el país podría volver a perder posiciones?<br>\
Los países están continuamente examinando las buenas prácticas y hay cierto grado de competencia para mejorar el ambiente empresarial. Por lo tanto, lo que sucederá no se puede predecir. Más aún, porque influye mucho lo que hagan los demás países, pero aspectos como el nuevo Estatuto Aduanero en Colombia podrían aliviar el ambiente para las empresas. Sin embargo, soy reticente a garantizar una subida en el escalafón del próximo año.<br>\
<br>\
Si hubo mejoría en el país, ¿por qué no se ve reflejada en creación de empresas o expansión de las mismas?<br>\
Los inversionistas, los extranjeros en particular, responden al ambiente institucional y legal de un país, pero hay otros aspectos que para ellos son importantes. El tamaño de la economía y el dinamismo de esta, por ejemplo. Colombia tiene tareas por hacer, se puede mejorar siempre en la creación de un ambiente más atractivo para hacer empresa.<br>\
<br>\
¿Qué efecto tendrá sobre los indicadores del DB la crisis de los ‘comodities’?<br>\
Por esta situación, Colombia se ha visto afectada en temas como el ingreso tributario, pero esta crisis no impide que el Gobierno siga haciendo reformas. Por el contrario, las crisis pueden ser motivadora para hacer más en el terreno de las reformas en pos de cualificar el entorno de la empresa, porque hay urgencia de revitalizar el crecimiento económico."] ];

		setTimeout(function(){

					if(noticia == undefined)
					{

						for (var i = 0; i < data.length; i++)
						{
							$("#img-noti-"+data[i][0]).attr("src", data[i][1]);
							$("#titulo-noti-"+data[i][0]).text(data[i][2]);
							$("#contenido-noti-"+data[i][0]).text(data[i][3]);
						}
					}
					else
					{
						if( noticia == "2343" ){
							info = data[0];
						}
						else if( noticia == "4546" ){
							info = data[1];
						}
						else{
							info = data[2];
						}

						$("#img_noti").attr("src", info[4]);
						$("#title_noti").text(info[2]);
						$("#conte_noti")[0].innerHTML = info[5];
					}

				});

			});

		});

		bancoEmprendimiento.controller('control_init', ['$scope','$routeParams','$location', function($scope, $routeParams, $location) {

					menuType         = $routeParams.menuType;
					myParam          = $location.search().myParam;
					noticia          = $location.search().noticia;

					general_location = $location.path();

		}]);


	$(document).ready(function(){
		var nice = $("html").niceScroll({
			boxzoom:true,
			scrollspeed:100,
			mousescrollstep:50,
			zindex:999999999999999999,
			cursorcolor:"#ab9147",
			cursorwidth:10,
			cursorborder:"none",
			cursorborderradius:"0",
			cursoropacitymin:0.4,
			cursoropacitymax:0.8,
			touchbehavior:false,
			grabcursorenabled:true,
			background:"",
			cursordragontouch:true
		});
	});


	},

	obtain_selected : function(id){
		$(".bUp").removeClass('seleccted');
		$("#bUp_"+id).addClass('seleccted');
	},

	sign_in_basic: function(){

	},

	sign_in_face: function(){

	},

	sign_up_basic : function(){

	},

	sign_up_face : function(){

	},

	load_slider : function(){

	},

	last_camps_all : function(){

	},

	last_camps_y : function(){

	},

	last_camps_e : function(){

	},

	last_camps_t : function(){

	},

	load_projects : function(){

	},

	last_news : function(){

	},

	last_quotes : function(){

	},

	mentors_list : function(){

	},

	courses_list : function(){

	},

	modules_list : function(){

	},

	module_detail : function(){

	},


};

Banco.init();