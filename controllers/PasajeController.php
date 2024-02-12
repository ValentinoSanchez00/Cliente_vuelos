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

    public function mostrarformularioPasaje() {
       $identificadores= json_decode($this->service->request_curlIdentificadores(),true);
       $arraydePasajes=[];
        foreach ($arraydePasajes as $valoresPasaje) {
          
          $nuevoPasaje=new Pasaje($valoresPasaje["idpasaje"],$valoresPasaje["pasajerocod"],$valoresPasaje["identificador"],$valoresPasaje["numasiento"],$valoresPasaje["clase"],$valoresPasaje["pvp"]);
          
          array_push($arraydePasajes,$nuevoPasaje);
          //Hacer controlador y servicio general
          
          
          
          

      }
        
        
        
    }
}
