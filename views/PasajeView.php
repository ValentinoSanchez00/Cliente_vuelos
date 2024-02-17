<?php

class PasajeView {

    public function mostrarPasajes($arrayPasajes) {
        ?> 


        <div class="container mt-4 transparent-white-bg">
            <table class="table table-bordered">
                <thead class="thead-dark">
                    <tr>
                        <th>ID</th>
                        <th>Codigo pasajero</th>
                        <th>Identificador</th>
                        <th>Número de Asiento</th>
                        <th>Clase</th>
                        <th>PVP</th>
                        <th>Acciones</th>
                    </tr>
                </thead>
                <tbody>
                    <?php foreach ($arrayPasajes as $pasaje): ?>
                        <tr>
                            <td><?= $pasaje->getIdpasaje() ?></td>
                            <td><?= $pasaje->getPasajerocod() ?></td>
                            <td><?= $pasaje->getIdentificador() ?></td>
                            <td><?= $pasaje->getNumasiento() ?></td>
                            <td><?= $pasaje->getClase() ?></td>
                            <td><?= $pasaje->getPvp() ?></td>
                            <td>
                                <a class="btn btn-success edit" href="editar_pasaje.php?id=<?= $pasaje->id ?>">Editar</a>
                                <a class="btn btn-danger delete" href="borrar_pasaje.php?id=<?= $pasaje->id ?>">Borrar</a>
                            </td>
                        </tr>
                    <?php endforeach; ?>
                </tbody>
            </table>
            <a href="./index.php?controller=Vuelos&action=mostrarInicio">Volver</a>
        </div>

        <?php
    }

    public function mostrarPasajesValidado($arrayPasajes, $mensaje) {
        ?> 


        <div class="container mt-4 transparent-white-bg">
            <div class="alert alert-primary" role="alert">
               <?php echo $mensaje ?>
            </div>

            <table class="table table-bordered">
                <thead class="thead-dark">
                    <tr>
                        <th>ID</th>
                        <th>Codigo pasajero</th>
                        <th>Identificador</th>
                        <th>Número de Asiento</th>
                        <th>Clase</th>
                        <th>PVP</th>
                        <th>Acciones</th>
                    </tr>
                </thead>
                <tbody>
        <?php foreach ($arrayPasajes as $pasaje): ?>
                        <tr>
                            <td><?= $pasaje->getIdpasaje() ?></td>
                            <td><?= $pasaje->getPasajerocod() ?></td>
                            <td><?= $pasaje->getIdentificador() ?></td>
                            <td><?= $pasaje->getNumasiento() ?></td>
                            <td><?= $pasaje->getClase() ?></td>
                            <td><?= $pasaje->getPvp() ?></td>
                            <td>
                                <a class="btn btn-success edit" href="editar_pasaje.php?id=<?= $pasaje->id ?>">Editar</a>
                                <a class="btn btn-danger delete" href="borrar_pasaje.php?id=<?= $pasaje->id ?>">Borrar</a>
                            </td>
                        </tr>
        <?php endforeach; ?>
                </tbody>
            </table>
            <a href="./index.php?controller=Vuelos&action=mostrarInicio">Volver</a>
        </div>

        <?php
    }
}
