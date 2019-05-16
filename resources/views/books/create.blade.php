@extends('layouts.app')

@section('title-page', 'Registrar libro')

@section('content')

    @if($errors->any())

        <div class="alert alert-danger">
            <b>Error</b>
            
            <ul>

            @foreach($errors->all() as $error)

                <li>{{ $error }}</li>

            @endforeach

            </ul>

        </div>

    @endif

    <form action="{{ route('books.store') }}" method="post">

        @csrf

        <div class="form-group">
            <label for="title" class="form-control-label">Title:</label>
            <input type="text" name="title" class="form-control" value="{{ old('title') }}">
        </div>

        <div class="for-group">
            <label for="description" class="form-control-label">Description:</label>
            <textarea name="description" class="form-control">{{ old('description') }}</textarea>
        </div>

        <div class="for-group">
            <label for="pages" class="form-control-label">Pages:</label>
            <input type="number" name="pages" class="form-control" value="{{ old('pages') }}">
        </div>

        <div class="for-group">
            <label for="price" class="form-control-label">Price:</label>
            <input type="number" name="price" class="form-control" value="{{ old('price') }}">
        </div>
        
        <hr>

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