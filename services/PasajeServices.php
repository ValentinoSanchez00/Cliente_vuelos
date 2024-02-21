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
    
     public function request_curlbyId($id) {
        $urlmiservicio = "http://localhost/_servWeb/vueloservice/pasaje.php?id=".$id;
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
    
        public function validar($cod, $identificador, $numasiento, $clase, $pvp) {
        $envio = json_encode(array("pasajerocod" => $cod, "identificador" => $identificador, "numasiento" => $numasiento, "clase" => $clase, "pvp" => $pvp));
        $urlmiservicio = "http://localhost/_servWeb/vueloservice/pasaje.php/?validar";
        $conexion = curl_init();
        curl_setopt($conexion, CURLOPT_URL, $urlmiservicio);
        //Cabecera, tipo de datos y longitud de envío
        curl_setopt($conexion, CURLOPT_HTTPHEADER,
                array('Content-type: application/json', 'Content-Length: ' . mb_strlen($envio)));
        //Tipo de petición
        curl_setopt($conexion, CURLOPT_POST, TRUE);
        //Campos que van en el envío
        curl_setopt($conexion, CURLOPT_POSTFIELDS, $envio);
        //para recibir una respuesta
        curl_setopt($conexion, CURLOPT_RETURNTRANSFER, true);

        $res = curl_exec($conexion);
        if ($res) {
            return $res;
        }
        curl_close($conexion);
    }
 

function actualizar($id, $pasajerocod, $identificador, $numasiento, $clase, $pvp) {
        $envio = json_encode(array("idpasaje"=>$id,"pasajerocod" => $pasajerocod, "identificador" => $identificador, "numasiento" => $numasiento, "clase" => $clase, "pvp" => $pvp));
    $urlmiservicio = "http://localhost/_servWeb/vueloservice/pasaje.php/";
    $conexion = curl_init();
    curl_setopt($conexion, CURLOPT_URL, $urlmiservicio);
    //Cabecera, tipo de datos y longitud de envío
    curl_setopt($conexion, CURLOPT_HTTPHEADER, 
          array('Content-type: application/json', 'Content-Length: ' . mb_strlen($envio)));
    //Tipo de petición
     curl_setopt($conexion, CURLOPT_CUSTOMREQUEST, 'PUT');
    //Campos que van en el envío
    curl_setopt($conexion, CURLOPT_POSTFIELDS, $envio);
    //para recibir una respuesta
    curl_setopt($conexion, CURLOPT_RETURNTRANSFER, true);

    $res = curl_exec($conexion);
    if ($res) {
        return $res;
    }
    curl_close($conexion);
}


//DELETE para borrar
function delete($id) {
    $urlmiservicio = "http://localhost/_servWeb/vueloservice/pasaje.php/?id=".$id;
    $conexion = curl_init();
    curl_setopt($conexion, CURLOPT_URL, $urlmiservicio);
    //Cabecera, tipo de datos y longitud de envío
    curl_setopt($conexion, CURLOPT_HTTPHEADER, array('Content-type: application/json' ));
    //Tipo de petición
     curl_setopt($conexion, CURLOPT_CUSTOMREQUEST, 'DELETE');
    //Campos que van en el envío
    //curl_setopt($conexion, CURLOPT_POSTFIELDS, $envio);
    //para recibir una respuesta
    curl_setopt($conexion, CURLOPT_RETURNTRANSFER, true);

    $res = curl_exec($conexion);
    if ($res) {

        return $res;
    }
    curl_close($conexion);
}


}
