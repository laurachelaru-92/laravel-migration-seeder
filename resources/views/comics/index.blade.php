@extends('layouts.page')

@section('page-title')
    All our comics
@endsection

@section('page-content')
<div id="index-wrapper">
    <h1>All our comics</h1>
    <div class="container">
        <div class="row">
            @foreach ($comics as $comic)
                <div class="col">
                    <div class="card" style="width: 18rem;">
                        <a href="{{route('comics.show', $comic->id)}}"><img src="{{$comic->cover}}" class="card-img-top" alt="{{$comic->title}}"></a>
                        <div class="card-body">
                            <p class="card-text">{{$comic->title}}</p>
                            <a href="{{route('comics.edit', $comic->id)}}"><i class="far fa-edit"></i></a>
                            <a href="{{route('comics.destroy', $comic->id)}}"><i class="far fa-trash-alt"></i></a>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
</div>
@endsection