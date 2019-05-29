@extends('layouts.app')

@section('title_page', 'Lista de libros')

@section('content')

	<div class="text-right">
		<a href="{{ route('books.create') }}" class="btn btn-primary">Registrar libro</a>
	</div>

	<hr>

	<table class="table table-hover" id="id">
		
		<thead>
			<tr>
				<td>Titulo</td>
				<td>Descripcion</td>
				<td>Mostrar</td>
				<td>Editar</td>
				<td>Eliminar</td>
			</tr>
		</thead>

		<tbody>
			@forelse($books as $book)
				<tr data-id="{{ $book->id }}">
					<td>{{ $book->title }}</td>
					<td>{{ str_limit($book->description, 15) }}</td>
					<td>
						<a href="{{ route('books.show', $book) }}" class="btn btn-dark">Mostrar</a>
					</td>
					<td>
						<a href="{{ route('books.edit', $book) }}" class="btn btn-info">Editar</a>
					</td>
					<td>
						<a href="javascript:void(0)" class="btn btn-danger btn-delete">Eliminar</a>
					</td>
				</tr>		    

			@empty

			    <h1>No hay libros registrados.</h1>

			@endforelse
		</tbody>

	</table>

	<form action="{{ route('books.destroy', 'ID') }}" method="post" id="form-destroy">
		
		@csrf
		@method('delete')

	</form>

@endsection

@section('scripts')

<script type="text/javascript">
	
	$(document).ready(function(e) {

		$(document).on('click', '.btn-delete', function(e) {

			let form = $('#form-destroy');
			let url = form.attr('action')

			let id = $(this).parents('tr').data('id');

			url = url.replace('ID', id);

			var r = confirm("Are you sure to delete this book?");

			if (r == true) {

				form.prop('action', url);
				form.submit();

			} else {

			  alert('Action aborted');

			}

		});

	});

</script>

@endsection