                        <h1 class="mt-4"><?=$titulo?></h1>
                        <ol class="breadcrumb mb-4">
                            <li class="breadcrumb-item"><a href="<?=base_url()?>/public">Inicio</a></li>
                            <li class="breadcrumb-item active"><?=$titulo?></li>
                        </ol>
                        <div class="card mb-4">
                            <div class="card-body">

                                <form method="post" action="<?=base_url()?>/public/Unidades/insertar">
                                <div class="form-group row">
                                    <label for="nombre" class="col-4 col-form-label">Nombre</label> 
                                    <div class="col-8">
                                    <input id="nombre" name="nombre" placeholder="Ingrese la Unidad" type="text" class="form-control">
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="nombre_corto" class="col-4 col-form-label">Nombre Corto</label> 
                                    <div class="col-8">
                                    <input id="nombre_corto" name="nombre_corto" placeholder="Ingrese la abreviación de la unidad" type="text" class="form-control">
                                    </div>
                                </div> 
                                <div class="form-group row">
                                    <div class="offset-4 col-8">
                                    <button name="submit" type="submit" class="btn btn-primary">Crear Unidad</button>
                                    </div>
                                </div>
                                </form>



                            
                            </div>
                        </div>