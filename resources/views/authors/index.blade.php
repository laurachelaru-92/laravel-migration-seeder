@extends('layouts.page')

@section('page-title')
    Comic Authors
@endsection

@section('page-content')
    <div id="authors-index-wrapper">
        <h1>The authors</h1>
        <div class="container">
            <ul class="list-group">
                @foreach ($authors as $author)
                    <li class="list-group-item">
                        <a href="{{route('authors.show', $author->id)}}"><p class="card-text">{{$author->name}} {{$author->lastname}}</p></a>
                        <a href="{{route('authors.edit', $author->id)}}"><i class="far fa-edit"></i></a>
                        <a href="{{route('authors.destroy', $author->id)}}"><i class="far fa-trash-alt"></i></a>
                    </li>
                @endforeach
            </ul>        
        </div>
    </div>
@endsection