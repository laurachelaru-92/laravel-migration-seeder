@extends('layouts.page')

@section('page-title')
    Add new Comic
@endsection

@section('page-content')
    <div class="container">
        <h1>Add new comic</h1>
        <form action="{{route('comics.store')}}" method="POST">
            @csrf
            @method("POST")
            <div class="form-group">
                <label for="title">Title</label>
                <input type="text" class="form-control" name="title" id="title" placeholder="Enter title" value="{{old('title')}}">
                @error('title')
                    <div class="alert alert-danger">{{ $message }}</div>
                @enderror
            </div>
            <div class="form-group">
                <label for="original_title">Original title</label>
                <input type="text" class="form-control" name="original_title" id="original_title" placeholder="Enter original title" value="{{old('original_title')}}">
                @error('original_title')
                    <div class="alert alert-danger">{{ $message }}</div>
                @enderror
            </div>
            <div class="form-group">
                <label for="pages">Number of pages</label>
                <input type="number" min="1" class="form-control" name="pages" id="pages" placeholder="Enter number of pages" value="{{old('pages')}}">
                @error('pages')
                    <div class="alert alert-danger">{{ $message }}</div>
                @enderror
            </div>
            <div class="form-group">
                <label for="release">Release year</label>
                <select name="release" id="release" class="form-control">
                    @for($i = date("Y"); $i >= 1920; $i--)
                        <option value="{{$i}}">{{$i}}</option>
                    @endfor
                </select>
                @error('release')
                    <div class="alert alert-danger">{{ $message }}</div>
                @enderror
            </div>
            <div class="form-group">
                <label for="price">Price</label>
                <input type="number" step="0.01" class="form-control" name="price" id="price" placeholder="Enter price" value="{{old('price')}}">
                @error('price')
                    <div class="alert alert-danger">{{ $message }}</div>
                @enderror
            </div>
            <div class="form-group">
                <label for="reading_direction">Reading diretion</label>
                <select name="reading_direction" id="reading_direction" class="form-control">
                    <option value="ltr" selected>Left to right</option>
                    <option value="rtl">Right to left</option>
                </select>
                @error('reading_direction')
                    <div class="alert alert-danger">{{ $message }}</div>
                @enderror
            </div>
            <div class="form-group">
                <label for="cover">Cover</label>
                <input type="text" class="form-control" name="cover" id="cover" placeholder="Enter image URL" value="{{old('cover')}}">
                @error('cover')
                    <div class="alert alert-danger">{{ $message }}</div>
                @enderror
            </div>
            <button type="submit" class="btn btn-primary">Save</button>
        </form>
    </div>
@endsection