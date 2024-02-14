<?php

//Incluir la clase padre
include_once 'Multimedia.inc.php';


//Clase Pelicula
class Pelicula extends Multimedia {

    private $director;
    private $duracion;
    private $reparto;

    //Constructor
    public function __construct($titulo, $publicacion, $ano, $genero, $director, $duracion, $reparto) {
        parent::__construct($titulo, $publicacion, $ano, $genero);
        $this->director = $director;
        $this->duracion = $duracion;
        $this->reparto = $reparto;
    }

    //Getters y Setters específcos para pelicula

    public function getDirector() {
        return $this->director;
    }

    public function setDirector($director) {
        $this->director = $director;
    }

    public function getDuracion() {
        return $this->duracion;
    }

    public function setDuracion($duracion) {
        $this->duracion = $duracion;
    }

    public function getReparto() {
        return $this->reparto;
    }

    public function setReparto($reparto) {
        $this->reparto = $reparto;
    }


    
    //Metodo to String y mostrarPeliculas
    public function __toString() {
        return parent::__toString() . "Director: " . $this->director . "<br>" . "Duracion: " . $this->duracion . "<br>" . "Reparto: " . $this->reparto . "<br>";
    }

    public function mostrarPeliculas() {
        echo $this->__toString();
    }

}


?>