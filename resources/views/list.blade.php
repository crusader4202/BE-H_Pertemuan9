@extends('layout.master')
@section('title', 'index')
@section('content')
    <table class="table">
        <thead>
            <tr>
                <th scope="col">id</th>
                <th scope="col">Title</th>
                <th scope="col">Author</th>
                <th scope="col">Publisher</th>
                <th scope="col">Year</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($books as $book)
                <tr>
                    <th scope="row">{{ $book->book_id }}</th>
                    <td>{{ $book->Title }}</td>
                    <td>{{ $book->Author }}</td>
                    <td>{{ $book->Publisher }}</td>
                    <td>{{ $book->Year }}</td>
                    <td>
                        <a href="{{ route('edit', $book->book_id) }}" class="btn btn-success">Edit</a>
                        <form action="{{ route('delete', $book->book_id) }}" method="POST">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-danger">Delete</button>
                        </form>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
@endsection
