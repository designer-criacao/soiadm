<?php  
$smarty = new Template();
$user = new User();

if(isset($_POST['registrar']) && isset($_POST['inputEmail'])){
    $userNome 	   = $_POST['lastName'];
	$useEmail = $_POST['inputEmail'];
    $userPw = $_POST['inputPassword'];
    
    if(isset($_POST['inputPassword']) != isset($_POST['confSenha'])){
        echo '<div class="alert alert-success">A senha não confere!';
        Rotas::Redirecionar(1, Rotas::pag_RegistrarLoginADM());
        echo '</div>';
    }
    else{
        $user->Preparar($userNome, $useEmail, $userPw);

        if(!$user->Inserir()){
            echo '<div class="alert alert-success">Não Cadastrado!';
            Rotas::Redirecionar(5, Rotas::pag_RegistrarLoginADM());
            echo '</div>';
            exit();
        }else{
            echo '<div class="alert alert-success">Sucesso no Cadastro!</div>';
            Rotas::Redirecionar(1, Rotas::pag_UsuariosADM());
        }
    }

    
}


// $smarty->assign('PAG_ESQUECI_SENHA', Rotas::pag_EsqueciSenhaADM());
$smarty->display('registrar_login.tpl');
?>