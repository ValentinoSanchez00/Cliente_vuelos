<?php

require 'services/pasaje.php';

class PasajeController {

    // Obtiene una instancia del modelo y de la vista de tareas
    private $service;
    private $view;

    public function __construct() {
        $this->service = new PasajeServices();
        $this->view = new PasajeView();
    }

    public function getNumPasajerosenPasaje() {
        $pasajero = json_decode($this->service->request_curl(), true);
        return $pasajeros;
    }
}
