<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="csrf-token" content="{{ csrf_token() }}">
  <title>NARANJO PLASTIC | CPTV</title>
  <!-- Tell the browser to be responsive to screen width -->

  <link rel="icon" type="image/png" href="faicon.png" />
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="plugins/font-awesome/css/font-awesome.min.css">
  <!-- Ionicons -->
  <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="dist/css/adminlte.min.css">
  <!-- iCheck -->
  <link rel="stylesheet" href="plugins/iCheck/flat/blue.css">
  <!-- Morris chart -->
  <!-- jvectormap -->
  <link rel="stylesheet" href="plugins/jvectormap/jquery-jvectormap-1.2.2.css">
  <!-- Date Picker -->
  <link rel="stylesheet" href="plugins/datepicker/datepicker3.css">
  <!-- Daterange picker -->
  <link rel="stylesheet" href="plugins/daterangepicker/daterangepicker-bs3.css">
  <!-- bootstrap wysihtml5 - text editor -->
  <link rel="stylesheet" href="plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.min.css">
  <link rel="stylesheet" href="sweetalert2/dist/sweetalert2.min.css">
  <link rel="stylesheet" href="https://cdn.datatables.net/1.10.19/css/dataTables.bootstrap4.min.css">

  <link href="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.6-rc.0/css/select2.min.css" rel="stylesheet" />
  <link href="estilo.css" rel="stylesheet" type="text/css">

@yield('css')
  <!-- Google Font: Source Sans Pro -->
  <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700" rel="stylesheet">

</head>
<body class="hold-transition sidebar-mini">
<div class="wrapper ">

  <!-- Navbar -->
  <nav class="main-header navbar navbar-expand bg-white  navbar-light border-bottom">
    <!-- Left navbar links -->
    <ul class="navbar-nav">
      <li class="nav-item">
        <a class="nav-link" data-widget="pushmenu" href="#"><i class="fa fa-bars"></i></a>
      </li>
    </ul>
    <!-- Right navbar links -->
    <ul class="navbar-nav ml-auto">

      <li class="nav-item dropdown">
          <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
            @if(isset(Auth::user()->name))  {{ Auth::user()->name }} {{ Auth::user()->apePat }} {{ Auth::user()->apeMat }}@endif<span class="caret"></span>
          </a>

          <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">

              <a class="dropdown-item" href="{{ route('logout') }}"
                 onclick="event.preventDefault();
                               document.getElementById('logout-form').submit();">
                  <i class="fa fa-sign-out  nav-icon"></i>  Salir
              </a>

              <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                  @csrf
              </form>
          </div>
      </li>
    </ul>
  </nav>
  <!-- /.navbar -->

  <!-- Main Sidebar Container -->
  <aside class="main-sidebar sidebar-light-info elevation-4" >
    <!-- Brand Logo -->
    <a href="home" class="brand-link">
       
      <center><span class="brand-text font-weight-light"><img src="dist/img/logo_jeune.png" alt="AdminLTE Logo" style="	width:200px; height:80px;"></span></center>
    </a>

    <!-- Sidebar -->
    <div class="sidebar ">

      <!-- Sidebar Menu -->
      <nav class="mt-2" >

      <ul  id="accordion"    role="menu" class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false" >
          <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
          @if(Auth::user()->usuarioPermiso || Auth::user()->Membresias || Auth::user()->tipoCambio)
          <li class="nav-item ">
            <a href="#" class="nav-link " id="MenuAdmin">
              <i class="nav-icon fa fa-address-book"></i>
              <p>
                Administrador
                <i class="right fa fa-angle-left"></i>
              </p>
            </a>
            <ul class="nav nav-treeview"  >

            @if(Auth::user()->usuarioPermiso )
              <li class="nav-item">
                <a href="user" class="nav-link" id="MenuAdminUser">
                <i class="right fa fa-circle "></i>
                  <p>&nbsp Usuarios</p>
                </a>
              </li>
              @endif
              @if(Auth::user()->membresias )
              <li class="nav-item">
                <a href="membresia" class="nav-link" id="MenuMembresia">
                <i class="right fa fa-circle "></i>
                  <p>&nbsp Membresias</p>
                </a>
              </li>
              @endif
              @if(Auth::user()->tipoCambio)
              <li class="nav-item">
                <a href="tipoCambio" id="tipoCambio0" class="nav-link">
                <i class="right fa fa-circle "></i>
                  <p>&nbsp Tipo de cambio</p>
                </a>
              </li>
              @endif
            </ul>
          </li>

            @endif
          @if(Auth::user()->altaCliente)
          <li class="nav-item">
            <a href="cliente" class="nav-link" id="MenuCliente">
              <i class="fa fa-users nav-icon"></i>
              <p>Clientes</p>
            </a>
          </li>
          @endif

@if(Auth::user()->agendaAdmin)
	  <li class="nav-item">
            <a href="calendario" id="MenuAgenda" class="nav-link">
              <i class="fa fa-address-book-o nav-icon"></i>
              <p>Agenda</p>
            </a>
          </li>   
          @endif        
          <li class="nav-item">
              <a href="inicioCaja" id="MenuInicioCaja" class="nav-link">
              <i class="nav-icon fa fa-money "></i>
                <p>&nbsp Inicio de caja</p>
              </a>
            </li>
          @if(Auth::user()->venderServ || Auth::user()->abonosServ || Auth::user()->altaServ || Auth::user()->usoMembresia)
        <li class="nav-item  ">
          <a href="#"  id="MenuServicio" class="nav-link">
            <i class="nav-icon fa fa-ticket"></i>
            <p>
              Servicios
              <i class="right fa fa-angle-left"></i>
            </p>
          </a>

          <ul class="nav nav-treeview">
            @if(Auth::user()->venderServ)
            <li class="nav-item">
              <a href="ventaServicio"  id="MenuServicosVenta" class="nav-link">
              <i class="right fa fa-circle "></i>
                <p>&nbsp Vender Servicios</p>
              </a>
            </li>
            @endif
            @if(Auth::user()->usoMembresia)
            <li class="nav-item">
              <a href="usoMembresia" id="credencialMembresia" class="nav-link">
              <i class="right fa fa-circle "></i>
                <p>&nbsp Impresion de Membresia</p>
              </a>
            </li>
            @endif
            @if(Auth::user()->abonosServ)
            <li class="nav-item">
              <a href="abonoVentas2" id="MenuServicosAbono" class="nav-link">
              <i class="right fa fa-circle "></i>
                <p>&nbsp Abonos</p>
              </a>
            </li>
            @endif
            @if(Auth::user()->altaServ)
            <li class="nav-item">
              <a href="servicioAlta" id="MenuServicosAlta" class="nav-link">
              <i class="right fa fa-circle "></i>
                <p>&nbsp Alta de Servicios</p>
              </a>
            </li>
            @endif
          </ul>
        </li>
        @endif
          @if(Auth::user()->venderProd || Auth::user()->abonoProd || Auth::user()->altaProd || Auth::user()->agregarStock)
          <li class="nav-item  ">
            <a href="#"  id="menuProducto" class="nav-link">
              <i class="nav-icon fa fa-product-hunt"></i>
              <p>
                Productos
                <i class="right fa fa-angle-left"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              @if(Auth::user()->venderProd)
              <li class="nav-item">
                <a href="ventaProducto" id="menuVentaProducto" class="nav-link">
                <i class="right fa fa-circle "></i>
                  <p>&nbsp Vender Productos</p>
                </a>
              </li>
              @endif
              @if(Auth::user()-> abonoProd)
              <li class="nav-item">
                <a href="abonoVentas" id="menuAbonoProducto" class="nav-link">
                <i class="right fa fa-circle "></i>
                  <p>&nbsp Abonos</p>
                </a>
              </li>
              @endif
              @if(Auth::user()->altaProd)
              <li class="nav-item">
                <a href="CargaProductos" id="menuAltaProducto" class="nav-link">
                <i class="right fa fa-circle "></i>
                  <p>&nbsp Alta de Productos</p>
                </a>
              </li>
              @endif
              @if(Auth::user()->agregarStock)
              <li class="nav-item">
                <a href="stock" id="menuStockProducto" class="nav-link">
                <i class="right fa fa-circle "></i>
                  <p>&nbsp Agregar Stock</p>
                </a>
              </li>
              @endif
            </ul>
          </li>
          @endif
          @if(Auth::user()->productoPublico || Auth::user()->productoServ)
          <li class="nav-item  ">
            <a href="#" class="nav-link" id="inventario">
              <i class="nav-icon fa fa-book"></i>
              <p>
                Inventario
                <i class="right fa fa-angle-left"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              @if(Auth::user()->productoPublico)
              <li class="nav-item">
                <a href="inventarioPublico" id="inventarioPublico" class="nav-link">
                <i class="right fa fa-circle "></i>
                  <p>&nbsp Productos al Público</p>
                </a>
              </li>
              @endif
              @if(Auth::user()->productoServ)
              <li class="nav-item">
                <a href="inventarioServicio" id="inventarioServicio" class="nav-link">
                <i class="right fa fa-circle "></i>
                  <p>&nbsp Productos en Servicio</p>
                </a>
              </li>
              @endif
            </ul>
          </li>
          @endif
          @if(Auth::user()->ventaCajero || Auth::user()->ventaGeneral ||Auth::user()->rendimientoRepor)
          <li class="nav-item  ">
            <a href="#" id="reporte"class="nav-link">
              <i class="nav-icon fa fa-file-text-o"></i>
              <p>
                Reportes
                <i class="right fa fa-angle-left"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              @if(Auth::user()->ventaGeneral)
              <li class="nav-item">
                <a href="ventasGen" id="ventasGen" class="nav-link">
                <i class="right fa fa-circle "></i>
                  <p>&nbsp Ventas</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="ventaGen" id="ventaGen" class="nav-link">
                <i class="right fa fa-circle "></i>
                  <p>&nbsp Venta general</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="movimientoCaja" id="movimientoCaja" class="nav-link">
                <i class="right fa fa-circle "></i>
                  <p>&nbsp Movimiento caja</p>
                </a>
              </li>
              @endif
              @if(Auth::user()->ventaCajero)
              <li class="nav-item">
                <a href="ventaCaj" id="ventaCaj" class="nav-link">
                <i class="right fa fa-circle "></i>
                  <p>&nbsp Venta por cajero</p>
                </a>
              </li>
              @endif
              @if(Auth::user()->rendimientoRepor)
              <li class="nav-item">
                <a href="rendimientoTera" id="rendimientoRepor1" class="nav-link">
                <i class="right fa fa-circle "></i>
                  <p>&nbsp Rendimiento de Terapeuta</p>
                </a>
              </li>
              @endif
            </ul>
          </li>
          @endif
        </ul>
      </nav>
      <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
  </aside>

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
          @yield('content')
      </div>
    </section>

  </div>
  <footer class="main-footer">
    <strong>Copyright &copy;2018  </strong>
    <div class="float-right d-none d-sm-inline-block">
      <b>Version</b> 1.0.0
    </div>
  </footer>

  <!-- Control Sidebar -->
  <aside class="control-sidebar control-sidebar-dark">
    <!-- Control sidebar content goes here -->
  </aside>
  <!-- /.control-sidebar -->
</div>
<!-- ./wrapper -->
@yield('modal')
<!-- jQuery -->
<script src="plugins/jquery/jquery.min.js"></script>
<!-- jQuery UI 1.11.4 -->
<script src="https://code.jquery.com/ui/1.12.1/jquery-ui.min.js"></script>
<!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
<script>
  $.widget.bridge('uibutton', $.ui.button)
</script>
<!-- Bootstrap 4 -->
<script src="plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- Morris.js charts -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/raphael/2.1.0/raphael-min.js"></script>
<!-- Sparkline -->
<script src="plugins/sparkline/jquery.sparkline.min.js"></script>
<!-- jvectormap -->
<script src="plugins/jvectormap/jquery-jvectormap-1.2.2.min.js"></script>
<script src="plugins/jvectormap/jquery-jvectormap-world-mill-en.js"></script>
<!-- jQuery Knob Chart -->
<script src="plugins/knob/jquery.knob.js"></script>
<!-- daterangepicker -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.10.2/moment.min.js"></script>
<script src="plugins/daterangepicker/daterangepicker.js"></script>
<!-- datepicker -->
<script src="plugins/datepicker/bootstrap-datepicker.js"></script>
<!-- Bootstrap WYSIHTML5 -->
<script src="plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.all.min.js"></script>
<!-- Slimscroll -->
<script src="plugins/slimScroll/jquery.slimscroll.min.js"></script>
<!-- FastClick -->
<script src="plugins/fastclick/fastclick.js"></script>
<!-- AdminLTE App -->
<script src="dist/js/adminlte.js"></script>
<!-- AdminLTE for demo purposes -->
<script src="dist/js/demo.js"></script>
      <!-- Optional: include a polyfill for ES6 Promises for IE11 and Android browser -->
      <script src="https://unpkg.com/promise-polyfill"></script>
      <script src="sweetalert2/dist/sweetalert2.min.js"></script>

@yield('js')

</body>
</html>
