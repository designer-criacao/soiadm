<?php  

	Class Categorias extends Conexao{

		private $id, $cat_nome;

		function __construct(){
			parent::__construct();
		}

		function GetCategorias(){
			//Query para buscar os produtos de uma categoria específica
			$query = "SELECT * FROM {$this->prefix}categoria";

			$this->ExecuteSQL($query);
			$this->GetLista();
		}

		private function GetLista(){
		$i = 1;
		while($lista = $this->ListarDados()):
		$this->itens[$i] = array(
            'id' => $lista['id'],
            'cat_nome' => $lista['cat_nome'],
            // 'cate_link' => Rotas::pag_Produtos(). '/' . $lista['id'] . '/' . $lista['cate_slug'],
            // 'cate_link_adm' => Rotas::pag_ProdutosADM(). '/' . $lista['id'] . '/' . $lista['cate_slug']
		);

		    $i++;
		endwhile;
		}

		function Inserir($cat_nome){
        
        // trato os campos
        $this->setCate_nome($cat_nome);
        $this->setCate_slug($cat_nome);
        
        // monto a SQL
        $query = " INSERT INTO {$this->prefix}categoria (cat_nome)";
        $query.= " VALUES (:cate_nome)";
        // passo so parametros
        $params = array(':cate_nome' => $this->getCate_nome());
        // executo a minha SQL
            if($this->ExecuteSQL($query, $params)):
                return TRUE;
                
            else:
                return FALSE;
                
            endif;
    	}


    	//MÉTODOS GET E SET CATEGORIAS
    	function getCate_nome() {
        return $this->cat_nome;
    	}

	    function setCate_nome($cat_nome) {
	        $this->cat_nome = filter_var($cat_nome, FILTER_SANITIZE_STRING);
	    }


	    //FUNCAO EDITAR

		function Editar($id,$cat_nome){
        
        // trato os campos
        $this->setCate_nome($cat_nome);
        $this->setCate_slug($cat_nome);
        
        // monto a SQL
        $query = " UPDATE {$this->prefix}categoria ";
        $query.= " SET cat_nome = :cat_nome ";
        $query.= " WHERE id = :id ";
        // passo so parametros
        $params = array(':cat_nome' => $this->getCate_nome(),
                        ':cate_id'   => (int)$id,
            );
        // executo a minha SQL
            if($this->ExecuteSQL($query, $params)):
                return TRUE;
                
            else:
                return FALSE;
                
            endif;
    	}

    	//FUNÇÃO APAGAR CATEGORIAS

   		function Apagar($id){
        
          // verifico se  tenho itens antes de apagar a categoria
          	$pro = new Produtos();
          	$pro->GetProdutosCateID($id);
          
        if( $pro->TotalDados() > 0):
            echo '<div class="alert alert-danger" > Esta categoria tem: ';
            echo $pro->TotalDados();
            echo ' produtos. Não pode ser apagada, para apagar precisa primeiro apagar os produtos dela </div>';
     
              // se nao tiver produtos nela  eu apago 
         else:
            
                 // monto a SQL
        $query = " DELETE FROM {$this->prefix}categoria";
        $query.= " WHERE id = :id";
        
        // passo os parametros
        $params = array(':id' => (int)$id);
        // executo a SQL
    
         	if($this->ExecuteSQL($query, $params)):
                return TRUE;
                
            else:
                return FALSE;
                
            endif;
        
        endif;        
    	}


	}//Fechamento da Classe Categorias

?>