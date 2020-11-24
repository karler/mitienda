                        <h1 class="mt-4"><?=$titulo?></h1>
                        <ol class="breadcrumb mb-4">
                            <li class="breadcrumb-item"><a href="<?=base_url()?>/public">Inicio</a></li>
                            <li class="breadcrumb-item active"><?=$titulo?></li>
                        </ol>
                        <div class="card mb-4">
                            <div class="card-body">

                                <form method="post" action="<?=base_url()?>/public/Configuraciones/actualizar">
                                <div class="form-group row">
                                    <label for="idconfiguracion" class="col-4 col-form-label">Id Configuración</label> 
                                    <div class="col-8">
                                    <input id="idconfiguracion" name="idconfiguracion" type="text" class="form-control" value="<?=$datos['idconfiguracion']?>" readonly>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="nombre" class="col-4 col-form-label">Nombre</label> 
                                    <div class="col-8">
                                    <input id="nombre" name="nombre" placeholder="Ingrese la Configuración" type="text" class="form-control" value="<?=$datos['nombre']?>" readonly>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="valor" class="col-4 col-form-label">Valor</label> 
                                    <div class="col-8">
                                    <input id="valor" name="valor" placeholder="Ingrese la abreviación de la unidad" type="text" class="form-control" value="<?=$datos['valor']?>">
                                    </div>
                                </div> 
                                <div class="form-group row">
                                    <div class="offset-4 col-8">
                                    <button name="submit" type="submit" class="btn btn-primary">Actualizar Configuración</button>
                                    </div>
                                </div>
                                </form>



                            
                            </div>
                        </div>