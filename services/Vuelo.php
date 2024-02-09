<?php

class Vuelo {

    private $identificador;
    private $aeropuertoorigen;
    private $aeropuertodestino;
    private $tipovuelo;
    private $fechavuelo;
    private $descuento;
    private $numpasajero;
    
    
    public function getIdentificador() {
        return $this->identificador;
    }

    public function getAeropuertoorigen() {
        return $this->aeropuertoorigen;
    }

    public function getAeropuertodestino() {
        return $this->aeropuertodestino;
    }

    public function getTipovuelo() {
        return $this->tipovuelo;
    }

    public function getFechavuelo() {
        return $this->fechavuelo;
    }

    public function getDescuento() {
        return $this->descuento;
    }

    public function setIdentificador($identificador): void {
        $this->identificador = $identificador;
    }

    public function setAeropuertoorigen($aeropuertoorigen): void {
        $this->aeropuertoorigen = $aeropuertoorigen;
    }

    public function setAeropuertodestino($aeropuertodestino): void {
        $this->aeropuertodestino = $aeropuertodestino;
    }

    public function setTipovuelo($tipovuelo): void {
        $this->tipovuelo = $tipovuelo;
    }

    public function setFechavuelo($fechavuelo): void {
        $this->fechavuelo = $fechavuelo;
    }

    public function setDescuento($descuento): void {
        $this->descuento = $descuento;
    }

    public function getNumpasajero() {
        return $this->numpasajero;
    }

    public function setNumpasajero($numpasajero): void {
        $this->numpasajero = $numpasajero;
    }

    public function __construct($identificador, $aeropuertoorigen, $aeropuertodestino, $tipovuelo, $fechavuelo, $descuento, $numpasajero) {
        $this->identificador = $identificador;
        $this->aeropuertoorigen = $aeropuertoorigen;
        $this->aeropuertodestino = $aeropuertodestino;
        $this->tipovuelo = $tipovuelo;
        $this->fechavuelo = $fechavuelo;
        $this->descuento = $descuento;
        $this->numpasajero = $numpasajero;
    }

}
