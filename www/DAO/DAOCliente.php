<?php
    namespace LOJA\DAO;
    use LOJA\Model\Conexao;
    use LOJA\Model\Cliente;

    class DAOCliente{

        public $lastId;

        public function cadastrar(Cliente $cliente){
            $pdo = Conexao::getInstance();
            $pdo->beginTransaction();

            try{
                $con = $pdo->prepare("INSERT INTO cliente
                VALUES (default, :nome, :nascimento,  :cpf, :email, :senha, :telefone, :estado, :cep, :endereco)"
                );

            $con->bindValue(":nome", $cliente->getNome());
            $con->bindValue(":nascimento", $cliente->getNascimento());
            $con->bindValue(":cpf", $cliente->getCpf());
            $con->bindValue(":email", $cliente->getEmail());
            $con->bindValue(":senha", $cliente->getSenha());
            $con->bindValue(":telefone", $cliente->getTelefone());
            $con->bindValue(":estado", $cliente->getEstado());
            $con->bindValue(":cep", $cliente->getCep());
            $con->bindValue(":endereco", $cliente->getEndereco());
            $con->execute();

            $this->lastId = $pdo->lastInsertId();
             // Retorna o id do cliente cadastrado
            $pdo->commit(); // Finaliza a transação
            return "Cadastrado com sucesso";

        }catch(Exception $e){
            $this->lastId = 0;
            $pdo->rollback();
            return "Erro ao Cadastrar";
        }
    }

            public function listaClientes(){

                $sql = "SELECT * FROM cliente";
                $con = Conexao::getInstance()->prepare($sql);
                $con->execute();

                $lista = array();

                while($cliente = $con->fetch(\PDO::FETCH_ASSOC)){
                    $lista[] = $cliente;
                }

                return $lista;
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
            
             public function buscaPorEmailSenha(Cliente $cliente){
                $sql = "SELECT 
                    pk_cliente as id,
                    email, nome 
                    FROM cliente 
                    WHERE email = :email AND senha = :senha";
                
                $con = Conexao::getInstance()->prepare($sql);
                $con->bindValue(":email", $cliente->getEmail());
                $con->bindValue(":senha", $cliente->getSenha());
                $result = $con->execute();
                $obj = new Cliente();
                $obj = $con->fetch(\PDO::FETCH_ASSOC);
                return $obj;
        }
    }
?>
