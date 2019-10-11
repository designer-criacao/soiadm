<?php  

date_default_timezone_set('America/Sao_Paulo');

//Se não existir uma sessão, é criada automaticamente uma nova sessão...
if(!isset($_SESSION)){
	session_start();
}

//Biblioteca de classes...
require '../lib/autoload.php';


$smarty = new Template();

/*
//Condição para recuperar senha através da tela de Login 
if(isset($_POST['recovery'])):
	// obejto USER
    $user = new User();
   // passo alguns valores
    $email = $_POST['txt_email'];
    $senha = Sistema::GerarSenha();
    // verifica se tem este email na tabela 
    if($user->GetUserEmail($email) > 0):
        
        // faz alteração 
        $user->AlterarSenha($senha, $email);  
        
          // apos alterar envia email com a nova senha
         $enviar = new EnviarEmail();
         
         $assunto = 'Nova senha ADM do site '. Sistema::DataAtualBR();
         $destinatarios = array($email,  Config::SITE_EMAIL_ADM);
         $msg = ' Nova senha no ADM do site, nova senha:  ' .$senha;

         $enviar->Enviar($assunto, $msg, $destinatarios);
         
           echo '<div class="alert alert-success"> Foi enviado um email com a NOVA SENHA  </div>';
   
    else:
        
         echo '<div class="alert alert-danger"> Email não encontrado </div>';
    endif;
 
endif;
*/

if(isset($_POST['txt_logar']) && isset($_POST['txt_user'])){
	$user = $_POST['txt_user'];
	$senha = $_POST['txt_senha'];
	$login = new Login();
	if($login->GetLoginADM($user, $senha)){
		echo '<div class="alert alert-success">Login efetuado com sucesso!</div>';
		Rotas::Redirecionar(1, 'index.php');
	}
}
else if(isset($_POST['lembrar'])){
  Rotas::Redirecionar(0.5, Rotas::pag_EsqueciSenhaADM());
}


$smarty->assign('PAG_ESQUECI_SENHA', Rotas::pag_EsqueciSenhaADM());


$smarty->display('login.tpl');
?>