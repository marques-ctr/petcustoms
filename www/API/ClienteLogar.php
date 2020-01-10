<?php
namespace LOJA\API;//Local desta classe
use LOJA\DAO\DAOCliente;
use LOJA\Model\Cliente;

    class ClienteLogar{
        public $msg;

        function __construct(){
            if($_POST){
                try{
                    $obj = new Cliente();
                    $obj->setEmail($_POST['email']);
                    $obj->setSenha($_POST['senha']);

                    $DAO = new DAOCliente();
                    // Verifica se existe usuario com email e senha informados

                    $result = $DAO->buscaPorEmailSenha($obj);
                    
                    if($result){//se houver resultado
                        //guardo as informações do usuario na sessão
                        $_SESSION['clienteid'] = $result['id'];
                        $_SESSION['clienteemail'] = $result['email'];
                        $_SESSION['clientenome'] = $result['nome'];

                        header("location: http://localhost/petcustoms/www/home/");
                    }else{
                        $this->msg = "Cliente/Senha inválidos";
                    }
                }catch(\Exception $e){
                    $this->msg = $e->getMessage();
                }
            }
        }
    }
    ?>