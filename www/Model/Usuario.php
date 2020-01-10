<?php
    namespace LOJA\Model;
    class Usuario{
        private $id;
        private $nome;
        private $senha;

        public function __construct(){
        }    

        public function getId(){
            return $this->id;
        }
    
        public function setId($id){
            $this->id = $id;
        }
    
        public function getnome(){
            return $this->nome;
        }
    
        public function setnome($nome){
            $this->nome = $nome;
        }
    
        public function getSenha(){
            return $this->senha;
        }
    
        public function setSenha($senha){
            $this->senha = $senha;
        }

    }