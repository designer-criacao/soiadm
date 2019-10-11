<?php  

date_default_timezone_set('America/Sao_Paulo');

//Se não existir uma sessão, é criada automaticamente uma nova sessão...
if(!isset($_SESSION)){
	session_start();
}

/*
if(!isset($_SESSION['PED']['pedido'])){
	//A sessão terá um código criptografado e gravará no banco a data e hora...
	$_SESSION['pedido'] = md5(uniqid(date('YmdHms')));
}

if(!isset($_SESSION['PED']['ref'])){
	//A sessão terá um código criptografado e gravará no banco a data e hora...
	$_SESSION['ref'] = date('YmdHms');
}
*/

//Biblioteca de classes...
require 'lib/autoload.php';

$smarty = new Template();
//$categorias = new Categorias();
//$categorias->GetCategorias();

//Valores para o template
$smarty->assign('NOME', 'Ivo Oliveira');
$smarty->assign('GET_TEMA', Rotas::get_SiteTema());
$smarty->assign('GET_NOME', Config::SITE_NOME);
$smarty->assign('GET_SITE_HOME', Rotas::get_SiteHome());
$smarty->assign('PAG_CONTATO', Rotas::pag_Contato());
$smarty->assign('TITULO_SITE', Config::SITE_NOME);
$smarty->assign('PAG_EMPRESA', Rotas::pag_Empresa());
$smarty->assign('PAG_PORTFOLIO', Rotas::pag_Portfolio());
$smarty->assign('TELA_LOGIN', Rotas::pag_LoginADM());
$smarty->assign('PAG_ESQUECI_SENHA', Rotas::pag_EsqueciSenhaADM());

/*$smarty->assign('PAG_CARRINHO', Rotas::pag_Carrinho());
$smarty->assign('PAG_PRODUTOS', Rotas::pag_Produtos());
$smarty->assign('PAG_MINHACONTA', Rotas::pag_MinhaConta());
$smarty->assign('CATEGORIAS', $categorias->GetItens());
$smarty->assign('DATA', Sistema::DataAtualBR());
$smarty->assign('PAG_LOGOFF', Rotas::pag_Logoff());
$smarty->assign('LOGADO', Login::Logado());*/

/*if(Login::Logado()){
		$smarty->assign('USER', $_SESSION['CLI']['cli_nome']);
}*/

$smarty->display('index.tpl');

?>