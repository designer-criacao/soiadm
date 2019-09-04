<?php
/* Smarty version 3.1.33, created on 2019-04-06 16:31:26
  from 'C:\xampp\htdocs\soiAdmin\view\index.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5ca8fe8ecd6fe9_45954523',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'ff55da47e7a1a5a6f4da3441f3058cd20e07d499' => 
    array (
      0 => 'C:\\xampp\\htdocs\\soiAdmin\\view\\index.tpl',
      1 => 1554576841,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5ca8fe8ecd6fe9_45954523 (Smarty_Internal_Template $_smarty_tpl) {
?><!DOCTYPE HTML>
<!--
	Spectral by HTML5 UP
	html5up.net | @n33co
	Free for personal and commercial use under the CCA 3.0 license (html5up.net/license)
-->
<html>
	<head>
		<title>Home - <?php echo $_smarty_tpl->tpl_vars['TITULO_SITE']->value;?>
</title>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1" />
		<!--[if lte IE 8]><?php echo '<script'; ?>
 src="assets/js/ie/html5shiv.js"><?php echo '</script'; ?>
><![endif]-->
		<link rel="stylesheet" href="<?php echo $_smarty_tpl->tpl_vars['GET_TEMA']->value;?>
/assets/css/main.css" />
		<link rel="stylesheet" href="<?php echo $_smarty_tpl->tpl_vars['GET_TEMA']->value;?>
/assets/css_face.css" />
		<!--[if lte IE 8]><link rel="stylesheet" href="assets/css/ie8.css" /><![endif]-->
		<!--[if lte IE 9]><link rel="stylesheet" href="assets/css/ie9.css" /><![endif]-->


	</head>
	<body class="landing">
		<div id="fb-root"></div>
		<?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['GET_TEMA']->value;?>
/assets/face.js"><?php echo '</script'; ?>
>
		<!-- Page Wrapper -->
			<div id="page-wrapper">

				<!-- Header -->
					<header id="header" class="alt">
						<h1><a href="<?php echo $_smarty_tpl->tpl_vars['GET_SITE_HOME']->value;?>
">SOI Design</a></h1>
						<nav id="nav">
							<ul>
								<li class="special">
									<a href="#menu" class="menuToggle"><span>Menu</span></a>
									<div id="menu">
										<ul>
											<li><a href="<?php echo $_smarty_tpl->tpl_vars['GET_SITE_HOME']->value;?>
">Home</a></li>
											<li><a href="<?php echo $_smarty_tpl->tpl_vars['PAG_EMPRESA']->value;?>
">Empresa</a></li>
											<li><a href="<?php echo $_smarty_tpl->tpl_vars['PAG_PORTFOLIO']->value;?>
">Portifólio</a></li>
											<li><a href="<?php echo $_smarty_tpl->tpl_vars['PAG_CONTATO']->value;?>
">Contato</a></li>
											<!--<li><a href="#">Sign Up</a></li>-->
											<li><a href="<?php echo $_smarty_tpl->tpl_vars['GET_SITE_HOME']->value;?>
/admin/login.php">Log In</a></li>
										</ul>
									</div>
								</li>
							</ul>
						</nav>
					</header>

				<!--Colocar a ligação para página de conteúdo....-->
				<?php 
					Rotas::get_Pagina();
				?>

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
							<h4><img src="<?php echo $_smarty_tpl->tpl_vars['GET_TEMA']->value;?>
/icones/icone_face.png" style="width:30px; height:30px;">Curta Nossa P&aacute;gina:</h4>
							<div class="fb-page" data-href="https://www.facebook.com/soi.designcriacao/" data-tabs="timeline" data-width="350" data-height="100" data-small-header="false" data-adapt-container-width="true" data-hide-cover="false" data-show-facepile="false"><blockquote cite="https://www.facebook.com/soi.designcriacao/" class="fb-xfbml-parse-ignore"><a href="https://www.facebook.com/soi.designcriacao/">SOI Design</a></blockquote></div>
						</div>
					</footer>

			</div>

		<!-- Scripts -->
			<?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['GET_TEMA']->value;?>
/assets/js/jquery.min.js"><?php echo '</script'; ?>
>
			<?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['GET_TEMA']->value;?>
/assets/js/jquery.scrollex.min.js"><?php echo '</script'; ?>
>
			<?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['GET_TEMA']->value;?>
/assets/js/jquery.scrolly.min.js"><?php echo '</script'; ?>
>
			<?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['GET_TEMA']->value;?>
/assets/js/skel.min.js"><?php echo '</script'; ?>
>
			<?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['GET_TEMA']->value;?>
/assets/js/util.js"><?php echo '</script'; ?>
>
			<!--[if lte IE 8]><?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['GET_TEMA']->value;?>
/assets/js/ie/respond.min.js"><?php echo '</script'; ?>
><![endif]-->
			<?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['GET_TEMA']->value;?>
/assets/js/main.js"><?php echo '</script'; ?>
>

	</body>
</html><?php }
}
