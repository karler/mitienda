                        <h1 class="mt-4"><?=$titulo?></h1>
                        <ol class="breadcrumb mb-4">
                            <li class="breadcrumb-item"><a href="<?=base_url()?>/public">Inicio</a></li>
                            <li class="breadcrumb-item active"><?=$titulo?></li>
                        </ol>
                        <div>
                            <p>
                                <a href="<?=base_url()?>/Unidades/nuevo" class="btn btn-primary">Agregar</a>
                                <a href="<?=base_url()?>/Unidades/eliminados" class="btn btn-danger">Ver Eliminados</a>
                            </p>
                        </div>
                        <div class="card mb-4">
                            <div class="card-header">
                                <i class="fas fa-table mr-1"></i>
                                Tabla <?=$titulo?>
                            </div>
                            <div class="card-body">
                                <div class="table-responsive">
                                    <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                                        <thead>
                                            <tr>
                                                <th>Id Unidad</th>
                                                <th>Nombre</th>
                                                <th>Abrev.</th>
                                                <th>Acción</th>
                                                <th>Acción</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <?php
                                                foreach ($datos as $dat){
                                                    echo "<tr>";
                                                    echo "<td>".$dat['idunidad']."</td>";
                                                    echo "<td>".$dat['nombre']."</td>";
                                                    echo "<td>".$dat['nombre_corto']."</td>";
                                                    echo "<td><a href='".base_url()."/Unidades/editar/".$dat['idunidad']."' class='btn btn-success'><i class='fas fa-pencil-alt'></i></a></td>";
                                                    echo "<td><a href='".base_url()."/Unidades/eliminar/".$dat['idunidad']."' class='btn btn-danger'><i class='fas fa-trash-alt'></i></a></td>";
                                                    echo "</tr>";
                                                }
                                            ?>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>