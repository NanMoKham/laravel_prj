@extends('layouts.app')
@section('content')
<div class="container">
    <!-- error message -->
    @if($errors->any())
    <div class="alert alert-warning">
        <ol>
            @foreach($errors->all() as $error)
            <li>{{ $error }}</li>
            @endforeach
        </ol>
    </div>
    @endif
    <form method="post" action="{{ url("/articles/update/$article->id") }}">
        @csrf
        <div class="mb-3">
            <label>Title</label>
            <input type="text" name="title" class="form-control" value="{{ $article->title }}">
        </div>
        <div class="mb-3">
            <label>Body</label>
            <textarea name="body" class="form-control">
            {{ $article->body }}
            </textarea>
        </div>
        <div class="mb-3">
            <label>Category</label>
            <select class="form-select" name="category_id">
                <option value="1" {{ ($article->category_id == '1')? 'selected' : ''}}>News</option>
                <option value="2" {{ ($article->category_id == '2')? 'selected' : ''}}>Tech</option>
            </select>
        </div>
        <input type="submit" value="Update Article" class="btn btn-primary">
    </form>
</div>
@endsection