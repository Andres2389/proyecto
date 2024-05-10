@extends('adminlte::page')

@section('title', 'Dashboard')

@section('content_header')
    <h1>Dashboard</h1>
@stop

@section('content')
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
@stop
