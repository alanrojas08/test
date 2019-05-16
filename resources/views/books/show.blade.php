@extends('layouts.app')

@section('title-page', 'Detalle de libro')

@section('content')

	<h1>{{ $book->title }}</h1>

	<p>{{ $book->description }}</p>

	<ul>
		<li>Paginas: {{ $book->pages }}</li>
		<li>Precio: $ {{ $book->price }}</li>
	</ul>

	<div class="row">
			
		<div class="col-md-6 col-sm-12">

			<a href="{{ route('books.index') }}" class="btn btn-dark form-control">Regresar</a>
		
		</div>

		<div class="col-md-6 col-sm-12">
			<form action="{{ route('books.destroy', $book) }}" method="post">
		
				@csrf
				@method('delete')

				<input type="submit" value="Delete" class="btn btn-danger form-control">

			</form>
		</div>

	</div>

@endsection