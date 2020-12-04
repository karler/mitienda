                        <h1 class="mt-4"><?=$titulo?></h1>
                        <ol class="breadcrumb mb-4">
                            <li class="breadcrumb-item"><a href="<?=base_url()?>/public">Inicio</a></li>
                            <li class="breadcrumb-item active"><?=$titulo?></li>
                        </ol>
                        <div>
                            <p>
                                <a href="<?=base_url()?>/public/Usuarios" class="btn btn-success">Ver Usuarios</a>
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
                                                <th width="10%" class='text-center'>Id Usuario</th>
                                                <th width="20%" class='text-center'>Usuario</th>
                                                <th width="40%" class='text-center'>Nombre</th>
                                                <th width="11%" class='text-center'>Rol</th>
                                                <th width="11%" class='text-center'>Caja</th>
                                                <th width="8%" class='text-center'>Restaurar</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <?php
                                                foreach ($datos as $dat){
                                                    echo "<tr>";
                                                    echo "<td class='text-center'>".$dat['idusuario']."</td>";
                                                    echo "<td>".$dat['usuario']."</td>";
                                                    echo "<td>".$dat['nombre']."</td>";
                                                    foreach($roles as $rol){
                                                        if($dat['idrol'] == $rol['idrol']){
                                                            echo "<td>".$rol['nombre']."</td>";
                                                        }
                                                    }
                                                    foreach($cajas as $caja){
                                                        if($dat['idcaja'] == $caja['idcaja']){
                                                            echo "<td>".$caja['nombre_caja']."</td>";
                                                        }
                                                    }
                                                    echo "<td class='text-center'><a href='".base_url()."/public/Usuarios/restaurar/".$dat['idusuario']."' class='btn btn-primary'><i class='fas fa-undo-alt'></i></a></td>";
                                                    echo "</tr>";
                                                }
                                            ?>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>