@extends('layouts.app')
@section('title', $viewData['title'])
@section('subtitle', $viewData['subtitle'])
@section('content')
    @if ($viewData['artworks']->isEmpty())
        <p>No artworks yet.</p>
    @endif

    @foreach ($viewData['artworks'] as $artwork)
        <article>
            <h2><a href="{{ route('artwork.show', ['id' => $artwork->getId()]) }}">{{ $artwork->getTitle() }}</a></h2>
            <table>
                <tr>
                    <td>ID</td>
                    <td>{{ $artwork->getId() }}</td>
                <tr>
                <tr>
                    <td>Details</td>
                    <td>{{ $artwork->getDetails() }}</td>
                <tr>
                <tr>
                    <td>Image</td>
                    <td><img src="{{ asset('/storage/' . $artwork->getImage()) }}" width="300px"></td>
                <tr>
            </table>
        </article>
    @endforeach
@endsection
