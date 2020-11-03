@extends('layouts.page')

@section('page-title')
    All our genres
@endsection

@section('page-content')
    <div id="genres-index-wrapper">
        <h1>The genres</h1>
        <table class="table">
            <thead class="thead-dark">
              <tr>
                <th scope="col">#id</th>
                <th scope="col">Genre</th>
                <th scope="col" class="edit">Edit</th>
                <th scope="col" class="delete">Delete</th>
              </tr>
            </thead>
            <tbody>
                @foreach ($genres as $genre)
                <tr>
                    <td><a href="{{route('genres.show', $genre->id)}}"><p class="card-text">{{$genre->id}}</p></a></td>
                    <td><a href="{{route('genres.show', $genre->id)}}"><p class="card-text">{{$genre->name}}</p></a></td>
                    <td><a href="{{route('genres.edit', $genre->id)}}"><i class="far fa-edit"></i></a></td>
                    <td><a href="{{route('genres.destroy', $genre->id)}}"><i class="far fa-trash-alt"></i></a></td>
                </tr>
                @endforeach
            </tbody>
          </table>
    </div>
@endsection