<?php  
	
	Class Portfolio extends Conexao{

		private $port_nome, $port_categoria, $port_img;


		function __construct(){
			parent::__construct();
		}

		function GetPortfolio(){
			//Query para buscar os produtos de uma categoria específica
			//$query = "SELECT * FROM {$this->prefix}portfolio p  INNER JOIN {$this->prefix}categoria c ON p.port_categoria = c.id";
            $query = "SELECT * FROM {$this->prefix}portfolio";
			//$query .= " LIMIT 0,6";
			$query .= " ORDER BY id DESC";
			//$query .= $this->PaginacaoLinks("d", $this->prefix."portfolio");
			$this->ExecuteSQL($query);
			$this->GetLista();
		}

		function GetPortfolioID($id){
			//Query para buscar os produtos de uma categoria específica
			//$query = "SELECT * FROM {$this->prefix}portfolio p  INNER JOIN {$this->prefix}categoria c ON p.port_categoria = c.id";
            $query = "SELECT * FROM {$this->prefix}portfolio";
			$query .= " AND id = :id";
			$params = array(':id'=>(int)$id);
			$this->ExecuteSQL($query, $params);
			$this->GetLista();
		}

		function GetPortfolioCateID($id){
			//Query para buscar os produtos de uma categoria específica

			$id = filter_var($id, FILTER_SANITIZE_NUMBER_INT);

			$query = "SELECT * FROM {$this->prefix}portfolio";

			$query .= " AND port_categoria = :id";
			$query .= $this->PaginacaoLinks("id", $this->prefix."portfolio WHERE id=".(int)$id);
			$params = array(':id'=>(int)$id);
			$this->ExecuteSQL($query, $params);
			$this->GetLista();
		}

        function GetPortfolioNome($nome){
        
              // monto a SQL
            $query = "SELECT * FROM {$this->prefix}portfolio";        
            $query .= " WHERE nome LIKE '%$nome%'";
            $query .= $this->PaginacaoLinks("prod_id", $this->prefix."portfolio WHERE nome LIKE '%$nome%'");
            // passando parametros
            $params = array(':nome'=>$nome);
           // executando a SQL                      
            $this->ExecuteSQL($query,$params);
            // trazendo a listagem 
            $this->GetLista();
        }


		private function GetLista(){
			$i = 1;
			while($lista = $this->ListarDados()):
			$this->itens[$i] = array(
                'id' => $lista['id'],
                'port_categoria' => $lista['port_categoria'],
                'nome_img' => $lista['nome_img'],
                'img' => $lista['img'],

				
				// 'prod_img' => Rotas::ImageLink($lista['prod_img'],180,180),
				'img' => Rotas::ImageLink($lista['img'],900,400),
				// 'prod_img_p' => Rotas::ImageLink($lista['prod_img'],80,80),
				//'prod_img' => $lista['prod_img'],
				
                'port_img_arquivo'   => Rotas::get_SiteRaiz() .'/'. Rotas::get_ImagePasta().$lista['img'], 
                'port_img_atual'     => $lista['img']
				);

			$i++;
			endwhile;
		}



		function Preparar($port_nome, $port_categoria, $port_img){
        
                $this->setPort_nome($port_nome);
                $this->setPort_categoria($port_categoria);
                $this->setPort_img($port_img);
            }



        function Inserir(){
        $query = "INSERT INTO {$this->prefix}portfolio (port_categoria, nome_img, img)";
        $query.= " VALUES ";
        $query.= " ( :port_categoria, :nome_img, :img)";
        
        $params = array(
        ':port_categoria'=> $this->getPort_categoria(),   
        ':nome_img'=> $this->getPort_nome(),
        ':img'=> $this->getPort_img()
        );

          if($this->ExecuteSQL($query, $params)):
               
                   return TRUE;
               
               else:
                   
                   return FALSE; 
               
           endif;

        }


        function Alterar($id){
          
        $query = " UPDATE {$this->prefix}produtos SET prod_nome=:prod_nome, prod_categoria=:prod_categoria," ;
        $query.= " prod_ativo=:prod_ativo, prod_modelo=:prod_modelo, prod_ref=:prod_ref,";
        $query.= " prod_valor=:prod_valor, prod_estoque=:prod_estoque, prod_peso=:prod_peso , ";
        $query.= " prod_altura=:prod_altura, prod_largura=:prod_largura,";
        $query.= " prod_comprimento=:prod_comprimento ,prod_img=:prod_img, prod_desc=:prod_desc, prod_slug=:prod_slug";
       $query.= " WHERE prod_id = :prod_id";
        
        $params = array(
        ':prod_nome'=> $this->getProd_nome(),   
        ':prod_categoria'=> $this->getProd_categoria(),   
        ':prod_ativo'=> $this->getProd_ativo(),   
        ':prod_modelo'=> $this->getProd_modelo(),   
        ':prod_ref'=> $this->getProd_ref(),   
        ':prod_valor'=> $this->getProd_valor(),   
        ':prod_estoque'=> $this->getProd_estoque(),   
        ':prod_peso'=> $this->getProd_peso(),   
        ':prod_altura'=> $this->getProd_altura() , 
        ':prod_largura'=> $this->getProd_largura(),
        ':prod_comprimento'=> $this->getProd_comprimento(),   
        ':prod_img'=> $this->getProd_img(),   
        ':prod_desc'=> $this->getProd_desc(),   
        ':prod_slug'=> $this->getProd_slug(),   
        ':prod_id'=> (int)$id,   
                     
        );

           // executo a SQL
           if($this->ExecuteSQL($query, $params)):
               
                   return TRUE;
               
               else:
                   
                   return FALSE; 
               
           endif;
 
        }

        function Apagar($id){
            $query = "DELETE FROM {$this->prefix}produtos";
            $query .= " WHERE prod_id = :id ";
            $params = array(
                ':id' =>  (int)$id //ou int($id)
                );
            // executo a SQL
           if($this->ExecuteSQL($query, $params)):
               
                   return TRUE;
               
               else:
                   
                   return FALSE; 
               
           endif;
        }


		//MÉTODOS GET

	function getPort_nome() {
        return $this->port_nome;
    }

    function getPort_categoria() {
        return $this->port_categoria;
    }

    function getPort_img() {
        return $this->port_img;
    }


    //MÉTODOS SET
    function setPort_nome($port_nome) {
        $this->port_nome = $port_nome;
    }

    function setPort_categoria($port_categoria) {
        $this->port_categoria = $port_categoria;
    }

    function setPort_img($port_img) {
        $this->port_img = $port_img;
    }

    }
?>