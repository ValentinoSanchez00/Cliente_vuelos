<?php

class GeneralServices{
    
    private $servicePasaje;
    private $serviceVuelos;
    private $servicePasajero;

    public function __construct() {
        $this->servicePasaje= new PasajeServices();
        $this->serviceVuelos= new VuelosServices();  
        $this->servicePasajero= new PasajeroService();  
    }

    public function DarServicioVuelos($servicio) {
       $res= $this->serviceVuelos->$servicio();
       return $res;
    }
    
    public function DarServicioPasaje($servicio) {
       $res= $this->servicePasaje->$servicio();
       return $res;
    }
    
       public function DarServicioPasajeros($servicio,$variable1,$variable2) {
           if ($variable1!=null && $variable2!=null) {
               $res= $this->servicePasajero->$servicio($variable1,$variable2);
           } else {
                $res= $this->servicePasajero->$servicio();
           }
       return $res;
    }
    
}
