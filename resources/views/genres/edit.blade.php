@extends('layouts.page')

@section('page-title')
    Edit {{$genre->name}}
@endsection

@section('page-content')
<div id="edit-genres-wrapper">
    <div class="container">
        <div class="row">
            <div class="col">
                <form action="{{route('genres.update', $genre->id)}}" method="POST">
                    @csrf
                    @method("PUT")
                    <div class="form-group">
                        <label for="exampleInputText1">Name of the genre</label>
                        <input type="text" class="form-control" id="exampleInputText1" placeholder="Enter genre" value="{{$genre->name}}">
                    </div>
                    <button type="submit" class="btn btn-primary">Update</button>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection