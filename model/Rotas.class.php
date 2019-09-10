<?php  
	Class Rotas{
		public static $pag;
		private static $pasta_controller = 'controller';
		private static $pasta_view = 'view';
		private static $pasta_ADM = 'admin';

		static function get_SiteHome(){
			return Config::SITE_URL . '/' .Config::SITE_PASTA;
		}

		static function get_SiteRaiz(){
			return $_SERVER['DOCUMENT_ROOT'] . '/' .Config::SITE_PASTA;
		}

		static function get_SiteTema(){
			return self::get_SiteHome() . '/' .self::$pasta_view;
		}

		static function pag_Empresa(){
			return self::get_SiteHome(). '/empresa';
		}

		static function pag_Contato(){
			return self::get_SiteHome() . '/contato';
		}

		static function pag_Portfolio(){
			return self::get_SiteHome() . '/portfolio';
		}

		//******* Funções para área administrativas ********************
		static function get_SiteADM(){
			return self::get_SiteHome() .'/' .self::$pasta_ADM;
		}

		static function pag_LoginADM(){
			return self::get_SiteADM() .'/login';
		}

		static function pag_GraficosADM(){
			return self::get_SiteADM() .'/grafico';
		}

		static function pag_UsuariosADM(){
			return self::get_SiteADM() .'/lista_usuario';
		}

		static function pag_RegistrarLoginADM(){
			return self::get_SiteADM() .'/registrar_login';
		}

		static function pag_EsqueciSenhaADM(){
			return self::get_SiteADM() .'/esqueci_senha';
		}

		static function pag_EmpresaADM(){
			return self::get_SiteADM() . '/adm_empresa';
		}

		static function pag_PortfolioADM(){
			return self::get_SiteADM() . '/adm_portfolio';
		}

		static function pag_ListaPortfolioADM(){
			return self::get_SiteADM() . '/adm_listaPortfolio';
		}

		static function pag_CadClientes(){
			return self::get_SiteADM() . '/cad_cliente';
		}

		static function pag_ListarClientes(){
			return self::get_SiteADM() . '/lista_clientes';
		}

		static function pag_ClientesEditarADM(){
			return self::get_SiteADM() .'/adm_clientes_editar';
		}

		/*static function pag_ClienteCadastro(){
			return self::get_SiteHome(). '/cadastro';
		}

		static function pag_ClienteDados(){
			return self::get_SiteHome(). '/clientes_dados';
		}

		static function pag_ClienteSenha(){
			return self::get_SiteHome(). '/clientes_senha';
		}

		static function pag_ClienteRecovery(){
			return self::get_SiteHome(). '/clientes_recovery';
		}

		static function pag_ClienteItens(){
			return self::get_SiteHome(). '/cliente_itens';
		}

		static function pag_Carrinho(){
			return self::get_SiteHome() . '/carrinho';
		}

		static function pag_ClienteLogin(){
			return self::get_SiteHome() . '/login';
			#return self::get_SiteHome() . '/minhaconta';
		}

		static function pag_Logoff(){
			return self::get_SiteHome() . '/logoff';
		}

		static function pag_CarrinhoAlterar(){
			return self::get_SiteHome() . '/carrinho_alterar';
		}

		static function pag_Produtos(){
			return self::get_SiteHome() . '/produtos';
		}
		static function pag_ProdutosInfo(){
			return self::get_SiteHome() . '/produtos_info';
		}

		

		static function pag_MinhaConta(){
			return self::get_SiteHome() . '/minhaconta';
		}

		static function pag_ClienteConta(){
			return self::get_SiteHome() . '/minhaconta';
		}

		static function pag_PedidoConfirmar(){
			return self::get_SiteHome() . '/pedido_confirmar';
		}

		static function pag_PedidoFinalizar(){
			return self::get_SiteHome() . '/pedido_finalizar';
		}

		static function pag_PedidoRetorno(){
        
        	return self::get_SiteHOME() .'/pedido_retorno';
    	}
   
   		static function pag_PedidoRetornoERRO(){
        
        	return self::get_SiteHOME() .'/pedido_retorno_erro';
    	}*/

		//Concatena o caminho padrão das imagens
		static function get_ImagePasta(){
			return 'media/images/';
		}
		//Mostra o caminho completo da imagem
		static function get_ImageURL(){
			return self::get_SiteHome() . '/' . self::get_ImagePasta();
		}

		//************************************************************
		//Rotas para área administrativas
		/*static function get_SiteADM(){
			return self::get_SiteHome() .'/' .self::$pasta_ADM;
		}
		//Funções para Produtos
		static function pag_ProdutosADM(){
			return self::get_SiteADM() .'/adm_produtos';
		}
		static function pag_ProdutosNovoADM(){
			return self::get_SiteADM() .'/adm_produtos_novo';
		}
		static function pag_ProdutosEditarADM(){
			return self::get_SiteADM() .'/adm_produtos_editar';
		}
		static function pag_ProdutosDeletarADM(){
			return self::get_SiteADM() .'/adm_produtos_deletar';
		}
		static function pag_ProdutosImgADM(){
			return self::get_SiteADM() .'/adm_produtos_img';
		}*/

		//Funções para clientes
		static function pag_ClientesADM(){
			return self::get_SiteADM() .'/adm_clientes';
		}
		

		//Funções aleatórias
		static function pag_PedidosADM(){
			return self::get_SiteADM() .'/adm_pedidos';
		}
		static function pag_ItensADM(){
			return self::get_SiteADM() .'/adm_itens';
		}
		static function pag_CategoriasADM(){
			return self::get_SiteADM() .'/adm_categorias';
		}
		static function pag_LogoffADM(){
			return self::get_SiteADM() . '/adm_logoff';
		}
		//Fim das Rotas para área Administrativa
		//**************************************************************



		static function ImageLink($img, $largura, $altura){
			$imagem = self::get_ImageURL() . "thumb.php?src={$img}&w={$largura}&h={$altura}&zc=1";
			return $imagem;
		}

		static function get_Pasta_Controller(){
			return self::$pasta_controller;
		}

		static function Redirecionar($tempo, $pagina){
			$url = '<meta http-equiv="refresh" content="'.$tempo. '; url='.$pagina.'">';
			echo $url;
		}

		//Função que carrega página com url amigável...
		static function get_Pagina(){
			if(isset($_GET['pag'])){
				$pagina = $_GET['pag'];

				self::$pag = explode('/', $pagina);

				$pagina = 'controller/' . self::$pag[0] . '.php';
				//$pagina = 'controller/' . $_GET['pag'] . '.php';
				if(file_exists($pagina)){
					include $pagina;
				}else{
					include 'erro.php';
				}
			}//fim do primeiro IF ($_GET['pg'])
			else{
					include 'home.php';
			}
		}
	}
?>