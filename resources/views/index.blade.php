@extends('layouts.main')

@section('content')
    <table class="table">
        <thead>
        <tr>
            <th scope="col">#</th>
            <th scope="col">Login</th>
            <th scope="col">email</th>
            <th scope="col">password</th>
        </tr>
        </thead>
        <tbody>
        @foreach ($users as $user)
            <tr>
                <th scope="row"><a href="{{ route('register.show', $user->id) }}">{{ $user->id }}</a></th>
                <td>{{ $user->login }}</td>
                <td>{{ $user->email }}</td>
                <td>{{ $user->password }}</td>
            </tr>
        @endforeach
        </tbody>
    </table>
    <div>
        <a class="btn btn-primary" href="{{ route('register.create') }}" role="button">Add one user</a>
    </div>
@endsection
