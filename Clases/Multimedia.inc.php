<?php

//Clase padre
abstract class Multimedia {
    
    protected $id;
    protected $titulo;
    protected $publicacion;
    protected $ano;
    protected $genero;


    //Contructor
    public function __construct($titulo, $publicacion, $ano, $genero) {
        $this->titulo = $titulo;
        $this->publicacion = $publicacion;
        $this->ano = $ano;
        $this->genero = $genero;
    }

    //Getters y Setters
    public function getTitulo() {
        return $this->titulo;
    }

    public function setTitulo($titulo) {
        $this->titulo = $titulo;
    }

    public function getPublicacion() {
        return $this->publicacion;
    }

    public function setPublicacion($publicacion) {
        $this->publicacion = $publicacion;
    }   

    public function getAno() {
        return $this->ano;
    }

    public function setAno($ano) {
        $this->ano = $ano;
    }

    public function getGenero() {
        return $this->genero;
    }

    public function setGenero($genero) {
        $this->genero = $genero;
    }

}

?>