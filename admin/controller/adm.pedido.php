<?php

$smarty = new Template();
$pedido = new Pedidos();

// if(isset(Rotas::$pag[1])){
//     $pedido->GetLista(Rotas::$pag[1]);
// }else{
//     $pedido->GetPedido();
// }


$smarty->assign('PED', $pedido->GetItens());
$smarty->assign('PEDIDO', 'Lista de Pedidos');



?>