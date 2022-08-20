<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="{{ asset('img/logo.png') }}">
    <title>Grow Servicios</title>

    <!-- Custom fonts for this template-->
    <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <link
        href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i"
        rel="stylesheet">

    <!-- Custom styles for this template-->
    <link href="css/sb-admin-2.min.css" rel="stylesheet">

</head>

<body id="page-top">

    <!-- Page Wrapper -->
    <div id="wrapper">

        <!-- Sidebar -->
        <ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

            <!-- Sidebar - Brand -->
            <a class="sidebar-brand d-flex align-items-center justify-content-center" href="">
                <div class="sidebar-brand-icon rotate-n-15">
                    <i class="fas fa-laugh-wink"></i>
                </div>
                <div class="sidebar-brand-text mx-3">Grow Ferreteria <sup></sup></div>
            </a>

            <!-- Divider -->
            <hr class="sidebar-divider my-0">

            <!-- Nav Item - Dashboard -->
            <li class="nav-item">
                <a class="nav-link" href="{{ url('dash')}}">
                    <i class="fas fa-fw fa-tachometer-alt"></i>
                    <span>Dashboard</span></a>
            </li>

            <!-- Divider -->
            <hr class="sidebar-divider">

            <!-- Heading -->
            <div class="sidebar-heading">
                Interface
            </div>

             <!-- Nav Item - Pages Collapse Menu -->
             <li class="nav-item">
                <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseTwo"
                    aria-expanded="true" aria-controls="collapseTwo">
                    <i class="fas fa-fw fa-cog"></i>
                    <span>Catalogos</span>
                </a>
                <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
                    <div class="bg-white py-2 collapse-inner rounded">
                        <h6 class="collapse-header">Catalogos:</h6>
                        <a class="collapse-item" href="{{route('usuarios')}}" id="usuarios">Usuarios</a>
                        <a class="collapse-item" href="{{route('productos')}}" id="empleados" >Productos</a>
                        <a class="collapse-item" href="{{route('ventas')}}" id="ventas" >Ventas</a>
                    </div>
                </div>
            </li>

           
            <!-- Sidebar Toggler (Sidebar) -->
            <div class="text-center d-none d-md-inline">
                <a href="{{ url('/')}}"><button type="button" class="btn btn-danger">Salir</button></a>
            </div>
        </ul>
        <!-- End of Sidebar -->

        </ul>
        <!-- End of Sidebar -->

        <!-- Content Wrapper -->
        <div id="content-wrapper" class="d-flex flex-column">

            <!-- Main Content -->
            <div id="content">

                <!-- Topbar -->
                <nav class="navbar navbar-expand navbar-light bg-white topbar mb-4 static-top shadow">

                    <!-- Sidebar Toggle (Topbar) -->
                    <button id="sidebarToggleTop" class="btn btn-link d-md-none rounded-circle mr-3">
                        <i class="fa fa-bars"></i>
                    </button>

                   

                    <!-- Topbar Navbar -->
                    <ul class="navbar-nav ml-auto">

                       

                   
                        
                            <!-- Dropdown - User Information -->
                            <div class="dropdown-menu dropdown-menu-right shadow animated--grow-in"
                                aria-labelledby="userDropdown">
                                <a class="dropdown-item" href="#">
                                    <i class="fas fa-user fa-sm fa-fw mr-2 text-gray-400"></i>
                                    Profile
                                </a>
                                <a class="dropdown-item" href="#">
                                    <i class="fas fa-cogs fa-sm fa-fw mr-2 text-gray-400"></i>
                                    Settings
                                </a>
                                <a class="dropdown-item" href="#">
                                    <i class="fas fa-list fa-sm fa-fw mr-2 text-gray-400"></i>
                                    Activity Log
                                </a>
                                <div class="dropdown-divider"></div>
                                <a class="dropdown-item" href="#" data-toggle="modal" data-target="#logoutModal">
                                    <i class="fas fa-sign-out-alt fa-sm fa-fw mr-2 text-gray-400"></i>
                                    Logout
                                </a>
                            </div>
                        </li>

                    </ul>

                </nav>
                <!-- End of Topbar -->

                <!-- Begin Page Content -->
                <div class="container-fluid">

                    <!-- Page Heading -->
                    <div class="d-sm-flex align-items-center justify-content-between mb-4">
                        <h1 class="h3 mb-0 text-gray-800">Productos</h1>
                    </div>
                    <div>
                        
<br>
<form action="{{ route('registrar_productos') }}" method="POST">
    @csrf
  <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">Nombre del Producto</label>
    <input type="text" class="form-control" id="" aria-describedby="emailHelp" name="nombre" required>
    </div>
    <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">Descripcion:</label>
    <input type="textarea" class="form-control" id="" aria-describedby="emailHelp" name="descripcion" required>
    </div>
  
    <div class="mb-3">
    <label >Imagen</label>
    <input type="file"  id=""  name="img" required>
    </div> 
    <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">Precio</label>
    <input type="text" class="form-control" id="" aria-describedby="emailHelp" name="precio" placeholder="$$" required>
    </div>
  
  
  
  <button type="submit" class="btn btn-primary">Submit</button>
</form>
<br><br>
                        Busquedaa de usuarios

                        <table lenght="30" border>
                            <tr>
                                <th>Id</th>
                                <th>Nombre</th>
                                <th>Descripcion</th>
                                <th>Imagen</th>
                                <th>Precio</th>
                               
                            </tr>
                            @foreach($productos as $servicio)
                            <tr>
                                <td>{{ $servicio->id }}</td>
                                <td>{{ $servicio->nombre }}</td>
                                <td>{{ $servicio->descripcion }}</td> 
                                <td><img src=" {{ asset('img/'.$servicio->img)}}" width="40"></td>
                                <td>${{ $servicio->precio }}</td>
                                <td>
			                   <a href="{{ route('editar_producto',['id' => $servicio->id]) }}"><button class="btn btn-primary"><b style="color:white;">Editar</b></button></a>
        	                    <form action="{{ route('borrar_producto',['id' => $servicio->id]) }}" method="POST" >
				                {{ csrf_field() }}
				                {{ method_field('DELETE') }}
				                <input type="submit" value="Borrar 1"  class="btn btn-warning" style="color:black;">
			                    </form>
			                      </td>
                            </tr>
                            @endforeach  
                        </table>
                       
                    </div>

                    <div class="row">

                       

    <!-- Bootstrap core JavaScript-->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

    <!-- Core plugin JavaScript-->
    <script src="vendor/jquery-easing/jquery.easing.min.js"></script>

    <!-- Custom scripts for all pages-->
    <script src="js/sb-admin-2.min.js"></script>

</body>

</html>