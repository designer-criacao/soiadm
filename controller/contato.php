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
        // echo '<div class="more scrolly">Mensagem enviada com sucesso!</div>';
        //Rotas::Redirecionar(2, Rotas::get_SiteHome());
        
        /*Condição para enviar pedido para o E-mail */
        if(isset($_POST['enviar'])):
            if(($_POST['name']) !='' && ($_POST['email']) !='' && ($_POST['mensagem']) !='' && ($_POST['razao']) !='' ):
            $to = 'info@soidesign.com.br';
            $subject = "Orcamento pelo Site";
            
            $name = $_POST['name'];
            $email = $_POST['email'];
            $razao = $_POST['razao'];
            $telefone = $_POST['phone'];
            $regiao = $_POST['regiaoSampa'];
            $servico = $_POST['servico'];
            $decricao = $_POST['mensagem'];

            $menssage = "Orçamento pelo site: 
            Nome: $name 
            Email: $email
            Telefone: $telefone
            Razão Social: $razao
            Região: $regiao  
            Mensagem: $decricao 
            Tipo de Serviço: $servico
            Data de Serviço: $data_pedido";
            
          mail($to, $subject, $menssage);
                //echo "<p style='color:black' font-weigth='bold'>Mensagem enviada com sucesso!</p>";
                echo "alert('Mensagem enviada com sucesso!')";
                else:
                    //echo "<p style='color:red' font-weigth='bold'>Preencha todos os campos. Por favor!</p>";
                    echo "alert('Preencha todos os campos. Por favor!')";
            endif;
          endif;
        /*Final da condição de Envio de E-mail */
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