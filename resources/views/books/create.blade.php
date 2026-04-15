<!DOCTYPE html>
<html>
<head>
    <title>Crear libro</title>
</head>
<body>

<h1>➕ Crear libro</h1>

<form action="/books" method="POST">
    @csrf

    <input type="text" name="title" placeholder="Título del libro"><br><br>

    <input type="text" name="author" placeholder="Autor"><br><br>

    <button type="submit">Guardar</button>
</form>

<a href="/books">⬅️ Volver</a>

</body>
</html>