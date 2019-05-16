@extends('layouts.app')

@section('title_page', 'Lista de libros')

@section('content')

	<div class="text-right">
		<a href="{{ route('books.create') }}" class="btn btn-primary">Registrar libro</a>
	</div>

	<hr>

	<table class="table table-hover">
		
		<thead>
			<tr>
				<td>Titulo</td>
				<td>Descripcion</td>
				<td>Mostrar</td>
				<td>Editar</td>
			</tr>
		</thead>

		<tbody>
			@forelse($books as $book)
				<tr>
					<td>{{ $book->title }}</td>
					<td>{{ str_limit($book->description, 15) }}</td>
					<td>
						<a href="{{ route('books.show', $book) }}" class="btn btn-dark">Mostrar</a>
					</td>
					<td>
						<a href="{{ route('books.edit', $book) }}" class="btn btn-info">Editar</a>
					</td>
				</tr>		    

			@empty

			    <h1>No hay libros registrados.</h1>

			@endforelse
		</tbody>

	</table>

@endsection