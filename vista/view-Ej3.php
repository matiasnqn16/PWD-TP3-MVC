<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio 01</title>
    <link rel="stylesheet" href="../utils/bootstrap-5.2.0-dist/css/bootstrap.min.css">
    <script src="../utils/bootstrap-5.2.0-dist/js/bootstrap.min.js"></script>
</head>

<body>
    <? include_once("../structures/header.php") ?>
    <? include_once("../control/formCine.php") ?>
    <? include_once("../utils/funciones.php") ?>

    <div class="container mt-2 pb-2" style="background-color: greenyellow;">
        <div class="row">
            <div class="col-md-6">
                
            <?php 
                $data = data_submitted();
                $obj = new formCine();
                $mostrar = $obj->listarForm($data);

            echo $mostrar;
            ?>

                
            </div>
            <div class="col-md-6 ">
                
            </div>
        </div>
    </div>


    </div>
    <? include_once("../structures/footer.php") ?>

</body>

</html>