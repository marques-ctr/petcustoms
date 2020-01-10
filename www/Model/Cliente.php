<?php
    namespace LOJA\Model;
    use LOJA\includes\Util;
    
    class Cliente{
        private $id;
        private $nome;
        private $nascimento;
        private $cpf;
        private $email;
        private $senha;
        private $telefone;
        private $estado;
        private $cep;
        private $endereco;

        public function __construct(){
        }    

        public function getId(){
            return $this->id;
        }
    
        public function setId($id){
            $this->id = $id;
        }
    
        public function getNome(){
            return $this->nome;
        }
    
        public function setNome($nome){
            if($nome==="") throw new \Exception('Nome Inválido');
            $this->nome = $nome;
        }
    
        public function getNascimento(){
            return $this->nascimento;
        }
    
        public function setNascimento($nascimento){
            $this->nascimento = $nascimento;
        }
    
        public function getCpf(){
            return $this->cpf;
        }
    
        public function setCpf($cpf){
            if(Util::validaCPF($cpf)){ throw new \Exception('CPF Inválido');
            }

            $this->cpf = $cpf;
        }
    
        public function getEmail(){
            return $this->email;
        }
    
        public function setEmail($email){
            if(filter_var($email, FILTER_VALIDATE_EMAIL)){
                $this->email = $email;
        }else{ 
                throw new \Exception("Email Invalido");
        }
    }

    public function getSenha(){
		return $this->senha;
	}

	public function setSenha($senha){
		if ($senha===""){ 
			throw new \Exception('Senha Inválida');
		}
		$this->senha = $senha;
    }
    
        public function getTelefone(){
            return $this->telefone;
        }
    
        public function setTelefone($telefone){
            $this->telefone = $telefone;
        }
    
        public function getEstado(){
            return $this->estado;
        }
    
        public function setEstado($estado){
            $this->estado = $estado;
        }
    
        public function getCep(){
            return $this->cep;
        }
    
        public function setCep($cep){
            $this->cep = $cep;
        }
    
        public function getEndereco(){
            return $this->endereco;
        }
    
        public function setEndereco($endereco){
            $this->endereco = $endereco;
        }
        
        }
?>