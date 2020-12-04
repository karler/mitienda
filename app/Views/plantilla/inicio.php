<!DOCTYPE html>
<html lang="es">
    <head>
        <meta charset="utf-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title>Mi tienda</title>
        <link href="<?=base_url()?>/public/css/styles.css" rel="stylesheet" />
        <script src="<?=base_url()?>/public/js/all.min.js" crossorigin="anonymous"></script>
    </head>
    <body>
        <nav class="sb-topnav navbar navbar-expand navbar-dark bg-dark">
            <a class="navbar-brand" href="index.html">Mi Tienda</a>
            <button class="btn btn-link btn-sm order-1 order-lg-0" id="sidebarToggle" href="#"><i class="fas fa-bars"></i></button>
            <!-- Navbar Search-->
            <form class="d-none d-md-inline-block form-inline ml-auto mr-0 mr-md-3 my-2 my-md-0">
                <div class="input-group">
                    <!-- 
                    <input class="form-control" type="text" placeholder="Search for..." aria-label="Search" aria-describedby="basic-addon2" />
                    <div class="input-group-append">
                        <button class="btn btn-primary" type="button"><i class="fas fa-search"></i></button>
                    </div>
                    -->
                </div>
            </form>
            <!-- Navbar login-->
            <ul class="navbar-nav ml-auto ml-md-0">
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" id="userDropdown" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i class="fas fa-user fa-fw"></i></a>
                    <div class="dropdown-menu dropdown-menu-right" aria-labelledby="userDropdown">
                        <a class="dropdown-item" href="#">Settings</a>
                        <a class="dropdown-item" href="#">Activity Log</a>
                        <div class="dropdown-divider"></div>
                        <a class="dropdown-item" href="login.html">Logout</a>
                    </div>
                </li>
            </ul>
        </nav>
        <div id="layoutSidenav">
            <!-- Barra lateral de Menu -->
            <div id="layoutSidenav_nav">
                <nav class="sb-sidenav accordion sb-sidenav-dark" id="sidenavAccordion">
                    <div class="sb-sidenav-menu">
                        <div class="nav">
                            <!-- Menu Productos -->
                            <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#menuproductos" aria-expanded="false" aria-controls="menuproductos">
                                <div class="sb-nav-link-icon"><i class="fas fa-columns"></i></div>
                                Productos
                                <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
                            </a>
                            <div class="collapse" id="menuproductos" aria-labelledby="headingOne" data-parent="#sidenavAccordion">
                                <nav class="sb-sidenav-menu-nested nav">
                                    <a class="nav-link" href="<?=base_url()?>/public/Productos">Productos</a>
                                    <a class="nav-link" href="<?=base_url()?>/public/Categorias">Categorias</a>
                                    <a class="nav-link" href="<?=base_url()?>/public/Unidades">Unidades</a>
                                </nav>
                            </div>
                            <!-- Clientes-->
                            <a class="nav-link" href="<?=base_url()?>/public/Clientes">
                                <div class="sb-nav-link-icon"><i class="fas fa-users"></i></div>
                                Clientes
                            </a>
                            <!-- Menu Administración -->
                            <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#menuadministracion" aria-expanded="false" aria-controls="menuadministracion">
                                <div class="sb-nav-link-icon"><i class="fas fa-tools"></i></div>
                                Administración
                                <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
                            </a>
                            <div class="collapse" id="menuadministracion" aria-labelledby="headingOne" data-parent="#sidenavAccordion">
                                <nav class="sb-sidenav-menu-nested nav">
                                    <a class="nav-link" href="<?=base_url()?>/public/Configuraciones">Configuración</a>
                                    <a class="nav-link" href="<?=base_url()?>/public/Cajas">Cajas</a>
                                    <a class="nav-link" href="<?=base_url()?>/public/Roles">Roles</a>
                                    <a class="nav-link" href="<?=base_url()?>/public/Usuarios">Usuarios</a>
                                </nav>
                            </div>
                        </div>
                    </div>
                    <div class="sb-sidenav-footer">
                        <div class="small">Logged in as:</div>
                        Start Bootstrap
                    </div>
                </nav>
            </div>

            <!-- Contenido -->
            <div id="layoutSidenav_content">
                <main>
                    <div class="container-fluid">