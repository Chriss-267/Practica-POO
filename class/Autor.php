<?php
class Autor {
    private $nombre;
    private $biografia;

    public function __construct($nombre, $biografia = "") {
        $this->nombre = $nombre;
        $this->biografia = $biografia;
    }

    public function getNombre() {
        return $this->nombre;
    }

    public function getBiografia() {
        return $this->biografia;
    }
}
?>
