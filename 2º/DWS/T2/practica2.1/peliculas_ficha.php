<!DOCTYPE html>

<head>
    <meta charset="utf-8">
    <title>Películas | Ficha</title>
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
        $id = $_GET['id'];
        /* Saca datos de la pelicula */
        function informacionBasica($id)
        {
            $peliculas = include("bbdd/peliculas.php");
            foreach ($peliculas as $value) {
                if ($id == $value["id"]) {
                    echo '<b>Título: </b> ' . $value["titulo"] . ' <br />
            <b>Año: </b>' . $value["anyo"] . '<br />
            <b>Duración: </b>' . $value["duracion"] . '<br />';
                }
            }
        }

        /* Saca el director */
        function sacarDirectores($id)
        {
            $pelicula_director = include("bbdd/pelicula_director.php");
            $directores = include("bbdd/directores.php");
            foreach ($pelicula_director as $value) {
                if ($id == $value["id_pelicula"]) {
                    $id_director = $value["id_director"];
                    foreach ($directores as $value) {
                        if ($id_director == $value["id"]) {
                            echo '<b>Director: </b> ' . $value["nombre"] . '
                <a href="./directores_ficha.php?id=' . $id_director . '">
                    <li>' . $value["nombre"] . '</li>
                </a>';
                        }
                    }
                }
            }
        }

        /* Saca todos los actores */
        function sacarActores($id)
        {
            $pelicula_actor = include("bbdd/pelicula_actor.php");
            $actores = include("bbdd/actores.php");
            $id_actores = [];
            $contenido_actores = "<b>Actores: </b>";
            foreach ($pelicula_actor as $value) {
                if ($id == $value["id_pelicula"]) {
                    $id_actor = $value["id_actor"];
                    array_push($id_actores, $id_actor);
                }
            }
            foreach ($actores as $value) {
                foreach ($id_actores as $valueIds) {
                    if ($valueIds == $value["id"]) {
                        $contenido_actores .= ' <a href="./actores_ficha.php?id=' . $valueIds . '"><li>' . $value["nombre"] . '</li></a>';
                    }
                }
            }
            echo $contenido_actores;
        }
        informacionBasica($id);
        sacarDirectores($id);
        sacarActores($id);




        ?>

    </div>
</body>

</html>