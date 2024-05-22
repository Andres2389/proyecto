@extends('layouts.app')

@section('content')
    <h1>Usuarios Registrados</h1>

    <table>
        <thead>
            <tr>
                <th>Nombre</th>
                <th>Correo Electrónico</th>
                <!-- Agrega más columnas según sea necesario -->
            </tr>
        </thead>
        <tbody>
            @foreach($users as $user)
                <tr>
                    <td>{{ $user->name }}</td>
                    <td>{{ $user->email }}</td> <!-- Corregido a 'email' -->
                    <!-- Agrega más columnas según sea necesario -->
                </tr>
            @endforeach
        </tbody>
    </table>
@endsection
