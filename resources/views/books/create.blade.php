@if($errors->any())

    <ul>

        @foreach($errors->all() as $error)

            <li>{{ $error }}</li>

        @endforeach

    </ul>

@endif

<form action="{{ route('books.store') }}" method="post">

    @csrf

    <label for="title">Title:</label>
    <input type="text" name="title" value="{{ old('title') }}">

    <label for="description">Description:</label>
    <textarea name="description">{{ old('description') }}</textarea>

    <label for="pages">Pages:</label>
    <input type="number" name="pages" value="{{ old('pages') }}">

    <label for="price">Price:</label>
    <input type="number" name="price" value="{{ old('price') }}">

    <input type="submit" value="Send">

</form>