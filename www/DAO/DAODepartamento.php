<?php

    namespace LOJA\DAO;
    use LOJA\Model\Conexao;
    use LOJA\Model\Departamento;

    class DAODepartamento{

        public $lastId;
        
        public function cadastrar(Departamento $departamento){

            $pdo = Conexao::getInstance();
            $pdo->beginTransaction();

            try{
                $con = $pdo->prepare( "INSERT INTO departamento
                VALUES (default, :nome)"
                );

            $con->bindValue(":nome", $departamento->getNome());
            $con->execute();

            $this->lastId = $pdo->lastInsertId(); 
            $pdo->commit(); 
            return "Cadastrado com sucesso";

        }catch(Exception $e){
            $this->lastId = 0;
            $pdo->rollback();
            return "Erro ao cadastrar";
        }
    }
    
        public function listaDepartamento(){

            $sql = "SELECT * FROM departamento";
            $con = Conexao::getInstance()->prepare($sql);
            $con->execute();

            $lista = array();

            while($departamento = $con->fetch(\PDO::FETCH_ASSOC)){
                $lista[] = $departamento;
            }

            return $lista;
        }
 
        public function buscaPorId($id){

            $sql = "SELECT * FROM departamento WHERE pk_departamento = :id";
            $con = Conexao::getInstance()->prepare($sql);
            $con->bindValue(":id",$id);
            $con->execute();

            $departamento = new Departamento();
            $departamento = $con->fetch(\PDO::FETCH_ASSOC);

            return $departamento;
    }
    public function deleteAll(){

        $sql = "delete from cliente";
        $con = Conexao::getInstance()->prepare($sql);
        $con->execute();
        return "Excluído Todos com sucesso";
}

    public function deleteFromId($id){

        $sql = "delete from cliente where pk_cliente = {$id}";
        $con = Conexao::getInstance()->prepare($sql);
        $con->execute();
        return "Excluído Todos com sucesso";
}
}
?>
