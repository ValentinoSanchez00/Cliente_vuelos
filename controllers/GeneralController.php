<?php

class GeneralController {

    // Obtiene una instancia del modelo y de la vista de tareas
    private $serviceGeneral;
    private $viewGeneral;
    private $vueloController;
    private $pasajeController;

    public function __construct() {
        $this->viewGeneral = new ViewGeneral();
        $this->serviceGeneral = new GeneralServices();
        $this->vueloController = new VuelosController();
        $this->pasajeController = new PasajeController();
    }

    public function mostrarformularioPasaje() {
        $identificadores = json_decode($this->serviceGeneral->DarServicioVuelos("request_curlIdentificadores"), true);
        $arraydeidentificadores = [];
        foreach ($identificadores as $valores) {
            array_push($arraydeidentificadores, $valores["identificadores"]);
        }

        $pasajeros = json_decode($this->serviceGeneral->DarServicioPasajeros("request_curlNombres",null,null), true);
        $arraydepasajeros = [];
        foreach ($pasajeros as $valores) {
            array_push($arraydepasajeros, $valores["nombre_concatenado"]);
        }


        $this->viewGeneral->formularioDeInserción($arraydeidentificadores, $arraydepasajeros);
    }

    public function validarDatosForm() {
        $nombre = $_POST["select2"];
        $identificador = substr($_POST["select1"], 0, strpos($_POST["select1"], '-', strpos($_POST["select1"], '-') + 1));
        
        $validarnombre = $this->serviceGeneral->DarServicioPasajeros("validarnombre", $nombre,$identificador);
        
        $numasiento = $_POST["asiento"];
        $validarnumasiento = $this->serviceGeneral->DarServicioPasajeros("validarnumasiento", $numasiento,$identificador);
        $clase = $_POST["clase"];
        $pvp = $_POST["pvp"];
    }
}
