<?php

class GeneralController {

    // Obtiene una instancia del modelo y de la vista de tareas
    private $serviceGeneral;
    private $viewPasaje;
    private $viewVuelo;
    private $vueloController;
    private $pasajeController;

    public function __construct() {
        $this->viewPasaje = new PasajeView();
        $this->viewVuelo = new VuelosView();
        $this->serviceGeneral = new GeneralServices();
        $this->vueloController = new VuelosController();
        $this->pasajeController = new PasajeController();
    }

    public function mostrarformularioPasaje() {
        $identificadores = json_decode($this->serviceGeneral->DarServicioVuelos("request_curlIdentificadores"),true);
        $arraydeidentificadores = [];
        foreach ($identificadores as $valores) {
            array_push($arraydeidentificadores, $valores["identificadores"]);
        }
       
    }
}
