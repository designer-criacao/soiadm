<?php

$smarty = new Template();
$pedido = new Pedidos();

if(isset(Rotas::$pag[1])){
    $pedido->GetPedidoID(Rotas::$pag[1]);
}else{
    $pedido->GetPedido();
}



$smarty->assign('PED', $pedido->GetItens());


if(isset($_POST['ped_apagar']) && isset($_POST['id_apagar'])){
    //$ped_id = $_POST['id_apagar'];
    if($pedido->Apagar($_POST['id_apagar'])){
        echo '<div class="alert alert-success">Pedido excluído com sucesso!</div>';
        Rotas::Redirecionar(0.5, Rotas::pag_ListaPedido());
        exit();
    }
    else{
        echo '<div class="alert alert-danger">Pedido não foi Excluído!</div>';
    }
}


$smarty->assign('APAGAR', Rotas::pag_ListaPedido());
$smarty->assign('PEDIDO', 'Lista de Pedidos');

$smarty->display('lista_pedido.tpl');

?>