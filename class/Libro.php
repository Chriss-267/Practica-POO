<?php
class Libro {
    private $titulo;
    private $autor;
    private $categoria;
    private $img;
    private $estado;

    public function __construct($titulo, $autor, $categoria, $img, $estado = "disponible") {
        $this->titulo = $titulo;
        $this->autor = $autor;
        $this->categoria = $categoria;
        $this->img = $img;
        $this->estado = $estado;
    }

    public function getTitulo() {
        return $this->titulo;
    }

    public function getAutor() {
        return $this->autor;
    }

    public function getCategoria() {
        return $this->categoria;
    }

    public function getImg() {
        return $this->img;
    }

    public function getEstado() {
        return $this->estado;
    }

    public function prestar() {
        if ($this->estado === "disponible") {
            $this->estado = "prestado";
            return true;
        }
        return false;
    }

    public function devolver() {
        $this->estado = "disponible";
    }
}
?>
