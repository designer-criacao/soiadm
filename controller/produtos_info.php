
<?php  

$smarty = new Template();


$produtos = new Produtos();
$produtos->GetProdutosID(Rotas::$pag[1]);

$image = new ProdutosImages();
$image->GetImagesPROD(Rotas::$pag[1]);

$smarty->assign('PRO', $produtos->GetItens());
$smarty->assign('TEMA', Rotas::get_SiteTema());
$smarty->assign('IMAGES', $image->GetItens());
$smarty->assign('PAG_COMPRAR', Rotas::pag_CarrinhoAlterar());

/*
$ID = Rotas::$pag[1];//ID mostra o que tiver detro desta página...
foreach ($produtos->GetItens() as $pro) {
	$_SESSION['PRO'][$ID]['ID'] = $pro['prod_id'];
    $_SESSION['PRO'][$ID]['NOME'] = $pro['prod_nome'];
    $_SESSION['PRO'][$ID]['VALOR'] = $pro['prod_valor'];
    $_SESSION['PRO'][$ID]['VALOR_US'] = $pro['prod_valor_us'];
    $_SESSION['PRO'][$ID]['PESO'] = $pro['prod_peso'];
    $_SESSION['PRO'][$ID]['QTD'] = 1;
    $_SESSION['PRO'][$ID]['IMG'] = $pro['prod_img_p'];
    //$_SESSION['PRO'][$ID]['IMG'] = $pro['prod_img'];
    $_SESSION['PRO'][$ID]['LINK'] = 'sssslink';
    $ID++;
}
*/

$smarty->display('produtos_info.tpl');

?>