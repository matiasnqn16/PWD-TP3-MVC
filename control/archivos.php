<?php

class archivo {
    private $nameFile, $typeFile, $tmpFile, $error,$sizeFile;

    public function __construct($file){
        $this->nameFile = $file["miFile"]["name"];
        $this->typeFile = $file["miFile"]["type"];
        $this->tmpFile = $file["miFile"]["tmp_name"];
        $this->error = $file["miFile"]["error"];
        $this->sizeFile = $file["miFile"]["size"];;
    }
    
        
    
    
    public function guardarFile(){
        $estado = null;
        $dir = "../temp/";
        if (!copy($this->tmpFile,  $dir . $this->nameFile)) {
            $estado = null;
        } else {
            $estado = $dir.$this->nameFile;
        }
        return $estado;
    }

    public function verVariable(){

    }



}

?>