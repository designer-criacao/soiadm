<?php

$smarty = new Template();
$categoria = new Categorias();

$categoria->GetCategorias();

$smarty->assign('CATEGORIAS', $categorias->GetItens());


?>