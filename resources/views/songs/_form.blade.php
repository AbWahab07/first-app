<div class="form-group {!! $errors->has('title') ? 'has-error' : '' !!} ">
    {!! Form::label('title', 'Title:') !!}
    {!! Form::text('title', null, ['class' => 'form-control col-md-4']) !!}
    {!! $errors->first('title', '<span class="help-block">:message</span>' ) !!}
</div>

<div class="form-group">
    {!! Form::label('lyrics', 'Lyrics:') !!}
    {!! Form::textarea('lyrics', null, ['class' => 'form-control col-md-6']) !!}
</div>

<div class="form-group {!! $errors->has('handle') ? 'has-error' : '' !!} ">
    {!! Form::label('handle', 'Handle:') !!}
    {!! Form::text('handle', null, ['class' => 'form-control col-md-6']) !!}
    {!! $errors->first('handle', '<span class="help-block">:message</span>' ) !!}
</div>

<div class="form-group">
    {!! Form::submit('Update', ['class' => 'btn btn-primary']) !!}
</div>

    {{--
    {!! Form::open(['method' => 'DELETE', 'route' => ['songs.destroy', $song->handle]]) !!}
        <div class="form-group">
            {!! Form::submit('Delete', ['class' => 'btn btn-danger']) !!}
        </div>
    {!! Form::close() !!}
    --}}