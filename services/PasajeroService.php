<?php

class PasajeroService {

//GET
    public function request_curl() {
        $urlmiservicio = "http://localhost/_servWeb/vueloservice/pasajero.php";
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

    public function request_curlNombres() {
        $urlmiservicio = "http://localhost/_servWeb/vueloservice/pasajero.php?nombre";
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

    public function validarnombre($nombre, $identificador) {
        $urlmiservicio = "http://localhost/_servWeb/vueloservice/pasajero.php?validar=" . $nombre . "&identificador=" . $identificador;
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

    public function validarnumasiento($numasiento, $identificador) {
        $urlmiservicio = "http://localhost/_servWeb/vueloservice/pasajero.php?validarasiento=" . $numasiento . "&identificador=" . $identificador;
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
        if ($res == false) {

            return false;
        } else {
            return true;
        }
        curl_close($conexion);
    }
}
