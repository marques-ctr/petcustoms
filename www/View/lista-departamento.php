
<?php include "view/header-admin.php" ?>

<table class="table">

    <thead class="thead-light">
        <tr>
            <th scope="col">ID</th>
            <th scope="col">NOME</th>
        </tr>
    </thead>

    <tbody class="table-striped">

    <?php foreach($lista as $departamento) { ?>


                <tr>
                    <th scope="row"><?php echo $departamento['pk_departamento'] ?></th>
                    <td><?php echo $departamento['nome'] ?></td>
    <?php } ?>


    </tbody>

</table>

<?php include "view/footer-admin.php" ?>