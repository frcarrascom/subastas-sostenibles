<?php
session_start();
if (isset($_SESSION['usr'])) {
    header("Location: ../index.php");
}
$msg = null;
if (isset($_GET['e'])) {
    switch ($_GET['e']) {
        case "1":
            $msg = "<p class='alert alert-danger mb-0'>" . "Error, datos introducidos incorrectos." . "</p>";
            break;
        case "2":
            $msg = "<p class='alert alert-danger mb-0'>" . "Error, faltan datos" . "</p>";
            break;
        default:
            $msg = "<p class='alert alert-danger mb-0'>" . "Error desconocido." . "</p>";
            break;
    }
}
if (isset($_GET['eliminado'])) {
    $msg = "<p class='alert alert-success mb-0'>" . "Cuenta eliminada correctamente" . "</p>";
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css"
          integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="icon" href="../logo/logoSubastas.png">
    <script src="https://kit.fontawesome.com/096ad391b4.js" crossorigin="anonymous"></script>

    <!--/*CAMBIAAAR*/-->
    <title>Subastas Sostenibles</title>
</head>
<body>
<div class="container col-xs-12 col-sm-8 col-md-6 col-lg-4 mt-5">
    <div class="card">
        <div class="card-header">Inicia sesión
        </div>
        <form action="comprobarLogin.php" id="form" method="post" class="card-body">
            <div class="form-group">
                <label for="usr">Nombre de Usuario</label>
                <input type="text" class="form-control form-control-lg check" name="usr" id="usr" placeholder="Usuario">
            </div>
            <div class="form-group">
                <label for="pass">Contraseña</label>
                <input type="password" class="form-control form-control-lg check" name="pass" id="pass"
                       placeholder="Contraseña...">
            </div>
            <div class="text-center">
                <button type="submit" class="btn btn-outline-primary btn-lg">Acceder</button>
            </div>
        </form>
        <a href="../index.php" class="btn btn-outline-warning">Acceder sin usuario</a>
        <br/>
        <h6 class="text-center">¿Aún no estás registrado? <a href="paginaRegistro.php">Regístrate</a></h6>
    </div>
    <div class="card mt-3">
        <?php
        if ($msg != null) {
            ?>
            <?php echo $msg; ?>
            <?php
        }
        ?>
    </div>
</div>
</body>
</html>