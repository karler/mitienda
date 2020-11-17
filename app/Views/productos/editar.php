<h1 class="mt-4"><?=$titulo?></h1>
                        <ol class="breadcrumb mb-4">
                            <li class="breadcrumb-item"><a href="<?=base_url()?>/public">Inicio</a></li>
                            <li class="breadcrumb-item active"><?=$titulo?></li>
                        </ol>
                        <div class="card mb-4">
                            <div class="card-body">

                                <form method="post" action="<?=base_url()?>/public/Productos/actualizar">
                                    <div class="form-group row">
                                        <label for="idproducto" class="col-3 col-form-label">Id Producto</label> 
                                        <div class="col-9">
                                        <div class="input-group">
                                            <div class="input-group-prepend">
                                            <div class="input-group-text">
                                                <i class="fas fa-key"></i>
                                            </div>
                                            </div> 
                                            <input id="idproducto" name="idproducto" type="text" class="form-control" value="<?=$datos['idproducto']?>" readonly>
                                        </div>
                                        </div>
                                    </div>
                                    <!--Código-->
                                    <div class="form-group row">
                                        <label for="codigo" class="col-3 col-form-label">Código</label> 
                                        <div class="col-9">
                                        <div class="input-group">
                                            <div class="input-group-prepend">
                                            <div class="input-group-text">
                                                Cod
                                            </div>
                                            </div> 
                                            <input id="codigo" name="codigo" placeholder="Introdusca el Código" type="text" class="form-control" value="<?=$datos['codigo']?>">
                                        </div>
                                        </div>
                                    </div>
                                    <!--Nombre-->
                                    <div class="form-group row">
                                        <label for="nombre" class="col-3 col-form-label">Nombre del Producto</label> 
                                        <div class="col-9">
                                        <div class="input-group">
                                            <div class="input-group-prepend">
                                            <div class="input-group-text">
                                                Texto
                                            </div>
                                            </div> 
                                            <input id="nombre" name="nombre" type="text" class="form-control" value="<?=$datos['nombre']?>">
                                        </div>
                                        </div>
                                    </div>
                                    <!--Precio de venta-->
                                    <div class="form-group row">
                                        <label for="Precio_venta" class="col-3 col-form-label">Precio de Venta</label> 
                                        <div class="col-9">
                                        <div class="input-group">
                                            <div class="input-group-prepend">
                                            <div class="input-group-text">
                                                S/.
                                            </div>
                                            </div> 
                                            <input id="precio_venta" name="precio_venta" type="text" class="form-control" value="<?=$datos['precio_venta']?>">
                                        </div>
                                        </div>
                                    </div>
                                    <!--Precio de compra-->
                                    <div class="form-group row">
                                        <label for="precio_compra" class="col-3 col-form-label">Precio de Compra</label> 
                                        <div class="col-9">
                                        <div class="input-group">
                                            <div class="input-group-prepend">
                                            <div class="input-group-text">
                                                S/.
                                            </div>
                                            </div> 
                                            <input id="precio_compra" name="precio_compra" type="text" class="form-control" value="<?=$datos['precio_compra']?>">
                                        </div>
                                        </div>
                                    </div>
                                    <!--Existencias-->
                                    <div class="form-group row">
                                        <label for="existencias" class="col-3 col-form-label">Existencias</label> 
                                        <div class="col-9">
                                        <div class="input-group">
                                            <div class="input-group-prepend">
                                            <div class="input-group-text">N°</div>
                                            </div> 
                                            <input id="existencias" name="existencias" placeholder="¿Cuántos tienes?" type="text" class="form-control" value="<?=$datos['existencias']?>">
                                        </div>
                                        </div>
                                    </div>
                                    <!--Stock Mínimo-->
                                    <div class="form-group row">
                                        <label for="stock_minimo" class="col-3 col-form-label">Stock Mínimo</label> 
                                        <div class="col-9">
                                            <div class="input-group">
                                                <div class="input-group-prepend">
                                                <div class="input-group-text">N°</div>
                                                </div> 
                                                <input id="stock_minimo" name="stock_minimo" placeholder="Ingresa el Stock mínimo" type="text" class="form-control" value="<?=$datos['stock_minimo']?>">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                    <label for="inventariable" class="col-3 col-form-label">Inventariable</label> 
                                        <div class="col-9">
                                        <select id="inventariable" name="inventariable" class="custom-select">
                                            <?php
                                                if($datos['inventariable'] == 1){
                                                    echo "<option value='1' selected>Sí</option>";
                                                    echo "<option value='0'>No</option>";
                                                }else{
                                                    echo "<option value='1'>Sí</option>";
                                                    echo "<option value='0' selected>No</option>";
                                                }
                                            ?>
                                        </select>
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label for="idunidad" class="col-3 col-form-label">Unidad</label> 
                                        <div class="col-9">
                                        <select id="idunidad" name="idunidad" class="custom-select">
                                            <option value="">Seleccionar Unidad</option>
                                            <?php
                                                foreach($unidades as $unidad){
                                                    if($unidad['idunidad'] == $datos['idunidad']){
                                                        echo "<option value='".$unidad['idunidad']."' selected>".$unidad['nombre']."</option>";
                                                    }else{
                                                        echo "<option value='".$unidad['idunidad']."'>".$unidad['nombre']."</option>";
                                                    }
                                                }
                                            ?>
                                        </select>
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label for="idcategoria" class="col-3 col-form-label">Categoría</label> 
                                        <div class="col-9">
                                        <select id="idcategoria" name="idcategoria" class="custom-select">
                                        <option value="">Seleccionar Unidad</option>
                                            <?php
                                                foreach($categorias as $categoria){
                                                    if($categoria['idcategoria'] == $datos['idcategoria']){
                                                        echo "<option value='".$categoria['idcategoria']."' selected>".$categoria['nombre']."</option>";
                                                    }else{
                                                        echo "<option value='".$categoria['idcategoria']."'>".$categoria['nombre']."</option>";
                                                    }     
                                                }
                                            ?>
                                        </select>
                                        </div>
                                    </div> 
                                    <div class="form-group row">
                                        <div class="offset-4 col-8">
                                        <button name="submit" type="submit" class="btn btn-primary">Actualiza Producto</button>
                                        </div>
                                    </div>
                                    </form>



                            
                            </div>
                        </div>