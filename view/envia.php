<?php
			   if(isset($_POST['enviar'])):
			   if(($_POST['nome']) !='' && ($_POST['email']) !='' && ($_POST['mensagem']) !='' && ($_POST['regiao']) !='' ):
			   $to = 'info@soidesign.com.br';
			   $subject = "Orcamento pelo Site";
			   
			   
			   $name = $_POST['nome'];
			   $email = $_POST['email'];
			   $phone = $_POST['phone'];
			   $razao = $_POST['razao'];
			   $cliente1 = $_POST['cliente1'];
			   $cliente2 = $_POST['cliente2'];
			   $cliente3 = $_POST['cliente3'];
			   $cidade = $_POST['regiao'];
			   $msg = $_POST['mensagem'];
   
$menssage = "Orçamento pelo site: 
Nome: $name 
Email: $email
Telefone: $phone
Razão Social: $razao
Região: $regiao  
Mensagem: $msg 
Tipo de Serviço: $cliente1, $cliente2, $cliente3";
			   
			 mail($to, $subject, $menssage);
				   //echo "<p style='color:black' font-weigth='bold'>Mensagem enviada com sucesso!</p>";
				   echo "alert('Mensagem enviada com sucesso!')";
				   else:
				   	//echo "<p style='color:red' font-weigth='bold'>Preencha todos os campos. Por favor!</p>";
				   	echo "alert('Preencha todos os campos. Por favor!')";
			   endif;
			 endif;
			   ?>