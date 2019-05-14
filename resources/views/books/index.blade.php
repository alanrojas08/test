<a href="{{ route('books.create') }}">Registrar libro</a>

<hr>

<table>
	
	<thead>
		<tr>
			<td>Title</td>
			<td>Description</td>
			<td></td>
			<td></td>
		</tr>
	</thead>

	<tbody>
		@forelse($books as $book)
			<tr>
				<td>{{ $book->title }}</td>
				<td>{{ str_limit($book->description, 15) }}</td>
				<td>
					<a href="{{ route('books.show', $book) }}">Mostrar detalle</a>
				</td>
				<td>
					<a href="{{ route('books.edit', $book) }}">Editar registro</a>
				</td>
			</tr>		    

		@empty

		    <h1>No hay libros registrados.</h1>

		@endforelse
	</tbody>

</table>
