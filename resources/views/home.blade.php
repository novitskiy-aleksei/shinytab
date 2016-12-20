@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Dashboard</div>

                <div class="panel-body">
                    <div class="row">
                        <div class="col-sm-6 col-md-4">

                            <button class="thumbnail" onclick="location.href = '{{ route('bookmark.create') }}'">
                                <span class="glyphicon glyphicon-plus-sign" aria-hidden="true"></span>
                                <div class="caption">
                                    <p>Add new</p>
                                </div>
                            </button>

                            @foreach($bookmarks as $bookmark)
                                <button class="thumbnail" onclick="location.href = '{{ route('bookmark.create') }}'">
                                    <span class="glyphicon glyphicon-plus-sign" aria-hidden="true"></span>
                                    <div class="caption">
                                        <p>{{ $bookmark->name }}</p>
                                    </div>
                                </button>
                                <a href="{{ route('bookmark.edit', $bookmark->id) }}" class="glyphicon glyphicon-edit"></a>

                                {{ Form::open(['route' => ['bookmark.destroy', $bookmark->id], 'method' => 'DELETE']) }}
                                    {{ Form::button(null, ['type' => 'submit','class' => 'glyphicon glyphicon-remove']) }}
                                {{ Form::close() }}

                                {{--
                                <div class="thumbnail">
                                    <img src="" alt="...">
                                    <div class="caption">
                                        <h3>Thumbnail label</h3>
                                        <p>...</p>
                                        <p><a href="#" class="btn btn-primary" role="button">Button</a> <a href="#" class="btn btn-default" role="button">Button</a></p>
                                    </div>
                                </div>
                                --}}
                            @endforeach
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>
</div>
@endsection