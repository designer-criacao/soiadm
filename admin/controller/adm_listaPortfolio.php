<?php  

$smarty = new Template();
$portfolio = new Portfolio();

if(isset(Rotas::$pag[1])){
    $portfolio->GetPortfolioID(Rotas::$pag[1]);
}else{
    $portfolio->GetPortfolio();
}

if(isset($_POST['btn_apagar'])){
    $port_id = $_POST['id_apagar'];
    if($portfolio->Apagar($port_id)){
        echo '<div class="alert alert-success">Portfólio excluído com sucesso!</div>';
        Rotas::Redirecionar(0.1, Rotas::pag_ListaPortfolioADM());
    }
}

$smarty->assign('PORT', $portfolio->GetItens());
$smarty->assign('PORTFOLIO', 'Lista de Portfólio');
$smarty->assign('PAG_PORTFOLIO_ADM', Rotas::pag_PortfolioADM());
$smarty->assign('GET_TEMA', Rotas::get_SiteTema());
$smarty->display('adm_listaPortfolio.tpl');


?>