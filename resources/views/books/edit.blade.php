<form>

    <label for="title">Title:</label>
    <input type="text" name="title" value="{{ $book->title }}">

    <label for="description">Description:</label>
    <textarea name="description">{{ $book->description }}</textarea>

    <label for="pages">Pages:</label>
    <input type="number" name="pages" value="{{ $book->pages }}">

    <label for="price">Price:</label>
    <input type="number" name="price" value="{{ $book->price }}">

    <input type="submit" value="Send">

</form>