                        <h1 class="mt-4"><?=$titulo?></h1>
                        <ol class="breadcrumb mb-4">
                            <li class="breadcrumb-item"><a href="<?=base_url()?>/public">Inicio</a></li>
                            <li class="breadcrumb-item active"><?=$titulo?></li>
                        </ol>
                        <div>
                            <p>
                            <a href='<?=base_url()?>/public/Unidades/nuevo' class='btn btn-primary'>Agregar</a>
                            <a href='<?=base_url()?>/public/Unidades/vereliminados' class='btn btn-danger'>Ver Eliminados</a>
                            </p>
                        </div>
                        <div class="card mb-4">
                            <div class="card-body">
                                <div class='table-responsive'>
                                    <table class="table table-bordered table-striped table-sm">
                                        <thead>
                                            <tr>
                                            <th class='text-center'>Id Unidad</th>
                                            <th>Nombre</th>
                                            <th>Nombre corto</th>
                                            <th class='text-center'>Editar</th>
                                            <th class='text-center'>Eliminar</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <?php
                                                foreach ($datos as $dat){
                                                    echo "<tr>";
                                                    echo "<td class='text-center'>".$dat['idunidad']."</td>";
                                                    echo "<td>".$dat['nombre']."</td>";
                                                    echo "<td>".$dat['nombre_corto']."</td>";
                                                    echo "<td class='text-center'><a href='".base_url()."/public/Unidades/editar/".$dat['idunidad']."' class='btn btn-success'><i class='fas fa-edit'></i></a></td>";
                                                    echo "<td class='text-center'><a href='".base_url()."/public/Unidades/eliminar/".$dat['idunidad']."' class='btn btn-danger'><i class='fas fa-trash-alt'></i></a></td>";
                                                    echo "</tr>";
                                                }
                                            ?>  
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>