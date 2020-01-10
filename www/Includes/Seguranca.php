<?php
namespace LOJA\Includes;

class Seguranca{
  
    public static function restritoAdm(){
        if(!isset($_SESSION['usuarioid'])){
            header("location: localhost/petcustoms/www/login/admin/");
        }
    }
    
    public static function restritoCliente(){

        $config = new Config();
        if(!isset($_SESSION['clienteid'])){
            header("location: localhost/petcustoms/www/login/cliente/");

        }
    }
}