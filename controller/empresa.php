<?php  

$smarty = new Template();
$empresa = new Sobre();

$empresa->GetSobreEmpresa();

$smarty->assign('SOBRE', $empresa->GetItens());
$smarty->assign('SITE_NOME', Config::SITE_NOME);
$smarty->assign('EMPRESA', 'Página Sobre a Empresa');
$smarty->display('empresa.tpl');


?>