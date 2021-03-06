<!DOCTYPE html>

<head>
    <meta charset="utf-8">
    <title><?= $v($title) ?></title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.
css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/
iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="./css/estilos.css">
</head>

<body>
    <div class="alert alert-secondary d-flex">
        <a href="/DWS/ejemplos/T4/mvc/libros" class="btn btndark">Libros</a>&nbsp;&nbsp;
    </div>
    <div class="container">
        <?= $v->section('content') ?>
    </div>
</body>

</html>