<?php
include '../view/home.php';
?>

<body>

    <div class="container-fluid">
        <div class="row">
            <div class="col-md-6 p-3">
                <div class="card">
                    <form class="m-4" action="<?= $_SERVER['PHP_SELF'] ?>" method="POST">
                        <div class="mb-3">
                            <label for="txtName" class="form-label">Nombre: </label>
                            <input type="text" class="form-control" id="txtName">
                        </div>
                        <div class="mb-3">
                            <label for="txtApellido" class="form-label">Apellido: </label>
                            <input type="text" class="form-control" id="txtApellido">
                        </div>
                        <div class="mb-3">
                            <label for="dateNacimiento" class="form-label">Fecha de nacimiento: </label>
                            <input type="date" class="form-control" id="dateNacimiento">
                        </div>
                        <button type="submit" class="btn btn-primary">Agregar</button>
                    </form>
                    </form>
                </div>
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