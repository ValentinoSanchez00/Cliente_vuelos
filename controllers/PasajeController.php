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

    public function obteneridentificadores() {
       $identificadores= json_decode($this->service->request_curlIdentificadores(),true);
       $arraydeidentificadores=[];
        foreach ($identificadores as $valores) {
          array_push($arraydeidentificadores,$valores["identificador"]); 
      }
       return $arraydeidentificadores;
 
    }
    
    public function mostrarPasajes() {
        $pasajes=json_decode($this->service->request_curl(),true);
        $arraydePasajes=[];
      foreach ($pasajes as $valoresPasaje) {
          
          $nuevoPasaje=new Pasaje($valoresPasaje["idpasaje"],$valoresPasaje["pasajerocod"],$valoresPasaje["identificador"],$valoresPasaje["numasiento"],$valoresPasaje["clase"],$valoresPasaje["pvp"]);
          
          array_push($arraydePasajes,$nuevoPasaje);

      }
      if (isset($_GET["validacion"])) {
          $this->view->mostrarPasajesValidado($arraydePasajes,$_GET["validacion"]);
      } else {
          $this->view->mostrarPasajes($arraydePasajes);
      }
       
    }
    
    public function FormEdicion() {
        $id=$_GET["id"];
        $this->view->formulariodeupdate($id);
    }
    
    public function update() {
        $id= intval($_GET["id"]);
        $pasajerocod=intval($_POST["pasajerocod"]);
        $identificador=$_POST["identificador"];
        $numasiento= intval($_POST["numasiento"]);
        $clase=$_POST["clase"];
        $pvp= floatval($_POST["pvp"]);
        
        
        $validar = json_decode($this->service->actualizar($id, $pasajerocod, $identificador, $numasiento, $clase, $pvp));
        $resultado = $validar->mensaje;
        header("Location: ./index.php?controller=Pasaje&action=mostrarPasajes&validacion=" . $resultado);
    }
    
    public function delete() {
        $pasajeId=$_POST["pasajeId"];
        $validar= json_decode($this->service->delete($pasajeId));
         $resultado = $validar->message;
        header("Location: ./index.php?controller=Pasaje&action=mostrarPasajes&validacion=" . $resultado);
    }
    
    
    
    
    
    
}
