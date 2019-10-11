<?php   

//Biblioteca de classes...
require '../lib/autoload.php';

$smarty = new Template();

$user = new User();

if(isset($_POST['enviar']) && isset($_POST['inputEmail'])){
	$user->setEmail($_POST['inputEmail']);

	if($user->GetUserEmail($user->getEmail()) > 0){
		$novasenha = Sistema::GerarSenha();
		$user->AlterarSenha($user->getEmail(), $novasenha);

		//Enviar o email para o cliente
		$email = new EnviarEmail();
	    $assunto = 'Nova Senha - ' . Config::SITE_NOME;
	    $msg = "Olá uma nova senha foi soliciatda por você, acesse o site: " . Config::SITE_NOME;
	    $msg = "<br> Nova senha =  " . $novasenha;
	    $destinatarios = array($user->getEmail(), Config::SITE_EMAIL_ADM);
	    $email->Enviar($assunto, $msg, $destinatarios);

	    echo '<div class="alert alert-success"> <p> Olá, foi enviada uma nova senha para acesso ao site em seu email de cadastro!!</p></div>';
	    Rotas::Redirecionar(5, Rotas::pag_LoginADM());

	}else{
		echo '<div class="alert alert-danger"> <p> Este e-mail não está cadastro na loja!</p></div>';
		Rotas::Redirecionar(2, Rotas::pag_EsqueciSenhaADM());
	}
}else{
	$smarty->display('esqueci_senha.tpl');
}



?>