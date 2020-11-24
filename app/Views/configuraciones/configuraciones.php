                        <h1 class="mt-4"><?=$titulo?></h1>
                        <ol class="breadcrumb mb-4">
                            <li class="breadcrumb-item"><a href="<?=base_url()?>/public">Inicio</a></li>
                            <li class="breadcrumb-item active"><?=$titulo?></li>
                        </ol>
                        <div class="card mb-4">
                            <div class="card-body">
                                <div class='table-responsive'>
                                    <table class="table table-bordered table-striped table-sm">
                                        <thead>
                                            <tr>
                                            <th class='text-center'>Id Configuración</th>
                                            <th>Nombre</th>
                                            <th>Valor</th>
                                            <th class='text-center'>Editar</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <?php
                                                foreach ($datos as $dat){
                                                    echo "<tr>";
                                                    echo "<td class='text-center'>".$dat['idconfiguracion']."</td>";
                                                    echo "<td>".$dat['nombre']."</td>";
                                                    echo "<td>".$dat['valor']."</td>";
                                                    echo "<td class='text-center'><a href='".base_url()."/public/Configuraciones/editar/".$dat['idconfiguracion']."' class='btn btn-success'><i class='fas fa-edit'></i></a></td>";
                                                    echo "</tr>";
                                                }
                                            ?>  
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>