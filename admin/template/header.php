<!doctype html>
<html lang="en">

<head>
    <title>Admin</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>

<body>

<?php $host= "http://".$_SERVER['HTTP_HOST']."/sitioweb"?>

    <nav class="navbar navbar-expand navbar-light bg-light">
        <div class="nav navbar-nav">
            <a class="nav-item nav-link active" href="">Administrador de sitio web <span class="sr-only">(current)</span></a>
            <a class="nav-item nav-link" href="<?php echo $host;?>/admin/inicio.php">Inicio</a>
            <a class="nav-item nav-link" href="<?php echo $host;?>/admin/seccion/products.php">Biblioteca</a>
            <a class="nav-item nav-link" href="<?php echo $host;?>/admin/seccion/close.php">Cerrar</a>
            <a class="nav-item nav-link" href="<?php echo $host;    ?>">Ver sitio web</a>
        </div>
    </nav>

    <div class="container">
        <br>
        <div class="row">