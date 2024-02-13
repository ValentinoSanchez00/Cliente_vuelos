<?php

class ViewGeneral {

    private $pasajeview;
    private $vuelosview;

    public function __construct() {
        $this->pasajeview = new PasajeView();
        $this->vuelosview = new VuelosView();
    }

    public function mostrarVistaPasaje($funcion) {
        $this->pasajeview->$funcion();
    }

    public function mostrarVistaVuelos($funcion) {
        $this->vuelosview->$funcion();
    }

    public function formularioDeInserción($identificadores, $pasajeros) {
        echo '<div class="container">';
        echo '<form method="post" action="">';

// Título
        echo '<h2>Insertar Pasaje</h2>';

// Select con opciones del segundo array
        echo '<div class="mb-3">';
        echo '<label for="select2" class="form-label">Selecciona Pasajero:</label>';
        echo '<select id="select2" name="select2" class="form-select">';
        foreach ($pasajeros as $pasajero) {
            echo '<option value="' . $pasajero . '">' . $pasajero . '</option>';
        }
        echo '</select>';
        echo '</div>';

// Select con opciones del primer array
        echo '<div class="mb-3">';
        echo '<label for="select1" class="form-label">Selecciona Identificador de vuelo:</label>';
        echo '<select id="select1" name="select1" class="form-select">';
        foreach ($identificadores as $id) {
            echo '<option value="' . $id . '">' . $id . '</option>';
        }
        echo '</select>';
        echo '</div>';

// Input para el número de asiento
        echo '<div class="mb-3">';
        echo '<label for="asiento" class="form-label">Número de Asiento:</label>';
        echo '<input type="number" id="asiento" name="asiento" class="form-control">';
        echo '</div>';

// Radios para turista, primera o business
        echo '<div class="mb-3 d-flex">';
        echo '<div class="form-check me-3">';
        echo '<input type="radio" id="turista" name="clase" value="Turista" class="form-check-input">';
        echo '<label for="turista" class="form-check-label">Turista</label>';
        echo '</div>';

        echo '<div class="form-check me-3">';
        echo '<input type="radio" id="primera" name="clase" value="Primera" class="form-check-input">';
        echo '<label for="primera" class="form-check-label">Primera</label>';
        echo '</div>';

        echo '<div class="form-check">';
        echo '<input type="radio" id="business" name="clase" value="Business" class="form-check-input">';
        echo '<label for="business" class="form-check-label">Business</label>';
        echo '</div>';
        echo '</div>';

// PVP
        echo '<div class="mb-3">';
        echo '<label for="pvp" class="form-label">PVP:</label>';
        echo '<input type="text" id="pvp" name="pvp" class="form-control">';
        echo '</div>';

// Botón de envío
        echo '<button type="submit" class="btn btn-primary">Enviar</button>';

        echo '</form>';
        echo '</div>';
    }
}
