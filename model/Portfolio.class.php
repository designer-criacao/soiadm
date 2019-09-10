<?php  
	
	Class Portfolio extends Conexao{

		private $port_nome, $port_categoria, $port_img, $port_url;


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
                'port_url' => $lista['port_url'],

				
				// 'prod_img' => Rotas::ImageLink($lista['prod_img'],180,180),
				'img' => Rotas::ImageLink($lista['img'],900,520),
				// 'prod_img_p' => Rotas::ImageLink($lista['prod_img'],80,80),
				//'prod_img' => $lista['prod_img'],
				
                'port_img_arquivo'   => Rotas::get_SiteRaiz() .'/'. Rotas::get_ImagePasta().$lista['img']
                //'port_img_atual'     => $lista['img']
				);

			$i++;
			endwhile;
		}



		function Preparar($port_nome, $port_categoria, $port_img, $port_url){
        
            $this->setPort_nome($port_nome);
            $this->setPort_categoria($port_categoria);
            $this->setPort_img($port_img);
            $this->setPort_url($port_url);
        }



        function Inserir(){
        $query = "INSERT INTO {$this->prefix}portfolio (port_categoria, nome_img, img, port_url)";
        $query.= " VALUES ";
        $query.= " ( :port_categoria, :nome_img, :img, :port_url)";
        
        $params = array(
        ':port_categoria'=> $this->getPort_categoria(),   
        ':nome_img'=> $this->getPort_nome(),
        ':img'=> $this->getPort_img(),
        'port_url' => $this->getPort_url()
        );

          if($this->ExecuteSQL($query, $params)):
               
                   return TRUE;
               
               else:
                   
                   return FALSE; 
               
           endif;

        }


        function Alterar($id){
          
        $query = " UPDATE {$this->prefix}produtos SET port_categoria=:port_categoria," ;
        $query.= " nome_img=:nome_img, img=:img, port_url=:port_url";
        $query.= " WHERE prod_id = :prod_id";
        
        $params = array(
        'port_categoria'=> $this->getPort_categoria(),
        'nome_img' => $this->getPort_nome(),
        'img' => $this->getPort_img(),
        'port_url' => $this->getPort_url(),  
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
            $query = "DELETE FROM {$this->prefix}portfolio";
            $query .= " WHERE id = :id ";
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

        function getPort_url(){
            return $this->port_url;
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

        function setPort_url($port_url){
            $this->port_url = $port_url;
        }
    }
?>