<h1>{{ $book->title }}</h1>

<p>{{ $book->description }}</p>

<ul>
	<li>Paginas: {{ $book->pages }}</li>
	<li>Precio: $ {{ $book->price }}</li>
</ul>

<form action="{{ route('books.destroy', $book) }}" method="post">
	
	@csrf
	@method('delete')

	<input type="submit" value="Delete">

</form>