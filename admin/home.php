<?php  

$smarty = new Template();

$smarty->assign('PEDIDOS', Rotas::pag_ListaPedido());
$smarty->display('adm_home.tpl');

?>