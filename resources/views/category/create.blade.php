@extends('layouts.main')

@section('content')
    <div>
        <form action="{{ route('category.store') }}" method="post">
            @csrf
            <div class="form-group mt-3">
                <label for="title">Enter title</label>
                <input
                    value="{{ old('title') }}"
                    type="text" name="title" class="form-control" id="title" placeholder="Enter title category">

                @error('title')
                <p class="text-danger">{{ $message }}</p>
                @enderror
            </div>
            <button type="submit" class="btn btn-primary mt-3">Create category!</button>
        </form>
    </div>
@endsection
