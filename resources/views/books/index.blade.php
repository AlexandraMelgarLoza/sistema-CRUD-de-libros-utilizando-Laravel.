<!DOCTYPE html>
<html>
<head>
    <title>Libros</title>
</head>
<body>

<h1>📚 Lista de libros</h1>

<a href="/books/create">➕ Crear libro</a>

<hr>

@if($books->isEmpty())
    <p>No hay libros 😢</p>
@endif

@foreach ($books as $book)
    <div style="border:1px solid black; margin:10px; padding:10px;">
        <h3>{{ $book->title }}</h3>
        <p>Autor: {{ $book->author }}</p>

        <a href="/books/{{ $book->id }}/edit">✏️ Editar</a>

        <form action="/books/{{ $book->id }}" method="POST">
            @csrf
            @method('DELETE')
            <button type="submit">🗑️ Eliminar</button>
        </form>
    </div>
@endforeach

</body>
</html>