<?php

class GeneralServices{
    
    private $servicePasaje;
    private $serviceVuelos;

    public function __construct() {
        $this->servicePasaje= new PasajeServices();
        $this->serviceVuelos= new VuelosServices();  
    }

    public function DarServicioVuelos($servicio) {
       $res= $this->serviceVuelos->$servicio();
       return $res;
    }
    
    public function DarServicioPasaje($servicio) {
       $res= $this->servicePasaje->$servicio();
       return $res;
    }
    
}
