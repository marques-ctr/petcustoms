<?php 

namespace LOJA\API;
use LOJA\DAO\DAOUsuario;
use LOJA\Model\Usuario;


  class UsuarioLogar{

    public $msg;

     function __construct(){

if($_POST){

    try{
        $obj = new Usuario();
        $obj->setNome($_POST["nome"]);
        $obj->setSenha($_POST["senha"]);


        $DAO = new DAOUsuario();
        $result = $DAO->buscaPorNomeSenha($obj);

        if($result){
            $_SESSION['usuarioid'] = $result['id'];
            $_SESSION['usuarionome'] = $result['nome'];

            header('location: http://localhost/petcustoms/www/painel/admin/');
        }else{
            $this->msg = "Usuario/Senha Inválidos";
        }

    }catch(Exception $e){

       $this->msg = $e->getMessage();
    }

  }
}
  }
?>