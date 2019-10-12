<?php  
	
	Class Config{
	//INFORMAÇÕES BÁSICAS DO SITE
		const SITE_URL = "https://soidesign.com.br";
		const SITE_PASTA = "soiAdmin";
		const SITE_NOME = "SOI DESIGN";
		const SITE_EMAIL_ADM = "info@soidesign.com.br";
		//const BD_LIMITE_POR_PAG = 6;
		//const SITE_CEP = '02810000';

	//INFORMAÇÕES DO BANCO DE DADOS
		const BD_HOST = "localhost",
			  BD_USER = "root",
			  BD_SENHA = "",
			  BD_BANCO = "sitesoi",
			  BD_PREFIX = "sd_";

	//INFORMAÇÕES PARA O PHP MAILLER
		const EMAIL_HOST = "smtp-mail.outlook.com";
		const EMAIL_USER = "info@soidesign.com.br";
		const EMAIL_NOME = "Contato Loja Soi Design";
		const EMAIL_SENHA = "gostosao1984";
		//const EMAIL_SENHA = "soidesign";
		const EMAIL_PORTA = 587;
		const EMAIL_SMTPAUTH = true;
		const EMAIL_SMPTSECURE = "tls";
		const EMAIL_COPIA = "info@soidesign.com.br";


	//CONSTANTES PARA O PAGSEGURO
		// const PS_EMAIL  = "soidesigncriacao@gmail.com"; // email pagseguro
	    // const PS_TOKEN  = "C531D8DD789A44D4AA2EA0C0229E5445"; // token produção
    	// const PS_TOKEN_SBX = "C531D8DD789A44D4AA2EA0C0229E5445";  // token do sandbox
    	// const PS_AMBIENTE = "production";//"sandbox"; // production   /  sandbox


	}
	
?>