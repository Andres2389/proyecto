<!-- resources/views/auth/register.blade.php -->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registro</title>
</head>
<body>
    <h1>Registro de Usuario</h1>
    <form action="{{ route('register.store') }}" method="POST">
        @csrf
        <div>
            <label for="rol">Rol:</label>
            <input type="text" id="rol" name="rol" required>
        </div>
        <div>
            <label for="documento">Documento:</label>
            <input type="text" id="documento" name="documento" required>
        </div>
        <div>
            <label for="name">Nombre:</label>
            <input type="text" id="name" name="name" required>
        </div>
        <div>
            <label for="apellidos">Apellidos:</label>
            <input type="text" id="apellidos" name="apellidos" required>
        </div>
        <div>
            <label for="correo_electronico">Correo Electrónico:</label>
            <input type="email" id="correo_electronico" name="correo_electronico" required>
        </div>
        <div>
            <label for="contraseña">Contraseña:</label>
            <input type="password" id="contraseña" name="contraseña" required>
        </div>
        <div>
            <label for="telefono">Teléfono:</label>
            <input type="text" id="telefono" name="telefono" required>
        </div>
        <div>
            <label for="tipo_etapa">Tipo de Etapa:</label>
            <input type="text" id="tipo_etapa" name="tipo_etapa" required>
        </div>
        <div>
            <label for="programa_formacion">Programa de Formación:</label>
            <input type="text" id="programa_formacion" name="programa_formacion" required>
        </div>
        <div>
            <label for="ficha">Ficha:</label>
            <input type="text" id="ficha" name="ficha" required>
        </div>
        <div>
            <label for="instructor_asignado">Instructor Asignado:</label>
            <input type="text" id="instructor_asignado" name="instructor_asignado" required>
        </div>
        <div>
            <button type="submit">Registrar</button>
        </div>
    </form>
</body>
</html>
