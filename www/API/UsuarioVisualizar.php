<?php 
  
   namespace LOJA\API; // local desta classe
   use  LOJA\DAO\DAOUsuario;

   class UsuarioVisualizar{

      public $dados;

      public function __construct(){


    try{

        $DAO = new DAOUsuario();
        $this->dados = $DAO->buscaPorId($_GET["id"]);
        

    }catch(Exception $e){
       $msg = $e->getMessage();
    }

      }  

  }
?>