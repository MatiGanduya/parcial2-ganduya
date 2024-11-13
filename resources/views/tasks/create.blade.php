<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Crear Nueva Tarea</title>
</head>
<body>
    <h1>Crear Nueva Tarea</h1>

    <form action="{{ route('tasks.store') }}" method="POST">
        @csrf
        <div>
            <label for="title" >Título:</label>
            <input type="text" name="title" id="title" required placeholder="Ingresa el titulo">
        </div>
        <div>
            <label for="description">Descripción:</label>
            <textarea name="description" id="description" required></textarea>
        </div>
        <button type="submit">Crear Tarea</button>
    </form>

    <a href="/tasks">Volver a la lista de tareas</a>
</body>
</html>

