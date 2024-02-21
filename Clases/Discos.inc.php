<?php

//Incluir la clase padre
include_once 'Multimedia.inc.php';


// Clase Disco
class Disco extends Multimedia {
    private $grupoOMusico;
    private $duracion;
    private $iswc;

    //Contructor
    public function __construct($titulo, $publicacion, $ano, $genero, $imagen, $guardado, $grupoOMusico, $duracion, $iswc) {
        parent::__construct($titulo, $publicacion, $ano, $genero, $imagen, $guardado);
        $this->grupoOMusico = $grupoOMusico;
        $this->duracion = $duracion;
        $this->iswc = $iswc;
    }

    //Getters y Setters específcos para disco
    public function getGrupoOMusico() {
        return $this->grupoOMusico;
    }

    public function setGrupoOMusico($grupoOMusico) {
        $this->grupoOMusico = $grupoOMusico;
    }

    public function getDuracion() {
        return $this->duracion;
    }

    public function setDuracion($duracion) {
        $this->duracion = $duracion;
    }

    public function getIswc() {
        return $this->iswc;
    }

    public function setIswc($iswc) {
        $this->iswc = $iswc;
    }

    
}

  
?>