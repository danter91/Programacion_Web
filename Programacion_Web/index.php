<?php
	require_once("counter/conexion.php");
	$insert = "UPDATE contador SET visitas = visitas + 1 WHERE id = '1' ";
	$update = $connect->query($insert);
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
 <style>
      /* Always set the map height explicitly to define the size of the div
       * element that contains the map. */
      #map {
        height: 100%;
        width:100%;
      }
      /* Optional: Makes the sample page fill the window. */
      html, body {
        height: 200px;
        width: 100%; 
        margin: 0;
        padding: 0;
      }
    </style>
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
					<li><a class="scroll" href="#productos">Productos</a></li>
					<li><a class="scroll" href="#equipo">Nuestro Equipo</a></li>
					<li><a href="blogprincipal.html">Blog</a></li>
					<li><a  class="scroll" href="#contact">Contacto</a></li>
					<li><a href="login/index.php">Acceso</a></li>
				</ul>
        </nav>
         <div class="logo"><a href="index.php"><img src="images/logo.png" alt="Image 1"></a></div>
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
					<a href="blogprincipal.html" class="da-link">Leer más...</a>
				</div>
				<div class="da-slide">
					<h2>Es nuestra identidad</h2>
					<p>Más que un objeto, son horas de experimentos y detalles.</p>
					<a href="blogprincipal.html" class="da-link">Leer más...</a>
				</div>
				<div class="da-slide">
					<h2>Es nuestro sello</h2>
					<p>Más que manualidad, es un momento de nuestra vida.</p>
					<a href="blogprincipal.html" class="da-link">Leer más...</a>
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
				     		<div class="button"><span><a href="blogart1.html">Leer más...</a></span></div>
						</div>
						<div class="images_1_of_4">
							 <img src="images/round2.png" alt="Image 1">
							 <h3>Exclusividad</h3>
							 <p>Nuestros productos llevan su marca única y personal: son únicos y te inspirarán.</p>
						     <div class="button"><span><a href="blogart1.html">Leer más...</a></span></div>
						</div>
						<div class="images_1_of_4">
							 <img src="images/round3.png" alt="Image 1">
							 <h3>Detalle</h3>
							 <p>Nos empeñamos en mimar a cada producto hasta en su más mínimo detalle. </p>
						     <div class="button"><span><a href="blogart1.html">Leer más...</a></span></div>
						</div>
						<div class="images_1_of_4">
							 <img src="images/round4.png" alt="Image 1">
							 <h3>Talento</h3>
							 <p>Somos un equipo de trabajo que desborda creatividad, entusiasmo y energía.</p>
						     <div class="button"><span><a href="blogart1.html">Leer más...</a></span></div>
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
						<p>Calle 119 Nº 6A 33, Usaquén</p>
						<p>Bogotá DC. Colombia.</p>
						<p>(571) 3737396</p>
						<p><a href="mailto:dbaquero91@gmail.com"> contacto@palo&palito.com</a></p>
						<p>Eres el visitante número <?php
							require_once("counter/conexion.php");
							$consulta = $connect->query("SELECT * FROM contador WHERE id = '1' ");
							$registro = mysqli_fetch_array($consulta);
							do{
								$desc = $registro['visitas'];
								echo "$desc";
							}
							while ($registro = mysqli_fetch_array($consulta));
							?> a nuestra página</p>
					</div>
				</div>
						<div class="form">
				  			<form method="post" action="#">

<form name="contactform" method="post" action="send_form_email.php"> 
	<?php
if(isset($_POST['email'])) {
 
    // Edita las dos líneas siguientes con tu dirección de correo y asunto personalizados
 
    $email_to = "
 dbaquero91@gmail.com";
 
    $email_subject = "Formulario Contáctenos Palo&Palito";   
 
    function died($error) {
 
        // si hay algún error, el formulario puede desplegar su mensaje de aviso
 
        echo "Lo sentimos, hubo un error en sus datos y el formulario no puede ser enviado en este momento. ";
 
        echo "Detalle de los errores.<br /><br />";
        
        echo $error."<br /><br />";
 
        echo "Porfavor corrija estos errores e inténtelo de nuevo.<br /><br />";
        die();
    }
 
    // Se valida que los campos del formulairo estén llenos
 
    if(!isset($_POST['first_name']) ||
 
        !isset($_POST['last_name']) ||
 
        !isset($_POST['email']) ||
 
        !isset($_POST['telephone']) ||
 
        !isset($_POST['message'])) {
 
        died('Lo sentimos pero parece haber un problema con los datos enviados.');       
 
    }
 //En esta parte el valor "name" nos sirve para crear las variables que recolectaran la información de cada campo
    
    $first_name = $_POST['first_name']; // requerido
 
    $last_name = $_POST['last_name']; // requerido
 
    $email_from = $_POST['email']; // requerido
 
    $telephone = $_POST['telephone']; // no requerido 

    $message = $_POST['message']; // requerido
 
    $error_message = "Error";

//En esta parte se verifica que la dirección de correo sea válida 
    
   $email_exp = '/^[A-Za-z0-9._%-]+@[A-Za-z0-9.-]+\.[A-Za-z]{2,4}$/';
 
  if(!preg_match($email_exp,$email_from)) {
 
    $error_message .= 'La dirección de correo proporcionada no es válida.<br />';
 
  }

//En esta parte se validan las cadenas de texto

    $string_exp = "/^[A-Za-z .'-]+$/";

  if(!preg_match($string_exp,$first_name)) {
 
    $error_message .= 'El formato del nombre no es válido<br />';
 
  }
 
  if(!preg_match($string_exp,$last_name)) {
 
    $error_message .= 'el formato del apellido no es válido.<br />';
 
  }
 
  if(strlen($message) < 2) {
 
    $error_message .= 'El formato del texto no es válido.<br />';
 
  }
 
if(strlen($error_message) < 0) {
died($error_message);
}
 
//A partir de aqui se contruye el cuerpo del mensaje tal y como llegará al correo

    $email_message = "Contenido del Mensaje.\n\n";
 
     
 
    function clean_string($string) {
 
      $bad = array("content-type","bcc:","to:","cc:","href");
 
      return str_replace($bad,"",$string);
 
    }
 
     
 
    $email_message .= "Nombre: ".clean_string($first_name)."\n";
 
    $email_message .= "Apellido: ".clean_string($last_name)."\n";
 
    $email_message .= "Email: ".clean_string($email_from)."\n";
 
    $email_message .= "Teléfono: ".clean_string($telephone)."\n";
 
    $email_message .= "Mensaje: ".clean_string($message)."\n";
  
 
//Se crean los encabezados del correo
 
$headers = 'From: '.$email_from."\r\n".
 
'Reply-To: '.$email_from."\r\n" .
 
'X-Mailer: PHP/' . phpversion();
 
@mail($email_to, $email_subject, $email_message, $headers);  
 
?>
 
 
 
<!-- incluye aqui tu propio mensaje de Éxito-->
 
Gracias! Nos pondremos en contacto contigo a la brevedad
 
 
<?php
 
}
 
?>

<input type="text" name="first_name" class="textbox" value=" Nombres*" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Nombres*';}"required>
<input type="text" name="last_name" class="textbox" value=" Apellidos*" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Apellidos*';}"required>
<input type="text" name="email" class="textbox" value=" Correo Electrónico*" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Correo Electrónico*';}"required>
<input type="text" name="telephone" class="textbox" value=" Teléfono*" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Teléfono*';}"required>
<div>
	<textarea name="message" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = ' Mensaje';}">Mensaje</textarea>
</div>

 <td colspan="2" style="text-align:center">
 	<div class="button send_button">
  <input type="submit" value="Enviar">   <a send_form_email.php></a>
  								</div>
 </td>

</form>
								
								<div class="clear"> </div>
							</form>
						</div>
						<a class="mov-top" href="#inicio1"> <span> </span></a>
					 <div class="clear"> </div>
				</div>
				<h2>Encuéntranos en Google Maps</h2>
  			</div>
     </div>

<!-- Google Maps -->
	<div id="map"></div>
    <script>
      var customLabel = {
        restaurant: {
          label: 'R'
        },
        bar: {
          label: 'B'
        }
      };

        function initMap() {
        var map = new google.maps.Map(document.getElementById('map'), {
          center: new google.maps.LatLng(4.695554, -74.031068),
          zoom: 16.5
        });
        var infoWindow = new google.maps.InfoWindow;

          // Change this depending on the name of your PHP or XML file
          downloadUrl('maps/resultado.php', function(data) {
            var xml = data.responseXML;
            var markers = xml.documentElement.getElementsByTagName('marker');
            Array.prototype.forEach.call(markers, function(markerElem) {
              var name = markerElem.getAttribute('name');
              var address = markerElem.getAttribute('address');
              var type = markerElem.getAttribute('type');
              var point = new google.maps.LatLng(
                  parseFloat(markerElem.getAttribute('lat')),
                  parseFloat(markerElem.getAttribute('lng')));

              var infowincontent = document.createElement('div');
              var strong = document.createElement('strong');
              strong.textContent = name
              infowincontent.appendChild(strong);
              infowincontent.appendChild(document.createElement('br'));

              var text = document.createElement('text');
              text.textContent = address
              infowincontent.appendChild(text);
              var icon = customLabel[type] || {};
              var marker = new google.maps.Marker({
                map: map,
                position: point,
                label: icon.label
              });
              marker.addListener('click', function() {
                infoWindow.setContent(infowincontent);
                infoWindow.open(map, marker);
              });
            });
          });
        }



      function downloadUrl(url, callback) {
        var request = window.ActiveXObject ?
            new ActiveXObject('Microsoft.XMLHTTP') :
            new XMLHttpRequest;

        request.onreadystatechange = function() {
          if (request.readyState == 4) {
            request.onreadystatechange = doNothing;
            callback(request, request.status);
          }
        };

        request.open('GET', url, true);
        request.send(null);
      }

      function doNothing() {}
    </script>
    <script async defer
    src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDn8_WJYtNxJKIbmABcJ4GcpwvWi9mJ-4k&callback=initMap">
    </script>

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