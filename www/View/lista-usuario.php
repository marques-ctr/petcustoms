<?php include "view/header-admin.php" ?>

<table class="table">

    <thead class="thead-light">
        <tr>
            <th scope="col">ID</th>
            <th scope="col">NOME</th>
        </tr>
    </thead>

    <tbody>

    <?php foreach($lista as $usuario) { ?>


                <tr>
                    <th scope="row"><?php echo $usuario['pk_usuario'] ?></th>
                    <td><?php echo $usuario['nome'] ?></td>
                </tr>
    <?php } ?>


    </tbody>

</table>

<?php include "view/footer-admin.php" ?>