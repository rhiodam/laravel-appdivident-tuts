<!-- index.blade.php -->

@extends('book.layout')

@section('content')
    <style>
        .uper {
            margin-top: 40px;
        }
    </style>
    <div class="card-header">
        List of Books
    </div>
    <a href="{{ route('books.create') }}"><button type="submit" class="btn btn-primary">Create Book</button></a>
    <div class="uper">
        @if(session()->get('success'))
            <div class="alert alert-success">
                {{ session()->get('success') }}
            </div><br />
        @endif
        <table class="table table-striped">
            <thead>
            <tr>
                <td>ID</td>
                <td>Book Name</td>
                <td>ISBN Number</td>
                <td>Book Price</td>
                <td colspan="2">Action</td>
            </tr>
            </thead>
            <tbody>
            @foreach($books as $book)
                <tr>
                    <td>{{$book->id}}</td>
                    <td>{{$book->name}}</td>
                    <td>{{$book->isbn_no}}</td>
                    <td>{{$book->price}}</td>
                    <td><a href="{{ route('books.edit',$book->id)}}" class="btn btn-primary">Edit</a></td>
                    <td>
                        <form action="{{ route('books.destroy', $book->id)}}" method="post">
                            @csrf
                            @method('DELETE')
                            <button class="btn btn-danger" type="submit">Delete</button>
                        </form>
                    </td>
                </tr>
            @endforeach
            </tbody>
        </table>
        <div>
@endsection