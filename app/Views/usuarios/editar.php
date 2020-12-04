<h1 class="mt-4"><?=$titulo?></h1>
                        <ol class="breadcrumb mb-4">
                            <li class="breadcrumb-item"><a href="<?=base_url()?>/public">Inicio</a></li>
                            <li class="breadcrumb-item active"><?=$titulo?></li>
                        </ol>
                        <div>
                            <p>
                            <a href="<?=base_url()?>/public/Usuarios" class='btn btn-primary'>Regresar</a>
                            </p>
                        </div>
                        <div class="card mb-4">
                            <div class="card-header">
                                <i class="fas fa-table mr-1"></i>
                                <?=$titulo?>
                            </div>
                            <div class="card-body">
                                <form method="post" action="<?=base_url()?>/public/Usuarios/actualizar">
                                <!-- idusuario-->
                                <div class="form-group row">
                                    <label for="text" class="col-3 col-form-label">Id Usuario</label> 
                                    <div class="col-9">
                                    <div class="input-group">
                                        <div class="input-group-prepend">
                                        <div class="input-group-text">
                                            <i class="fa fa-key"></i>
                                        </div>
                                        </div> 
                                        <input id="text" name="idusuario" type="text" class="form-control" value="<?=$datos['idusuario']?>" readonly>
                                    </div>
                                    </div>
                                </div>
                                <!-- nombre -->
                                <div class="form-group row">
                                    <label for="nombre" class="col-3 col-form-label">Nombre Completo</label> 
                                    <div class="col-9">
                                    <div class="input-group">
                                        <div class="input-group-prepend">
                                        <div class="input-group-text"></div>
                                        </div> 
                                        <input id="nombre" name="nombre" placeholder="Ingresa el nombre" type="text" class="form-control" value="<?=$datos['nombre']?>">
                                    </div>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="usuario" class="col-3 col-form-label">Usuario</label> 
                                    <div class="col-9">
                                    <div class="input-group">
                                        <div class="input-group-prepend">
                                        <div class="input-group-text"></div>
                                        </div> 
                                        <input id="usuario" name="usuario" placeholder="Ingresa el usuario" type="text" class="form-control" value="<?=$datos['usuario']?>">
                                    </div>
                                    </div>
                                </div>
                                
                                <div class="form-group row">
                                    <label for="password" class="col-3 col-form-label">Contraseña</label> 
                                    <div class="col-9">
                                    <div class="input-group">
                                        <div class="input-group-prepend">
                                        <div class="input-group-text"></div>
                                        </div> 
                                        <input id="password" name="password" placeholder="Ingresa la abreviación" type="password" class="form-control" value="<?=$datos['password']?>">
                                    </div>
                                    </div>
                                </div>
                                <!--idrol - Selecciona idrol desde otra tabla-->         
                                <div class="form-group row">
                                    <label for="idrol" class="col-3 col-form-label">Rol</label> 
                                    <div class="col-9">
                                    <select id="idrol" name="idrol" required="required" class="custom-select">
                                        <option value="">Seleccionar Rol</option>
                                        <?php
                                            foreach($roles as $rol){
                                                if($datos['idrol'] == $rol['idrol']){
                                                    echo "<option value='".$rol['idrol']."' selected>".$rol['nombre']."</option>";
                                                }else{
                                                    echo "<option value='".$rol['idrol']."'>".$rol['nombre']."</option>";
                                                }
                                                
                                            }
                                        ?>
                                    </select>
                                    </div>
                                </div> 
                                <!--idcaja - Selecciona idcaja desde otra tabla-->         
                                <div class="form-group row">
                                    <label for="idcaja" class="col-3 col-form-label">Caja</label> 
                                    <div class="col-9">
                                    <select id="idcaja" name="idcaja" required="required" class="custom-select">
                                        <option value="">Seleccionar Caja</option>
                                        <?php
                                            foreach($cajas as $caja){
                                                if($datos['idcaja'] == $caja['idcaja']){
                                                    echo "<option value='".$caja['idcaja']."' selected>".$caja['nombre_caja']."</option>";
                                                }else{
                                                    echo "<option value='".$caja['idcaja']."'>".$caja['nombre_caja']."</option>";
                                                }
                                            }
                                        ?>
                                    </select>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <div class="offset-3 col-9">
                                    <button name="submit" type="submit" class="btn btn-primary">Enviar Usuario</button>
                                    </div>
                                </div>
                                </form>
                            </div>
                        </div>