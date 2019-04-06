<?php  
	Class Paginacao extends Conexao{
		
		public $limite, $inicio, $totalpags, $link = array();

		function GetPaginacao($campo, $tabela){
			//seleciona o campo e a tabela independente da categoria ou produto...
			$query = "SELECT {$campo} FROM {$tabela}";
			$this->ExecuteSQL($query);
			$total = $this->TotalDados();

			$this->limite = Config::BD_LIMITE_POR_PAG;
			$paginas = ceil($total / $this->limite);//ceil-> Arredonda a quantidade de página sempre pra cima.
			$this->totalpags = $paginas;

			//Se tiver um parametro 'p' ele volta a quantidade de página existente de acordo com o produto
			//Caso contrário ele retorna somente uma página unica.
			$p = (int)isset($_GET['p']) ? $_GET['p'] : 1;

			//Se alguém tentar passar algum parâmetro pela url buscando alguma página, automaticamente vai para última página exustente...
			if($p > $paginas){
				$p = $paginas;
			}

			//multiplica o total de produtos da página pelo limite e subtrai pelo limite
			$this->inicio = ($p * $this->limite) - $this->limite;

			//Faz a Tolerância de quantidade de números de botões por páginas  
			$tolerancia = 4;
			$mostrar = $p + $tolerancia;
			if($mostrar > $paginas){
				$mostrar = $paginas;
			}
			//'For' para mostrar os botões de paginação 
			for($i = ($p - $tolerancia); $i <= $mostrar; $i++) : 
				if($i < 1){
					$i = 1;
				}
				array_push($this->link, $i);
			endfor;

		}
	}
?>