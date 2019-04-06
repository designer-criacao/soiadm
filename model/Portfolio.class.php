<?php  
	
	Class Portfolio extends Conexao{

		private $port_nome, $port_categoria, $port_img;


		function __construct(){
			parent::__construct();
		}

		function GetProdutos(){
			//Query para buscar os produtos de uma categoria específica
			$query = "SELECT * FROM {$this->prefix}portfolio p  INNER JOIN {$this->prefix}categorias c ON p.prod_categoria = c.cate_id";

			//$query .= " LIMIT 0,6";
			$query .= " ORDER BY id DESC";
			$query .= $this->PaginacaoLinks("d", $this->prefix."produtos");
			$this->ExecuteSQL($query);
			$this->GetLista();
		}

		function GetProdutosID($id){
			//Query para buscar os produtos de uma categoria específica
			$query = "SELECT * FROM {$this->prefix}portfolio p  INNER JOIN {$this->prefix}categorias c ON p.prod_categoria = c.cate_id";

			$query .= " AND id = :id";
			$params = array(':id'=>(int)$id);
			$this->ExecuteSQL($query, $params);
			$this->GetLista();
		}

		function GetProdutosCateID($id){
			//Query para buscar os produtos de uma categoria específica

			$id = filter_var($id, FILTER_SANITIZE_NUMBER_INT);

			$query = "SELECT * FROM {$this->prefix}portfolio";

			$query .= " AND prod_categoria = :id";
			$query .= $this->PaginacaoLinks("id", $this->prefix."portfolio WHERE id=".(int)$id);
			$params = array(':id'=>(int)$id);
			$this->ExecuteSQL($query, $params);
			$this->GetLista();
		}

        function GetProdutosNome($nome){
        
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
				'port_id' => $lista['id'],
                'port_nome' => $lista['port_nome'],
                'img' => $lista['img'],

				
				'prod_img' => Rotas::ImageLink($lista['prod_img'],180,180),
				'prod_img_g' => Rotas::ImageLink($lista['prod_img'],900,400),
				'prod_img_p' => Rotas::ImageLink($lista['prod_img'],80,80),
				//'prod_img' => $lista['prod_img'],
				
                'prod_img_arquivo'   => Rotas::get_SiteRaiz() .'/'. Rotas::get_ImagePasta().$lista['prod_img'], 
                'prod_img_atual'     => $lista['prod_img']
				);

			$i++;
			endwhile;
		}



		function Preparar($prod_nome, $prod_categoria, $prod_ativo, $prod_modelo, $prod_ref, 
            $prod_valor, $prod_estoque, $prod_peso , $prod_altura, $prod_largura, $prod_comprimento ,
            $prod_img, $prod_desc, $prod_slug=null){
        
                $this->setProd_nome($prod_nome);
                $this->setProd_categoria($prod_categoria);
                $this->setProd_ativo($prod_ativo);
                $this->setProd_modelo($prod_modelo);
                $this->setProd_ref($prod_ref);
                $this->setProd_valor($prod_valor);
                $this->setProd_estoque($prod_estoque);
                $this->setProd_peso($prod_peso);
                $this->setProd_altura($prod_altura);
                $this->setProd_largura($prod_largura);
                $this->setProd_comprimento($prod_comprimento);
                $this->setProd_img($prod_img);
                $this->setProd_desc($prod_desc);
                $this->setProd_slug($prod_nome);
            }



            function Inserir(){
          
        $query = "INSERT INTO {$this->prefix}produtos (prod_nome, prod_categoria, prod_ativo, prod_modelo, prod_ref," ;
        $query.= " prod_valor, prod_estoque, prod_peso , prod_altura, prod_largura, prod_comprimento ,prod_img, prod_desc, prod_slug)";
        $query.= " VALUES ";
        $query.= " ( :prod_nome, :prod_categoria, :prod_ativo, :prod_modelo, :prod_ref, :prod_valor, :prod_estoque, :prod_peso ,";
        $query.= " :prod_altura, :prod_largura, :prod_comprimento ,:prod_img, :prod_desc, :prod_slug)";
        
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

	function getProd_nome() {
        return $this->prod_nome;
    }

    function getProd_categoria() {
        return $this->prod_categoria;
    }

    function getProd_ativo() {
        return $this->prod_ativo;
    }

    function getProd_modelo() {
        return $this->prod_modelo;
    }

    function getProd_ref() {
        return $this->prod_ref;
    }

    function getProd_valor() {
        return $this->prod_valor;
    }
    function getProd_estoque() {
        return $this->prod_estoque;
    }

    function getProd_peso() {
        return $this->prod_peso;
    }

    function getProd_altura() {
        return $this->prod_altura;
    }

    function getProd_largura() {
        return $this->prod_largura;
    }

    function getProd_comprimento() {
        return $this->prod_comprimento;
    }

    function getProd_img() {
        return $this->prod_img;
    }

    function getProd_desc() {
        return $this->prod_desc;
    }

    function getProd_slug() {
        return $this->prod_slug;
    }





    //MÉTODOS SET

    function setProd_nome($prod_nome) {
        $this->prod_nome = $prod_nome;
    }

    function setProd_categoria($prod_categoria) {
        $this->prod_categoria = $prod_categoria;
    }

    function setProd_ativo($prod_ativo) {
        $this->prod_ativo = $prod_ativo;
    }

    function setProd_modelo($prod_modelo) {
        $this->prod_modelo = $prod_modelo;
    }

    function setProd_ref($prod_ref) {
        $this->prod_ref = $prod_ref;
    }

    function setProd_valor($prod_valor) {
        //1.335,99 => 1.33599
        
        // procura a virgula e troca por ponto
      $prod_valor = str_replace('.', '', $prod_valor); 
      $prod_valor = str_replace(',', '.', $prod_valor); 
       
        $this->prod_valor = $prod_valor ;
       // echo $this->pro_valor;
        
    }
    
    function setProd_estoque($prod_estoque) {
        $this->prod_estoque = $prod_estoque;
    }

    function setProd_peso($prod_peso) {
      
       ///  1,600  => 1.600
        $this->prod_peso = str_replace(',', '.', $prod_peso);
   
    }

    function setProd_altura($prod_altura) {
       
        $this->prod_altura = $prod_altura;
    }

    function setProd_largura($prod_largura) {
        $this->prod_largura = $prod_largura;
    }

    function setProd_comprimento($prod_comprimento) {
        $this->prod_comprimento = $prod_comprimento;
    }

    function setProd_img($prod_img) {
        $this->prod_img = $prod_img;
    }

    function setProd_desc($prod_desc) {
        $this->prod_desc = $prod_desc;
    }

    function setProd_slug($prod_slug) {
       
        
        $this->prod_slug = Sistema::GetSlug($prod_slug);
    }
	}
?>