<?php

	Class Template extends SmartyBC{
		function __construct(){
			parent:: __construct();
			//CRIA UM DIRETÓRIO PARA ARMAZENAR ARQUIVOS QUE SÃO GERADOS AUTOMATICAMENTE
			$this->setTemplateDir('view/');
			$this->setCompileDir('view/compile/');
			$this->setCacheDir('view/cache/');
		}
	}
?>