                        <h1 class="mt-4"><?=$titulo?></h1>
                        <ol class="breadcrumb mb-4">
                            <li class="breadcrumb-item"><a href="<?=base_url()?>/public">Inicio</a></li>
                            <li class="breadcrumb-item active"><?=$titulo?></li>
                        </ol>
                        <div class="card mb-4">
                            <div class="card-body">

                                <form method="post" action="<?=base_url()?>/public/Clientes/insertar">
                                <div class="form-group row">
                                    <label for="nombre" class="col-3 col-form-label">Nombre Completo</label> 
                                    <div class="col-9">
                                    <div class="input-group">
                                        <div class="input-group-prepend">
                                        <div class="input-group-text">
                                            <i class="fa fa-address-card"></i>
                                        </div>
                                        </div> 
                                        <input id="nombre" name="nombre" type="text" class="form-control">
                                    </div>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="direccion" class="col-3 col-form-label">Dirección</label> 
                                    <div class="col-9">
                                    <div class="input-group">
                                        <div class="input-group-prepend">
                                        <div class="input-group-text">
                                            <i class="fa fa-map-marker"></i>
                                        </div>
                                        </div> 
                                        <input id="direccion" name="direccion" type="text" class="form-control">
                                    </div>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="telefono" class="col-3 col-form-label">Teléfono</label> 
                                    <div class="col-9">
                                    <div class="input-group">
                                        <div class="input-group-prepend">
                                        <div class="input-group-text">
                                            <i class="fa fa-phone"></i>
                                        </div>
                                        </div> 
                                        <input id="telefono" name="telefono" type="text" class="form-control">
                                    </div>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="email" class="col-3 col-form-label">Correo electrónico</label> 
                                    <div class="col-9">
                                    <div class="input-group">
                                        <div class="input-group-prepend">
                                        <div class="input-group-text">
                                            <i class="fa fa-envelope"></i>
                                        </div>
                                        </div> 
                                        <input id="email" name="email" type="text" class="form-control">
                                    </div>
                                    </div>
                                </div> 
                                <div class="form-group row">
                                    <div class="offset-4 col-8">
                                    <button name="submit" type="submit" class="btn btn-primary">Crear Cliente</button>
                                    </div>
                                </div>
                                </form>



                            
                            </div>
                        </div>