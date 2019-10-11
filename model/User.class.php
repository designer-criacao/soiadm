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
        //$this->setEmail($email);
        $query = " SELECT * FROM {$this->prefix}user WHERE user_email = :email ";
        // $params = array(':email'=>  $this->getEmail());
        $params = array(':email'=>  $email);
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
        );
        
            $i++;
        
        endwhile; 
    }
    
    /**
     * alterar a senha  do USER
     */
    function AlterarSenha($email,$senha){
        // montando a SQL
        $query = "UPDATE {$this->prefix}user SET user_pw = :senha";
        $query.= " WHERE user_email = :email";
        // setando email e senha
        $this->setEmail($email);
        $this->setSenha($senha);
        // passando parametros
        $params = array(':email' => $this->getEmail(), ':senha' => $this->getSenha());
        // executando a SQL
        if ($this->ExecuteSQL($query, $params)):

            return TRUE;
        else:
            return FALSE;
        endif;
    }

    
    function Preparar($user, $email, $senha){
        $this->setUser($user);
        $this->setEmail($email);
        $this->setSenha($senha);
    }

    function Inserir(){
        $query = "INSERT INTO {$this->prefix}user (user_nome,user_email,user_pw)";
        $query .= " VALUES (:user,:email,:senha)";

        $params = array(
            ':user' => $this->getUser(),
            ':email' => $this->getEmail(),
            ':senha' => $this->getSenha()
        );
        if($this->ExecuteSQL($query, $params)):
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