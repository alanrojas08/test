@if($errors->any())

    <ul>

        @foreach($errors->all() as $error)

            <li>{{ $error }}</li>

        @endforeach

    </ul>

@endif

<form action="{{ route('books.update', $book) }}" method="post">

    @csrf
    @method('put')

    <label for="title">Title:</label>
    <input type="text" name="title" value="{{ old('title', $book->title) }}">

    <label for="description">Description:</label>
    <textarea name="description">{{ old('description', $book->description) }}</textarea>

    <label for="pages">Pages:</label>
    <input type="number" name="pages" value="{{ old('pages', $book->pages) }}">

    <label for="price">Price:</label>
    <input type="number" name="price" value="{{ old('price', $book->price) }}">

    <input type="submit" value="Send">

</form>