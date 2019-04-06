<?php
$smarty = new Template();

if(isset($_POST['btn_gravar'])){
    $sobre = $_POST['sobre'];
    $visao = $_POST['visao'];
    $valores = $_POST['valores'];
    $missao = $_POST['missao'];

    $gravar = new Sobre();
    $gravar->Preparar($sobre,$visao,$valores,$missao);

    if($gravar->Inserir()){
        echo '<div class="alert alert-success">Sucesso no Cadastro!</div>';
        Rotas::Redirecionar(1, Rotas::get_SiteADM());
    }else{
        echo '<div class="alert alert-success">Não Cadastrado!';
        Rotas::Redirecionar(1, Rotas::pag_EmpresaADM());
        echo '</div>';
        exit();
    }
}

$smarty->display('adm_empresa.tpl');

?>