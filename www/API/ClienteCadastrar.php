<?php 

namespace LOJA\API;
use LOJA\Model\Cliente;
use LOJA\DAO\DAOCliente;


class ClienteCadastrar{

  public $msg;

   function __construct(){
    
if($_POST){
  
    try{
        $obj = new Cliente();
        $obj->setNome($_POST["nome"]);
        $obj->setNascimento($_POST["nascimento"]);
        $obj->setCpf($_POST["cpf"]);
        $obj->setEmail($_POST["email"]);
        $obj->setSenha($_POST["senha"]);
        $obj->setTelefone($_POST["telefone"]);
        $obj->setEstado($_POST["estado"]);
        $obj->setCep($_POST["cep"]);
        $obj->setEndereco($_POST["endereco"]);

        $DAO = new DAOCliente();
        $this->msg = $DAO->cadastrar($obj);

    }catch(Exception $e){
       $msg = $e->getMessage();
       echo $msg;
    }
  }
  }
}
?>