<?php


class VuelosView {

    public function mostrartodos($array) {
        ?>
        <h1>Todos los Vuelos</h1>
        <!-- INICIO TABLA -->
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
                        <td><?php echo $vuelo->getNumpasajero()?></td>
                    </tr>
                    <?php
                }
                ?>
            </tbody>
        </table>
        <!-- FIN TABLA -->
        <?php
    }
}
