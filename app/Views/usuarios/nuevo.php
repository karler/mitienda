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

                                <form method="post" action="<?=base_url()?>/public/Usuarios/insertar">
                               
                                <!--Nombre-->
                                <div class="form-group row">
                                    <label for="nombre" class="col-3 col-form-label">Nombre</label> 
                                    <div class="col-9">
                                    <div class="input-group">
                                        <div class="input-group-prepend">
                                        <div class="input-group-text">Texto</div>
                                        </div> 
                                        <input id="nombre" name="nombre" placeholder="Ingresa el nombre" type="text" class="form-control" value ="<?=set_value('nombre')?>">
                                    </div>
                                    </div>
                                </div>
                                <!--Usuario-->
                                <div class="form-group row">
                                    <label for="usuario" class="col-3 col-form-label">Usuario</label> 
                                    <div class="col-9">
                                    <div class="input-group">
                                        <div class="input-group-prepend">
                                        <div class="input-group-text">Texto</div>
                                        </div> 
                                        <input id="usuario" name="usuario" placeholder="Ingresa el Usuario" type="text" class="form-control"  value ="<?=set_value('usuario')?>">
                                    </div>
                                    </div>
                                </div>
                                <!--Contraseña-->
                                <div class="form-group row">
                                    <label for="password" class="col-3 col-form-label">Contraseña</label> 
                                    <div class="col-9">
                                    <div class="input-group">
                                        <div class="input-group-prepend">
                                        <div class="input-group-text">*</div>
                                        </div> 
                                        <input id="password" name="password" placeholder="Ingresa la contraseña" type="password" class="form-control"  value ="<?=set_value('password')?>">
                                    </div>
                                    </div>
                                </div>
                                
                                <!--idrol - Selecciona Unidad desde otra tabla-->         
                                <div class="form-group row">
                                    <label for="idrol" class="col-3 col-form-label">Rol</label> 
                                    <div class="col-9">
                                    <select id="idrol" name="idrol" required="required" class="custom-select">
                                        <option value="">Seleccionar Rol</option>
                                        <?php
                                            foreach($roles as $rol){
                                                echo "<option value='".$rol['idrol']."'>".$rol['nombre']."</option>";
                                            }
                                        ?>
                                    </select>
                                    </div>
                                </div> 
                                <!--idcaja - Selecciona Unidad desde otra tabla-->         
                                <div class="form-group row">
                                    <label for="idcaja" class="col-3 col-form-label">Caja</label> 
                                    <div class="col-9">
                                    <select id="idcaja" name="idcaja" required="required" class="custom-select">
                                        <option value="">Seleccionar Caja</option>
                                        <?php
                                            foreach($cajas as $caja){
                                                echo "<option value='".$caja['idcaja']."'>".$caja['nombre_caja']."</option>";
                                            }
                                        ?>
                                    </select>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <div class="offset-3 col-9">
                                    <button name="submit" type="submit" class="btn btn-primary">Crear Usuario</button>
                                    </div>
                                </div>
                                </form>
                            </div>
                        </div>