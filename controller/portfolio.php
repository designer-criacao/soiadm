<?php  

$smarty = new Template();
$smarty->assign('PORTFOLIO', 'Página de Portfolio');
$smarty->assign('GET_TEMA', Rotas::get_SiteTema());
$smarty->display('portifolio.tpl');


?>