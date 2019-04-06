<?php
    Class Sobre extends Conexao{
        private $sobre, $valores, $visao, $missao;

        function __construct(){
            parent::__construct();
        }

        private function GetLista(){
            $i = 1;

            while($lista = $this->ListarDados()):
                $this->itens[$i] = array(
                    'id' => $lista['id'],
                    'sobre' => $lista['sobre'],
                    'visao' => $lista['visao'],
                    'valores' => $lista['valores'],
                    'missao' => $lista['missao']
                );
                $i++;
            endwhile;
        }

        function GetSobreEmpresa(){
        
            $query = " SELECT * FROM {$this->prefix}empresa ";
            
            $this->ExecuteSQL($query);
            
            $this->GetLista();  
        }

        function Preparar($sobre,$visao,$valores,$missao){
            $this->setSobre($sobre);
            $this->setVisao($visao);
            $this->setValores($valores);
            $this->setMissao($missao);
        }

        function Inserir(){
            $query = "INSERT INTO {$this->prefix}empresa (sobre,visao,valores,missao)";
            $query .= " VALUES (:sobre,:visao,:valores,:missao)";

            $params = array(
                ':sobre' => $this->getSobre(),
                ':visao' => $this->getVisao(),
                ':valores' => $this->getValores(),
                ':missao' => $this->getMissao(),
            );
            if($this->ExecuteSQL($query, $params)):
                return TRUE;
            else:
                return FALSE;
            endif;


        }
        

        function getSobre(){
            return $this->sobre;
        }
        function setSobre($sobre){
            $this->sobre = $sobre;
        }

        function getValores(){
            return $this->sobre;
        }
        function setValores($valores){
            $this->valores = $valores;
        }

        function getVisao(){
            return $this->visao;
        }
        function setVisao($visao){
            $this->visao = $visao;
        }

        function getMissao(){
            return $this->missao;
        }
        function setMissao($missao){
            $this->missao = $missao;
        }
    }

?>