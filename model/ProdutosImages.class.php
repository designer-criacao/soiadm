<?php  
	Class ProdutosImages extends Conexao{
		function GetImagesPROD($prod){
			$query = "SELECT * FROM {$this->prefix}imagens WHERE img_prod_id = :prod";
			$params = array(':prod'=>(int)$prod);
			$this->ExecuteSQL($query, $params);
			$this->GetLista();
		}

		private function GetLista(){
			$i = 1;
			while($lista = $this->ListarDados()):
			$this->itens[$i] = array(
				'img_id' => $lista['img_id'],
				'img_nome' => Rotas::ImageLink($lista['img_nome'],150,150),
				'img_prod_id' => $lista['img_prod_id'],
				'img_pasta' => Rotas::ImageLink($lista['img_pasta'],400,400),
				'img_arquivo' => $lista['img_nome']
				
				);

			$i++;
			endwhile;
		}

		public function Insert($img, $produto){
			$query = " INSERT INTO {$this->prefix}imagens (img_nome, img_prod_id)";
			$query .= " VALUES (:img_nome, :img_prod_id)";

			$params = array(':img_nome' => $img, 
							':img_prod_id' => (int)$produto
							);
 
			$this->ExecuteSQL($query,$params);

		}

		public function Deletar($img_nome){
			$query = " DELETE FROM {$this->prefix}imagens ";
			$query .= " WHERE img_nome = :img_nome ";
			$params = array(':img_nome'=>$img_nome);
			$this->ExecuteSQL($query, $params);
		}
	}
?>