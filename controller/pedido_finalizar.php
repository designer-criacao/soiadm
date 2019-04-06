<?php

if(!Login::Logado()){
	Login::AcessoNegado();
	Rotas::Redirecionar(2, Rotas::pag_ClienteLogin());
}else{
		if(isset($_SESSION['PRO'])){

			//Confere se existe o frete para poder finalizar o pedido... 
			if(!isset($_SESSION['PED']['frete'])){
				Rotas::Redirecionar(1, Rotas::pag_Carrinho().'#dadosfrete');
				exit('<h4 class="alert alert-danger"> Precisa selecionar o frete! </h4>');
			}

			$ref_cod_pedido = date('ymdHms') . $_SESSION['CLI']['cli_id'];

			if(!isset($_SESSION['PED']['pedido'])){
				//A sessão terá um código criptografado e gravará no banco a data e hora...
				$_SESSION['PED']['pedido'] = $ref_cod_pedido; //md5(uniqid(date('YmdHms')));
			}

			if(!isset($_SESSION['PED']['ref'])){
				//A sessão terá um código criptografado e gravará no banco a data e hora...
				$_SESSION['PED']['ref'] = $ref_cod_pedido;
			}


		$smarty = new Template();

		$carrinho = new Carrinho();

		$pedido = new Pedido();
		$cliente = $_SESSION['CLI']['cli_id'];
		$cod = $_SESSION['PED']['pedido'];
		$ref = $_SESSION['PED']['ref'];
		$frete = $_SESSION['PED']['frete'];

		$smarty->assign('PRO', $carrinho->GetCarrinho());
		$smarty->assign('TOTAL', Sistema::MoedaBR($carrinho->GetTotal()));
		$smarty->assign('NOME_CLIENTE', $_SESSION['CLI']['cli_nome']);
		$smarty->assign('SITE_NOME', Config::SITE_NOME);
		$smarty->assign('SITE_HOME', Rotas::get_SiteHome());
		$smarty->assign('PAG_MINHA_CONTA', Rotas::pag_ClientePedidos());

		$smarty->assign('TEMA', Rotas::get_SiteTema());
		$smarty->assign('FRETE', Sistema::MoedaBR($_SESSION['PED']['frete']));
		$smarty->assign('TOTAL_FRETE', Sistema::MoedaBR($_SESSION['PED']['total_com_frete']));
		$smarty->assign('PAG_RETORNO', Rotas::pag_PedidoRetorno());
		$smarty->assign('PAG_ERRO',Rotas::pag_PedidoRetornoERRO());
		$smarty->assign('REF', $ref);

		


		$email = new EnviarEmail();

		$destinatarios = array(Config::SITE_EMAIL_ADM, $_SESSION['CLI']['cli_email']);
		
		$assunto = 'Pedido da Loja Soi - ' .Sistema::DataAtualBR();
		
		$msg = $smarty->fetch('email_compra.tpl');

		//$email->Enviar($assunto, $msg, $destinatarios);

		//Se o pedido for finalizado e gravado a sessão é quebrada para fazer outra compra...
		if($pedido->PedidoGravar($cliente, $cod, $ref, $frete)){
			$pag = new PagamentoPS();
      
            $pag->Pagamento($_SESSION['CLI'], $_SESSION['PED'], $carrinho->GetCarrinho());
            
          	//  var_dump($pag);
            
              // passando para o template dados do PS
              $smarty->assign('PS_URL', $pag->psURL);            
              $smarty->assign('PS_COD', $pag->psCod);
              $smarty->assign('PS_SCRIPT', $pag->psURL_Script);

			$pedido->LimparSessoes();
		}

		$smarty->display('pedido_finalizar.tpl');
	}else{
		echo '<h4 class="alert alert-danger">Não possui produtos no carrinho!</h4>';
		Rotas::Redirecionar(3, Rotas::pag_Produtos());
	}
}



/*echo '<pre>';
	var_dump($carrinho->GetCarrinho());
echo '</pre>';
*/
?>