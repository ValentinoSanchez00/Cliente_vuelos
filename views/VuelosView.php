<?php

class VuelosView {

    public function mostrarInicio() {
        ?>
        <div class="container">
            <h1>Bienvenido a la Página de Inicio</h1>

            <p>Seleccione una opción:</p>

            <a href="./index.php?controller=Vuelos&action=verTodos">Mostrar Todos los Vuelos</a>
            <a href="./index.php?controller=Vuelos&action=mostrarFormulario1vuelo">Mostrar 1 Vuelo</a>
            <a href="./index.php?controller=General&action=mostrarformularioPasaje">Insertar un pasaje</a>
            <a href="./index.php?controller=Pasaje&action=mostrarPasajes">Ver todos los pasajes</a>

        </div>

        <?php
    }

    public function mostrartodos($array) {
        ?>
        <h1>Todos los Vuelos</h1>

        <!-- INICIO TABLA -->
        <div class="table-container">
            <table class="table">
                <thead>
                    <tr>
                        <th>Identificador</th>
                        <th>Aeropuerto Origen</th>
                        <th>Nombre Origen</th>
                        <th>Aeropuerto Destino</th>
                        <th>Nombre Destino</th>
                        <th>Tipo de Vuelo</th>
                        <th>Num Pasajeros</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    foreach ($array as $vuelo) {
                        ?>
                        <tr>
                            <td><?php echo $vuelo->getIdentificador(); ?></td>
                            <td><?php echo $vuelo->getAeropuertoOrigen()->getCodigo(); ?></td>
                            <td><?php echo $vuelo->getAeropuertoOrigen()->getNombre(); ?></td>
                            <td><?php echo $vuelo->getAeropuertoDestino()->getCodigo(); ?></td>
                            <td><?php echo $vuelo->getAeropuertoDestino()->getNombre(); ?></td>
                            <td><?php echo $vuelo->getTipovuelo(); ?></td>
                            <td><?php echo $vuelo->getNumpasajero(); ?></td>
                        </tr>
                        <?php
                    }
                    ?>
                </tbody>
            </table>

            <a href="./index.php?controller=Vuelos&action=mostrarInicio">Volver</a>
        </div>

        <!-- FIN TABLA -->
        <?php
    }

    public function formularioporId($identificadores) {
        ?>
        <body>
            <div class="container">
                <h1>Formulario por Identificador</h1>
                <form action="./index.php?controller=Vuelos&action=mostrarFormulario1vuelo" method="post">
                    <div class="mb-3">
                        <label for="select1" class="form-label">Selecciona Identificador de vuelo:</label>;
                        <select id="select1" name="select1" class="form-select">;
                            <?php
                            foreach ($identificadores as $id) {
                                echo '<option value="' . $id . '">' . $id . '</option>';
                            }
                            ?>
                        </select>';
                    </div>;

                    <button type="submit">Enviar</button>
                </form>
            </div>
        </body>
        <?php
    }

    public function opcionesporId($id) {
        ?>
        <div class="container p-5">
            <h1 class="text-center mb-4">Formulario por Identificador: <?php echo $id; ?></h1>

            <div class="d-flex justify-content-center">
                <!-- Primer formulario -->
                <form class="me-5" action="./index.php?controller=Vuelos&action=mostrarFormulario1vuelo" method="post">
                    <button type="submit" class="btn btn-primary">Vuelo</button>
                </form>

                <!-- Segundo formulario -->
                <form action="./index.php?controller=Vuelos&action=mostrarFormulario1vuelo" method="post">
                    <button type="submit" class="btn btn-primary">Pasaje</button>
                </form>
            </div>
        </div>
        <?php
    }
}
