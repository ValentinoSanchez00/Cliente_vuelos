<?php

class VuelosView {

    public function mostrarInicio() {
        ?>
        <div class="container">
            <h1>Bienvenido a la Página de Inicio</h1>

            <p>Seleccione una opción:</p>

            <a href="./index.php?controller=Vuelos&action=verTodos">Mostrar Todos los Vuelos</a>
            <a href="./index.php?controller=Vuelos&action=mostrarFormulario1vuelo">Mostrar 1 Vuelo</a>
            <a href="./index.php?controller=Pasaje&action=mostrarformularioPasaje">Insertar u pasaje</a>
            <br>
            <a href="#">Actualizar Pasaje</a>
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
                        <th>Origen</th>
                        <th>Destino</th>
                        <th>Tipo de Vuelo</th>
                        <th>Fecha</th>
                        <th>Descuento</th>
                        <th>Num Pasajeros</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    foreach ($array as $vuelo) {
                        ?>
                        <tr>
                            <td><?php echo $vuelo->getIdentificador(); ?></td>
                            <td><?php echo $vuelo->getAeropuertoorigen(); ?></td>
                            <td><?php echo $vuelo->getAeropuertodestino(); ?></td>
                            <td><?php echo $vuelo->getTipovuelo(); ?></td>
                            <td><?php echo $vuelo->getFechavuelo(); ?></td>
                            <td><?php echo $vuelo->getDescuento(); ?></td>
                            <td><?php echo $vuelo->getNumpasajero() ?></td>
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

    public function formularioporId() {
        ?>
        <body>
            <div class="container">
                <h1>Formulario por Identificador</h1>
                <form action="./index.php?controller=Vuelos&action=mostrarporId" method="post">
                    <label for="identificador">Identificador:</label>
                    <input type="text" id="identificador" name="identificador">

                    <button type="submit">Enviar</button>
                </form>
            </div>
        </body>
        <?php
    }
}
