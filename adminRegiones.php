<?php
    require 'config/config.php';
    //require 'clases/Conexion.php';
    //require 'clases/Region.php';

    $Region = new Region;
    $regiones = $Region->listarRegiones();


    include 'includes/over-all-header.html';
    include 'includes/nav.php';
?>

    <main class="container">

        <h1>Panel de administracion de regiones</h1>

        <table class="table table-borderless table-striped table-hover">
            <thead>
                <tr>
                    <th>#</th>
                    <th>Region</th>
                    <th colspan="2">
                        <a href="formAgregarRegion.php" class="btn btn-outline-secondary">
                            Agregar
                        </a>
                    </th>
                </tr>
            </thead>
            <tbody>
                <?php
                foreach ( $regiones as $region ) {
                ?>
                <tr>
                    <td><?= $region['regID']?></td>
                    <td><?= $region['regNombre']?></td>
                    <td>
                        <a href="formModificarRegion.php?regID=<?= $region['regID'] ?>" class="btn btn-outline-secondary">
                            Modificar
                        </a>
                    </td>
                    <td>
                        <a href="formEliminarRegion.php?regID=<?= $region['regID'] ?>" class="btn btn-outline-secondary">
                            Eliminar
                        </a>
                    </td>
                </tr>
                <?php
                    }
                ?>
            </tbody>

        </table>
    </main>
<br>
<br>
<br>

<?php
    include 'includes/footer.php';
?>