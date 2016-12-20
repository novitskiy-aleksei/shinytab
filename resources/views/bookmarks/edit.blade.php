@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <div class="panel panel-default">
                    <div class="panel-heading">Edit your bookmark</div>
                    <div class="panel-body">
                        @include('bookmarks.form', ['route' => ['bookmark.update', $bookmark->id], 'method' => 'PUT'])
                    </div>
                </div>
            </div>
        </div>
    </div>

@stop