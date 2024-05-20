@extends('adminlte::page')

@section('title', 'Dashboard')

@section('content_header')

@stop

@section('content')
<div class="card">
<div class="container">
    <div class="row">
        <div class="col-md-6">
            <img src="ruta_de_la_imagen" alt="imagen" class="img-fluid">
        </div>
        <div class="col-md-6">
            <h3>Lista de registros</h3>
          </div>
      </div>
   </div>
<div class="group">
    <div class="container-links">
        
    <ul class="nav nav-tabs">
        <li class="nav-item">
            <a id="link" class="nav-link active " href="#">Aprendices</a>
        </li>
        <li class="nav-item">
            <a  id="link" class="nav-link" href="#">Instructores</a>
        </li>
        <li class="nav-item">
            <a  id="link" class="nav-link" href="#">Administradores</a>
        </li>
    </ul>
  </div>
   <div class="container-tables">
       <div class="buttons">
       <button type="submit">Exportar</button>
       <button type="submit">Crear</button>
        </div>
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
                                <th class="checkbox"><input type="checkbox" id="selectAll"></th>
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
                                   <td class="checkbox"><input type="checkbox"></td>
                                   <td></td>
                                   <td>1</td>
                                   <td>John Doe</td>
                                   <td>john@example.com</td>
                                   <td>2024-01-01 12:00:00</td>
                                   <td>2024-01-01 12:00:00</td>
                                </tr>
                                <tr>
                                <td class="checkbox"><input type="checkbox"></td>
                                   <td></td>
                                   <td>2</td>
                                   <td>alendra</td>
                                   <td>john@example.com</td>
                                   <td>2024-01-01 12:00:00</td>
                                   <td>2024-01-01 12:00:00</td>
                                </tr>
                                <!-- Agrega más filas según sea necesario -->
                            </tbody>
                         </table>
                     </div>
                 </div>
             </div>
         </div>
      </div>  
   </div>
</div>

@stop

@section('css')

    <style>
       @import url('https://cdn.datatables.net/2.0.7/css/dataTables.dataTables.css');
       .card{
        margin-top: 2em;
       }
       .container-links{
        display: flex;
        justify-content: flex-end;
        
       }
      
       .container-tables{

        margin-top: 0.3em;
        border: 8px solid #aaa;
        padding: 2em;
        width: 100%;
       }
       .group{
        border:1px solid #aaa;
        margin: 2em;
        padding: 2em;
       }
       #link{
        background-color: #aaa;
        color: #000;
       }
       .buttons{
        display: flex;
        justify-content: flex-end;
        gap:1em;

       }
       .buttons button{
        background-color: #aaa;
        border:1px solid #aaa;
        
       }
    </style>
@stop

@section('js')

<script src="https://cdn.datatables.net/2.0.7/js/dataTables.js"></script>
<script>
  $(document).ready(function() {
      $('#example').DataTable();
  });
@stop
