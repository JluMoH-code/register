@extends('layouts.main')

@section('content')
    <div>
        <form action="{{ route('author.store') }}" method="post">
            @csrf
            <div class="form-group mt-3">
                <label for="name">Name</label>
                <input
                    value="{{ old('name') }}"
                    type="text" name="name" class="form-control" id="name" placeholder="Enter name author">

                @error('name')
                <p class="text-danger">{{ $message }}</p>
                @enderror
            </div>
            <div class="form-group mt-3">
                <label for="secondary_name">Enter secondary name</label>
                <input
                    value = "{{ old('secondary_name') }}"
                    type="text" name="secondary_name" class="form-control" id="secondary_name" placeholder="Enter secondary_name">

                @error('secondary_name')
                <p class="text-danger">{{ $message }}</p>
                @enderror
            </div>
            <div class="form-group mt-3">
                <label for="surname">Enter surname</label>
                <input
                    value = "{{ old('surname') }}"
                    type="text" name="surname" class="form-control" id="surname" placeholder="Enter surname">

                @error('surname')
                <p class="text-danger">{{ $message }}</p>
                @enderror
            </div>
            <div class="form-group mt-3">
                <label for="birtday">Enter birthday</label>
                <input
                    value = "{{ old('birtday') }}"
                    type="date" name="birthday" class="form-control" id="birthday" placeholder="Enter birthday">

                @error('birthday')
                <p class="text-danger">{{ $message }}</p>
                @enderror
            </div>
            <div class="form-group mt-3">
                <label for="birtday">Enter day death</label>
                <input
                    value = "{{ old('day_death') }}"
                    type="date" name="day_death" class="form-control" id="day_death" placeholder="Enter day_death">

                @error('day_death')
                <p class="text-danger">{{ $message }}</p>
                @enderror
            </div>
            <button type="submit" class="btn btn-primary mt-3">Create author!</button>
        </form>
    </div>
@endsection
