<!doctype html>
<html lang="en" data-bs-theme="auto">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <meta name="description" content="AROSYSTEMS.DEV CRUD ARTICULOS" />
    <link rel="icon" href="{{ asset('logo.ico')}}">
    <!-- ESTILOS CSS -->
    <link href="{{ asset('css/bootstrap.min.css') }}" rel="stylesheet" />
    <link href="{{ asset('css/dashboard.css') }}" rel="stylesheet" />
    <link href="{{ asset('css/style.css') }}" rel="stylesheet" />
    <!-- TITULO -->
    <title>aro_crud-artículos</title>
</head>

<body>
    <header class="navbar sticky-top flex-md-nowrap p-0 shadow cabecera" data-bs-theme="dark">
        <a class="navbar-brand col-md-3 col-lg-2 me-0 px-3 fs-6 text-white" href="#">
            CRUD Articulos
        </a>

        <ul class="navbar-nav flex-row d-md-none">
            <li class="nav-item text-nowrap">
                <button class="nav-link px-3 text-white menu-boton" type="button" data-bs-toggle="offcanvas"
                    data-bs-target="#sidebarMenu" aria-controls="sidebarMenu" aria-expanded="false"
                    aria-label="Toggle navigation">
                    &#9776;
                </button>
            </li>
        </ul>
    </header>
    <div class="container-fluid">
        <div class="row">

            <!-- MENU DE OPCIONES -->
            <div class="sidebar border border-right col-md-3 col-lg-2 p-0 bg-body-tertiary">
                <div class="offcanvas-md offcanvas-end bg-body-tertiary" tabindex="-1" id="sidebarMenu"
                    aria-labelledby="sidebarMenuLabel">
                    <div class="offcanvas-header">
                        <h5 class="offcanvas-title" id="sidebarMenuLabel">
                            CRUD Articulos
                        </h5>
                        <button type="button" class="btn-close" data-bs-dismiss="offcanvas"
                            data-bs-target="#sidebarMenu" aria-label="Close"> </button>
                    </div>
                    <div class="offcanvas-body d-md-flex flex-column p-0 pt-lg-3 overflow-y-auto">
                        <ul class="nav flex-column">
                            <li class="nav-item">
                                <a class="nav-link d-flex align-items-center gap-2 active opciones" aria-current="page"
                                    href="/">
                                    &#127968; Inicio
                                </a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link d-flex align-items-center gap-2 opciones" href="/articulo/index">
                                    &#128193; Articulos
                                </a>
                            </li>
                            <li>
                                <div class="contenedor-img-logo">
                                    <img src="{{ asset('img/logo.png') }}" alt="" class="img-fluid img-logo">
                                    <small><i>Developed by <br> Marco Aro</i></small>
                                </div>

                            </li>
                        </ul>
                    </div>
                </div>
            </div>

            <!-- CONTENIDO -->
            <main class="col-md-9 ms-sm-auto col-lg-10 px-md-4">
                <div class="card shadow-lg p-3" style="min-height: 85vh; margin-top:20px">
                    @yield('contenido')
                </div>
                <div class="footer">
                    <small><i>AroSystems.dev &copy; 2026</i></small>
                </div>
            </main>
        </div>
    </div>
    <script src="{{ asset('js/bootstrap.bundle.min.js') }}"></script>
    <script src="{{ asset('js/dashboard.js') }}"></script>
</body>

</html>