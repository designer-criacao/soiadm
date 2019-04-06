<?php

$smarty = new Template();

if(isset($_POST['']) && isset($_POST[''])){
    $port_nome = $_POST[''];
    $port_categoria = $_POST[''];
    $port_img = $_POST[''];

    if(!empty($_FILES)){
        $upload = new ImageUpload();
        if($upload->Upload(900, 'port_img')){
            $port_img = $upload->retorno;
        }else {
            exit('Erro ao enviar a imagem!');
        }
    }

    $gravar = new Portfolio();
}

$smarty->display('adm_portfolio.tpl');

?>