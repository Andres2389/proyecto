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
            <h3>Aprendices Asignados</h3>
          </div>
      </div>
   </div>
<div class="group">
   
   <div class="container-tables">
      <div class="btn">
        <button> + Crear Asignacion</button>
      </div>
   <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-body">
                        <table id="example" class="table table-bordered table-striped">
                            <thead>
                                <tr>
                                <th class="checkbox"><input type="checkbox" id="selectAll"></th>
                                  <th>#</th>
                                  <th>Documento</th>
                                  <th>Nombres</th>
                                  <th>Apellidos</th>
                                  <th>Tipo etapa</th>
                                  <th>Ficha</th>
                                  <th>Instructor asignado</th>
                                  <th>Acciones</th>
                                  
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
                                   <td>contrato aprendizaje</td>
                                   <td>2617502</td>
                                   <td>Hector David Toledo</td>
                                   <td></td>
                                </tr>
                                <tr>
                                <td class="checkbox"><input type="checkbox"></td>
                                   <td></td>
                                   <td>2</td>
                                   <td>alendra</td>
                                   <td>john@example.com</td>
                                   <td>contrato aprendizaje</td>
                                   <td>2617502</td>
                                   <td>Hector David Toledo</td>
                                   <td></td>
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
       .btn{
        display: flex;
        justify-content: flex-end;
        gap:1em;
        margin-bottom: none;
       }
       .btn button{
        background-color: #39a900;
        border: #39a900;
        border-radius: 4px;
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
