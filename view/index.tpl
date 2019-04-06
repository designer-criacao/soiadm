<!DOCTYPE HTML>
<!--
	Spectral by HTML5 UP
	html5up.net | @n33co
	Free for personal and commercial use under the CCA 3.0 license (html5up.net/license)
-->
<html>
	<head>
		<title>Home - {$TITULO_SITE}</title>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1" />
		<!--[if lte IE 8]><script src="assets/js/ie/html5shiv.js"></script><![endif]-->
		<link rel="stylesheet" href="{$GET_TEMA}/assets/css/main.css" />
		<link rel="stylesheet" href="{$GET_TEMA}/assets/css_face.css" />
		<!--[if lte IE 8]><link rel="stylesheet" href="assets/css/ie8.css" /><![endif]-->
		<!--[if lte IE 9]><link rel="stylesheet" href="assets/css/ie9.css" /><![endif]-->


	</head>
	<body class="landing">
		<div id="fb-root"></div>
		<script src="{$GET_TEMA}/assets/face.js"></script>
		<!-- Page Wrapper -->
			<div id="page-wrapper">

				<!-- Header -->
					<header id="header" class="alt">
						<h1><a href="{$GET_SITE_HOME}">SOI Design</a></h1>
						<nav id="nav">
							<ul>
								<li class="special">
									<a href="#menu" class="menuToggle"><span>Menu</span></a>
									<div id="menu">
										<ul>
											<li><a href="{$GET_SITE_HOME}">Home</a></li>
											<li><a href="{$PAG_EMPRESA}">Empresa</a></li>
											<li><a href="{$PAG_PORTFOLIO}">Portifólio</a></li>
											<li><a href="{$PAG_CONTATO}">Contato</a></li>
											<!--<li><a href="#">Sign Up</a></li>-->
											<li><a href="{$GET_SITE_HOME}/admin/login.php">Log In</a></li>
										</ul>
									</div>
								</li>
							</ul>
						</nav>
					</header>

				<!--Colocar a ligação para página de conteúdo....-->
				{php}
					Rotas::get_Pagina();
				{/php}

				<!-- Footer -->
					<footer id="footer">
						<ul class="icons">
							<!--<li><a href="#" class="icon fa-twitter"><span class="label">Twitter</span></a></li>-->
							<li><a href="https://www.facebook.com/soi.designcriacao/" class="icon fa-facebook"><span class="label">Facebook</span></a></li>
							<li><a href="https://www.instagram.com/soidesigncriacao/?hl=pt-br" class="icon fa-instagram"><span class="label">Instagram</span></a></li>
							<li><a href="https://plus.google.com/u/0/108802087334630843577" class="icon fa-google"><span class="label">Google+</span></a></li>
							<li><a href="mailto:info@soidesign.com.br" class="icon fa-envelope-o"><span class="label">Email</span></a></li>
						</ul>
						<ul class="copyright">
							<li>&copy; Direitos Reservados</li><li>Design: <a href="http://soidesign.com.br">SOI DESIGN</a></li>
							<p><a href="mailto:info@soidesign.com.br" class="icon fa-envelope-o">info@soidesign.com.br</a></p>
                			<p>Contato: (11)97079-0183</p>
						</ul>
						
						<div class="face">
							<h4><img src="{$GET_TEMA}/icones/icone_face.png" style="width:30px; height:30px;">Curta Nossa P&aacute;gina:</h4>
							<div class="fb-page" data-href="https://www.facebook.com/soi.designcriacao/" data-tabs="timeline" data-width="350" data-height="100" data-small-header="false" data-adapt-container-width="true" data-hide-cover="false" data-show-facepile="false"><blockquote cite="https://www.facebook.com/soi.designcriacao/" class="fb-xfbml-parse-ignore"><a href="https://www.facebook.com/soi.designcriacao/">SOI Design</a></blockquote></div>
						</div>
					</footer>

			</div>

		<!-- Scripts -->
			<script src="{$GET_TEMA}/assets/js/jquery.min.js"></script>
			<script src="{$GET_TEMA}/assets/js/jquery.scrollex.min.js"></script>
			<script src="{$GET_TEMA}/assets/js/jquery.scrolly.min.js"></script>
			<script src="{$GET_TEMA}/assets/js/skel.min.js"></script>
			<script src="{$GET_TEMA}/assets/js/util.js"></script>
			<!--[if lte IE 8]><script src="{$GET_TEMA}/assets/js/ie/respond.min.js"></script><![endif]-->
			<script src="{$GET_TEMA}/assets/js/main.js"></script>

	</body>
</html>