<?php
namespace LOJA\Includes;
class Config{

    private $servidor = "TEST"; // PROD OU TEST

    public $url = "";
    public $serverHost;
    public $serverDB;
    public $serverUser;
    public $serverPass;
    public $cepOrigem;

    public function __construct(){

        if($this->servidor=="TEST"){
            $this->url = "http://localhost/petcustoms/www";
            $this->serverHost = "localhost";
            $this->serverDB = "loja";
            $this->serverUser ="root";
            $this->serverPass ="";   
            $this->cepOrigem ="23040150";

        }else{
            $this->url = "http://www.petcustoms.web70111.uni5.net";
            $this->serverHost ="mysql17-farm70.uni5.net";
            $this->serverDB ="petcustoms";
            $this->serverUser ="petcustoms";
            $this->serverPass ="senac10058";
            $this->cepOrigem ="23040150";
        }
    }
}
?>