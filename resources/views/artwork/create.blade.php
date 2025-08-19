@extends('layouts.app')
@section('title', $viewData['title'])
@section('subtitle', $viewData['subtitle'])
@section('content')
    <h2>{{ $viewData['title'] }}</h2>
    @if ($errors->any())
        <div class="notice">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <form method="POST" action="{{ route('artwork.save') }}" enctype="multipart/form-data">
        @csrf

        <p>
            <label>Title</label>
            <input type="text" name="title" value="{{ old('title') }}">
        </p>
        <p>
            <label>Author</label>
            <input type="text" name="author" value="{{ old('author') }}">
        </p>
        <p>
            <label>Keyword</label>
            <input type="text" name="keyword" value="{{ old('keyword') }}">
        </p>
        <p>
            <label>Category</label>
            <input type="text" name="category" value="{{ old('category') }}">
        </p>
        <p>
            <label>Details</label>
            <textarea rows="4" name="details">{{ old('details') }}</textarea>
        </p>
        <p>
            <label>Image</label>
            <input class="form-control" type="file" name="image">
        </p>

        <input type="submit" value="Create" />
    </form>
@endsection
