<?php

//Incluir la clase padre
include_once 'Multimedia.inc.php';


// Clase Disco
class Disco extends Multimedia {
    private $grupoOMusico;
    private $duracion;
    private $iswc;

    // Constructor sobrecargado
    public function __construct($titulo, $grupoOMusico, $publicacion, $año, $duracion, $iswc, $genero) {
        parent::__construct($titulo, $publicacion, $año, $genero);
        $this->grupoOMusico = $grupoOMusico;
        $this->duracion = $duracion;
        $this->iswc = $iswc;
    }

    // Getters y Setters

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