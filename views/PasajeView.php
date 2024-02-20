<?php

class PasajeView {

    public function mostrarPasajes($arrayPasajes) {
        ?> 


        <div class="container mt-4 transparent-white-bg">
             <a href="./index.php?controller=Vuelos&action=mostrarInicio">Volver</a>
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
                                <a class="btn btn-success " href="./index.php?controller=Pasaje&action=FormEdicion&id=<?php echo $pasaje->getIdpasaje() ?>">Editar</a>
                                <!-- Button trigger modal -->
                                <button type="button" class="btn btn-danger" data-bs-toggle="modal" data-bs-target="#exampleModal_<?php echo $pasaje->getIdpasaje() ?>">
                                    Borrar
                                </button>

                                <!-- Modal -->
                                <div class="modal fade" id="exampleModal_<?php echo $pasaje->getIdpasaje() ?>" tabindex="-1" aria-labelledby="exampleModalLabel_<?php echo $pasaje->getIdpasaje() ?>" aria-hidden="true">
                                    <div class="modal-dialog">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <h1 class="modal-title fs-5" id="exampleModalLabel_<?php echo $pasaje->getIdpasaje() ?>">Eliminar Pasaje</h1>
                                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                            </div>
                                            <div class="modal-body">
                                                ¿Estas seguro de eliminar el pasaje: <?php echo $pasaje->getIdpasaje(); ?> ?
                                            </div>
                                            <div class="modal-footer">
                                                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cerrar</button>
                                                <form id="deleteForm_<?php echo $pasaje->getIdpasaje() ?>" method="post" action="./index.php?controller=Pasaje&action=delete">
                                                    <input type="hidden" name="pasajeId" value="<?php echo $pasaje->getIdpasaje(); ?>">
                                                    <button type="submit" class="btn btn-danger">Borrar</button>
                                                </form>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                            </td>
                        </tr>
                    <?php endforeach; ?>
                </tbody>
            </table>
           
        </div>

        <?php
    }

    public function mostrarPasajesValidado($arrayPasajes, $mensaje) {
        ?> 


        <div class="container mt-4 transparent-white-bg">
            <div class="alert alert-primary" role="alert">
                <?php echo $mensaje ?>
            </div>
             <a href="./index.php?controller=Vuelos&action=mostrarInicio">Volver</a>

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
                                <a class="btn btn-success " href="./index.php?controller=Pasaje&action=FormEdicion&id=<?php echo $pasaje->getIdpasaje() ?>">Editar</a>
                                <button type="button" class="btn btn-danger" data-bs-toggle="modal" data-bs-target="#exampleModal_<?php echo $pasaje->getIdpasaje() ?>">
                                    Borrar
                                </button>

                                <!-- Modal -->
                                <div class="modal fade" id="exampleModal_<?php echo $pasaje->getIdpasaje() ?>" tabindex="-1" aria-labelledby="exampleModalLabel_<?php echo $pasaje->getIdpasaje() ?>" aria-hidden="true">
                                    <div class="modal-dialog">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <h1 class="modal-title fs-5" id="exampleModalLabel_<?php echo $pasaje->getIdpasaje() ?>">Eliminar Pasaje</h1>
                                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                            </div>
                                            <div class="modal-body">
                                                ¿Estas seguro de eliminar el pasaje: <?php echo $pasaje->getIdpasaje(); ?> ?
                                            </div>
                                            <div class="modal-footer">
                                                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cerrar</button>
                                                 <form id="deleteForm_<?php echo $pasaje->getIdpasaje() ?>" method="post" action="./index.php?controller=Pasaje&action=delete">
                                                    <input type="hidden" name="pasajeId" value="<?php echo $pasaje->getIdpasaje(); ?>">
                                                    <button type="submit" class="btn btn-danger">Borrar</button>
                                                </form>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </td>
                        </tr>
                    <?php endforeach; ?>
                </tbody>
            </table>
           
        </div>

        <?php
    }

    public function formulariodeupdate($id) {
        ?>
        <div class="container mt-4 transparent-white-bg">
            <h2>Formulario de Actualización de Pasaje: <?php echo $id ?></h2>
            <form action="./index.php?controller=Pasaje&action=update&id=<?php echo $id ?>" method="POST">
                <input type="hidden" name="idPasaje" value="<?php echo $id ?>">

                <div class="form-group">
                    <label for="pasajerocod">Código de Pasajero:</label>
                    <input type="text" class="form-control" id="pasajerocod" name="pasajerocod" required>
                </div>

                <div class="form-group">
                    <label for="identificador">Identificador:</label>
                    <input type="text" class="form-control" id="identificador" name="identificador" required>
                </div>

                <div class="form-group">
                    <label for="numasiento">Número de Asiento:</label>
                    <input type="text" class="form-control" id="numasiento" name="numasiento" required>
                </div>

                <div class="form-group">
                    <label for="clase">Clase:</label>
                    <input type="text" class="form-control" id="clase" name="clase" required>
                </div>

                <div class="form-group">
                    <label for="pvp">PVP:</label>
                    <input type="text" class="form-control" id="pvp" name="pvp" required>
                </div>

                <div class="d-flex justify-content-between mt-3">
                    <button type="submit" class="btn btn-primary">Actualizar Pasaje</button>
                    <a href="./index.php?controller=Pasaje&action=mostrarPasajes" class="btn btn-secondary">Volver a la Lista de Pasajes</a>
                </div>
            </form>
        </div>


        <?php
    }
}
