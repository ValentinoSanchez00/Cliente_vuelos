<?php

require 'services/Vuelo.php';
class VuelosController {
    // Obtiene una instancia del modelo y de la vista de tareas
    private $service;
    private $view;

    public function __construct() {
        $this->service = new VuelosServices();
        $this->view = new VuelosView();
    }
    
    
    
    public function verTodos() {
        
      $Vuelos= json_decode($this->service->request_curl(),true);
      $arraydeVuelos=[];
      foreach ($Vuelos as $valoresVuelo) {
          
          $nuevoVuelo=new Vuelo($valoresVuelo["identificador"],$valoresVuelo["aeropuertoorigen"],$valoresVuelo["aeropuertodestino"],$valoresVuelo["tipovuelo"],$valoresVuelo["fechavuelo"],$valoresVuelo["descuento"],$valoresVuelo["numpasajero"]);
          
          array_push($arraydeVuelos,$nuevoVuelo);

      }
      
      
      
      $this->view->mostrartodos($arraydeVuelos);
        
        
        
    }
    
   
    
    
    
    
}