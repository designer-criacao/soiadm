<?php  
	class Pedido extends Conexao{

		private $id, $nome, $email, $razao, $telefone, $regiao, $servico, $data_pedido; 

		function __construct(){
			parent::__construct();
		}

		function PedidoGravar(){
			// $retorno = FALSE;
			$query = "INSERT INTO ".$this->prefix."pedidos ";
			$query .= "(nome, email, razao_social, telefone, regiao_sampa, tipo_servico, data_pedido)";
			$query .= " VALUES ";
			$query .= "(:nome, :email, :razao, :telefone, :regiao, :servico, :data_pedido)";

			$params = array(
				':nome' => $this->getNome(),
				':email' => $this->getEmail(),
				':razao' => $this->getRazao(),
				':telefone' => $this->getTelefone(),
				':regiao' => $this->getRegiao(),
				':servico' => $this->getTipoServico(),
				':data_pedido' => Sistema::DataAtualUS()
				);

			$this->ExecuteSQL($query, $params);
			
		}

		function Preparar($nome, $email, $razao, $telefone, $regiao, $servico, $data_pedido)
		{
			$this->setNome($nome);
			$this->setEmail($email);
			$this->setRazao($razao);
			$this->setTelefone($telefone);
			$this->setRegiao($regiao);
			$this->setTipoServico($servico);
			$this->setDataPedido($data_pedido);
			
		}
		
		// function GetPedidosCliente($cliente=null){
		// 	$query = "SELECT * FROM {$this->prefix}pedidos p INNER JOIN {$this->prefix}clientes c";
		// 	$query .= " ON p.ped_cliente = c.cli_id";
			
		// 	if($cliente != null){
		// 		$cli = (int)$cliente;
		// 		$query .= " WHERE ped_cliente = {$cli}";
		// 		$query .= " ORDER BY ped_id DESC";
		// 	$query .= $this->PaginacaoLinks("ped_id", $this->prefix."pedidos WHERE ped_cliente=".(int)$cli);
		// 	}else{
		// 		$query .= $this->PaginacaoLinks("ped_id", $this->prefix."pedidos");
		// 	}
		// 	$this->ExecuteSQL($query);
		// 	$this->GetLista();
		// }

		private function GetLista(){
        
        $i = 1;
        while ($lista = $this->ListarDados()):
            
        $this->itens[$i] = array(
                'nome'    => $lista['nome'],
                'email'  => $lista['email'],
                'razao'   => $lista['razao_social'],
                'telefone' => $lista['telefone'],
                'regiao'   => $lista['regiao_sampa'],
				'servico'     => $lista['tipo_servico'],
				'data_pedido'  => Sistema::Fdata($lista['data_pedido'])
            );
            $i++;
        
        endwhile;

    	}

    // 	function GetPedidosRef($ref){
        
    //       // monto a SQL
    //     $query = "SELECT * FROM {$this->prefix}pedidos p INNER JOIN {$this->prefix}clientes c";
    //     $query.= " ON p.ped_cliente = c.cli_id";        
    //     $query .= " WHERE ped_ref = :ref";
    //     $query .= $this->PaginacaoLinks("ped_id", $this->prefix."pedidos WHERE ped_ref = ".$ref);
    //     // passando parametros
    //     $params = array(':ref'=>$ref);
    //    // executando a SQL                      
    //     $this->ExecuteSQL($query,$params);
    //     // trazendo a listagem 
    //     $this->GetLista();
    // 	}

    //  	function GetPedidosData($data_ini,$data_fim){
        
    //      // montando a SQL
    //     $query = "SELECT * FROM {$this->prefix}pedidos p INNER JOIN {$this->prefix}clientes c";
    //     $query.= " ON p.ped_cliente = c.cli_id";
        
    //     $query.= " WHERE ped_data between :data_ini AND :data_fim";
    //     $query .= $this->PaginacaoLinks("ped_id", $this->prefix."pedidos WHERE ped_data between ".$data_ini." AND ".$data_fim);
          
    //    // passando os parametros  
    //     $params = array(':data_ini'=>$data_ini, ':data_fim'=>$data_fim);
        
    //     // executando a SQL
    //     $this->ExecuteSQL($query,$params);
        
    //     $this->GetLista();
    // 	}

    	function  Apagar($ped_cod){
        
        // apagando o PEDIDO  
        
        // monto a minha SQL de apagar o pedido 
        $query =  " DELETE FROM {$this->prefix}pedidos WHERE id = :id";        
        // parametros
        $params = array(':id'=>$id);
        // executo a minha SQL
        $this->ExecuteSQL($query, $params);
			// executo a minha SQL
			if($this->ExecuteSQL($query, $params)):
				return TRUE;
			endif;
    	}

		// function ItensGravar($codpedido){
		// 	$carrinho = new Carrinho();
		// 	foreach ($carrinho->GetCarrinho() as $item) {
		// 		$query = "INSERT INTO " .$this->prefix. "pedidos_itens ";
		// 		$query .= "(item_produto, item_valor, item_qtd, item_ped_cod)";
		// 		$query .= "VALUES (:produto, :valor, :qtd, :cod)";

		// 		$params = array(
		// 			':produto' => $item['prod_id'],
		// 			':valor' => $item['prod_valor_us'],
		// 			':qtd' => (int)$item['prod_qtd'],
		// 			':cod' => $codpedido
		// 			);
		// 		$this->ExecuteSQL($query, $params);

		// 	}
		// }

		// function LimparSessoes(){
		// 	unset($_SESSION['PRO']);
		// 	unset($_SESSION['PED']['pedido']);
		// 	unset($_SESSION['PED']['ref']);
			
		// }

		//MÉTODOS GET

        function getNome() {
            return $this->nome;
        }

        function getEmail() {
            return $this->email;
        }

        function getRazao() {
            return $this->razao;
        }

        function getTelefone(){
            return $this->telefone;
		}
		
		function getRegiao(){
			return $this->regiao;
		}

		function getTipoServico(){
			return $this->servico;
		}

		function getDataPedido(){
			return $this->data_pedido;
		}

        //MÉTODOS SET
        function setNome($nome) {
            $this->nome = $nome;
        }

        function setEmail($email) {
            $this->email = $email;
        }

        function setRazao($razao) {
            $this->razao = $razao;
        }

        function setTelefone($telefone){
            $this->telefone = $telefone;
		}
		
		function setRegiao($regiao){
			$this->setRegiao = $regiao;
		}

		function setTipoServico($tipo_servico){
			$this->servico = $tipo_servico;
		}

		function setDataPedido($data_pedido){
			$this->data_pedido = $data_pedido;
		}

	}
?>