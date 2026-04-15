<!DOCTYPE html>
<html>
<head>
    <title>Editar libro</title>
</head>
<body>

<h1>✏️ Editar libro</h1>

<form action="/books/{{ $book->id }}" method="POST">
    @csrf
    @method('PUT')

    <input type="text" name="title" value="{{ $book->title }}"><br><br>

    <input type="text" name="author" value="{{ $book->author }}"><br><br>

    <button type="submit">Actualizar</button>
</form>

<a href="/books">⬅️ Volver</a>

</body>
</html>