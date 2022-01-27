<!DOCTYPE html>

<head>
    <meta charset="utf-8">
    <title>Directores | Ficha</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="./css/estilos.css">
</head>

<body>
    <div class="alert alert-secondary d-flex">
        <a href="./peliculas.php" class="btn btn-dark">Películas</a>&nbsp;&nbsp;
    </div>
    <div class="container">

        <!-- Código PHP -->
        <?php
        $id_actor = $_GET['id'];
        function informacionActor($id_actor)
        {
            $actores = include("bbdd/actores.php");
            foreach ($actores as $value) {
                if ($id_actor == $value["id"]) {
                    echo '<b>Nombre: </b>' . $value["nombre"] . '<br />
            <b>Año: </b>' . $value["anyo"] . '<br />
            <b>País: </b>' . $value["pais"] . '<br />';
                }
            }
        }
        informacionActor($id_actor);
        ?>
        <!-- Fin código PHP -->

    </div>
</body>

</html>