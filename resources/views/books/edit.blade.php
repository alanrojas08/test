@extends('layouts.app')

@section('title-page', 'Editar libro')

@section('content')

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

        <div class="form-group">
            <label for="title" class="form-control-label">Title:</label>
            <input type="text" name="title" class="form-control" value="{{ old('title', $book->title) }}">  
        </div>

        <div class="form-group">
            <label for="description" class="form-control-label">Description:</label>
            <textarea name="description" class="form-control">{{ old('description', $book->description) }}</textarea>
        </div>

        <div class="form-group">
            <label for="pages" class="form-control-label">Pages:</label>
            <input type="number" name="pages" class="form-control" value="{{ old('pages', $book->pages) }}">
        </div>

        <div class="form-group">
            <label for="price" class="form-control-label">Price:</label>
            <input type="number" name="price" class="form-control" value="{{ old('price', $book->price) }}">
        </div>

        <div class="row">
            
            <div class="col-md-6 col-sm-12">
                <a href="{{ route('books.index') }}" class="btn btn-dark form-control">Regresar a la lista</a>
            </div>

            <div class="col-md-6 col-sm-12">
                <input type="submit" value="Send" class="btn btn-primary form-control">
            </div>

        </div>

    </form>

@endsection