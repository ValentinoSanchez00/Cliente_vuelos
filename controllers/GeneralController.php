<?php

class GeneralController {

    // Obtiene una instancia del modelo y de la vista de tareas
    private $serviceGeneral;
    private $viewGeneral;
    private $vueloController;
    private $pasajeController;

    public function __construct() {
        $this->viewGeneral= new ViewGeneral();
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
       
        $pasajeros= json_decode($this->serviceGeneral->DarServicioPasajeros("request_curlNombres"),true);
          $arraydepasajeros = [];
        foreach ($pasajeros as $valores) {
            array_push($arraydepasajeros, $valores["nombre_concatenado"]);
        }
        
        
        $this->viewGeneral->formularioDeInserción($arraydeidentificadores, $arraydepasajeros);
    }
    
    
    
    
    
}
