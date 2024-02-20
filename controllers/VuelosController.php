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
    
    public function verInicio() {
        $this->view->mostrarInicio();
    }
    
    
    
  public function verTodos() {
     $vuelos = json_decode($this->service->request_curl(), true);
    $arrayDeVuelos = [];

    foreach ($vuelos as $valoresVuelo) {
        $aeropuertoOrigen = new Aeropuerto($valoresVuelo["codigo_origen"], $valoresVuelo["nombre_origen"],null,null);
        $aeropuertoDestino = new Aeropuerto($valoresVuelo["codigo_destino"], $valoresVuelo["nombre_destino"],null,null);

        $nuevoVuelo = new Vuelo(
            $valoresVuelo["identificador"],
            $aeropuertoOrigen,
            $aeropuertoDestino,
            $valoresVuelo["tipovuelo"],
            $valoresVuelo["fechavuelo"],
            $valoresVuelo["descuento"],
            $valoresVuelo["numpasajero"]
        );

        array_push($arrayDeVuelos, $nuevoVuelo);
    }

    $this->view->mostrartodos($arrayDeVuelos);
}

    public function mostrarFormulario1vuelo() {
        $this->view->formularioporId();
    }
    
    public function mostrarporId() {
        $identificador=$_POST["identificador"];
        $Vuelos= json_decode($this->service->request_curlId($identificador),true);
           $arraydeVuelos=[];
        foreach ($Vuelos as $valoresVuelo) {
          
          $nuevoVuelo=new Vuelo($valoresVuelo["identificador"],$valoresVuelo["aeropuertoorigen"],$valoresVuelo["aeropuertodestino"],$valoresVuelo["tipovuelo"],$valoresVuelo["fechavuelo"],$valoresVuelo["descuento"],$valoresVuelo["numpasajero"]);
          
          array_push($arraydeVuelos,$nuevoVuelo);

      }
      
      
      
      $this->view->mostrartodos($arraydeVuelos);
    }
    
    
    

   
    
    
    
    
}