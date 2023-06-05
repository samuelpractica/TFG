<!DOCTYPE html>
<html>
<head>
    <title>Panel de Administración</title>
    <!-- CSS de AdminLTE desde CDN -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/admin-lte/3.1.0/css/adminlte.min.css">
    <!-- JS de AdminLTE desde CDN -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/admin-lte/3.1.0/js/adminlte.min.js"></script>
    
</head>
<body class="hold-transition sidebar-mini">
<div class="wrapper">
    <!-- Barra de Navegación -->
    <nav class="main-header navbar navbar-expand navbar-white navbar-light">
        <!-- Enlaces de la Barra de Navegación -->
    </nav>

    <!-- Barra Lateral -->
    <aside class="main-sidebar sidebar-dark-primary elevation-4">
        <!-- Logo -->
        <a href="index3.html" class="brand-link">
            <img src="{{ asset('img/AdminLTELogo.png') }}" alt="Logo" class="brand-image img-circle elevation-3" style="opacity: .8">
            <span class="brand-text font-weight-light">AdminLTE 3</span>
        </a>

        <!-- Menú de la Barra Lateral -->
        <div class="sidebar">
            <!-- Menú de Usuario -->
            <div class="user-panel mt-3 pb-3 mb-3 d-flex">
                <div class="image">
                    <img src="{{ asset('img/user2-160x160.jpg') }}" class="img-circle elevation-2" alt="User Image">
                </div>
                <div class="info">
                    <a href="#" class="d-block">Nombre del Usuario</a>
                </div>
            </div>

            <!-- Menú de Navegación de la Barra Lateral -->
            <nav class="mt-2">
                <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
                    <!-- Elementos del Menú -->
                    <li class="nav-item">
                        <a href="#" class="nav-link">
                            <i class="nav-icon fas fa-tachometer-alt"></i>
                            <p>
                                Dashboard
                            </p>
                        </a>
                    </li>
                    <!-- Más Elementos del Menú -->
                </ul>
            </nav>
        </div>
    </aside>

    <!-- Contenido -->
    <div class="content-wrapper">
        @yield('content')
    </div>

    <!-- Pie de Página -->
    <footer class="main-footer">
        <!-- Aquí puedes incluir el pie de página de tu panel de administración -->
    </footer>
</div>
</body>
</html>
