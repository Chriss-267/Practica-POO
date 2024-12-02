<?php
class Biblioteca {
    private $libros = [];

    public function agregarLibro($libro) {
        $this->libros[] = $libro;
    }

    public function listarLibros() {
        return $this->libros;
    }

    public function buscarLibroPorTitulo($titulo) {
        foreach ($this->libros as $libro) {
            if ($libro->getTitulo() === $titulo) {
                return $libro;
            }
        }
        return null;
    }

    public function prestarLibro($titulo) {
        $libro = $this->buscarLibroPorTitulo($titulo);
        if ($libro && $libro->prestar()) {
            return "El libro '{$titulo}' ha sido prestado.";
        }
        return "El libro '{$titulo}' no está disponible.";
    }

    public function devolverLibro($titulo) {
        $libro = $this->buscarLibroPorTitulo($titulo);
        if ($libro) {
            $libro->devolver();
            return "El libro '{$titulo}' ha sido devuelto.";
        }
        return "El libro '{$titulo}' no existe en la biblioteca.";
    }
}
?>
