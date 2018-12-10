<?
	/*
		Editado por: TecnicoaCR-Team
		Fecha: 10/12/18
	*/
?>
<!DOCTYPE html>
<html lang="es">
<head>
	<?php include 'partials/head.html' ?>
</head>
<body>
	<?php include 'partials/preloader.php' ?>
	<div class="layer"></div><!-- Mobile menu overlay mask -->
	<?php include 'partials/header.html' ?>
	<main>
		<!-- SubHeader =============================================== -->
		<section class="header-video">
			<div id="hero_video">
				<div>
					<h3> ¡¡Bienvenidos a Seguridad Falcon!!</h3>
					<p> "Empresa Guanacasteca para su seguridad." </p>
					<a id= "btnhdr"class="button_intro" href="nosotros.html">Coticemos</a>
					<a class="button_intro" href="nosotros.html">Saber más</a>
				</div>
			</div>
			<img src="img/video_fix.png" alt="" class="header-video--media" data-video-src="video/intro" data-teaser-source="video/intro" data-provider="" data-video-width="1920" data-video-height="960">
		</section><!-- End Header video -->
		<!-- End SubHeader ============================================ -->

		<div id="get_quote">
			<div class="container">
				<div class="row">
					<div class="col-md-9">
						<h3>¿Buscando seguridad de calidad a buen precio? </h3>
					</div>
					<div class="col-md-3">
						<a href="contacto.html" class="btn_quote">Contacténos ahora</a>
					</div>
				</div><!-- End row -->
			</div><!-- End container -->
		</div><!-- End Get quote -->

		<br><br><div class="row">
                <div class="col-md-8 col-md-offset-2">
                    <div id="intro">

                        <h2>"Expertos en Seguridad desde "</h2><br>
                    </div>
                </div>
                <div class="col-md-10 col-md-offset-1">
                    <div id="intro">
                        <p class="lead" align="justify">
                            FALCON ALARM MONITORING C.R, S.A, cédula jurídica 3-101-663725, con el nombre comercial de SEGURIDAD FALCON GUANACASTE es una empresa de seguridad avalada por el Ministerio de Seguridad Pública de Costa Rica, en la Dirección de Servicios de Seguridad Privada, según consta en la Licencia de Seguridad Física y Electrónica N°0075-2013DSSP, dada el 10 de Abril del 2013 y la Licencia de Eventos Masivos N°0026-2014DDSSP, dada el 4 de Febrero del 2014, que permite a la empresa ejercer dicho servicio de seguridad en cualquier parte del país.
                        </p>
                        <p class="lead" align="justify">
                            Nuestras oficinas se encuentran ubicadas frente al Ministerio de Trabajo, Barrio La Cananga, Nicoya, Guanacaste. Nuestro objetivo es brindarle un servicio de calidad en materia de seguridad, con personal capacitado y con experiencia en: Gerencia, Técnicos y Oficiales de Seguridad certificados.
                        </p>
                    </div>
                </div>
            </div><!-- End row -->

		<div class="container margin_60_35">
			<hr>
			<div class="row">
				<div class="col-sm-3">
					<figure class="animated"><a href="servicios.html"><img src="img/ind1.png" alt="" class="img-responsive"></a></figure>
					<center><h3>CCTV</h3></center>
					<p style="text-align: justify;">
						Falcon Alarm Monitoring ofrece un servicio completo sin límite de tecnologías en C.C.T.V. (Circuito Cerrado de Televisión) lo cual es una tecnología de video vigilancia visual diseñada para supervisar una diversidad de ambientes y actividades cumpliendo con todos los requerimientos del sitio a vigilar y para satisfacer todos los objetivos de seguridad del cliente.
					</p>
				</div>

				<div class="col-sm-3">
					<figure class="animated"><a href="servicios.html"><img src="img/ind2.png" alt="" class="img-responsive"></a></figure>
					<center><h3>ALARMA Y RESPUESTA ARMADA</h3></center>
					<p style="text-align: justify;">
						Nuestra empresa y nuestros oficiales están debidamente inscritos en la dirección de servicios privados de seguridad del Ministerio de Seguridad Publica y configurada por profesionales con amplia experiencia en el campo de la seguridad empresarial y personal.
					</p>
				</div>

				<div class="col-sm-3">
					<figure class="animated"><a href="callesegura.html"><img src="img/ind3.png" alt="" class="img-responsive"></a></figure>
					<center><h3>CALLE SEGURA</h3></center>
					<p style="text-align: justify;">
							Con la presencia visual de cámaras de video vigilancia, genera un impacto positivo en la tranquilidad comunal, quienes mantienen en constante vigilancia el área a cubrir. Los dueños de lo ajeno lo piensan 2 veces antes de cometer un acto delictivo.
					</p>
				</div>

				<div class="col-sm-3">
					<figure class="animated"><a href="servicios.html"><img src="img/ind4.png" alt="" class="img-responsive"></a></figure>
					<center><h3>MONITOREO</h3></center>
					<p style="text-align: justify;">
							Falcon Alarm Monitoring cuenta con un moderno equipo de monitoreo de alarmas, cuyo formato es lo mejor de la industria en el Sistema Universal de “CONTACT ID” se basa en comunicación de alta velocidad que garantiza el tráfico fluido de señales hacia nuestra central receptora, por varios métodos como líneas telefónicas y celulares, y por conexión IP (conexión internet).
					</p>
				</div>
			</div><!-- End row -->
			<hr>
		</div>
		<!--
		<div class="bg_content magnific">
			<div>
				<h3>Nuestro <strong>Video Empresarial</strong></h3>
				<p>
					Conocenos a través de nuestro video corporativo.
				</p>
				<a href="https://www.youtube.com/watch?v=X02tZiqC1uk" class="video"><i class="icon-play-circled2-1"></i></a>
			</div>
		</div> -->
	</main><!-- End main -->
	<?php include 'partials/footer.html' ?>

	<!-- Common scripts -->
	<script src="js/jquery-2.2.4.min.js"></script>
	<script src="js/common_scripts_min.js"></script>
	<script src="js/functions.js"></script>

	<!-- Specific script -->
	<script src="js/video_header.js"></script>
	<script>
		HeaderVideo.init({
			container: $('.header-video'),
			header: $('.header-video--media'),
			videoTrigger: $("#video-trigger"),
			autoPlayVideo: false
		});
	</script>
	<script src="js/jquery.validate.js"></script>
	<script src="js/jquery.stepy.min.js"></script>
	<script src="js/quotation-validate.js"></script>
		<!-- GOOGLE MAP -->
	<script type="text/javascript" src="http://maps.googleapis.com/maps/api/js?sensor=false"></script>
	<script type="text/javascript" src="js/mapmarker.jquery.js"></script>
	<script type="text/javascript" src="js/mapmarker_func.jquery.js"></script>
</body>
<!--<script src='../img1.wsimg.com/tcc/tcc_l.combined.1.0.6.min.js'></script>-->
</html>
