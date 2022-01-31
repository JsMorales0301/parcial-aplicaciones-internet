<?php

include_once "../db/conexion.php";
$sentencia = $bd->query("select * from estudiante");

$resultado = $sentencia->fetchAll(PDO::FETCH_OBJ);

?>

<h2>Lista de personas</h2>
<div class="card">
    <div class="p-4">
        <table class="table align-middle">
            <thead>
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">Nombre</th>
                    <th scope="col">Apellido</th>
                    <th scope="col">Fecha de nacimiento</th>
                </tr>
            </thead>
            <tbody>
                <?php
                foreach ($resultado as $estudiante) {
                ?>
                    <tr>
                        <td>
                            <?php echo $estudiante->codigo; ?>
                        </td>
                        <td>
                            <?php echo $estudiante->nombre; ?>
                        </td>
                        <td>
                            <?php echo $estudiante->apellido; ?>
                        </td>
                        <td>
                            <?php echo $estudiante->fecha_nacimiento; ?>
                        </td>
                    </tr>
                <?php
                }
                ?>
            </tbody>
        </table>

    </div>
</div>