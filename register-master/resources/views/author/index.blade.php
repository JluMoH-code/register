@extends('layouts.main')

@section('content')
    <table class="table">
        <thead>
        <tr>
            <th scope="col">#</th>
            <th scope="col">Name</th>
            <th scope="col">Secondary name</th>
            <th scope="col">Surname</th>
            <th scope="col">Birthday</th>
            <th scope="col">Day death</th>
        </tr>
        </thead>
        <tbody>
        @foreach ($authors as $author)
            <tr>
                <th scope="row">{{ $author->id }}</th>
                <td>{{ $author->name }}</td>
                <td>{{ $author->secondary_name }}</td>
                <td>{{ $author->surname }}</td>
                <td>{{ $author->birthday }}</td>
                <td>{{ $author->day_death }}</td>
            </tr>
        @endforeach
        </tbody>
    </table>
    <div>
        <a class="btn btn-primary" href="{{ route('author.create') }}" role="button">Add one author</a>
    </div>
@endsection
