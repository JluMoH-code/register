@extends('layouts.main')

@section('content')
    <table class="table">
        <thead>
        <tr>
            <th scope="col">#</th>
            <th scope="col">Login</th>
            <th scope="col">email</th>
            <th scope="col">password</th>
            <th scope="col">categories</th>
            <th scope="col">authors</th>
        </tr>
        </thead>
        <tbody>
        <tr>
            <th scope="row">{{ $user->id }}</th>
            <td>{{ $user->login }}</td>
            <td>{{ $user->email }}</td>
            <td>{{ $user->password }}</td>
            <td>
                @foreach ($categories as $category)
                    <div>{{ $category->title }}</div>
                @endforeach
            </td>
            <td>
                @foreach ($authors as $author)
                    <div>{{ $author->name }} {{ $author->secondary_name }}</div>
                @endforeach
            </td>
        </tr>
        </tbody>
    </table>
    <div>
        <a class="btn btn-primary" href="{{ route('register.create') }}" role="button">Add one user</a>
    </div>
@endsection
