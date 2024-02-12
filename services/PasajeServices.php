<?php

class PasajeServices {
    
//GET
    public function request_curl() {
        $urlmiservicio = "http://localhost/_servWeb/vueloservice/pasaje.php";
        $conexion = curl_init();
        //Url de la petición
        curl_setopt($conexion, CURLOPT_URL, $urlmiservicio);
        //Tipo de petición
        curl_setopt($conexion, CURLOPT_HTTPGET, TRUE);
        //Tipo de contenido de la respuesta
        curl_setopt($conexion, CURLOPT_HTTPHEADER, array('Content-type: application/json'));
        //para recibir una respuesta
        curl_setopt($conexion, CURLOPT_RETURNTRANSFER, true);

        $res = curl_exec($conexion);
        if ($res) {
           
            return $res;
        }
        curl_close($conexion);
    }
    
    public function request_curlIdentificadores() {
                $urlmiservicio = "http://localhost/_servWeb/vueloservice/pasaje.php?identificadores";
        $conexion = curl_init();
        //Url de la petición
        curl_setopt($conexion, CURLOPT_URL, $urlmiservicio);
        //Tipo de petición
        curl_setopt($conexion, CURLOPT_HTTPGET, TRUE);
        //Tipo de contenido de la respuesta
        curl_setopt($conexion, CURLOPT_HTTPHEADER, array('Content-type: application/json'));
        //para recibir una respuesta
        curl_setopt($conexion, CURLOPT_RETURNTRANSFER, true);

        $res = curl_exec($conexion);
        if ($res) {
           
            return $res;
        }
        curl_close($conexion);
    }

}
