<?php include "view/header-admin.php" ?>

<table class="table">

    <thead class="thead-light">
        <tr>
            <th scope="col">ID</th>
            <th scope="col">NOME</th>
            <th scope="col">CIDADE</th>
            <th scope="col">ESTADO</th>
            <th scope="col">CNPJ</th>

        </tr>
    </thead>

    <tbody class="table-striped">

    <?php foreach($lista as $fornecedor) { ?>


                <tr>
                    <th scope="row"><?php echo $fornecedor['pk_fornecedor'] ?></th>
                    <td><?php echo $fornecedor['nome'] ?></td>
                    <td><?php echo $fornecedor['cidade'] ?></td>
                    <td><?php echo $fornecedor['estado'] ?></td>
                    <td><?php echo $fornecedor['cnpj'] ?></td>

                </tr>
    <?php } ?>


    </tbody>

</table>

<?php include "view/footer-admin.php" ?>