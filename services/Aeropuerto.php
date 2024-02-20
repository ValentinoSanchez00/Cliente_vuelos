<?php

class Aeropuerto {
    private $codigo;
    private $nombre;
    private $ciudad;
    private $pais;

    public function __construct($codigo, $nombre, $ciudad, $pais) {
        $this->codigo = $codigo;
        $this->nombre = $nombre;
        $this->ciudad = $ciudad;
        $this->pais = $pais;
    }

    public function getCodigo() {
        return $this->codigo;
    }

    public function getNombre() {
        return $this->nombre;
    }

    public function getCiudad() {
        return $this->ciudad;
    }

    public function getPais() {
        return $this->pais;
    }
}



