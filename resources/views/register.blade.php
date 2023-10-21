@extends('layouts.main')

@section('content')
<form action="{{ route('register.store') }}" method="post" enctype="multipart/form-data">
    @csrf

    <div class="form-group">
        <label for="email">Email address</label>
        <input type="email" name="email" class="form-control" id="email" aria-describedby="emailHelp" placeholder="Enter email"
               value="{{ old('email') }}">

        @error('email')
        <p class="text-danger">{{ $message }}</p>
        @enderror
    </div>
    <div class="form-group">
        <label for="login">Login</label>
        <input type="text" name="login" class="form-control" id="login" placeholder="Login"
                value="{{ old('login') }}">

        @error('login')
        <p class="text-danger">{{ $message }}</p>
        @enderror
    </div>
    <div class="form-group">
        <label for="password">Password</label>
        <input type="password" name="password" class="form-control" id="password" placeholder="Password">

        @error('password')
        <p class="text-danger">{{ $message }}</p>
        @enderror
    </div>
    <div class="form-group">
        <label for="password_confirmation">Confirm password</label>
        <input type="password" name="password_confirmation" class="form-control" id="password_confirmation" placeholder="Password">

        @error('password_confirmation')
        <p class="text-danger">{{ $message }}</p>
        @enderror
    </div>

    <div class="form-group mt-3">
        <label for="name">Name</label>
        <input type="text" name="name" class="form-control" id="name" placeholder="Name"
               value="{{ old('name') }}">

        @error('name')
        <p class="text-danger">{{ $message }}</p>
        @enderror
    </div>
    <div class="form-group">
        <label for="secondary_name">Second name</label>
        <input type="text" name="secondary_name" class="form-control" id="secondary_name" placeholder="Second name"
               value="{{ old('secondary_name') }}">

        @error('secondary_name')
        <p class="text-danger">{{ $message }}</p>
        @enderror
    </div>
    <div class="form-group">
        <label for="birthday">Birthday</label>
        <input type="date" name="birthday" class="form-control" id="birthday" placeholder="Birthday"
               value="{{ old('birthday') }}">

        @error('birthday')
        <p class="text-danger">{{ $message }}</p>
        @enderror
    </div>
    <div class="form-group">
        <label for="phone_number">Phone number</label>
        <input type="number" name="phone_number" class="form-control" id="phone_number" placeholder="79996543443" aria-describedby="phoneHelp"
               value="{{ old('phone_number') }}">
        <small id="phoneHelp" class="form-text text-muted">in format 7XXXXXXXXXX</small>
        @error('phone_number')
        <p class="text-danger">{{ $message }}</p>
        @enderror
    </div>
    <div class="form-group">
        <label for="about">About</label>
        <textarea name="about" class="form-control" id="about" placeholder="London is the capital of Great Britan">{{ old('about') }}</textarea>

        @error('about')
        <p class="text-danger">{{ $message }}</p>
        @enderror
    </div>
    <div class="form-group">
        <label for="photo" class="form-label">Select file (morda)</label>
        <input name="photo" class="form-control" type="file" id="photo">

        @error('photo')
        <p class="text-danger">{{  $message }}</p>
        @enderror
    </div>
    <button type="submit" class="btn btn-primary mt-3">Submit</button>
</form>
@endsection('content')
