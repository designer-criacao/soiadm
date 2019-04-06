<?php

	Class Carrinho extends Conexao{
		/*private $total_valor, $total_peso, $itens = array();

		function GetCarrinho($sessao=NULL){
			$i = 1; $sub = 1.00; $peso = 0;

			foreach ($_SESSION['PRO'] as $lista) {
				$sub = ($lista['VALOR_US'] * $lista['QTD']);
				$this->total_valor += $sub;

				$peso = $lista['PESO'] * $lista['QTD'];
				$this->total_peso += $peso;

				$this->itens[$i] = array(
					'prod_id' => $lista['ID'],
					'prod_nome'  => $lista['NOME'],
		            'prod_valor' => $lista['VALOR'], // 1.000,99
		            'prod_valor_us' => $lista['VALOR_US'],  // 1000.99
		            'prod_peso'  => $lista['PESO'],
		            'prod_qtd'   => $lista['QTD'],
		            'prod_img'   => $lista['IMG'],
		            'prod_link'  => $lista['LINK'],
		            'prod_subTotal'=> Sistema::MoedaBR($sub),         
		            'prod_subTotal_us'=> $sub
					);
				$i++;
			}

			if(count($this->itens) > 0){
				return $this->itens;
			}else{
				echo '<h4 class="alert alert-danger">Não há produtos no carrinho</h4>'; 

			}
		}

		function GetTotal(){
			return $this->total_valor;
		}

		function GetPeso(){
			return $this->total_peso;
		}

		function CarrinhoADD($id){
			$produtos = new Produtos();
			$produtos->GetProdutosID($id);
			foreach($produtos->GetItens() as $pro){
				$ID = $pro['prod_id'];
				$NOME  = $pro['prod_nome'];
	            $VALOR_US = $pro['prod_valor_us'];
	            $VALOR  = $pro['prod_valor'];
	            $PESO  = $pro['prod_peso'];
	            $QTD   = 1;
	            $IMG   = $pro['prod_img_p'];
	            $LINK  = Rotas::pag_ProdutosInfo().'/'.$ID.'/'.$pro['prod_slug'];
	            $ACAO  = $_POST['acao'];
			}

			switch ($ACAO) {
				case 'add':
					if(!isset($_SESSION['PRO'][$ID]['ID'])){
						$_SESSION['PRO'][$ID]['ID'] = $ID;
						$_SESSION['PRO'][$ID]['NOME']  = $NOME;
					    $_SESSION['PRO'][$ID]['VALOR'] = $VALOR;
					    $_SESSION['PRO'][$ID]['VALOR_US'] = $VALOR_US;
					    $_SESSION['PRO'][$ID]['PESO']  = $PESO;
					    $_SESSION['PRO'][$ID]['QTD']   = $QTD;
					    $_SESSION['PRO'][$ID]['IMG']   = $IMG;
					    $_SESSION['PRO'][$ID]['LINK']  = $LINK;
					}else{
						$_SESSION['PRO'][$ID]['QTD']   += $QTD;
					}

					echo '<h4 class="alert alert-success">Produto Inserido!</h4>';
					break;
				case 'del':
					$this->CarrinhoDel($id);
					echo '<h4 class="alert alert-success">Produto Removido!</h4>';
					break;
				case 'limpar':
					$this->CarrinhoLimpar();
					echo '<h4 class="alert alert-success">Produtos Removidos!</h4>';
					break;
				
			}
		}

		private function CarrinhoDel($id){
			unset($_SESSION['PRO'][$id]);
		}
		private function CarrinhoLimpar(){
			unset($_SESSION['PRO']);
		}*/

		
		private $sobre, $valores, $visao, $missao;

        function __construct(){
            parent::__construct();
        }

        private function GetLista(){
            $i = 1;

            while($lista = $this->ListarDados()):
                $this->itens[$i] = array(
                    'id' => $lista['id'],
                    'sobre' => $lista['sobre'],
                    'visao' => $lista['visao'],
                    'valores' => $lista['valores'],
                    'missao' => $lista['missao']
                );
                $i++;
            endwhile;
        }

        function Preparar($sobre,$visao,$valores,$missao){
            $this->setSobre($sobre);
            $this->setVisao($visao);
            $this->setValores($valores);
            $this->setMissao($missao);
        }

        function Inserir(){
            $query = "INSERT INTO {$this->prefix}empresa (sobre,visao,valores,missao)";
            $query .= " VALUES (:sobre,:visao,:valores,:missao)";

            $params = array(
                ':sobre' => $this->getSobre(),
                ':visao' => $this->getVisao(),
                ':valores' => $this->getValores(),
                ':missao' => $this->getMissao(),
            );
            if($this->ExecuteSQL($query, $params)):
                return TRUE;
            else:
                return FALSE;
            endif;


        }
        

        function getSobre(){
            return $this->sobre;
        }
        function setSobre($sobre){
            $this->sobre = $sobre;
        }

        function getValores(){
            return $this->sobre;
        }
        function setValores($valores){
            $this->valores = $valores;
        }

        function getVisao(){
            return $this->visao;
        }
        function setVisao($visao){
            $this->visao = $visao;
        }

        function getMissao(){
            return $this->missao;
        }
        function setMissao($missao){
            $this->missao = $missao;
        }
	}
?>