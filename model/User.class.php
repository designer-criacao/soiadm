<?php 

/**
* 
*/
class User extends Conexao{
    
    private $user, $senha, $email;
            
    function __construct() {
        parent::__construct();
    }
    
    /**
     * 
     * @param string $email do USER
     * @return boolean caso exista 
     */
    function GetUserEmail($email){
        
        $this->setEmail($email);
        
        $query = " SELECT * FROM {$this->prefix}user WHERE user_email = :email ";
        
        $params = array(':email'=>  $this->getEmail());
        
        $this->ExecuteSQL($query, $params);
        
        return $this->TotalDados();
        
    }

    function GetUsuario(){
        $query = " SELECT * FROM {$this->prefix}user ";
        
        $this->ExecuteSQL($query);
        
        $this->GetLista(); 
    }

    private function GetLista(){
        
        $i = 1;
        while ($lista = $this->ListarDados()):
            
        $this->itens[$i] = array(
        
             'user_id'        =>  $lista['user_id'],
             'user_nome'      =>  $lista['user_nome'],
             'user_email'     =>  $lista['user_email']
             /*'cli_endereco'  =>  $lista['cli_endereco'],
             'cli_numero'    =>  $lista['cli_numero'],
             'cli_bairro'    =>  $lista['cli_bairro'],
             'cli_cidade'    =>  $lista['cli_cidade'],
             'cli_uf'        =>  $lista['cli_uf'],
             'cli_cpf'       =>  $lista['cli_cpf'],
             'cli_cep'       =>  $lista['cli_cep'],
             'cli_rg'        =>  $lista['cli_rg'],
             'cli_ddd'       =>  $lista['cli_ddd'],
             'cli_fone'      =>  $lista['cli_fone'],
             'cli_email'     =>  $lista['cli_email'],
             'cli_celular'   =>  $lista['cli_celular'],
             'cli_pass'      =>  $lista['cli_pass'],
             'cli_data_nasc' =>  $lista['cli_data_nasc'],
             'cli_hora_cad'  => $lista['cli_hora_cad'],
             'cli_data_cad'  =>  Sistema::Fdata($lista['cli_data_cad'])*/  
        );
        
            $i++;
        
        endwhile; 
    }
    
    /**
     * alterar a senha  do USER
     */
    function AlterarSenha($senha,$email){
        
        // setando email e senha
        $this->setSenha($senha);
        $this->setEmail($email);
        // montando a SQL
        $query = "UPDATE {$this->prefix}user SET user_pw = :senha";
        $query.= " WHERE user_email = :email";
        // passando parametros
        $params = array(':senha' => $this->getSenha(), ':email' => $this->getEmail());
        // executando a SQL
        if ($this->ExecuteSQL($query, $params)):

            return TRUE;
        else:
            return FALSE;
        endif;
    }


    ///  SÃO OS GETTERS E SETTERS 
    
    
    function getUser() {
        return $this->user;
    }

    function getSenha() {
        return $this->senha;
    }

    function getEmail() {
        return $this->email;
    }

    function setUser($user) {
        $this->user = $user;
    }

    function setSenha($senha) {
        $this->senha = md5($senha);
    }

    function setEmail($email) {
        $this->email = $email;
    }
   
}


?>