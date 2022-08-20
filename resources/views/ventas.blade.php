<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Grow Servicios</title>

    <!-- Custom fonts for this template-->
    <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <link
        href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i"
        rel="stylesheet">

    <!-- Custom styles for this template-->
    <link href="css/sb-admin-2.min.css" rel="stylesheet">
    <link rel="icon" href="{{ asset('img/logo.png') }}">
    <script src="{{ asset('js/jquery-3.6.0.min.js') }}"></script>
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
                        <h1 class="h3 mb-0 text-gray-800">Ventas</h1>
                    </div>
                    <div>
                        
<br>
<form action="{{route('registrar_venta')}}" method="POST">
    @csrf
    <table  style="border:1px solib black">
                <tr>
                    <td>Usuario:</td>
                    <td>
                        <select name="id_user" id="usuario">
                            <option value="0">-- Seleccione un Usuario --</option>
                            @foreach($usuarios as $usu)
                               <option value="{{$usu->id}}">{{$usu->nombre}} </option>
                               @endforeach
                        </select>
                    </td>
                     
                </tr>
                <tr>
               <td>Proctos</td>
               <td>
                        <select name="id_producto" id="productos">
                            <option value="0">-- Seleccione un Producto --</option>
                            @foreach($productos as $pro)
                                
                               <option value="{{$pro->id}}">{{$pro->nombre}}</option>
                               
                             
                              
                               @endforeach
                        </select>

                    </td>
                    
                </tr>
                <tr>
                    <td></td>
                <td id="infoproducto"></td>
                </tr>
            </table>

            <div class="mb-3">
    
    <br>

  
    <button type="submit" class="btn btn-primary">Realizar venta</button>
</form>

<br>
<table lenght="30" border>
                            <tr>
                                <th>Id_venta</th>
                                <th>Usuario</th>
                                <th>Id_Producto</th>
                                <th>Foto producto</th>
                                <th>Nombre</th>
                                <th>Descripcion</th>
                                <th>Cantidad</th>
                                <th>Total</th>
                               
                            </tr>
                            @php
                              $suma=0;
                             @endphp
                            @foreach($ventas as $venta)
                            <tr>
                                <td>{{ $venta->id }}</td>
                                <td>{{$venta->User->nombre}}</td>
                                <td>{{$venta->productos->nombre}}</td>
                                <td><img src=" {{ asset('img/'.$venta->productos->img)}}" width="40"></td>
                                <td>{{$venta->productos->descripcion}}</td>
                                <td>{{$venta->cantidad}}</td>
                                <td>${{$venta->total}}</td>a
                               <td>
        	                    <form action="{{ route('borrar_venta',['id' => $venta->id]) }}" method="POST" >
				                {{ csrf_field() }}
				                {{ method_field('DELETE') }}
				                <input type="submit" value="Borrar "  class="btn btn-warning" style="color:black;">
			                    </form>
			                     </td>
                                    </form>
			                      
                            </tr>
                            @php
                $suma+=$venta->total;//sumanos los valores, ahora solo fata mostrar dicho valor
                 @endphp
                            @endforeach  
                        </table>
                    </div>
                    Total de ventas realizadas: <label id="sumatotal" > $ {{ $suma }}</label>
        
                    <br>


                    <div class="row">

               
                    <script type="text/javascript" >
            $(document).ready(function(){

                
               
                $("#productos").change(function(){
                    var valproducto = $("#productos").val();
                    if(valproducto == 0){
                       
                        $('#infoproducto').empty();
                      
                         }
                    else{
                    
                     
                        $("#infoproducto").load("{{ route('ventas2a') }}?id_producto=" + valproducto);
                       
                       
                      
                       
                    }

                    

                });

            

            });
        </script>
    
   
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

    <!-- Core plugin JavaScript-->
    <script src="vendor/jquery-easing/jquery.easing.min.js"></script>

    <!-- Custom scripts for all pages-->
    <script src="js/sb-admin-2.min.js"></script>

</body>

</html>