<?php
use PHPUnit\Framework\TestCase; /// important o php unit
use LOJA\Model\Cliente;

class ClienteTest extends TestCase
{
    public function testClass()
    {
        $c = new Cliente();
        $c->setNome('Felippe');
        $c->setTelefone('(21)1231-2132');
        $c->setCpf('123.456.789-10');
        $c->setEmail('Felippe@email.com');
        $c->setSenha('12345678');
       
        $this->assertEquals($c->getNome(), 'Felippe');
        $this->assertEquals($c->getTelefone(), '(21)1231-2132');
        $this->assertEquals($c->getCpf(), '123.456.789-10');
        $this->assertEquals($c->getEmail(), 'Felippe@email.com');
        $this->assertEquals($c->getSenhal(), '12345678');
    }
        public function testErrorEmail(){

            $this->expectException(\Exception::class);
            $this->expectExceptionMessage("Email Invalido");

            $c = new Cliente();
            $c-> setEmail('felippeemail.com');
    }

        public function testErrorNome(){

            $this->expectException(\Exception::class);
            $this->expectExceptionMessage('Nome Inválido');

            $c = new Cliente();
            $c-> setNome('');
    }

    public function testErrorCPF(){

        $this->expectException(\Exception::class);
        $this->expectExceptionMessage('CPF Inválido');

        $c = new Cliente();
        $c-> setCpf("");
    }

    public function buscaPorNome($busca){
        $sql = "SELECT * FROM produto WHERE nome LIKE = %:busca%";
        $con = Conexao::getInstance()->prepare($sql);
        $con->bindValue(":busca", $busca);
        $con->execute();

        $obj = $con->fetch(\PDO::FETCH_ASSOC);
       
        $produto = new Produto();
        $produto->setId($obj['pk_produto']);
        $produto->setNome($obj['nome']);
        $produto->setPreco($obj['preco']);
        $produto->setImagem($obj['imagem']);

        return $produto;
}
}

?>