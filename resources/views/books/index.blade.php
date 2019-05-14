@forelse($books as $book)

    <p>{{ $book->title }}</p>

@empty

    <h1>No hay libros registrados.</h1>

@endforelse