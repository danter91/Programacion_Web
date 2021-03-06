<?php
include('clases/bd.class.php');
include('clases/visita.class.php');
$bd=new bd();
?>
<!DOCTYPE HTML>
<html lang="es">
<head>
<title>Arte y Cultura: Palo  Palito | Página Principal :: Prueba</title>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="description" content="Página web Palo&Palito Company">
<link href='http://fonts.googleapis.com/css?family=Open+Sans:400,600' rel='stylesheet' type='text/css'>
<link href="css/style.css" rel="stylesheet" type="text/css" media="all" />
<link rel="stylesheet" type="text/css" href="css/magnific-popup.css">
<script src="js/jquery.min.js"></script>
<script src="js/scripts.js"></script>
</head>
<body>
<!-- @inicioheader -->
<div class="header_bg">
<div class="wrap">
	<div id="content">
      <header id="topnav">
        <nav>
        		 <ul>
					<li class="active"><a class="scroll" href="#inicio">Inicio</a></li>
					<li><a class="scroll" href="#caracteristicas">Características</a></li>
					<li><a class="scroll" href="#productos">Nuestros Productos</a></li>
					<li><a class="scroll" href="#equipo">Nuestro Equipo</a></li>
					<li><a href="blogprincipal.html">Blog</a></li>	
					<li><a  class="scroll" href="#contact">Contáctanos</a></li>
				</ul>
        </nav>
         <div class="logo"><a href="index.html"><img src="images/logo.png" alt="Image 1"></a></div>
        <a href="#" id="navbtn">Nav Menu</a>
        <div class="clear"> </div>
      </header><!-- @Fin #topnav -->
      <script src="js/menu.js"></script>
    </div>
</div>
</div>
<!-- @inicioslider -->
<div class="slider" id="inicio"> 
				<div class="wrap">
				<div id="da-slider" class="da-slider">
				<div class="da-slide">
					<h2>Artesanía hecha con el corazón</h2>
					<p>Es el resultado de la historia: Dedicación, paciencia, entrega y amor.</p>
					<a href="#" class="da-link">Leer más...</a>
				</div>
				<div class="da-slide">
					<h2>Es nuestra identidad</h2>
					<p>Más que un objeto, son horas de experimentos y detalles.</p>
					<a href="#" class="da-link">Leer más...</a>
				</div>
				<div class="da-slide">
					<h2>Es nuestro sello</h2>
					<p>Más que manualidad, es un momento de nuestra vida.</p>
					<a href="#" class="da-link">Leer más...</a>
				</div>
				<nav class="da-arrows">
					<span class="da-arrows-prev"></span>
					<span class="da-arrows-next"></span>
				</nav>
			</div>
			<link rel="stylesheet" type="text/css" href="css/slider.css" />
			<script src="js/modernizr.custom.28468.js"></script>
			<script src="js/jquery.cslider.js"></script>
			<script>
				$(function() {
				
					$('#da-slider').cslider({
						autoplay	: true,
						bgincrement	: 450
					});
				
				});
			</script>
				<!-- @finslider -->
			</div>
</div>
<!-- @iniciocaracteristicas -->
<div  class="caracteristicas" id="caracteristicas">
	<div class="wrap">
		<div class="caracteristicas-grids">
						<div class="images_1_of_4">
					 		<img src="images/round1.png" alt="Image 1">
					 		<h3>Diseño</h3>
					 		<p>Nuestros productos estan pensados y elaborados por los mejores artesanos del país. </p>
				     		<div class="button"><span><a href="#">Leer más...</a></span></div>
						</div>
						<div class="images_1_of_4">
							 <img src="images/round2.png" alt="Image 1">
							 <h3>Exclusividad</h3>
							 <p>Nuestros productos llevan su marca única y personal: son únicos y te inspirarán.</p>
						     <div class="button"><span><a href="#">Leer más...</a></span></div>
						</div>
						<div class="images_1_of_4">
							 <img src="images/round3.png" alt="Image 1">
							 <h3>Detalle</h3>
							 <p>Nos empeñamos en mimar a cada producto hasta en su más mínimo detalle. </p>
						     <div class="button"><span><a href="#">Leer más...</a></span></div>
						</div>
						<div class="images_1_of_4">
							 <img src="images/round4.png" alt="Image 1">
							 <h3>Talento</h3>
							 <p>Somos un equipo de trabajo que desborda creatividad, entusiasmo y energía.</p>
						     <div class="button"><span><a href="#">Leer más...</a></span></div>
						</div>
						<div class="clear"> </div>
		 </div>
</div>
<!-- @fincaracteristicas -->
<!-- @inicioproductos -->
<div class="productos_main" id ="productos">
				<div class="wrap">
					<div class="heading_h">
						<h3><a href="#">Nuestros Productos</a></h3>
					</div>
					<!--Inicio-mfp -->	
				<div id="small-dialog1" class="mfp-hide">
					<div class="pop_up">
							   <img src="images/pop1.jpg" alt="Image 1">
							   	 <h2>Artesanías Andinas </h2>
								 <p>Desde la región Andina, hemos seleccionado las muestras más representativas y los aspectos que hacen de la gente del centro del país únicos y sensacionales.</p>
								 <p class="pop_p">Esta región debe su nombre a la cordillera de los Andes, los cuales hacia el norte de Suramérica se dividen en los nudos de Pasto y en el Macizo Colombiano en tres cordilleras llamadas Occidental, Central y Oriental.Debido a la gran diversidad climática y la historia de los poblamientos, existen diferentes grupos sub-culturales en esta región: Paisas, Santandereanos, Cundiboyacenses, Vallecaucanos, Opitas y Pastusos.</p>
								</div>
					
				</div>
				 <div id="small-dialog2" class="mfp-hide">
							   <div class="pop_up2">
							   <img src="images/pop2.jpg" alt="Image 1">
							   	 <h2>Artesanías Caribe </h2>
								 <p>De la tierra del realismo mágico, del vallenato y del carnaval de Barranquilla hemos seleccionado los productos que identifican todo un país.</p>
								 <p class="pop_p">La Región Caribe de Colombia es la región natural continental y marítima más septentrional del país. Está ubicada en la parte norte de Colombia y América del Sur. Debido a la diversidad del clima de la región es muy grande la variedad de especies animales y vegetales que en ella se encuentran. Muchas de estas especies se encuentran en vía de extinción.</p>
								</div>
				 </div>
				 <div id="small-dialog3" class="mfp-hide">
							   <div class="pop_up3">
							   	<img src="images/pop3.jpg" alt="Image 1">
							   	 <h2>Artesanías Pacífico </h2>
								 <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat.</p>
								 <p class="pop_p">La región del Pacífico comprende la totalidad del departamento del Chocó, y las zonas costeras de los departamentos del Valle del Cauca, Cauca y Nariño. Es una región con una inmensa riqueza ecológica, hidrográfica, minera y forestal en la cual se encuentran parques nacionales naturales. Es además considerada una de las regiones de mayor biodiversidad y pluviosidad del planeta con precipitaciones del orden de los 4 000 mm/anuales.</p>
								</div>
				 </div>
				 <div id="small-dialog4" class="mfp-hide">
							   <div class="pop_up4">
							   	<img src="images/pop4.jpg" alt="Image 1">
							   	 <h2>Artesanías Orinoquía </h2>
								 <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. </p>
								 <p class="pop_p">La Orinoquía también conocida como Llanos Orientales, está ubicada al este del país, limitando al norte y este con Venezuela, al sur con Amazonia y al oeste con la región andina. Determinada por la cuenca del río Orinoco, es un ecosistema que se caracteriza por ser una planicie. A esta la caracterizan sus extensas sabanas de zona intertropical y bosques de galería; sus habitantes, los llaneros, tienen una cultura y una historia diferenciada.</p>
								</div>
				 </div>
				 <div id="small-dialog5" class="mfp-hide">
							   <div class="pop_up5">
							   	<img src="images/pop5.jpg" alt="Image 1">
							   	 <h2>Artesanías Indígenas </h2>
								 <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat.</p>
								 <p class="pop_p">La región Amazónica de Colombia, o Amazonía está ubicada al sur del país limitando al norte con las regiones Andina y Orinoquía, al este con Venezuela, al sureste con Brasil, al sur con Perú y al suroeste con Ecuador. Se han encontrado más de 80 complejos pictóricos, con 20.000 pinturas rupestres en la zona de la Sierra de Chiribiquete.</p>
								</div>
				 </div>
				 <div id="small-dialog6" class="mfp-hide">
							   <div class="pop_up6">
							   	<img src="images/pop6.jpg" alt="Image 1">
							   	 <h2>Arte Colombiano Contemporáneo </h2>
								 <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. </p>
								 <p class="pop_p">Con destacados artistas como Doris Salcedo, Juan Manuel Echavarría, Óscar Murillo, María Elvira Escallón, José Alejandro Restrepo, Victor Escobar, Delcy  Morelos, Miler Lagos, Fernando Arias, María Fernanda Cardoso, Nadín Ospina, Óscar Muñoz, Pablo Adame y Oswaldo Macià (entre otros); la escena artística colombiana se potencia paulatinamente logrando visibilidad en el mundo y recibiendo títulos como el recientemente obtenido por Bogotá, como una de las doce ciudades del futuro para ver buen arte contemporáneo.</p>
								</div>
				 </div>
				 <div id="small-dialog7" class="mfp-hide">
							   <div class="pop_up7">
							   	 <h2>Nuestro Equipo </h2>
								 <p>Somos un equipo de apasionados por el arte y la cultura, nos unimos para entregarte lo mejor de cada uno en un produto que amarás tanto como nosotros.</p>
								 <p class="pop_p">Hacemos cada cosa con pasión y eso se refleja en la calidad de lo que te llevas.</p>
								</div>
				 </div>
				<!--eFin-mfp -->	
				<!-- @iniciocontent -->
			<div class="gallery">
			<div class="container">
				<div id="gallerylist">
				<div class="gallerylist-wrapper">				
					<a class="popup-with-zoom-anim" href="#small-dialog1">
						<img src="images/gd1.jpg" alt="Image 1"/>
					</a>
				</div>
				<div class="gallerylist-wrapper">				
					<a class="popup-with-zoom-anim" href="#small-dialog2">
						<img src="images/gd2.jpg"  alt="Image 1"/>
					</a>
				</div>
				<div class="gallerylist-wrapper">				
					<a class="popup-with-zoom-anim" href="#small-dialog3">
						<img src="images/gd3.jpg"  alt="Image 1"/>
			
					</a>
				</div>
				<div class="clear"></div>
			</div>		
			<div id="gallerylist1">
				<div class="gallerylist-wrapper">				
					<a class="popup-with-zoom-anim" href="#small-dialog4">
						<img src="images/gd4.jpg" alt="Image 1"/>
					</a>
				</div>
				<div class="gallerylist-wrapper">				
					<a class="popup-with-zoom-anim" href="#small-dialog5">
						<img src="images/gd5.jpg"  alt="Image 1"/>
					
					</a>
				</div>
				<div class="gallerylist-wrapper">				
					<a class="popup-with-zoom-anim" href="#small-dialog6">
						<img src="images/gd6.jpg"  alt="Image 1"/>
					</a>
				</div>
					<div class="clear"> </div>
					<div class="button_1"><span><a href="#">Otros Productos</a></span></div>
			</div>																																					
		</div>
	</div>
	<!-- @fincontent -->
				<script src="js/jquery.magnific-popup.js"></script>
				<script>
					$(document).ready(function() {
						$('.popup-with-zoom-anim').magnificPopup({
							type: 'inline',
							fixedContentPos: false,
							fixedBgPos: true,
							overflowY: 'auto',
							closeBtnInside: true,
							preloader: false,
							midClick: true,
							removalDelay: 300,
							mainClass: 'my-mfp-zoom-in'
					});
				});
				</script>
				
		</div>
	</div>
</div>
<!-- @finproductos -->
<!-- @inicioequipo -->
<div class="equipo" id="equipo">
				 <div class="wrap">
				 		<div class="heading_h">
							<h3><a href="#">Nuestro Equipo</a></h3>
						</div>	
				 		<div class="middle-grids">
							<div class="grid_1_of_4 images_1_of_4">
					 			<a class="popup-with-zoom-anim" href="#small-dialog7">
					 				<span class="rollover"> </span>
								</a>
								<img src="images/pic4.jpg"  alt="Image 1"/>
					 			<h3>Marcela Sampedro </h3>
					 			<h4>Artista & Fundadora</h4>
					 			<p>El arte de colombia me ha regalado la mejor inspiración y nuestra empresa es un intento por compartirla con todos. </p>
							</div>
							<div class="grid_1_of_4 images_1_of_4">
								<a class="popup-with-zoom-anim" href="#small-dialog7">
					 				<span class="rollover"> </span>
								</a>
								 <img src="images/pic2.jpg" alt="Image 1">
								 <h3>Jusayu Epinayu</h3>
								 <h4>Artista & Artesana Wayuu</h4>
								 <p>Represento las expresiones de la Sierra Nevada y el Caribe Colombiano en cada producto.</p>
							</div>
							<div class="grid_1_of_4 images_1_of_4">
								<a class="popup-with-zoom-anim" href="#small-dialog7">
					 				<span class="rollover"> </span>
								</a>
								 <img src="images/pic3.jpg" alt="Image 1">
							 	<h3>Fernando Restrepo</h3>
							 	<h4>Artista & Artesano Llanero</h4>
							 	<p>Entregamos cada detalle para que usted tenga un trozo de nuestro país en el corazón.</p>
						    
							</div>
							<div class="grid_1_of_4 images_1_of_4">
								<a class="popup-with-zoom-anim" href="#small-dialog7">
					 				<span class="rollover"> </span>
								</a>
								 <img src="images/pic1.jpg" alt="Image 1">
								 <h3>Lozaida Pérez</h3>
								 <h4>Artista & Artesana Andina</h4>
								 <p>Cada elemento está pensado con un objetivo y con un significado, es nuestra razón de ser.</p>
							 </div>
							 <div class="clear"> </div>
					</div>
		 		</div>
</div>
<!-- @finequipo -->
<!-- @iniciotestimonios -->
			
		 <div class="wmuSlider example1">
		 	<div class="wrap">
			   <article style="position: absolute; width:64%; opacity: 0;"> 
				   	
					<div class="cont span_2_of_3">
						    <h4>Lo que dicen nuestros clientes</h4>
							<p>Cuando tienes en tus manos una de las artesanías de Palo&Palito, percibes inmediatamente su calidad, su increíble textura y el detalle con el que diseñan cada elemento.</p>
						  	<span><a href="#">Daniel Baquero</a></span>
						 
					</div>
				</article>
				 <article style="position: absolute; width:64%; opacity: 0;"> 
				   	<div class="cont span_2_of_3">
						    <h4>Lo que dicen nuestros clientes</h4>
						    <p>Puedes conectar con artesanos Colombianos. Al visitar los talleres de Palo&Palito. Aprendes y conoces la inspiración, ese pedacito de su alma que dejan en cada pieza.</p>
						   <span><a href="#">Mauricio Acosta</a></span>
					</div>
				 </article>
				 <article style="position: absolute; width:64%; opacity: 0;"> 
				   	<div class="cont span_2_of_3">
						    <h4>Lo que dicen nuestros clientes</h4>
						    <p>Es fantástico sentir esas historias que esconden los objetos hechos a mano de Palo&Palito. Te motivas a comprarlos o incluso a conectar con el oficio y aprender.</p>
						    <span><a href="#">Carolina Bautista</a></span>
					</div>
				 </article>
		 
                  <script src="js/jquery.wmuSlider.js"></script> 
					<script>
       				     $('.example1').wmuSlider();         
   					</script> 	           	      
	         </div>
	     </div>
<!-- @fintestimonios -->
<!-- @iniciocontactenos -->
 <div class="contact" id="contact">
	<div class="wrap">
		<h2>Contáctanos</h2>
			<div class="contact-form">
				<div class="para-contact">
					<h4>Pónte en Contacto con Nosotros</h4>
					<p>Estamos muy contentos de tu visita, y como deseamos que continúes en contacto con nosotros por favor diligencia los datos y cuéntanos tus dudas. ¡Con gusto te asesoramos!</p>
				
				 	<div class="social_2 social_3">	
			           <ul>	
						    <li class="facebook"><a href="#"><span> </span></a></li>
						    <li class="twitter"><a href="#"><span> </span></a></li>	 	
							<li class="google"><a href="#"><span> </span></a></li>
					  </ul>
		 		  </div>
		 		  <div class="get-intouch-left-address">
				  <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3976.427420098302!2d-74.03159275106442!3d4.6955611396291035!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x8e3f9aa8752c0007%3A0x7949e7ccfdcea694!2sCl.+119+%236a-33%2C+Bogot%C3%A1!5e0!3m2!1ses!2sco!4v1527812100147" width="100%" height="200px" frameborder="0" style="border:0" allowfullscreen></iframe>
						<p>Calle 119 Nº 6A 33, Usaquén</p>
						<p>Bogotá DC. Colombia.</p>
						<p>(571) 3737396</p>
						<p><a href="mailto:dbaquero91@gmail.com"> contacto@palo&palito.com</a></p>
						<p>
						<?php
						$visita=new visita();
						$visita->visita_ip = $_SERVER['REMOTE_ADDR'];
						$visita->fguarda();
						$visita->fcantidad();
					 ?>
					 </p>
					</div>
					<div class="clear"> </div>	
				</div>
						<div class="form">
				  			<form method="post" action="#">
							    	<input type="text" class="textbox" value=" Nombre" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Nombre';}"required>
							    	<input type="text" class="textbox" value="Email" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Email';}" required>
										<div class="clear"> </div>
								    <div>
								    	<textarea onfocus="this.value = '';" onblur="if (this.value == '') {this.value = ' Mensaje';}">Mensaje</textarea>
								    </div>
								<div class="button send_button">
											   	 <input type="submit" value="Enviar">
								</div>
								<div class="clear"> </div>
							</form>
						</div>
						
						<div class="form">
						<div id="divregistro"></div>
						<form name="forma_ingreso" id="forma_ingreso" method="post">
						<input type="text" class="textbox" value="usuario" name="usuario" id="usuario" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Nombre';}">
						<input type="text" class="textbox" value="Contraseña" name="pwd" id="pwd" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Contraseña';}">
						<div class="clear"> </div>	
						<div class="button send_button">
						<button class="boton" type="button" onclick="javascript:ingreso()">Ingresar</button>
								</div>
						</div>
						</form>
						<a class="mov-top" href="#inicio1"> <span> </span></a>
					 <div class="clear"> </div>
					 <div>
					 
				</div>
  			</div>
     </div>
     <!-- scroll_top_btn -->
		<script src="js/move-top.js"></script>
		<script src="js/easing.js"></script>
	    <script>
			$(document).ready(function() {
			
				var defaults = {
		  			containerID: 'toTop', // fading element id
					containerHoverID: 'toTopHover', // fading element hover id
					scrollSpeed: 1200,
					easingType: 'linear' 
		 		};
				
				
				$().UItoTop({ easingType: 'easeOutQuart' });
				
			});
		</script>
		<script>
		jQuery(document).ready(function($) {
			$(".scroll").click(function(event){		
				event.preventDefault();
				$('html,body').animate({scrollTop:$(this.hash).offset().top},1200);
			});
		});
	</script>

		 <a href="#" id="toTop" style="display: block;"><span id="toTopHover" style="opacity: 1;"></span></a>
<!-- @fincontactenos -->
</body>
</html>		