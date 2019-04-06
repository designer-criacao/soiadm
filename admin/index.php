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
    require '../lib/autoload.php';
    
    if(!Login::LogadoADM()){
        Rotas::Redirecionar(1, 'login.php');
        exit('<h2>Erro! Acesso negado.</h2>');
    }
    
    $smarty = new Template();
    /*$categorias = new Categorias();
    $categorias->GetCategorias();*/
    
    //valores para o template
    $smarty->assign('GET_TEMA', Rotas::get_SiteTema());
    $smarty->assign('GET_SITE_HOME', Rotas::get_SiteHOME());
    $smarty->assign('TITULO_SITE', Config::SITE_NOME);
    $smarty->assign('SITE_NOME', Config::SITE_NOME);
    $smarty->assign('GET_SITE_ADM', Rotas::get_SiteADM());
    $smarty->assign('PAG_GRAFICO', Rotas::pag_GraficosADM());
    $smarty->assign('PAG_USUARIOS', Rotas::pag_UsuariosADM());
    $smarty->assign('DATA2', Sistema::DataAtualBR());
    $smarty->assign('PAG_REGISTRAR_LOGIN', Rotas::pag_RegistrarLoginADM());
    $smarty->assign('PAG_ESQUECI_SENHA', Rotas::pag_EsqueciSenhaADM());
    $smarty->assign('PAG_EMPRESA_ADM', Rotas::pag_EmpresaADM());
    $smarty->assign('PAG_PORTFOLIO_ADM', Rotas::pag_PortfolioADM());
    $smarty->assign('PAG_LOGOFF', Rotas::pag_LogoffADM());
    $smarty->assign('PAG_CAD_CLIENTES', Rotas::pag_CadClientes());
    $smarty->assign('PAG_LISTAR_CLIENTES', Rotas::pag_ListarClientes());
    /*
    $smarty->assign('PAG_ADM_CLIENTE', Rotas::pag_ClientesADM());
    $smarty->assign('PAG_ADM_PEDIDOS', Rotas::pag_PedidosADM());
    $smarty->assign('PAG_CONTATO', Rotas::pag_Contato());
    $smarty->assign('PAG_CATEGORIAS', Rotas::pag_CategoriasADM());
    $smarty->assign('PAG_ADM_PRODUTOS', Rotas::pag_ProdutosADM());
    $smarty->assign('PAG_SENHA', Rotas::get_SiteADM() . '/adm_senha');
    $smarty->assign('CATEGORIAS', $categorias->GetItens());
    $smarty->assign('LOGADO', Login::LogadoADM());
    $smarty->assign('DATA', Sistema::DataAtualBR2());
    
    $smarty->assign('HORA', Sistema::HoraAtual());
    $smarty->assign('PAG_LOGOFF', Rotas::pag_LogoffADM());*/
    //$smarty->assign('LOGADO', Login::LogadoADM());
    //$smarty->assign('PAG_LOGOFF', Rotas::get_SiteADM() .'/logoff');
    //$smarty->assign('PAG_SENHA', Rotas::get_SiteADM() .'/adm_senha');
    
    if(Login::LogadoADM()){
        $smarty->assign('USER', $_SESSION['ADM']['user_nome']);
        $smarty->assign('DATA', $_SESSION['ADM']['user_data']);
        $smarty->assign('HORA', $_SESSION['ADM']['user_hora']);
    }
    
    $smarty->display('adm_index.tpl');

?>