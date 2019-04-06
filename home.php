
<?php  

$smarty = new Template();

$smarty->assign('GET_TEMA', Rotas::get_SiteTema());
$smarty->assign('PAG_EMPRESA', Rotas::pag_Empresa());
$smarty->assign('PAG_CONTATO', Rotas::pag_Contato());
//$smarty->assign('BANNER', Rotas::ImageLink('banner.jpg',800, 230));
$smarty->display('home.tpl');
//include_once Rotas::get_Pasta_Controller(). '/produtos.php';
?>