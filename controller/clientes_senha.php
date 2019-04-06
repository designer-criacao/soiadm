<?php  
$smarty = new Template();

Login::MenuCliente();

if(isset($_POST['cli_senha_atual']) and isset($_POST['cli_senha'])){
	$senha_atual = md5($_POST['cli_senha_atual']);
	$senha_nova = $_POST['cli_senha'];
	$email = $_SESSION['CLI']['cli_email'];

	if($senha_atual != $_SESSION['CLI']['cli_pass']){
		echo '<br><div class="alert alert-danger" id="erro_mostrar">A senha atual está incorreta</div>';
		Rotas::Redirecionar(3, Rotas::pag_ClienteSenha());
		exit();
	}

	$cliente = new Clientes();
	$cliente->SenhaUpdate($senha_nova, $email);
	//echo '<br><div class="alert alert-success">A senha foi alterada com Sucesso!</div>';
	echo '<script> alert("A senha foi alterada com Sucesso!");</script>';
	#$login = new Login();
   	#$login->GetLogin($email, $senha_nova);

   	Rotas::Redirecionar(0.5, Rotas::pag_MinhaConta());
	#Rotas::Redirecionar(2, Rotas::pag_Logoff());
}else{
	$smarty->display('cliente_senha.tpl');
}


?>