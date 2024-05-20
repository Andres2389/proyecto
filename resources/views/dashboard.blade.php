@extends('adminlte::page')

@section('title', 'Dashboard')

@section('content_header')
    <h1>Dashboard</h1>
@stop

@section('content')
<<<<<<< HEAD
<section class="content">
    <div class="container-fluid">
        <!-- Tarjetas -->
        <div class="row">
            <div class="col-lg-3 col-6">
                <div class="small-box bg-info">
                    <div class="inner">
                        <h3>150</h3>
                        <p>New Orders</p>
                    </div>
                    <div class="icon">
                        <i class="ion ion-bag"></i>
                    </div>
                </div>
            </div>

            <div class="col-lg-3 col-6">
                <div class="small-box bg-success">
                    <div class="inner">
                        <h3>53<sup style="font-size: 20px">%</sup></h3>
                        <p>Bounce Rate</p>
                    </div>
                    <div class="icon">
                        <i class="ion ion-stats-bars"></i>
                    </div>
                </div>
            </div>

            <div class="col-lg-3 col-6">
                <div class="small-box bg-warning">
                    <div class="inner">
                        <h3>44</h3>
                        <p>User Registrations</p>
                    </div>
                    <div class="icon">
                        <i class="ion ion-person-add"></i>
                    </div>
                </div>
            </div>

            <div class="col-lg-3 col-6">
                <div class="small-box bg-danger">
                    <div class="inner">
                        <h3>65</h3>
                        <p>Unique Visitors</p>
                    </div>
                    <div class="icon">
                        <i class="ion ion-pie-graph"></i>
                    </div>
                </div>
            </div>
        </div>

        <!-- Tabla -->
        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-header">
                        <h3 class="card-title">DataTable Example</h3>
                    </div>
                    <div class="card-body">
                        <table id="example" class="table table-bordered table-striped">
                            <thead>
                                <tr>
                                    <th>ID</th>
                                    <th>Name</th>
                                    <th>Email</th>
                                    <th>Created At</th>
                                    <th>Updated At</th>
                                </tr>
                            </thead>
                            <tbody>
                                <!-- Datos de ejemplo estáticos -->
                                <tr>
                                    <td>1</td>
                                    <td>John Doe</td>
                                    <td>john@example.com</td>
                                    <td>2024-01-01 12:00:00</td>
                                    <td>2024-01-01 12:00:00</td>
                                </tr>
                                <tr>
                                    <td>2</td>
                                    <td>Jane Smith</td>
                                    <td>jane@example.com</td>
                                    <td>2024-01-02 12:00:00</td>
                                    <td>2024-01-02 12:00:00</td>
                                </tr>
                                <!-- Agrega más filas según sea necesario -->
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
@stop

@section('css')
<link rel="stylesheet" href="https://cdn.datatables.net/2.0.7/css/dataTables.dataTables.css" />
@stop

@section('js')
<script src="plugins/jquery/jquery.min.js"></script>
<script src="plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<script src="dist/js/adminlte.js?v=3.2.0"></script>
<script src="https://cdn.datatables.net/2.0.7/js/dataTables.js"></script>
<script>
  $(document).ready(function() {
      $('#example').DataTable();
  });
</script>
=======
    @role('admin')
        <div class="admin-content">
            <p>Bienvenido, administrador.</p>
            <!-- Contenido específico para el rol de administrador -->
        </div>

      
     
   
    @endrole

    @role('instructor')
        <div class="instructor-content">
            <p>Bienvenido, instructor.</p>
            <!-- Contenido específico para el rol de instructor -->
        </div>
    @endrole


    <!-- Contenido común para todos los roles -->
@stop

@section('css')
    {{-- Agrega aquí hojas de estilo adicionales --}}
    <style>
        .admin-content {
            background-color: lightblue;
            padding: 20px;
        }

        .instructor-content {
            background-color: lightgreen;
            padding: 20px;
        }
    </style>
@stop

@section('js')
    <script> console.log("¡Hola, estoy usando el paquete Laravel-AdminLTE!"); </script>
>>>>>>> 3e5931582f6be998297b6fe31bac1d679f967146
@stop
