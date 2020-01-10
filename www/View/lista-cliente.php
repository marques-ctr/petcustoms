<?php include "view/header-admin.php" ?>

<table class="table">

    <thead class="thead-light">
        <tr>
            <th scope="col">ID</th>
            <th scope="col">NOME</th>
            <th scope="col">NASCIMENTO</th>
            <th scope="col">CPF</th>
            <th scope="col">E-MAIL</th>
            <th scope="col">TELEFONE</th>
            <th scope="col">ESTADO</th>
            <th scope="col">CEP</th>
            <th scope="col">ENDEREÇO</th>
        </tr>
    </thead>

    <tbody class="table-striped">

<?php foreach($lista as $cliente) { ?>


                <tr>
                    <th scope="row"><?php echo $cliente['pk_cliente'] ?></th>
                    <td><?php echo $cliente['nome'] ?></td>
                    <td><?php echo $cliente['nascimento'] ?></td>
                    <td><?php echo $cliente['cpf'] ?></td>
                    <td><?php echo $cliente['email'] ?></td>
                    <td><?php echo $cliente['telefone'] ?></td>
                    <td><?php echo $cliente['estado'] ?></td>
                    <td><?php echo $cliente['cep'] ?></td>
                    <td><?php echo $cliente['endereco'] ?></td>
                </tr>
    <?php } ?>


    </tbody>

</table>

<?php include "view/footer-admin.php" ?>