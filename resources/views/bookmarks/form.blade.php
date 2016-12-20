{{ Form::model($bookmark, ['route' => $route, 'method' => $method, 'class' => 'form-horizontal']) }}

    <div class="form-group">
        {{ Form::label('url', 'Url', ['class' => 'col-md-4 control-label']) }}
        <div class="col-md-6">
            {{ Form::text('url', $bookmark->url, ['class' => 'form-control']) }}
        </div>
    </div>

    <div class="form-group">
        {{ Form::label('name', 'Name', ['class' => 'col-md-4 control-label']) }}
        <div class="col-md-6">
            {{ Form::text('name', $bookmark->name, ['class' => 'form-control']) }}
        </div>
    </div>

    <div class="form-group">
        <div class="col-md-8 col-md-offset-4">
            {{ Form::button('Submit', ['type' => 'submit', 'class' => 'btn btn-default']) }}
        </div>
    </div>

{{ Form::close() }}