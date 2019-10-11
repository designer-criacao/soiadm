<?php  

$smarty = new Template();
$contato = new Pedidos();

if(isset($_POST['name']) && isset($_POST['email'])){
    $nome = $_POST['name'];
    $email = $_POST['email'];
    $razao = $_POST['razao'];
    $telefone = $_POST['phone'];
    $regiao = $_POST['regiaoSampa'];
    $servico = $_POST['servico'];
    $decricao = $_POST['mensagem'];
    $data_pedido = Sistema::DataAtualUS(); //Sistema::Fdata($_POST['data_pedido']);

    $gravar = new Pedidos();
    $gravar->Preparar($nome, $email, $razao, $telefone, $regiao, $servico, $decricao, $data_pedido);
    // $gravar->PedidoGravar($nome, $email, $razao, $telefone, $regiao, $servico, $data_pedido);

    if($gravar->PedidoGravar()){
        echo '<div class="more scrolly">Mensagem enviada com sucesso!</div>';
    	Rotas::Redirecionar(2, Rotas::get_SiteHome());
    }else{
        echo '<div class="more scrolly">Mensagem não enviada!';
    	Sistema::VoltarPagina();
    	echo '</div>'; 
    	exit();
    }
}


$smarty->assign('CONTATO', 'Página de Contatos');
$smarty->display('contato.tpl');


?>