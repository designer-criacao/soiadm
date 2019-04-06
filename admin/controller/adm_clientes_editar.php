<?php  
$smarty = new Template();
$clientes = new Clientes();

//COndição para apagar o produto cadastrado..
/*if(isset($_POST['prod_apagar']) && isset($_POST['prod_id_apagar']) && $_POST['prod_apagar'] == 'SIM'){
    if($gravar->Apagar($_POST['prod_id_apagar'])){
        echo '<div class="alert alert-success">Produto Excluído com Sucesso!</div>';
        @unlink($_POST['prod_img_arquivo']);
        Rotas::Redirecionar(2, Rotas::pag_ProdutosADM());
        exit();
    }else{
        echo '<div class="alert alert-danger">Produto não foi Excluído!</div>';
    }
}*/

if(isset($_POST['cli_nome']) and isset($_POST['cli_email']) and isset($_POST['cli_cpf'])){
	//Variáveis
	$cli_id 	   = $_POST['cli_id'];
	$cli_nome 	   = $_POST['cli_nome'];
	$cli_sobrenome = $_POST['cli_sobrenome'];
	$cli_data_nasc = $_POST['cli_data_nasc'];
    $cli_rg        = $_POST['cli_rg'];
    $cli_cpf       = $_POST['cli_cpf'];
    $cli_ddd       = $_POST['cli_ddd'];
    $cli_fone      = $_POST['cli_fone'];
    $cli_celular   = $_POST['cli_celular'];
    $cli_endereco  = $_POST['cli_endereco'];
    $cli_numero    = $_POST['cli_numero'];
    $cli_bairro    = $_POST['cli_bairro'];
    $cli_cidade    = $_POST['cli_cidade'];
    $cli_uf        = $_POST['cli_uf'];
    $cli_cep       = $_POST['cli_cep'];
    $cli_email     = $_POST['cli_email'];
    /*$cli_senha     = "";
    $cli_data_cad  = "";
    $cli_hora_cad  = "";*/

    /*if(!empty($_FILES['prod_img']['name'])){
    	$upload = new ImageUpload();
    	if($upload->Upload(900, 'prod_img')){
    		$prod_img = $upload->retorno;
    		@unlink($prod_img_arquivo);
    	}else{
    		exit('Erro ao enviar a imagem');
    	}
    }else{
    	$prod_img = $_POST['prod_img_atual'];
    }*/
        $clientes->Preparar($cli_nome,$cli_sobrenome,$cli_data_nasc,$cli_rg,$cli_cpf,$cli_ddd,$cli_fone,$cli_celular, $cli_endereco,$cli_numero,$cli_bairro,$cli_cidade,$cli_uf,$cli_cep,$cli_email/*,$cli_data_cad,$cli_hora_cad,$cli_senha*/);

        if(!$clientes->EditarADM($cli_id)){
            echo '<div class="alert alert-danger">Ocorreu um erro ao editar os dados';
            Sistema::VoltarPagina();
            echo '</div>';

            exit();
        }else{
            echo '<div class="alert alert-success">Dados atualizados com sucesso!</div>';
            Rotas::Redirecionar(1, Rotas::pag_ListarClientes());
        }
}


//Pegar o id dos produtos
$cli = new Clientes();
$id = $_GET['cli_id'];
$cli->GetClientesID($id);


$smarty->assign('CLI', $cli->GetItens());

$smarty->display('adm_clientes_editar.tpl');

?>