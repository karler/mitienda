<h1 class="mt-4"><?=$titulo?></h1>
                        <ol class="breadcrumb mb-4">
                            <li class="breadcrumb-item"><a href="<?=base_url()?>/public">Inicio</a></li>
                            <li class="breadcrumb-item active"><?=$titulo?></li>
                        </ol>
                        <div class="card mb-4">
                            <div class="card-body">




                            <?php
                                foreach ($datos as $dat){
                                    echo $dat['idunidad']."<br>";
                                    echo $dat['nombre']."<br>";
                                    echo $dat['nombre_corto']."<br>";
                                    echo "-----------------------<br>";
                                }
                            ?>  





                            </div>
                        </div>