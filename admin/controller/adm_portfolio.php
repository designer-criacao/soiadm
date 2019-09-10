<?php

$smarty = new Template();
$portfolio = new Portfolio();

if(isset($_POST['nome_img']) && isset($_POST['port_categoria'])){
    $port_nome = $_POST['nome_img'];
    $port_categoria = $_POST['port_categoria'];
    $port_img = $_FILES['img']['name'];
    $port_url = $_POST['port_url'];

    if(!empty($_FILES)){
        $upload = new ImageUpload();
        if($upload->Upload(900, 'img')){
            $port_img = $upload->retorno;
        }else {
            exit('Erro ao enviar a imagem!');
        }
    }

    $gravar = new Portfolio();

    $gravar->Preparar($port_nome, $port_categoria, $port_img, $port_url);

    if($gravar->Inserir()){
        echo '<div class="alert alert-success">Job cadastrado com sucesso!</div>';
    	Rotas::Redirecionar(2, Rotas::pag_ListaPortfolioADM());
    }else {
        echo '<div class="alert alert-success">Produto não cadastrado!';
    	Sistema::VoltarPagina();
    	echo '</div>'; 
    	exit();
    }
}


$smarty->display('adm_portfolio.tpl');

?>