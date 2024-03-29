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
            $aeropuertoOrigen = new Aeropuerto($valoresVuelo["codigo_origen"], $valoresVuelo["nombre_origen"], null, null);
            $aeropuertoDestino = new Aeropuerto($valoresVuelo["codigo_destino"], $valoresVuelo["nombre_destino"], null, null);

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
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            $this->view->opcionesporId($_POST["select1"]);
        } else {
            $identificadores = json_decode($this->service->request_curlIdentificadores(), true);
            $arraydeidentificadores = [];
            foreach ($identificadores as $valores) {
                array_push($arraydeidentificadores, $valores["identificadores"]);
            }



            $this->view->formularioporId($arraydeidentificadores);
        }
    }

    public function mostrarporId() {
        $id = trim(substr($_POST["id"], 0, strpos($_POST["id"], '-', strpos($_POST["id"], '-') + 1)));
        $vuelos = json_decode($this->service->request_curlid($id), true);
        $arrayDeVuelos = [];

        foreach ($vuelos as $valoresVuelo) {
            $aeropuertoOrigen = new Aeropuerto($valoresVuelo["codigo_origen"], $valoresVuelo["nombre_origen"], null, null);
            $aeropuertoDestino = new Aeropuerto($valoresVuelo["codigo_destino"], $valoresVuelo["nombre_destino"], null, null);

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
}
