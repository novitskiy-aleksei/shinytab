@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <div class="panel panel-default">
                    <div class="panel-heading">Add your bookmark here</div>
                    <div class="panel-body">
                        @include('bookmarks.form', ['route' => ['bookmark.store'], 'method' => 'POST'])
                    </div>
                </div>
            </div>
        </div>
    </div>

@stop