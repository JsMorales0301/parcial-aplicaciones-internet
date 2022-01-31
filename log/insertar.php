<?php
include '../view/home.php';
?>

<body>
    <?php
    if (isset($_POST['enviar'])) {
        $nombre = $_POST['txtName'];
        $apellido = $_POST['txtApellido'];
        $fecha_nacimiento = $_POST['dateNacimiento'];
        include("../db/conexion.php");

        $sentencia = $bd->prepare("INSERT INTO estudiante(nombre, apellido, fecha_nacimiento) VALUES (?,?,?);");
        $resultado = $sentencia->execute([$nombre, $apellido, $fecha_nacimiento]);
        if ($resultado) {
            echo "<script language='JavaScript'>
                alert('Alumno agregado correctamente');
                
                </script>";
        } else {
            echo "<script language='JavaScript'>
                alert('Error al guardar el alumno');
                </script>";
        }
    }
    ?>
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-6 p-3">
                <div class="card">
                    <form class="m-4" action="<?= $_SERVER['PHP_SELF'] ?>" method="POST">
                        <div class="mb-3">
                            <label for="txtName" class="form-label">Nombre: </label>
                            <input type="text" class="form-control" name="txtName">
                        </div>
                        <div class="mb-3">
                            <label for="txtApellido" class="form-label">Apellido: </label>
                            <input type="text" class="form-control" name="txtApellido">
                        </div>
                        <div class="mb-3">
                            <label for="dateNacimiento" class="form-label">Fecha de nacimiento: </label>
                            <input type="date" class="form-control" name="dateNacimiento">
                        </div>
                        <input type="submit" name="enviar" value="AGREGAR">
                    </form>
                </div>
                <a href="../index.php">Regresar</a>
            </div>
            <div class="col-md-6 p-3">
                <?php
                include '../log/consultar.php';
                ?>
            </div>
        </div>
    </div>
</body>

</html>