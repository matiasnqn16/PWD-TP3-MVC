<?php

class archivo {
    
    private $nombreArchivo = "", $tipoDeArchivo = "", $tamanioArchivo = "";
    private function subirFile($param){

    }




}



$dir = "/control/temp";
$pesaMenosDe2Mb = true;
$esArchivoAdmitido = false;

if ($_FILES['miFile']["error"] <= 0) {
    $nombreArchivo = $_FILES['miFile']['name'];
    $tipoDeArchivo = $_FILES['miFile']['type'];
    $tamanioArchivo = $_FILES['miFile']["size"];
    /* si el archivo pesa mas de 2048kb el flag cambia a false */
    if (($tamanioArchivo / 1024) > 2048) {
        $pesaMenosDe2Mb = false;
    }
    if ($tipoDeArchivo == "image/jpeg" || $tipoDeArchivo == "image/png") {
        $esArchivoAdmitido = true;
    }
    if ($pesaMenosDe2Mb && $esArchivoAdmitido) {
        // Intentamos copiar el archivo al servidor.
        if (!copy($_FILES['miFile']['tmp_name'], $dir . $_FILES['miFile']['name'])) {
            echo "ERROR: no se pudo cargar la imagen ";
        } else {
            echo "<img class=' rounded mx-auto' src='$dir$nombreArchivo' alt='img'>   ";
        }
    } else {
        echo "El archivo no cumple con los requisitos <br />";
    }
} else {
    echo "ERROR: no se pudo cargar el archivo. No se pudo acceder al archivo Temporal";
}
?>