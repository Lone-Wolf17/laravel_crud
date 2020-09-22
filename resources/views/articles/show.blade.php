
@extends('articles.layout')
@section('content')
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2>Display Article</h2>
            </div>
            <div class="pull-right">
                <a class="btn btn-info" href="{{ route('articles.index') }}">Back</a>
            </div>
            <div class="pull-left">
                <br>
                <p><strong>Topic: </strong> {{$article->topic}}</p>
                <p><strong>Description: </strong> {{$article->description}}</p>
                <p><strong>Category: </strong> {{$article->category}}</p>
            </div>
        </div>
    </div>

@endsection
