<?php
$smarty = new Template();

$cliente = new Clientes();
$cliente->GetClientes();


$smarty->assign('CLI', $cliente->GetItens());
$smarty->assign('CLIENTES', $cliente->GetItens());
$smarty->assign('EDITAR_CLIENTES', Rotas::pag_ClientesEditarADM());

//Condição para apagar o produto cadastrado..
if(isset($_POST['cli_apagar']) && isset($_POST['cli_id_apagar'])){
    if($cliente->Apagar($_POST['cli_id_apagar'])){
        echo '<div class="alert alert-success">Cliente Excluído com Sucesso!</div>';
        //@unlink($_POST['prod_img_arquivo']);
        Rotas::Redirecionar(2, Rotas::pag_ListarClientes());
        exit();
    }else{
        echo '<div class="alert alert-danger">Cliente não foi Excluído!</div>';
    }
}

/*$cli = new Clientes();
$id = $_POST['cli_id'];
$cli->GetClientesID($id);

$smarty->assign('CLIEN', $cli->GetItens());*/


$smarty->assign('APAGAR', Rotas::pag_ListarClientes());
$smarty->display('lista_clientes.tpl');


?>