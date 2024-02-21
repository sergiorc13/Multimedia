<?php

//Clase padre
abstract class Multimedia {
    
    protected $id;
    protected $titulo;
    protected $publicacion;
    protected $ano;
    protected $genero;
    protected $imagen;
    protected $guardado;


    //Contructor
    public function __construct($titulo, $publicacion, $ano, $genero, $imagen, $guardado) {
        $this->titulo = $titulo;
        $this->publicacion = $publicacion;
        $this->ano = $ano;
        $this->genero = $genero;
        $this->imagen = $imagen;
        $this->guardado = $guardado;
    }

    //Getters y Setters

    public function getId() {
        return $this->id;
    }

    public function setId($id) {
        $this->id = $id;
    }

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

    public function getImagen() {
        return $this->imagen;
    }

    public function setImagen($imagen) {
        $this->imagen = $imagen;
    }

    public function getGuardado() {
        return $this->guardado;
    }

    public function setGuardado($guardado) {
        $this->guardado = $guardado;
    }
    
}

?>