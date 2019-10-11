<?php
/* Smarty version 3.1.33, created on 2019-10-10 23:44:05
  from 'C:\xampp\htdocs\soiAdmin\admin\view\esqueci_senha.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5d9fec7595cfb3_02926063',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '9bb807c5da264bc6b70378b4fdb0cac17c8f5c21' => 
    array (
      0 => 'C:\\xampp\\htdocs\\soiAdmin\\admin\\view\\esqueci_senha.tpl',
      1 => 1570761835,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5d9fec7595cfb3_02926063 (Smarty_Internal_Template $_smarty_tpl) {
?>
<!DOCTYPE html>
<html lang="pt-br">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <meta name="description" content="">
    <meta name="author" content="Cesar Szpak">
    <link rel="icon" href="imagens/favicon.ico">

    <title>Soi Design - Login</title>

    <!-- Bootstrap core CSS -->
    <link href="view/css/bootstrap.css" rel="stylesheet">

    <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
    <link href="view/css/ie10-viewport-bug-workaround.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="view/css/signin.css" rel="stylesheet">

    <!-- Just for debugging purposes. Don't actually copy these 2 lines! -->
    <!--[if lt IE 9]><?php echo '<script'; ?>
 src="../../assets/js/ie8-responsive-file-warning.js"><?php echo '</script'; ?>
><![endif]-->
    <?php echo '<script'; ?>
 src="js/ie-emulation-modes-warning.js"><?php echo '</script'; ?>
>

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <?php echo '<script'; ?>
 src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"><?php echo '</script'; ?>
>
      <?php echo '<script'; ?>
 src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"><?php echo '</script'; ?>
>
    <![endif]-->
  </head>

  <body>

    <div class="container">

      <form class="form-signin" method="POST" action="" enctype="multipart/form-data">
        <h2 class="form-signin-heading">Área Restrita</h2>
        <label for="inputEmail" name="inputEmail" class="sr-only">Email</label>
        <input type="text" name="txt_user" id="inputUser" class="form-control" placeholder="Usuário" required autofocus>
        
        <button class="btn btn-lg btn-info btn-block" name="enviar" value="txt_logar">
          <i class="fa fa-check"></i>Acessar
        </button>
        
        
      </form>
    </div> <!-- /container -->

                                

    <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
    <?php echo '<script'; ?>
 src="js/ie10-viewport-bug-workaround.js"><?php echo '</script'; ?>
>
  </body>
</html>    
    
    
    <?php }
}
