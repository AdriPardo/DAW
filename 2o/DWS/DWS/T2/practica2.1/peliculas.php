<!DOCTYPE html>

<head>
    <meta charset="utf-8">
    <title>Películas</title>
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
        <div class="row mx-auto">


            <?php
            $peliculas = include("bbdd/peliculas.php");
            foreach ($peliculas as $value) {
                $id = $value["id"];
                $titulo = $value["titulo"];
                echo '<div class="col-3">
                    <a href="peliculas_ficha.php?id=' . $id . '" class="custom-card">
                    <div class="card" style="width: 100%">
                        <img class="card-img-top" src="./imgs/peliculas/' . $id . '.jpg">
                        <div class="card-body">
                            <h5 class="card-title text-center font-weight-bold">' .
                    $titulo .
                    '</h5>  </div>
                        </div>
                        </a>
                    </div>';
            }

            ?>



        </div>
    </div>
</body>

</html>