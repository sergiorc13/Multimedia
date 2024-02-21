<?php
//Incluir la clase padre
include_once 'Multimedia.inc.php';


//Clase Libro
class Libro extends Multimedia {

    private $autor;
    private $extension;
    private $isbn;

    //Constructor
    public function __construct($titulo, $publicacion, $ano, $genero, $imagen, $guardado, $autor, $extension, $isbn) {
        parent::__construct($titulo, $publicacion, $ano, $genero, $imagen, $guardado);
        $this->autor = $autor;
        $this->extension = $extension;
        $this->isbn = $isbn;
    }

    //Getters y Setters específcos para libro

    public function getAutor() {
        return $this->autor;
    }

    public function setAutor($autor) {
        $this->autor = $autor;
    }

    public function getExtension() {
        return $this->extension;
    }

    public function setExtension($extension) {
        $this->extension = $extension;
    }

    public function getIsbn() {
        return $this->isbn;
    }

    public function setIsbn($isbn) {
        $this->isbn = $isbn;
    }

    
}

?>