<?php
class formCine{

private $titulo, $actores, $director, $guion, $produccion, $anio, $nacionalidad, $duracion, $restric, $sinopsis, $genero;


    public function listarForm($datos)
    {
        $ver = "404 not found";

        if (isset($datos)) {

            if (isset($datos['titulo'])) {
                $titulo = $datos['titulo'];
            }
            if (isset($datos['actores'])) {
                $actores = $datos['actores'];
            }
            if (isset($datos['director'])) {
                $director = $datos['director'];
            }
            if (isset($datos['guion'])) {
                $guion = $datos['guion'];
            }
            if (isset($datos['produccion'])) {
                $produccion = $datos['produccion'];
            }
            if (isset($datos['anio'])) {
                $anio = $datos['anio'];
            }
            if (isset($datos['nacionalidad'])) {
                $nacionalidad = $datos['nacionalidad'];
            }
            if (isset($datos['duracion'])) {
                $duracion = $datos['duracion'];
            }
            if (isset($datos['restric'])) {
                $restric = $datos['restric'];
            }
            if (isset($datos['sinopsis'])) {
                $sinopsis = $datos['sinopsis'];
            }
            if (isset($datos['genero'])) {
                $genero = $datos['genero'];
            }
            $ver = "<h3>La pelicula introducida es</h3>
                                        <b>Titulo: </b> " . $titulo . "</br>
                                        <b>Actores: </b>" . $actores . "</br>
                                        <b>Director: </b>" . $director . "</br>
                                        <b>Guión: </b>" . $guion . "</br>
                                        <b>Produccion: </b>" . $produccion . "</br>
                                        <b>Año: </b>" . $anio . "</br>
                                        <b>Nacionalidad: </b>" . $nacionalidad . "</br>
                                        <b>Duracion: </b>" . $duracion . "</br>
                                        <b>Genero: </b>" . $genero . "</br>
                                        <b>Restricciones: </b>" . $restric . "</br>
                                        <b>Sinopsis: </b>" . $sinopsis . "</br>";
        } else {
            $ver =  "sin datos";
        }
        
        return $ver;
                                }

}


?>