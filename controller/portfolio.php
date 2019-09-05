<?php  

$smarty = new Template();
$portfolio = new Portfolio();

if(isset(Rotas::$pag[1])){
    $portfolio->GetPortfolioID(Rotas::$pag[1]);
}else{
    $portfolio->GetPortfolio();
}

$smarty->assign('PORT', $portfolio->GetItens());
$smarty->assign('PORTFOLIO', 'Página de Portfolio');
$smarty->assign('GET_TEMA', Rotas::get_SiteTema());
$smarty->display('portifolio.tpl');


?>