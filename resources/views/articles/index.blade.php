
    @extends('articles.layout')
    @section('content')
        <div class="row">
            <div class="col-lg-12 margin-tb">
                <div class="pull-right">
                    <a class="btn btn-primary" href="{{ route('articles.create') }}">Create new article</a>
                </div>
            </div>
        </div>
    @endsection
