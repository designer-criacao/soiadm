<?php  
$smarty = new Template();

$usuario = new User();
$usuario->GetUsuario();

$smarty->assign('USUARIOS', $usuario->GetItens());

$smarty->display('lista_usuario.tpl');

?>