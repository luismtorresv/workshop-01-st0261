@extends('layouts.app')
@section('title', $viewData['title'])
@section('subtitle', $viewData['subtitle'])
@section('content')
    <h2>All the fields</h2>
    <table>
        <tr>
            <td>ID</td>
            <td>{{ $viewData['artwork']->getId() }}</td>
        <tr>
        <tr>
            <td>Title</td>
            <td>{{ $viewData['artwork']->getTitle() }}</td>
        <tr>
        <tr>
            <td>Author</td>
            <td>{{ $viewData['artwork']->getAuthor() }}</td>
        <tr>
        <tr>
            <td>Keyword</td>
            <td>{{ $viewData['artwork']->getKeyword() }}</td>
        <tr>
        <tr>
            <td>Category</td>
            <td>{{ $viewData['artwork']->getCategory() }}</td>
        <tr>
        <tr>
            <td>Details</td>
            <td>{{ $viewData['artwork']->getDetails() }}</td>
        <tr>
        <tr>
            <td>Image</td>
            <td><img src="{{ asset('/storage/' . $viewData['artwork']->getImage()) }}" width="600px"></td>
        <tr>
    </table>

    <h2>Delete!</h2>
    <form action="{{ route('artwork.delete', ['id' => $viewData['artwork']->getId()]) }}" method="POST">
        @csrf

        @method('DELETE')

        <button type="submit">
            Delete this artwork. Forever.
        </button>
    </form>
@endsection
