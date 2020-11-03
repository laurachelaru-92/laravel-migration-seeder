@extends('layouts.page')

@section('page-title')
    Add new author
@endsection

@section('page-content')
    <div class="container">
        <h1>Add new author</h1>
        <form action="{{route('authors.store')}}" method="POST">
            @csrf
            @method("POST")
            <div class="form-group">
                <label for="name">Name</label>
                <input type="text" class="form-control" name="name" id="name" placeholder="Enter name" value="{{old('name')}}">
                @error('name')
                    <div class="alert alert-danger">{{ $message }}</div>
                @enderror
            </div>
            <div class="form-group">
                <label for="lastname">Last name</label>
                <input type="text" class="form-control" name="lastname" id="lastname" placeholder="Enter last name" value="{{old('lastname')}}">
                @error('lastname')
                    <div class="alert alert-danger">{{ $message }}</div>
                @enderror
            </div>
            <div class="form-group">
                <label for="date_of_dirth">Date of birth</label>
                <input type="date" class="form-control" name="date_of_birth" id="date_of_dirth" value="{{old('date_of_birth')}}">
                @error('date_of_birth')
                    <div class="alert alert-danger">{{ $message }}</div>
                @enderror
            </div>
            <button type="submit" class="btn btn-primary">Save</button>
        </form>
    </div>
@endsection